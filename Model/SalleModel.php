<?php

require_once 'Database.php';

class SalleModel
{

    private $connexion;

    public function __construct($connexion)
    {
        $this->connexion = $connexion;
    }

    // Exemple de m�thode pour r�cup�rer la liste des salles depuis la base de donn�es
    public function getSalles()
    {
        $query = $this->connexion->query("SELECT * FROM salles");
        return $query;
    }

    // Exemple de m�thode pour r�cup�rer les d�tails d'une salle sp�cifique en fonction de son ID
    public function getSalleById($salleId)
    {
        $query = $this->connexion->prepare("SELECT * FROM salles WHERE id_salle = :salleId");
        $query->bindParam(":salleId", $salleId);
        $query->execute();
        return $query->fetch(PDO::FETCH_ASSOC);
    }



    public function getCapteursBySalle($salleId) {
        $query = $this->connexion->prepare("SELECT * FROM capteurs WHERE salle_id_salle = :salleId");
        $query->bindParam(":salleId", $salleId);
        $query->execute();
        return $query;
    }

    public function getValeurBySalle($salleId)
    {
        $query = $this->connexion->prepare("SELECT * FROM mesures WHERE capteurs_id_capteur = :salleId");
        $query->bindParam(":salleId", $salleId);
        $query->execute();
        return $query;
    }


}