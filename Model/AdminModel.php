<?php

require_once 'Database.php';

class adminModel {
    private $connexion;

    public function __construct($connexion) {
        $this -> connexion = $connexion;
    }

    public function getUsers() {
        $user = "SELECT * FROM users";

        $user = $this->connexion->query($user);
        return $user;
    }

    public function getNumberOfUsers() {
        global $bdd; 
    
        $query = $bdd->query("SELECT COUNT(*) as count FROM users"); 
    
        $result = $query->fetch(PDO::FETCH_ASSOC);
    
        return $result['count'];
    }
    
}
?>