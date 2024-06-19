<?php 

require_once 'Database.php';

class IndexCinemaModel {
    private $connexion;

    public function __construct($connexion) {
        $this->connexion = $connexion; 
    }

    public function getInfo() {
        $requeteInfo = "SELECT * FROM films  WHERE id_film = :filmId";
    
        $info = $this->connexion->prepare($requeteInfo);
        $info->execute();
    
        return $info;
    }
}

?>