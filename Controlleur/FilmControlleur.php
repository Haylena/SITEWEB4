<?php

require_once __DIR__ . '/../Model/FilmModel.php';
require_once __DIR__ . '/../Model/Database.php';

class FilmController {
    private $filmModel;

    public function __construct($connexion) {
        $this->filmModel = new FilmModel($connexion);
    }

    public function displayFilms() {
        $resultatFilms = $this->filmModel->getFilms();
        return $resultatFilms;
    }

   
    public function displayDefaultImage() {
        $resultatImage = $this->filmModel->getDefaultImage();
        return $resultatImage;
    }
}

class FilmController2 {
    private $filmModel2;

    public function __construct($connexion) {
        $this->filmModel2 = new FilmModel2($connexion);
    }

    public function displayFilms2() {
        $resultatFilms2 = $this->filmModel2->getFilms2();
        return $resultatFilms2;
    }

    public function displayDefaultImage2() {
        $resultatImage = $this->filmModel2->getDefaultImage2();
        return $resultatImage;
    }
}

?>
