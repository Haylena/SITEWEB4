<!DOCTYPE html>
<html lang="fr">
<head>
<?php
        require_once __DIR__ . '/../../Controlleur/DescriptionControlleur.php';
        require_once __DIR__ . '/../../Model/DescriptionModel.php';
        require_once __DIR__ . '/../../Model/Database.php';
        $database = new Database();
        $descriptionController = new DescriptionController($database->connexion);

        if (isset($_GET['id_film'])) {
            $id_film = $_GET['id_film'];
        } else {
            echo "Erreur : Identifiant du film non spécifié.";
            exit;
        }

        $affiche = $descriptionController->displayAffiche($id_film);
        $description = $descriptionController->displayDescription($id_film);
        $realisateur = $descriptionController->displayRealisateur($id_film);
        $nom = $descriptionController->displayNom($id_film);
        $acteurs = $descriptionController->displayActeurs($id_film);
        $duree = $descriptionController->displayDuree($id_film);
        $categorie = $descriptionController->displayCategorie($id_film);
       
        $rowAffiche = $affiche->fetch(PDO::FETCH_ASSOC);
        $imageFilm = base64_encode($rowAffiche['affiches']);

        

        $rowDescription = $description->fetch(PDO::FETCH_ASSOC);
        $rowRealisateur = $realisateur->fetch(PDO::FETCH_ASSOC);
        $rowNom = $nom->fetch(PDO::FETCH_ASSOC);
        $rowActeurs = $acteurs->fetch(PDO::FETCH_ASSOC);
        $rowDuree = $duree->fetch(PDO::FETCH_ASSOC);
        $rowCategorie = $categorie->fetch(PDO::FETCH_ASSOC);
    ?>
    
    <meta charset="UTF-8">
    <title>Barre de Menu Incrustée</title>
    <link rel="stylesheet" href="site.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">

</head>
<body>

    <div class="menu-container">
        <img class="background-image" src='data:image/jpeg;base64,<?php echo $imageFilm; ?>' alt='Image du film' >
        <div class="menu">
            <a href="https://www.youtube.com/watch?v=GgjpElVepYo" class="menu-item">Bande d'annonce</a>
            <a href="https://www.allocine.fr/seance/film-308042/pres-de-115756/" class="menu-item">Réserver</a>
            <a href="file:///Users/haylena/Desktop/donneravisvrai.html" class="menu-item">Laisser un avis</a>
        </div>
    </div>

</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php
        require_once __DIR__ . '/../../Controlleur/DescriptionControlleur.php';
        require_once __DIR__ . '/../../Model/DescriptionModel.php';
        require_once __DIR__ . '/../../Model/Database.php';

        if (isset($_GET['id_film'])) {
            $id_film = $_GET['id_film'];
        } else {
            echo "Erreur : Identifiant du film non spécifié.";
            exit;
        }

        $database = new Database();
        $descriptionController = new DescriptionController($database->connexion);
        $descriptionController1 = new DescriptionController1($database->connexion);

        $affiche = $descriptionController->displayAffiche($id_film);
        $description = $descriptionController->displayDescription($id_film);
        $realisateur = $descriptionController->displayRealisateur($id_film);
        $nom = $descriptionController->displayNom($id_film);
        $acteurs = $descriptionController->displayActeurs($id_film);
        $duree = $descriptionController->displayDuree($id_film);
        $categorie = $descriptionController->displayCategorie($id_film);
       
        $rowAffiche = $affiche->fetch(PDO::FETCH_ASSOC);
        $imageFilm = base64_encode($rowAffiche['affiches']);
        

        $affiche1 = $descriptionController1->displayAffiche11();
        $affiche2 = $descriptionController1->displayAffiche2();
        $affiche3 = $descriptionController1->displayAffiche3();
        $affiche4 = $descriptionController1->displayAffiche4();
        $affiche5 = $descriptionController1->displayAffiche5();
        $affiche6 = $descriptionController1->displayAffiche6();
        $affiche7 = $descriptionController1->displayAffiche7();
        $affiche8 = $descriptionController1->displayAffiche8();
        $affiche9 = $descriptionController1->displayAffiche9();
        $affiche10 = $descriptionController1->displayAffiche10();

        $rowAffiche1 = $affiche1->fetch(PDO::FETCH_ASSOC);
        $imageFilm1 = base64_encode($rowAffiche1['affiches']);
        $rowAffiche2 = $affiche2->fetch(PDO::FETCH_ASSOC);
        $imageFilm2 = base64_encode($rowAffiche2['affiches']);
        $rowAffiche3 = $affiche3->fetch(PDO::FETCH_ASSOC);
        $imageFilm3 = base64_encode($rowAffiche3['affiches']);
        $rowAffiche4 = $affiche4->fetch(PDO::FETCH_ASSOC);
        $imageFilm4 = base64_encode($rowAffiche4['affiches']);
        $rowAffiche5 = $affiche5->fetch(PDO::FETCH_ASSOC);
        $imageFilm5 = base64_encode($rowAffiche5['affiches']);
        $rowAffiche6 = $affiche6->fetch(PDO::FETCH_ASSOC);
        $imageFilm6 = base64_encode($rowAffiche6['affiches']);
        $rowAffiche7 = $affiche7->fetch(PDO::FETCH_ASSOC);
        $imageFilm7 = base64_encode($rowAffiche7['affiches']);
        $rowAffiche8 = $affiche8->fetch(PDO::FETCH_ASSOC);
        $imageFilm8 = base64_encode($rowAffiche8['affiches']);
        $rowAffiche9 = $affiche9->fetch(PDO::FETCH_ASSOC);
        $imageFilm9 = base64_encode($rowAffiche9['affiches']);
        $rowAffiche10 = $affiche10->fetch(PDO::FETCH_ASSOC);
        $imageFilm10 = base64_encode($rowAffiche10['affiches']);

        $rowDescription = $description->fetch(PDO::FETCH_ASSOC);
        $rowRealisateur = $realisateur->fetch(PDO::FETCH_ASSOC);
        $rowNom = $nom->fetch(PDO::FETCH_ASSOC);
        $rowActeurs = $acteurs->fetch(PDO::FETCH_ASSOC);
        $rowDuree = $duree->fetch(PDO::FETCH_ASSOC);
        $rowCategorie = $categorie->fetch(PDO::FETCH_ASSOC);

        
    ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Description du Film</title>
    <link rel="stylesheet" type="text/css" href="site.css">
