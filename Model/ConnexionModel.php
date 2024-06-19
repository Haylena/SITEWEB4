<?php

require_once 'Database.php';

class ConnexionModel {

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

    function loginUser($nom_utilisateur, $mot_de_passe)
    {
        $recupUser = $this->database->prepare('SELECT * FROM users WHERE nom_utilisateur = ? AND mot_de_passe = ?');
        $recupUser->execute(array($nom_utilisateur, $mot_de_passe));

        if ($recupUser->rowCount() == 1) {
            $user = $recupUser->fetch(PDO::FETCH_ASSOC);

            if ($user['type'] == -1) {
                echo 'Vous avez été banni !';
                return null;
            }

            session_start();
            $_SESSION['nom_utilisateur'] = $user['nom_utilisateur'];
            $_SESSION['mot_de_passe'] = $user['mot_de_passe'];
            $_SESSION['id_client'] = $user['id_client'];

            return $user;
        }

        return null;
    }
}

?>
