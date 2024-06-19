<?php
require_once __DIR__ . '/../Model/DescriptionModel.php';
require_once __DIR__ . '/../Model/Database.php';

class DescriptionController {
    private $descriptionModel;

    public function __construct(PDO $pdo) {
        $this->descriptionModel = new DescriptionModel($pdo);
    }

    public function afficherDescriptionFilm() {
        $id_film = $_GET['id_film'];
    }

    public function displayAffiche($id_film) {
        $affiche = $this->descriptionModel->getAffiche($id_film);
        return $affiche;
    }

    public function displayDescription($id_film) {
        $description = $this->descriptionModel->getDescription($id_film);
        return $description;
    }

    public function displayRealisateur($id_film) {
        $realisateur = $this->descriptionModel->getRealisteur($id_film);
        return $realisateur;
    }

    public function displayActeurs($id_film) {
        $acteurs = $this->descriptionModel->getActeurs($id_film);
        return $acteurs;
    }

    public function displayDuree($id_film) {
        $duree = $this->descriptionModel->getDuree($id_film);
        return $duree;
    }

    public function displayCategorie($id_film) {
        $categorie = $this->descriptionModel->getCategorie($id_film);
        return $categorie;
    }

    public function displayNom($id_film) {
        $nom = $this->descriptionModel->getNom($id_film);
        return $nom;
    }
}

class DescriptionController1 {
    private $descriptionModel1;

    public function __construct(PDO $pdo) {
        $this->descriptionModel1 = new DescriptionModel1($pdo);
    }

    public function displayAffiche1() {
        $affiche1 = $this->descriptionModel1->getAffiche1();
        return $affiche1;
    }

    public function displayAffiche2() {
        $affiche2 = $this->descriptionModel1->getAffiche2();
        return $affiche2;
    }
    public function displayAffiche3() {
        $affiche3 = $this->descriptionModel1->getAffiche3();
        return $affiche3;
    }
    public function displayAffiche4() {
        $affiche4 = $this->descriptionModel1->getAffiche4();
        return $affiche4;
    }
    public function displayAffiche5() {
        $affiche5 = $this->descriptionModel1->getAffiche5();
        return $affiche5;
    }
    public function displayAffiche6() {
        $affiche6 = $this->descriptionModel1->getAffiche6();
        return $affiche6;
    }
    public function displayAffiche7() {
        $affiche7 = $this->descriptionModel1->getAffiche7();
        return $affiche7;
    }
    public function displayAffiche8() {
        $affiche8 = $this->descriptionModel1->getAffiche8();
        return $affiche8;
    }
    public function displayAffiche9() {
        $affiche9 = $this->descriptionModel1->getAffiche9();
        return $affiche9;
    }
    public function displayAffiche10() {
        $affiche10 = $this->descriptionModel1->getAffiche10();
        return $affiche10;
    }
    public function displayAffiche11() {
        $affiche11 = $this->descriptionModel1->getAffiche11();
        return $affiche11;
    }
    public function displayAffiche12() {
        $affiche12 = $this->descriptionModel1->getAffiche12();
        return $affiche12;
    }
    public function displayAffiche13() {
        $affiche13 = $this->descriptionModel1->getAffiche13();
        return $affiche13;
    }
    public function displayAffiche14() {
        $affiche14 = $this->descriptionModel1->getAffiche14();
        return $affiche14;
    }
    public function displayAffiche15() {
        $affiche15 = $this->descriptionModel1->getAffiche15();
        return $affiche15;
    }
    public function displayAffiche16() {
        $affiche16 = $this->descriptionModel1->getAffiche16();
        return $affiche16;
    }
    public function displayAffiche17() {
        $affiche17 = $this->descriptionModel1->getAffiche17();
        return $affiche17;
    }
    public function displayAffiche18() {
        $affiche18 = $this->descriptionModel1->getAffiche18();
        return $affiche18;
    }
    public function displayAffiche19() {
        $affiche19 = $this->descriptionModel1->getAffiche19();
        return $affiche19;
    }
    public function displayAffiche20() {
        $affiche20 = $this->descriptionModel1->getAffiche20();
        return $affiche20;
    }
    public function displayAffiche21() {
        $affiche21 = $this->descriptionModel1->getAffiche21();
        return $affiche21;
    }

