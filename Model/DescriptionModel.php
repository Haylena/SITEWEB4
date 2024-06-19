<?php
require_once 'Database.php';

class DescriptionModel {
    private $connexion;

    public function __construct($connexion) {
        $this->connexion = $connexion; 
    }
    public function getAffiche($id_film) {
        $requeteAffiche = "SELECT f.affiches 
                         FROM films as f 
                         WHERE f.id_film = :filmId";   
        $affiche = $this->connexion->prepare($requeteAffiche);
        $affiche->bindParam(':filmId', $id_film, PDO::PARAM_INT);
        $affiche->execute();   
        return $affiche;
    }
    public function getDescription($id_film) {
        $requeteDescription = "SELECT f.description
                                FROM films as f 
                                WHERE f.id_film = :filmId";
        $description = $this->connexion->prepare($requeteDescription);
        $description->bindParam(':filmId', $id_film, PDO::PARAM_INT);
        $description->execute();
        return $description;
    }
    public function getRealisteur($id_film) {
        $requeteRealisateur = "SELECT f.nom_realisateur
                                FROM films as f 
                                WHERE f.id_film = :filmId";
        $realisateur = $this->connexion->prepare($requeteRealisateur);
        $realisateur->bindParam(':filmId', $id_film, PDO::PARAM_INT);
        $realisateur->execute();
        return $realisateur;
    }
    public function getActeurs($id_film) {
        $requeteActeurs = "SELECT f.acteurs
                                FROM films as f 
                                WHERE f.id_film = :filmId";
        $acteurs = $this->connexion->prepare($requeteActeurs);
        $acteurs->bindParam(':filmId', $id_film, PDO::PARAM_INT);
        $acteurs->execute();
        return $acteurs;
    }
    public function getDuree($id_film) {
        $requeteDuree = "SELECT f.duree
                                FROM films as f 
                                WHERE f.id_film = :filmId";
        $duree = $this->connexion->prepare($requeteDuree);
        $duree->bindParam(':filmId', $id_film, PDO::PARAM_INT);
        $duree->execute();
        return $duree;
    }
    public function getCategorie($id_film) {
        $requeteCategorie = "SELECT f.genre
                                FROM films as f 
                                WHERE f.id_film = :filmId";
        $categorie = $this->connexion->prepare($requeteCategorie);
        $categorie->bindParam(':filmId', $id_film, PDO::PARAM_INT);
        $categorie->execute();
        return $categorie;
    }
    public function getNom($id_film) {
        $requeteNom = "SELECT f.nom 
                        FROM films as f 
                        WHERE f.id_film = :filmId";
        $nom = $this->connexion->prepare($requeteNom);
        $nom->bindParam(':filmId', $id_film, PDO::PARAM_INT);
        $nom->execute();
        return $nom;
    }
}

class DescriptionModel1 {
    private $connexion;

