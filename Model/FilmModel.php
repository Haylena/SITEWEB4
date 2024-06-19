<?php

require_once 'Database.php';

class FilmModel {
    private $connexion;

    public function __construct($connexion) {
        $this->connexion = $connexion;
    }


    public function getFilms() {
        $requeteFilms = "SELECT f.affiches 
                         FROM films as f 
                         JOIN visionnage as v 
                         JOIN users as c 
                         WHERE f.id_film = v.id_film AND c.id_client = v.id_client AND film_envie = 1";

        $resultatFilms = $this->connexion->query($requeteFilms);
        return $resultatFilms;
    }

    public function getDefaultImage() {
        $requeteImage = "SELECT image FROM images WHERE id_image = 0";
        $resultatImage = $this->connexion->query($requeteImage);
        return $resultatImage;
    }

}

class FilmModel2 {
    private $connexion;

    public function __construct($connexion) {
        $this->connexion = $connexion;
    }

    public function getFilms2() {
        $requeteFilms2 = "SELECT f.affiches 
                        FROM films as f 
                        JOIN visionnage as v 
                        JOIN users as c 
                        WHERE f.id_film = v.id_film AND c.id_client = v.id_client AND film_vu = 1";

        $resultatFilms2 = $this->connexion->query($requeteFilms2);
        return $resultatFilms2;
    }

    public function getDefaultImage2() {
        $requeteImage2 = "SELECT image FROM images WHERE id_image = 0";
        $resultatImage2 = $this->connexion->query($requeteImage2);
        return $resultatImage2;
    }
}
?>
