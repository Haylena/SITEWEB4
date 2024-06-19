<?php 
require_once __DIR__ . '/../Model/IndexCinemaModel.php';
require_once __DIR__ . '/../Model/Database.php';

class CinemaControlleur {
    private $IndexCinemaModel;

    public function __construct(PDO $pdo) {
        $this->IndexCinemaModel = new IndexCinemaModel($pdo);
    }

    public function afficherDescriptionFilm() {
        $id_film = $_GET['id_film'];
    }

    public function displayAffiche($id_film) {
        $affiche = $this->IndexCinemaModel->getAffiche($id_film);
        return $affiche;
    }

    public function displayDescription($id_film) {
        $description = $this->IndexCinemaModel->getDescription($id_film);
        return $description;
    }

    public function displayRealisateur($id_film) {
        $realisateur = $this->IndexCinemaModel->getRealisteur($id_film);
        return $realisateur;
    }

    public function displayActeurs($id_film) {
        $acteurs = $this->IndexCinemaModel->getActeurs($id_film);
        return $acteurs;
    }

    public function displayDuree($id_film) {
        $duree = $this->IndexCinemaModel->getDuree($id_film);
        return $duree;
    }

    public function displayCategorie($id_film) {
        $categorie = $this->IndexCinemaModel->getCategorie($id_film);
        return $categorie;
    }

    public function displayNom($id_film) {
        $nom = $this->IndexCinemaModel->getNom($id_film);
        return $nom;
    }
}


?>