    public function __construct($connexion) {
        $this->connexion = $connexion; 
    }
    public function getAffiche1() {
        $requeteAffiche = "SELECT affiches FROM films WHERE id_film=1";   
        $affiche1 = $this->connexion->prepare($requeteAffiche);
        $affiche1->execute();   
        return $affiche1;
    }
    public function getAffiche2() {
        $requeteAffiche = "SELECT affiches FROM films WHERE id_film=2";   
        $affiche2 = $this->connexion->prepare($requeteAffiche);
        $affiche2->execute();    
        return $affiche2;
    }
    public function getAffiche3() {
        $requeteAffiche = "SELECT affiches FROM films WHERE id_film=3";   
        $affiche3 = $this->connexion->prepare($requeteAffiche);
        $affiche3->execute();   
        return $affiche3;
    }
    public function getAffiche4() {
        $requeteAffiche = "SELECT affiches FROM films WHERE id_film=4";
        $affiche4 = $this->connexion->prepare($requeteAffiche);
        $affiche4->execute();  
        return $affiche4;
    }
    public function getAffiche5() {
        $requeteAffiche = "SELECT affiches FROM films WHERE id_film=5";
        $affiche5 = $this->connexion->prepare($requeteAffiche);
        $affiche5->execute();
         return $affiche5;
    }
    public function getAffiche6() {
        $requeteAffiche = "SELECT affiches FROM films WHERE id_film=6";  
        $affiche6 = $this->connexion->prepare($requeteAffiche);
        $affiche6->execute();   
        return $affiche6;
    }
    public function getAffiche7() {
        $requeteAffiche = "SELECT affiches FROM films WHERE id_film=7";  
        $affiche7 = $this->connexion->prepare($requeteAffiche);
        $affiche7->execute();   
        return $affiche7;
    }
    public function getAffiche8() {
        $requeteAffiche = "SELECT affiches FROM films WHERE id_film=8"; 
        $affiche8 = $this->connexion->prepare($requeteAffiche);
        $affiche8->execute();  
        return $affiche8;
    }
    public function getAffiche9() {
        $requeteAffiche = "SELECT affiches FROM films WHERE id_film=9";  
        $affiche9 = $this->connexion->prepare($requeteAffiche);
        $affiche9->execute(); 
        return $affiche9;
    }
    public function getAffiche10() {
        $requeteAffiche = "SELECT affiches FROM films WHERE id_film=10";   
        $affiche10 = $this->connexion->prepare($requeteAffiche);
        $affiche10->execute();  
        return $affiche10;
    }
    public function getAffiche11() {
        $requeteAffiche = "SELECT affiches FROM films WHERE id_film=11";    
        $affiche11 = $this->connexion->prepare($requeteAffiche);
        $affiche11->execute();   
        return $affiche11;
    }
    public function getAffiche12() {
        $requeteAffiche = "SELECT affiches FROM films WHERE id_film=12";  
        $affiche12 = $this->connexion->prepare($requeteAffiche);
        $affiche12->execute();  
        return $affiche12;
    }
    public function getAffiche13() {
        $requeteAffiche = "SELECT affiches FROM films WHERE id_film=13"; 
        $affiche13 = $this->connexion->prepare($requeteAffiche);
        $affiche13->execute(); 
        return $affiche13;
    }
    public function getAffiche14() {
        $requeteAffiche = "SELECT affiches FROM films WHERE id_film=14";
        $affiche14 = $this->connexion->prepare($requeteAffiche);
        $affiche14->execute();
        return $affiche14;
    }
    public function getAffiche15() {
        $requeteAffiche = "SELECT affiches FROM films WHERE id_film=15";
        $affiche15 = $this->connexion->prepare($requeteAffiche);
        $affiche15->execute();
        return $affiche15;
    }
    public function getAffiche16() {
        $requeteAffiche = "SELECT affiches FROM films WHERE id_film=16";
        $affiche16 = $this->connexion->prepare($requeteAffiche);
        $affiche16->execute();   
        return $affiche16;
    }
    public function getAffiche17() {
        $requeteAffiche = "SELECT affiches FROM films WHERE id_film=17";  
        $affiche17 = $this->connexion->prepare($requeteAffiche);
        $affiche17->execute();
        return $affiche17;
    }
    public function getAffiche18() {
        $requeteAffiche = "SELECT affiches FROM films WHERE id_film=18";
        $affiche18 = $this->connexion->prepare($requeteAffiche);
        $affiche18->execute();
        return $affiche18;
    }
    public function getAffiche19() {
        $requeteAffiche = "SELECT affiches FROM films WHERE id_film=19";
        $affiche19 = $this->connexion->prepare($requeteAffiche);
        $affiche19->execute();
        return $affiche19;
    }
    public function getAffiche20() {
        $requeteAffiche = "SELECT affiches FROM films WHERE id_film=20";
        $affiche20 = $this->connexion->prepare($requeteAffiche);
        $affiche20->execute();   
        return $affiche20;
    }
    public function getAffiche21() {
        $requeteAffiche = "SELECT affiches FROM films WHERE id_film=21";   
        $affiche21 = $this->connexion->prepare($requeteAffiche);
        $affiche21->execute();   
        return $affiche21;
    }