</head>
<body>

    <div class="film-container">
        <div class="film-image">
        <img src='data:image/jpeg;base64,<?php echo $imageFilm ?>' alt='Image du film'>
        </div>
        <div class="film-details">
            <h1><?php echo $rowNom['nom'] ?></h1>
            <p class="synopsis"><?php echo $rowDescription['description'] ?></p>
            <div class="additional-details">

                <div class="additional-details">
                    <p><strong>Réalisateur :</strong> <span class="Realisateur"><?php echo $rowRealisateur['nom_realisateur'] ?></span></p>
                </div>

                <div class="additional-details">
                    <p><strong>Acteurs :</strong> <span class="Acteurs"><?php echo $rowActeurs['acteurs'] ?></span></p>
                </div>

                
                <div class="additional-details">
                    <p><strong>Durée :</strong> <span class="Durée"><?php echo $rowDuree['duree'] ?></span></p>
                </div>

                
                <div class="additional-details">
                    <p><strong>Catégorie  :</strong> <span class="Catégorie "><?php echo $rowCategorie['genre'] ?></span></p>
                </div>
            </div>
        </div>
    </div><div class="suggestions-section">
        <div class="film-suggestions">
        </div>
    </div>
    <div class="film-suggestions">
        <h2 class="suggestions-title" style="margin-left: 20px;">Autres films qui pourraient vous plaire :</h2>
        <div class="films-container">
            <a href="site.php?id_film=1"><img src='data:image/jpeg;base64,<?php echo $imageFilm1 ?>' alt="Film 1"></a>
            <a href="site.php?id_film=2"><img src='data:image/jpeg;base64,<?php echo $imageFilm2 ?>' alt="Film 2"></a>
            <a href="site.php?id_film=3"><img src='data:image/jpeg;base64,<?php echo $imageFilm3 ?>' alt="Film 3"></a>
            <a href="site.php?id_film=4"><img src='data:image/jpeg;base64,<?php echo $imageFilm4 ?>' alt="Film 4"></a>
            <a href="site.php?id_film=5"><img src='data:image/jpeg;base64,<?php echo $imageFilm5 ?>' alt="Film 5"></a>
            <a href="site.php?id_film=6"><img src='data:image/jpeg;base64,<?php echo $imageFilm6 ?>' alt="Film 6"></a>
            <a href="site.php?id_film=7"><img src='data:image/jpeg;base64,<?php echo $imageFilm7 ?>' alt="Film 7"></a>
            <a href="site.php?id_film=8"><img src='data:image/jpeg;base64,<?php echo $imageFilm8 ?>' alt="Film 8"></a>
            <a href="site.php?id_film=10"><img src='data:image/jpeg;base64,<?php echo $imageFilm9 ?>' alt="Film 9"></a>
            <a href="site.php?id_film=11"><img src='data:image/jpeg;base64,<?php echo $imageFilm10 ?>' alt="Film 10"></a>>
         </div>  
    </div>
    <script>
      document.addEventListener("DOMContentLoaded", function() {
        const filmImages = document.querySelectorAll('.film-suggestions img')   ;

        filmImages.forEach(img => {
            img.addEventListener('click', function() {
                this.classList.toggle('clicked');
            });
        });
    });  
    </script>
 </body>
</html>
    