    public function displayNom1() {
        $nom1 = $this->descriptionModel1->getNom1();
        return $nom1;
    }
    public function displayNom2() {
        $nom2 = $this->descriptionModel1->getNom2();
        return $nom2;
    }
    public function displayNom3() {
        $nom3 = $this->descriptionModel1->getNom3();
        return $nom3;
    }
    public function displayNom4() {
        $nom4 = $this->descriptionModel1->getNom4();
        return $nom4;
    }
    public function displayNom5() {
        $nom5 = $this->descriptionModel1->getNom5();
        return $nom5;
    }
    public function displayNom6() {
        $nom6 = $this->descriptionModel1->getNom6();
        return $nom6;
    }
    public function displayNom7() {
        $nom7 = $this->descriptionModel1->getNom7();
        return $nom7;
    }
    public function displayNom8() {
        $nom8 = $this->descriptionModel1->getNom8();
        return $nom8;
    }
    public function displayNom9() {
        $nom9 = $this->descriptionModel1->getNom9();
        return $nom9;
    }
    public function displayNom10() {
        $nom10 = $this->descriptionModel1->getNom10();
        return $nom10;
    }
    public function displayNom11() {
        $nom11 = $this->descriptionModel1->getNom11();
        return $nom11;
    }
    public function displayNom12() {
        $nom12 = $this->descriptionModel1->getNom12();
        return $nom12;
    }
    public function displayNom13() {
        $nom13 = $this->descriptionModel1->getNom13();
        return $nom13;
    }
    public function displayNom14() {
        $nom14 = $this->descriptionModel1->getNom14();
        return $nom14;
    }
    public function displayNom15() {
        $nom15 = $this->descriptionModel1->getNom15();
        return $nom15;
    }
    public function displayNom16() {
        $nom16 = $this->descriptionModel1->getNom16();
        return $nom16;
    }
    public function displayNom17() {
        $nom17 = $this->descriptionModel1->getNom17();
        return $nom17;
    }
    public function displayNom18() {
        $nom18 = $this->descriptionModel1->getNom18();
        return $nom18;
    }
    public function displayNom19() {
        $nom19 = $this->descriptionModel1->getNom19();
        return $nom19;
    }
    public function displayNom20() {
        $nom20 = $this->descriptionModel1->getNom20();
        return $nom20;
    }
    public function displayNom21() {
        $nom21 = $this->descriptionModel1->getNom21();
        return $nom21;
    }