    public function getNom1() {
        $requeteNom = "SELECT nom FROM films WHERE id_film=1";
        $nom1 = $this->connexion->prepare($requeteNom);
        $nom1->execute();
        return $nom1;
    }
    public function getNom2() {
        $requeteNom  = "SELECT nom FROM films WHERE id_film=2";
        $nom2 = $this->connexion->prepare($requeteNom);
        $nom2->execute();
        return $nom2;
    }
    public function getNom3() {
        $requeteNom  = "SELECT nom FROM films WHERE id_film=3";
        $nom3 = $this->connexion->prepare($requeteNom);
        $nom3->execute();
        return $nom3;
    }
    public function getNom4() {
        $requeteNom  = "SELECT nom FROM films WHERE id_film=4";
        $nom4 = $this->connexion->prepare($requeteNom);
        $nom4->execute();
        return $nom4;
    }
    public function getNom5() {
        $requeteNom  = "SELECT nom FROM films WHERE id_film=5";
        $nom5 = $this->connexion->prepare($requeteNom);
        $nom5->execute();
        return $nom5;
    }
    public function getNom6() {
        $requeteNom  = "SELECT nom FROM films WHERE id_film=6";
        $nom6 = $this->connexion->prepare($requeteNom);
        $nom6->execute();
        return $nom6;
    }
    public function getNom7() {
        $requeteNom  = "SELECT nom FROM films WHERE id_film=7";
        $nom7 = $this->connexion->prepare($requeteNom);
        $nom7->execute();
        return $nom7;
    }
    public function getNom8() {
        $requeteNom  = "SELECT nom FROM films WHERE id_film=8";
        $nom8 = $this->connexion->prepare($requeteNom);
        $nom8->execute();
        return $nom8;
    }
    public function getNom9() {
        $requeteNom  = "SELECT nom FROM films WHERE id_film=9";
        $nom9 = $this->connexion->prepare($requeteNom);
        $nom9->execute();
        return $nom9;
    }
    public function getNom10() {
        $requeteNom  = "SELECT nom FROM films WHERE id_film=10";
        $nom10 = $this->connexion->prepare($requeteNom);
        $nom10->execute();
        return $nom10;
    }
    public function getNom11() {
        $requeteNom  = "SELECT nom FROM films WHERE id_film=11";
        $nom11 = $this->connexion->prepare($requeteNom);
        $nom11->execute();
        return $nom11;
    }
    public function getNom12() {
        $requeteNom  = "SELECT nom FROM films WHERE id_film=12";
        $nom12 = $this->connexion->prepare($requeteNom);
        $nom12->execute();
        return $nom12;
    }
    public function getNom13() {
        $requeteNom  = "SELECT nom FROM films WHERE id_film=13";
        $nom13 = $this->connexion->prepare($requeteNom);
        $nom13->execute();
        return $nom13;
    }
    public function getNom14() {
        $requeteNom  = "SELECT nom FROM films WHERE id_film=14";
        $nom14 = $this->connexion->prepare($requeteNom);
        $nom14->execute();
        return $nom14;
    }
    public function getNom15() {
        $requeteNom  = "SELECT nom FROM films WHERE id_film=15";
        $nom15 = $this->connexion->prepare($requeteNom);
        $nom15->execute();
        return $nom15;
    }
    public function getNom16() {
        $requeteNom  = "SELECT nom FROM films WHERE id_film=16";
        $nom16 = $this->connexion->prepare($requeteNom);
        $nom16->execute();
        return $nom16;
    }
    public function getNom17() {
        $requeteNom  = "SELECT nom FROM films WHERE id_film=17";
        $nom17 = $this->connexion->prepare($requeteNom);
        $nom17->execute();
        return $nom17;
    }
    public function getNom18() {
        $requeteNom  = "SELECT nom FROM films WHERE id_film=18";
        $nom18 = $this->connexion->prepare($requeteNom);
        $nom18->execute();
        return $nom18;
    }
    public function getNom19() {
        $requeteNom  = "SELECT nom FROM films WHERE id_film=19";
        $nom19 = $this->connexion->prepare($requeteNom);
        $nom19->execute();
        return $nom19;
    }
    public function getNom20() {
        $requeteNom  = "SELECT nom FROM films WHERE id_film=20";
        $nom20 = $this->connexion->prepare($requeteNom);
        $nom20->execute();
        return $nom20;
    }
    public function getNom21() {
        $requeteNom  = "SELECT nom FROM films WHERE id_film=21";
        $nom21 = $this->connexion->prepare($requeteNom);
        $nom21->execute();
        return $nom21;
    }
    
