<?php

class Database
{
    private $serveur = "localhost";
    private $utilisateur = "root";
    private $motDePasse = "";
    private $baseDeDonnees = "cinewave";
    public $connexion;

    public function __construct()
    {
        $this->connexion = new PDO("mysql:host=$this->serveur;dbname=$this->baseDeDonnees", $this->utilisateur, $this->motDePasse);
        $this->connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    public function closeConnection()
    {
        $this->connexion = null;
    }
}


?>
