<?php

require_once 'Database.php';

class CritiqueModel
{

    private $connexion;

    public function __construct($connexion)
    {
        $this->connexion = $connexion;
    }

    public function getCritique()
    {
        try {
            $critiqueQuery = "SELECT critique, films_id_film
                              FROM appreciations
                              WHERE clients_id_client = " . $_SESSION['id_client'] ;
            $critique = $this->connexion->query($critiqueQuery);
            return $critique;
        } catch (PDOException $e) {
            echo "Error fetching critique: " . $e->getMessage();
            return false;
        }
    }

    public function getNote($filmId)
    {
        try {
            $noteQuery = $this->connexion->prepare("SELECT note FROM appreciations WHERE clients_id_client = :clientId AND films_id_film = :filmId");
            $noteQuery->bindParam(":filmId", $filmId);
            $noteQuery->bindParam(":clientId", $_SESSION['id_client']);
            $noteQuery->execute();
            $note = $noteQuery->fetch(PDO::FETCH_ASSOC);
            return $note ? (int) $note['note'] : 0;
        } catch (PDOException $e) {
            echo "Error fetching note: " . $e->getMessage();
            return false;
        }
    }

    public function getNom($filmId)
    {
        try {
            $nomQuery = $this->connexion->prepare("SELECT f.nom FROM films as f JOIN appreciations as a ON f.id_film = a.films_id_film WHERE a.films_id_film = :filmId");
            $nomQuery->bindParam(":filmId", $filmId);
            $nomQuery->execute();
            return $nomQuery;
        } catch (PDOException $e) {
            echo "Error fetching nom: " . $e->getMessage();
            return false;
        }
    }
}

?>