    public function getDuree1() {
        $requeteDuree  = "SELECT duree FROM films WHERE id_film=1";
        $duree1 = $this->connexion->prepare($requeteDuree);
        $duree1->execute();
        return $duree1;
    }
    public function getDuree2() {
        $requeteDuree  = "SELECT duree FROM films WHERE id_film=2";
        $duree2 = $this->connexion->prepare($requeteDuree);
        $duree2->execute();
        return $duree2;
    }
    public function getDuree3() {
        $requeteDuree  = "SELECT duree FROM films WHERE id_film=3";
        $duree3= $this->connexion->prepare($requeteDuree);
        $duree3->execute();
        return $duree3;
    }
    public function getDuree4() {
        $requeteDuree  = "SELECT duree FROM films WHERE id_film=4";
        $duree4 = $this->connexion->prepare($requeteDuree);
        $duree4->execute();
        return $duree4;
    }
    public function getDuree5() {
        $requeteDuree  = "SELECT duree FROM films WHERE id_film=5";
        $duree5 = $this->connexion->prepare($requeteDuree);
        $duree5->execute();
        return $duree5;
    }
    public function getDuree6() {
        $requeteDuree  = "SELECT duree FROM films WHERE id_film=6";
        $duree6 = $this->connexion->prepare($requeteDuree);
        $duree6->execute();
        return $duree6;
    }
    public function getDuree7() {
        $requeteDuree  = "SELECT duree FROM films WHERE id_film=7";
        $duree7 = $this->connexion->prepare($requeteDuree);
        $duree7->execute();
        return $duree7;
    }
    public function getDuree8() {
        $requeteDuree  = "SELECT duree FROM films WHERE id_film=8";
        $duree8 = $this->connexion->prepare($requeteDuree);
        $duree8->execute();
        return $duree8;
    }
    public function getDuree9() {
        $requeteDuree  = "SELECT duree FROM films WHERE id_film=9";
        $duree9 = $this->connexion->prepare($requeteDuree);
        $duree9->execute();
        return $duree9;
    }
    public function getDuree10() {
        $requeteDuree  = "SELECT duree FROM films WHERE id_film=10";
        $duree10 = $this->connexion->prepare($requeteDuree);
        $duree10->execute();
        return $duree10;
    }
    public function getDuree11() {
        $requeteDuree  = "SELECT duree FROM films WHERE id_film=11";
        $duree11 = $this->connexion->prepare($requeteDuree);
        $duree11->execute();
        return $duree11;
    }
    public function getDuree12() {
        $requeteDuree  = "SELECT duree FROM films WHERE id_film=12";
        $duree12 = $this->connexion->prepare($requeteDuree);
        $duree12->execute();
        return $duree12;
    }
    public function getDuree13() {
        $requeteDuree  = "SELECT duree FROM films WHERE id_film=13";
        $duree13 = $this->connexion->prepare($requeteDuree);
        $duree13->execute();
        return $duree13;
    }
    public function getDuree14() {
        $requeteDuree  = "SELECT duree FROM films WHERE id_film=14";
        $duree14 = $this->connexion->prepare($requeteDuree);
        $duree14->execute();
        return $duree14;
    }
    public function getDuree15() {
        $requeteDuree  = "SELECT duree FROM films WHERE id_film=15";
        $duree15 = $this->connexion->prepare($requeteDuree);
        $duree15->execute();
        return $duree15;
    }
    public function getDuree16() {
        $requeteDuree  = "SELECT duree FROM films WHERE id_film=16";
        $duree16 = $this->connexion->prepare($requeteDuree);
        $duree16->execute();
        return $duree16;
    }
    public function getDuree17() {
        $requeteDuree  = "SELECT duree FROM films WHERE id_film=17";
        $duree17 = $this->connexion->prepare($requeteDuree);
        $duree17->execute();
        return $duree17;
    }
    public function getDuree18() {
        $requeteDuree  = "SELECT duree FROM films WHERE id_film=18";
        $duree18 = $this->connexion->prepare($requeteDuree);
        $duree18->execute();
        return $duree18;
    }
    public function getDuree19() {
        $requeteDuree  = "SELECT duree FROM films WHERE id_film=19";
        $duree19 = $this->connexion->prepare($requeteDuree);
        $duree19->execute();
        return $duree19;
    }
    public function getDuree20() {
        $requeteDuree  = "SELECT duree FROM films WHERE id_film=20";
        $duree20 = $this->connexion->prepare($requeteDuree);
        $duree20->execute();
        return $duree20;
    }
    public function getDuree21() {
        $requeteDuree  = "SELECT duree FROM films WHERE id_film=21";
        $duree21 = $this->connexion->prepare($requeteDuree);
        $duree21->execute();
        return $duree21;
    }