    public function displayDuree1() {
        $duree1 = $this->descriptionModel1->getDuree1();
        return $duree1;
    }
    public function displayDuree2() {
        $duree2 = $this->descriptionModel1->getDuree2();
        return $duree2;
    }
    public function displayDuree3() {
        $duree3 = $this->descriptionModel1->getDuree3();
        return $duree3;
    }
    public function displayDuree4() {
        $duree4 = $this->descriptionModel1->getDuree4();
        return $duree4;
    }
    public function displayDuree5() {
        $duree5 = $this->descriptionModel1->getDuree5();
        return $duree5;
    }
    public function displayDuree6() {
        $duree6 = $this->descriptionModel1->getDuree6();
        return $duree6;
    }
    public function displayDuree7() {
        $duree7 = $this->descriptionModel1->getDuree7();
        return $duree7;
    }
    public function displayDuree8() {
        $duree8 = $this->descriptionModel1->getDuree8();
        return $duree8;
    }
    public function displayDuree9() {
        $duree9 = $this->descriptionModel1->getDuree9();
        return $duree9;
    }
    public function displayDuree10() {
        $duree10 = $this->descriptionModel1->getDuree10();
        return $duree10;
    }
    public function displayDuree11() {
        $duree11 = $this->descriptionModel1->getDuree11();
        return $duree11;
    }
    public function displayDuree12() {
        $duree12 = $this->descriptionModel1->getDuree12();
        return $duree12;
    }
    public function displayDuree13() {
        $duree13 = $this->descriptionModel1->getDuree13();
        return $duree13;
    }
    public function displayDuree14() {
        $duree14 = $this->descriptionModel1->getDuree14();
        return $duree14;
    }
    public function displayDuree15() {
        $duree15 = $this->descriptionModel1->getDuree15();
        return $duree15;
    }
    public function displayDuree16() {
        $duree16 = $this->descriptionModel1->getDuree16();
        return $duree16;
    }
    public function displayDuree17() {
        $duree17 = $this->descriptionModel1->getDuree17();
        return $duree17;
    }
    public function displayDuree18() {
        $duree18 = $this->descriptionModel1->getDuree18();
        return $duree18;
    }
    public function displayDuree19() {
        $duree19 = $this->descriptionModel1->getDuree19();
        return $duree19;
    }
    public function displayDuree20() {
        $duree20 = $this->descriptionModel1->getDuree20();
        return $duree20;
    }
    public function displayDuree21() {
        $duree21 = $this->descriptionModel1->getDuree21();
        return $duree21;
    }

    public function displayGenre1() {
        $Genre1 = $this->descriptionModel1->getGenre1();
        return $Genre1;
    }
    public function displayGenre2() {
        $Genre2 = $this->descriptionModel1->getGenre2();
        return $Genre2;
    }
    public function displayGenre3() {
        $Genre3 = $this->descriptionModel1->getGenre3();
        return $Genre3;
    }
    public function displayGenre4() {
        $Genre4 = $this->descriptionModel1->getGenre4();
        return $Genre4;
    }
    public function displayGenre5() {
        $Genre5 = $this->descriptionModel1->getGenre5();
        return $Genre5;
    }
    public function displayGenre6() {
        $Genre6 = $this->descriptionModel1->getGenre6();
        return $Genre6;
    }
    public function displayGenre7() {
        $Genre7 = $this->descriptionModel1->getGenre7();
        return $Genre7;
    }
    public function displayGenre8() {
        $Genre8 = $this->descriptionModel1->getGenre8();
        return $Genre8;
    }
    public function displayGenre9() {
        $Genre9 = $this->descriptionModel1->getGenre9();
        return $Genre9;
    }
    public function displayGenre10() {
        $Genre10 = $this->descriptionModel1->getGenre10();
        return $Genre10;
    }
    public function displayGenre11() {
        $Genre11 = $this->descriptionModel1->getGenre11();
        return $Genre11;
    }
    public function displayGenre12() {
        $Genre12 = $this->descriptionModel1->getGenre12();
        return $Genre12;
    }
    public function displayGenre13() {
        $Genre13 = $this->descriptionModel1->getGenre13();
        return $Genre13;
    }
    public function displayGenre14() {
        $Genre14 = $this->descriptionModel1->getGenre14();
        return $Genre14;
    }
    public function displayGenre15() {
        $Genre15 = $this->descriptionModel1->getGenre15();
        return $Genre15;
    }
    public function displayGenre16() {
        $Genre16 = $this->descriptionModel1->getGenre16();
        return $Genre16;
    }
    public function displayGenre17() {
        $Genre17 = $this->descriptionModel1->getGenre17();
        return $Genre17;
    }
    public function displayGenre18() {
        $Genre18 = $this->descriptionModel1->getGenre18();
        return $Genre18;
    }
    public function displayGenre19() {
        $Genre19 = $this->descriptionModel1->getGenre19();
        return $Genre19;
    }
    public function displayGenre20() {
        $Genre20 = $this->descriptionModel1->getGenre20();
        return $Genre20;
    }
    public function displayGenre21() {
        $Genre21 = $this->descriptionModel1->getGenre21();
        return $Genre21;
    }
}
?>