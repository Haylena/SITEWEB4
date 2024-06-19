<?php
require_once 'Database.php';

class UserModel
{
    private $database;

    public function __construct($pdoOrDatabase)
    {
        if ($pdoOrDatabase instanceof PDO) {
            $this->database = $pdoOrDatabase;
        } elseif ($pdoOrDatabase instanceof Database) {
            $this->database = $pdoOrDatabase->connexion;
        } else {
            throw new Exception("Invalid argument type. Must be either PDO or Database.");
        }
    }

    public function getUser($userId)
    {
        $requete = $this->database->prepare("SELECT * FROM users WHERE id_client = ?");
        $requete->bindParam(1, $userId, PDO::PARAM_INT);
        $requete->execute();

        $resultat = $requete->fetch(PDO::FETCH_ASSOC);

        if ($resultat) {
            return $resultat;
        } else {
            return null;
        }
    }

    public function getPseudo($userId)
    {
        $requete = $this->database->prepare("SELECT nom_utilisateur FROM users WHERE id = ?");
        $requete->bindParam(1, $userId, PDO::PARAM_INT);
        $requete->execute();

        $resultat = $requete->fetch(PDO::FETCH_ASSOC);

        if ($resultat) {
            return $resultat['nom_utilisateur'];
        } else {
            return null;
        }
    }

    public function updateUser($userId, $pseudo, $email, $genre)
    {
        $requete = $this->database->prepare("UPDATE users SET nom_utilisateur = ?, email = ?, genre = ? WHERE id_client = ?");
        $requete->bindParam(1, $pseudo, PDO::PARAM_STR);
        $requete->bindParam(2, $email, PDO::PARAM_STR);
        $requete->bindParam(3, $genre, PDO::PARAM_STR);
        $requete->bindParam(4, $userId, PDO::PARAM_INT);

        $requete->execute();

        $resultat = $requete->fetch(PDO::FETCH_ASSOC);
    }
}

?>