    public function getGenre1() {
        $requeteGenre  = "SELECT genre FROM films WHERE id_film=1";
        $Genre1 = $this->connexion->prepare($requeteGenre);
        $Genre1->execute();
        return $Genre1;
    }
    public function getGenre2() {
        $requeteGenre  = "SELECT genre FROM films WHERE id_film=2";
        $Genre2 = $this->connexion->prepare($requeteGenre);
        $Genre2->execute();
        return $Genre2;
    }
    public function getGenre3() {
        $requeteGenre  = "SELECT genre FROM films WHERE id_film=3";
        $Genre3 = $this->connexion->prepare($requeteGenre);
        $Genre3->execute();
        return $Genre3;
    }
    public function getGenre4() {
        $requeteGenre  = "SELECT genre FROM films WHERE id_film=4";
        $Genre4 = $this->connexion->prepare($requeteGenre);
        $Genre4->execute();
        return $Genre4;
    }
    public function getGenre5() {
        $requeteGenre  = "SELECT genre FROM films WHERE id_film=5";
        $Genre5 = $this->connexion->prepare($requeteGenre);
        $Genre5->execute();
        return $Genre5;
    }
    public function getGenre6() {
        $requeteGenre  = "SELECT genre FROM films WHERE id_film=6";
        $Genre6 = $this->connexion->prepare($requeteGenre);
        $Genre6->execute();
        return $Genre6;
    }
    public function getGenre7() {
        $requeteGenre  = "SELECT genre FROM films WHERE id_film=7";
        $Genre7 = $this->connexion->prepare($requeteGenre);
        $Genre7->execute();
        return $Genre7;
    }
    public function getGenre8() {
        $requeteGenre  = "SELECT genre FROM films WHERE id_film=8";
        $Genre8 = $this->connexion->prepare($requeteGenre);
        $Genre8->execute();
        return $Genre8;
    }
    public function getGenre9() {
        $requeteGenre  = "SELECT genre FROM films WHERE id_film=9";
        $Genre9 = $this->connexion->prepare($requeteGenre);
        $Genre9->execute();
        return $Genre9;
    }
    public function getGenre10() {
        $requeteGenre  = "SELECT genre FROM films WHERE id_film=10";
        $Genre10 = $this->connexion->prepare($requeteGenre);
        $Genre10->execute();
        return $Genre10;
    }
    public function getGenre11() {
        $requeteGenre  = "SELECT genre FROM films WHERE id_film=11";
        $Genre11 = $this->connexion->prepare($requeteGenre);
        $Genre11->execute();
        return $Genre11;
    }
    public function getGenre12() {
        $requeteGenre  = "SELECT genre FROM films WHERE id_film=12";
        $Genre12 = $this->connexion->prepare($requeteGenre);
        $Genre12->execute();
        return $Genre12;
    }
    public function getGenre13() {
        $requeteGenre  = "SELECT genre FROM films WHERE id_film=13";
        $Genre13 = $this->connexion->prepare($requeteGenre);
        $Genre13->execute();
        return $Genre13;
    }
    public function getGenre14() {
        $requeteGenre  = "SELECT genre FROM films WHERE id_film=14";
        $Genre14 = $this->connexion->prepare($requeteGenre);
        $Genre14->execute();
        return $Genre14;
    }
    public function getGenre15() {
        $requeteGenre  = "SELECT genre FROM films WHERE id_film=15";
        $Genre15 = $this->connexion->prepare($requeteGenre);
        $Genre15->execute();
        return $Genre15;
    }
    public function getGenre16() {
        $requeteGenre  = "SELECT genre FROM films WHERE id_film=16";
        $Genre16 = $this->connexion->prepare($requeteGenre);
        $Genre16->execute();
        return $Genre16;
    }
    public function getGenre17() {
        $requeteGenre  = "SELECT genre FROM films WHERE id_film=17";
        $Genre17 = $this->connexion->prepare($requeteGenre);
        $Genre17->execute();
        return $Genre17;
    }
    public function getGenre18() {
        $requeteGenre  = "SELECT genre FROM films WHERE id_film=18";
        $Genre18 = $this->connexion->prepare($requeteGenre);
        $Genre18->execute();
        return $Genre18;
    }
    public function getGenre19() {
        $requeteGenre  = "SELECT genre FROM films WHERE id_film=19";
        $Genre19 = $this->connexion->prepare($requeteGenre);
        $Genre19->execute();
        return $Genre19;
    }
    public function getGenre20() {
        $requeteGenre  = "SELECT genre FROM films WHERE id_film=20";
        $Genre20 = $this->connexion->prepare($requeteGenre);
        $Genre20->execute();
        return $Genre20;
    }
    public function getGenre21() {
        $requeteGenre  = "SELECT genre FROM films WHERE id_film=21";
        $Genre21 = $this->connexion->prepare($requeteGenre);
        $Genre21->execute();
        return $Genre21;
    }

}
?>