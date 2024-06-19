<?php


include "../Autre/menu_haut.php";
require_once __DIR__ . '/../../Controlleur/DescriptionControlleur.php';
require_once __DIR__ . '/../../Model/DescriptionModel.php';
require_once __DIR__ . '/../../Model/Database.php';

function recupererAfficheFilm($idFilm) {
    global $connexion;

    // Exécutez la requête pour obtenir l'affiche encodée en base64
    $result = mysqli_query($connexion, "SELECT affiches FROM films WHERE id_film = $idFilm");
    $row = mysqli_fetch_assoc($result);
    $affiche_encodee = $row['affiches'];

    return $affiche_encodee;
}

$database = new Database();
$descriptionController1 = new DescriptionController1($database->connexion);

$affiche1 = $descriptionController1->displayAffiche1();
$affiche2 = $descriptionController1->displayAffiche2();
$affiche3 = $descriptionController1->displayAffiche3();
$affiche4 = $descriptionController1->displayAffiche4();
$affiche5 = $descriptionController1->displayAffiche5();
$affiche6 = $descriptionController1->displayAffiche6();
$affiche7 = $descriptionController1->displayAffiche7();
$affiche8 = $descriptionController1->displayAffiche8();
$affiche9 = $descriptionController1->displayAffiche9();
$affiche10 = $descriptionController1->displayAffiche10();
$affiche11 = $descriptionController1->displayAffiche11();
$affiche12 = $descriptionController1->displayAffiche12();
$affiche13 = $descriptionController1->displayAffiche13();
$affiche14 = $descriptionController1->displayAffiche14();
$affiche15 = $descriptionController1->displayAffiche15();
$affiche16 = $descriptionController1->displayAffiche16();
$affiche17 = $descriptionController1->displayAffiche17();
$affiche18 = $descriptionController1->displayAffiche18();
$affiche19 = $descriptionController1->displayAffiche19();

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
$rowAffiche11 = $affiche11->fetch(PDO::FETCH_ASSOC);
$imageFilm11 = base64_encode($rowAffiche11['affiches']);
$rowAffiche12 = $affiche12->fetch(PDO::FETCH_ASSOC);
$imageFilm12 = base64_encode($rowAffiche12['affiches']);
$rowAffiche13 = $affiche13->fetch(PDO::FETCH_ASSOC);
$imageFilm13 = base64_encode($rowAffiche13['affiches']);
$rowAffiche14 = $affiche14->fetch(PDO::FETCH_ASSOC);
$imageFilm14 = base64_encode($rowAffiche14['affiches']);
$rowAffiche15 = $affiche15->fetch(PDO::FETCH_ASSOC);
$imageFilm15 = base64_encode($rowAffiche15['affiches']);
$rowAffiche16 = $affiche16->fetch(PDO::FETCH_ASSOC);
$imageFilm16 = base64_encode($rowAffiche16['affiches']);
$rowAffiche17 = $affiche17->fetch(PDO::FETCH_ASSOC);
$imageFilm17 = base64_encode($rowAffiche17['affiches']);
$rowAffiche18 = $affiche18->fetch(PDO::FETCH_ASSOC);
$imageFilm18 = base64_encode($rowAffiche18['affiches']);
$rowAffiche19 = $affiche19->fetch(PDO::FETCH_ASSOC);
$imageFilm19 = base64_encode($rowAffiche19['affiches']);

$nom1 = $descriptionController1->displayNom1();
$rowNom1 = $nom1->fetch(PDO::FETCH_ASSOC);
$nom2 = $descriptionController1->displayNom2();
$rowNom2 = $nom2->fetch(PDO::FETCH_ASSOC);
$nom3 = $descriptionController1->displayNom3();
$rowNom3 = $nom3->fetch(PDO::FETCH_ASSOC);
$nom4 = $descriptionController1->displayNom4();
$rowNom4 = $nom4->fetch(PDO::FETCH_ASSOC);
$nom5= $descriptionController1->displayNom5();
$rowNom5 = $nom5->fetch(PDO::FETCH_ASSOC);
$nom6 = $descriptionController1->displayNom6();
$rowNom6 = $nom6->fetch(PDO::FETCH_ASSOC);
$nom7 = $descriptionController1->displayNom7();
$rowNom7 = $nom7->fetch(PDO::FETCH_ASSOC);
$nom8 = $descriptionController1->displayNom8();
$rowNom8 = $nom8->fetch(PDO::FETCH_ASSOC);
$nom9 = $descriptionController1->displayNom9();
$rowNom9 = $nom9->fetch(PDO::FETCH_ASSOC);
$nom10 = $descriptionController1->displayNom10();
$rowNom10 = $nom10->fetch(PDO::FETCH_ASSOC);
$nom11 = $descriptionController1->displayNom11();
$rowNom11 = $nom11->fetch(PDO::FETCH_ASSOC);
$nom12 = $descriptionController1->displayNom12();
$rowNom12 = $nom12->fetch(PDO::FETCH_ASSOC);
$nom13 = $descriptionController1->displayNom13();
$rowNom13 = $nom13->fetch(PDO::FETCH_ASSOC);
$nom14 = $descriptionController1->displayNom14();
$rowNom14 = $nom14->fetch(PDO::FETCH_ASSOC);
$nom15 = $descriptionController1->displayNom15();
$rowNom15 = $nom15->fetch(PDO::FETCH_ASSOC);
$nom16 = $descriptionController1->displayNom16();
$rowNom16 = $nom16->fetch(PDO::FETCH_ASSOC);
$nom17 = $descriptionController1->displayNom17();
$rowNom17 = $nom17->fetch(PDO::FETCH_ASSOC);
$nom18 = $descriptionController1->displayNom18();
$rowNom18 = $nom18->fetch(PDO::FETCH_ASSOC);
$nom19 = $descriptionController1->displayNom19();
$rowNom19 = $nom19->fetch(PDO::FETCH_ASSOC);

$duree1 = $descriptionController1->displayDuree1();
$rowDuree1 = $duree1->fetch(PDO::FETCH_ASSOC);
$duree2 = $descriptionController1->displayDuree2();
$rowDuree2 = $duree2->fetch(PDO::FETCH_ASSOC);
$duree3 = $descriptionController1->displayDuree3();
$rowDuree3 = $duree3->fetch(PDO::FETCH_ASSOC);
$duree4 = $descriptionController1->displayDuree4();
$rowDuree4 = $duree4->fetch(PDO::FETCH_ASSOC);
$duree5 = $descriptionController1->displayDuree5();
$rowDuree5 = $duree5->fetch(PDO::FETCH_ASSOC);
$duree6 = $descriptionController1->displayDuree6();
$rowDuree6 = $duree6->fetch(PDO::FETCH_ASSOC);
$duree7 = $descriptionController1->displayDuree7();
$rowDuree7 = $duree7->fetch(PDO::FETCH_ASSOC);
$duree8 = $descriptionController1->displayDuree8();
$rowDuree8 = $duree8->fetch(PDO::FETCH_ASSOC);
$duree9 = $descriptionController1->displayDuree9();
$rowDuree9 = $duree9->fetch(PDO::FETCH_ASSOC);
$duree10 = $descriptionController1->displayDuree10();
$rowDuree10 = $duree10->fetch(PDO::FETCH_ASSOC);
$duree11 = $descriptionController1->displayDuree11();
$rowDuree11 = $duree11->fetch(PDO::FETCH_ASSOC);
$duree12 = $descriptionController1->displayDuree12();
$rowDuree12 = $duree12->fetch(PDO::FETCH_ASSOC);
$duree13 = $descriptionController1->displayDuree13();
$rowDuree13 = $duree13->fetch(PDO::FETCH_ASSOC);
$duree14 = $descriptionController1->displayDuree14();
$rowDuree14 = $duree14->fetch(PDO::FETCH_ASSOC);
$duree15 = $descriptionController1->displayDuree15();
$rowDuree15= $duree15->fetch(PDO::FETCH_ASSOC);
$duree16 = $descriptionController1->displayDuree16();
$rowDuree16 = $duree16->fetch(PDO::FETCH_ASSOC);
$duree17 = $descriptionController1->displayDuree17();
$rowDuree17 = $duree17->fetch(PDO::FETCH_ASSOC);
$duree18 = $descriptionController1->displayDuree18();
$rowDuree18 = $duree18->fetch(PDO::FETCH_ASSOC);
$duree19 = $descriptionController1->displayDuree19();
$rowDuree19 = $duree19->fetch(PDO::FETCH_ASSOC);

$genre1 = $descriptionController1->displayGenre1();
$rowGenre1 = $genre1->fetch(PDO::FETCH_ASSOC);
$genre2 = $descriptionController1->displayGenre2();
$rowGenre2 = $genre2->fetch(PDO::FETCH_ASSOC);
$genre3 = $descriptionController1->displayGenre3();
$rowGenre3 = $genre3->fetch(PDO::FETCH_ASSOC);
$genre4 = $descriptionController1->displayGenre4();
$rowGenre4 = $genre4->fetch(PDO::FETCH_ASSOC);
$genre5 = $descriptionController1->displayGenre5();
$rowGenre5 = $genre5->fetch(PDO::FETCH_ASSOC);
$genre6 = $descriptionController1->displayGenre6();
$rowGenre6 = $genre6->fetch(PDO::FETCH_ASSOC);
$genre7 = $descriptionController1->displayGenre7();
$rowGenre7 = $genre7->fetch(PDO::FETCH_ASSOC);
$genre8 = $descriptionController1->displayGenre8();
$rowGenre8 = $genre8->fetch(PDO::FETCH_ASSOC);
$genre9 = $descriptionController1->displayGenre9();
$rowGenre9= $genre9->fetch(PDO::FETCH_ASSOC);
$genre10 = $descriptionController1->displayGenre10();
$rowGenre10 = $genre10->fetch(PDO::FETCH_ASSOC);
$genre11 = $descriptionController1->displayGenre11();
$rowGenre11 = $genre11->fetch(PDO::FETCH_ASSOC);
$genre12 = $descriptionController1->displayGenre12();
$rowGenre12 = $genre12->fetch(PDO::FETCH_ASSOC);
$genre13 = $descriptionController1->displayGenre13();
$rowGenre13 = $genre13->fetch(PDO::FETCH_ASSOC);
$genre14 = $descriptionController1->displayGenre14();
$rowGenre14 = $genre14->fetch(PDO::FETCH_ASSOC);
$genre15 = $descriptionController1->displayGenre15();
$rowGenre15 = $genre15->fetch(PDO::FETCH_ASSOC);
$genre16 = $descriptionController1->displayGenre16();
$rowGenre16 = $genre16->fetch(PDO::FETCH_ASSOC);
$genre17 = $descriptionController1->displayGenre17();
$rowGenre17 = $genre17->fetch(PDO::FETCH_ASSOC);
$genre18 = $descriptionController1->displayGenre18();
$rowGenre18 = $genre18->fetch(PDO::FETCH_ASSOC);
$genre19 = $descriptionController1->displayGenre19();
$rowGenre19= $genre19->fetch(PDO::FETCH_ASSOC);
?>




<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <title>Cinema WEB SITE</title>
        <link rel="stylesheet" href="stylecinema.css">
        <link rel="stylesheet" href="view.css">
        <!--Box Icons-->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
        <!-- Link Swiper's CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" >
    </head>
<body>
    <!--Navbar-->
    
    <!--Catalogue-->

    <section class="atm-movie">
        <div class="slideshow-container">

            <div class="mySlides fade">
              <a href="site.php?id_film=2"><img src='data:image/jpeg;base64,<?php echo $imageFilm2 ?>' style="width:100%;  height=75%"></a>
              <div class="text">
                <div class="catalogue-text">
                   <span>Warner Bros. Pictures</span>
                    <h1>AQUAMAN<br>Et le Royaume perdu</h1>
                    <a href="site.php?id_film=2" class="btn">Réserver Maintenant</a>
                    <a href="site.php?id_film=2" class="play">
                        <i class='bx bx-play' ></i>
                    </a>
                 </div>
              </div>
            </div>
            
            <div class="mySlides fade">
            <a href="site.php?id_film=5"><img src='data:image/jpeg;base64,<?php echo $imageFilm5 ?>' style="width:100%;  height=75%"></a>
              <div class="text">
                <div class="catalogue-text">
                    <span>Warner Bros. Pictures</span>
                    <h1>Priscilla<br></h1>
                    <a href="site.php?id_film=5" class="btn">Réserver Maintenant</a>
                    <a href="site.php?id_film=5" class="play">
                        <i class='bx bx-play' ></i>
                    </a>
                 </div>
              </div>
            </div>
            
            <div class="mySlides fade">
            <a href="site.php?id_film=6"></a><img src='data:image/jpeg;base64,<?php echo $imageFilm6 ?>' style="width:100%;  height=75%">
              <div class="text">
                <div class="catalogue-text">
                    <span>Warner Bros. Pictures</span>
                    <h1>THE HUNGER GAMES<br></h1>
                    <a href="site.php?id_film=6" class="btn">Réserver Maintenant</a>
                    <a href="site.php?id_film=6" class="play">
                        <i class='bx bx-play' ></i>
                    </a>
                 </div>
              </div>
            </div>

            <div class="mySlides fade">
                <a href="site.php?id_film=1"></a> <img src='data:image/jpeg;base64,<?php echo $imageFilm1 ?>' style="width:100%;  height=75%">
                <div class="text">
                    <div class="catalogue-text">
                        <span>Warner Bros. Pictures</span>
                        <h1>KUNG FU PANDA<br></h1>
                        <a href="site.php?id_film=1" class="btn">Réserver Maintenant</a>
                        <a href="site.php?id_film=1" class="play">
                            <i class='bx bx-play' ></i>
                        </a>
                     </div>
                </div>
            </div>

            <div class="mySlides fade">
                <a href="site.php?id_film=4"></a>  <img src='data:image/jpeg;base64,<?php echo $imageFilm4 ?>' style="width:100%;  height=75%">
                <div class="text">
                    <div class="catalogue-text">
                        <span>Warner Bros. Pictures</span>
                        <h1>WISH<br>Asha et la Bonne Étoile</h1>
                        <a href="site.php?id_film=4" class="btn">Réserver Maintenant</a>
                        <a href="site.php?id_film=4" class="play">
                            <i class='bx bx-play' ></i>
                        </a>
                    </div>
                </div>
            </div>

            <div class="mySlides fade">
                <a href="site.php?id_film=3"></a>   <img src='data:image/jpeg;base64,<?php echo $imageFilm3 ?>' style="width:100%;  height=75%">
                <div class="text">
                    <div class="catalogue-text">
                        <span>Warner Bros. Pictures</span>
                        <h1>Wonka<br>Et le Royaume perdu</h1>
                        <a href="site.php?id_film=3" class="btn">Réserver Maintenant</a>
                        <a href="site.php?id_film=3" class="play">
                            <i class='bx bx-play' ></i>
                        </a>
                    </div>
                </div>
            </div>
            
            </div>

            <a class="prev" onclick="prevSlide()">❮</a>
            <a class="next" onclick="showSlides()">❯</a>

            <br>

            <div style="text-align:center">
              <span class="dot"></span> 
              <span class="dot"></span> 
              <span class="dot"></span> 
              <span class="dot"></span> 
              <span class="dot"></span> 
              <span class="dot"></span> 
            </div>
            
    </section>

    <br>

    <section class="available">

        <h2> Disponible cette semaine</h2>    
        <hr>
        <br>
        <div class="row">
            <!--Liste des films disponibles -->
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <div class="thumb-box">
                <a href="site.php?id_film=1">
                <img src='data:image/jpeg;base64,<?php echo $imageFilm1 ?>' alt="<?php echo $rowNom1['nom'] ?>">
                <span class="overlay-box">
                <span class="meta"><?php echo $rowDuree1['duree'] ?>| <?php echo $rowGenre1['genre'] ?></span>
                <span class="main-title"><?php echo $rowNom1['nom'] ?></span>
                <span class="description">
                    Passionné, costaud et quelque peu maladroit, Po est sans conteste le plus grand fan de kung fu ...</span>
                    </a>
                 </div>

                <div class="thumb-box">
                <a href="site.php?id_film=2">
                <img src='data:image/jpeg;base64,<?php echo $imageFilm2 ?>' alt="<?php echo $rowNom2['nom'] ?>">
                <span class="overlay-box">
                <span class="meta"><?php echo $rowDuree2['duree'] ?> | <?php echo $rowGenre2['genre'] ?></span>
                <span class="main-title"><?php echo $rowNom2['nom'] ?></span>
                <span class="description">
                   Suivez les aventures entre terre et mer du roi des océans Arthur Curry!</span>
                </a>
                </div>


                <div class="thumb-box">
                <a href="site.php?id_film=3">
                <img src='data:image/jpeg;base64,<?php echo $imageFilm3 ?>' alt="<?php echo $rowNom3['nom'] ?>">
                <span class="overlay-box">
                <span class="meta"> <?php echo $rowDuree3['duree'] ?> | <?php echo $rowGenre3['genre'] ?> </span>
                <span class="main-title"><?php echo $rowNom3['nom'] ?></span>
                <span class="description">
                   Qui est le mystérieux Monsieur Wonka et quel est le secret du succès de sa célèbre fabrique? </span>
                </a>
                </div>

                <div class="thumb-box">
                <a href="site.php?id_film=4">
                <img src='data:image/jpeg;base64,<?php echo $imageFilm4 ?>' alt="<?php echo $rowNom4['nom'] ?>">
                <span class="overlay-box">  
                <span class="meta"> <?php echo $rowDuree4['duree'] ?> | <?php echo $rowGenre4['genre'] ?> </span>
                <span class="main-title"><?php echo $rowNom4['nom'] ?></span>
                <span class="description">
                   Auriez-vous envie de découvrir un compte de fée oû les souhaits deviennent réalité? </span>
                </a>
                </div>

                <div class="thumb-box">
                <a href="site.php?id_film=5">
                <img src='data:image/jpeg;base64,<?php echo $imageFilm5 ?>' alt="<?php echo $rowNom5['nom'] ?>">
                <span class="overlay-box">
                <span class="meta">  <?php echo $rowDuree5['duree'] ?> | <?php echo $rowGenre5['genre'] ?>  </span>
                <span class="main-title"><?php echo $rowNom5['nom'] ?></span>
                <span class="description">
                  Suivez l'histoire de la jeune Priscilla et son ascenssion à Hollywood auprès d'Elvis Presley!  </span>
                </a>
                </div>

                <div class="thumb-box">
                <a href="site.php?id_film=6">
                <img src='data:image/jpeg;base64,<?php echo $imageFilm6 ?>' alt="<?php echo $rowNom7['nom'] ?>">
                <span class="overlay-box">
                <span class="meta">  <?php echo $rowDuree6['duree'] ?> | <?php echo $rowGenre6['genre'] ?> </span>
                <span class="main-title"><?php echo $rowNom6['nom'] ?></span>
                <span class="description">
                    Qui est Coriolanus Snow et que prépare-t-il dans les contrées des Hunger Games?</span>
                </a>
                </div>
                <!--Ajoutez cette ligne pour la pagination-->
                <div class="swiper-pagination"></div>

        </div>
          
    </section>

    <!--Suite de Prochainement-->
    <section class="available">

    <h3>            </h3>
    <hr>
    <br>
    <div class="row">
        <!--Liste des films disponibles -->
        <div class="thumb-box">
                <a href="site.php?id_film=7">
                <img src='data:image/jpeg;base64,<?php echo $imageFilm7 ?>' alt="<?php echo $rowNom7['nom'] ?>">
                <span class="overlay-box">
                <span class="meta">  <?php echo $rowDuree7['duree'] ?> | <?php echo $rowGenre7['genre'] ?> </span> 
                <span class="main-title"><?php echo $rowNom7['nom'] ?></span>
                <span class="description">
                   Napoléon, un mythe , une légende, un héro mais avez-vous jamais entendu parler de  Napoléon, l'homme? </span>
                </a>
            </div>

            <div class="thumb-box">
                <a href="site.php?id_film=8">
                <img src='data:image/jpeg;base64,<?php echo $imageFilm8 ?>' alt="<?php echo $rowNom8['nom'] ?>">
                <span class="overlay-box">
                <span class="meta">  <?php echo $rowDuree8['duree'] ?>| <?php echo $rowGenre8['genre'] ?> </span>
                <span class="main-title"><?php echo $rowNom8['nom'] ?></span>
                <span class="description">
                     Suivez les aventures d'oiseaux migrateurs complètements déjantés! </span>
                </span>
                </a>
            </div>

            <div class="thumb-box">
                <a href="site.php?id_film=9">
                <img src='data:image/jpeg;base64,<?php echo $imageFilm9 ?>' alt="<?php echo $rowNom9['nom'] ?>">
                <span class="overlay-box">
                <span class="meta">  <?php echo $rowDuree9['duree'] ?> | <?php echo $rowGenre9['genre'] ?> </span>
                <span class="main-title"><?php echo $rowNom9['nom'] ?></span>
                <span class="description">
                   Suivez les aventures de Maximus, le gladiateur le plus célèbre de l'histoire! </span>
                </a>
            </div>

            <div class="thumb-box">
                <a href="site.php?id_film=10">
                    <img src='data:image/jpeg;base64,<?php echo $imageFilm10 ?>' alt="<?php echo $rowNom10['nom'] ?>">
                    <span class="overlay-box">
                    <span class="meta"> <?php echo $rowDuree10['duree'] ?>| <?php echo $rowGenre10['genre'] ?></span>
                    <span class="main-title"><?php echo $rowNom10['nom'] ?></span>
                    <span class="description">
                       Suivez les aventures de Sirocco, le petit oiseau qui voulait voler plus vite que le vent! </span>
                    </a>
            </div>

            <div class="thumb-box">
                <a href="site.php?id_film=11">
                <img src='data:image/jpeg;base64,<?php echo $imageFilm11 ?>' alt="<?php echo $rowNom11['nom'] ?>">
                <span class="overlay-box">
                <span class="meta">  <?php echo $rowDuree11['duree'] ?> | <?php echo $rowGenre11['genre'] ?> </span>
                <span class="main-title"><?php echo $rowNom11['nom'] ?> </span>
                <span class="description">
                   Suivez les aventures de Paul Atreides dans sa quête de vengeance! </span>
                </a>
            </div>

            <div class="thumb-box">
                <a href="site.php?id_film=12">
                <img src='data:image/jpeg;base64,<?php echo $imageFilm12 ?>' alt="<?php echo $rowNom12['nom'] ?>">
                <span class="overlay-box">
                <span class="meta">  <?php echo $rowDuree12['duree'] ?> | <?php echo $rowGenre12['genre'] ?> </span>
                <span class = "main-title"><?php echo $rowNom12['nom'] ?></span>
                <span class="description">
                   Suivez les aventures de Furiosa, la guerrière la plus redoutable de l'histoire! </span>
                </a>
            </div>
        </div>

    </section>

    <!--Coming-->
    <section class="coming" id="coming">
        <h2 class="heading">Prochainement</h2>
        <!--Coming Container-->
        <div class="coming-container swiper">
            <div class="swiper-wrapper">
                <!--Box 1-->
                    <div class="swiper-slide box">
                        <div class="box-img">
                            <img src='data:image/jpeg;base64,<?php echo $imageFilm11 ?>' alt="<?php echo $rowNom11['nom'] ?>"> 
                        </div>
                        <h3><?php echo $rowNom11['nom'] ?></h3>
                        <span> <?php echo $rowDuree11['duree'] ?> | <?php echo $rowGenre11['genre'] ?></span>
                    </div>
                <!--Box 4-->
                    <div class="swiper-slide box">
                        <div class="box-img">
                            <img src='data:image/jpeg;base64,<?php echo $imageFilm13 ?>' alt="<?php echo $rowNom13['nom'] ?>"> 
                        </div>
                        <h3><?php echo $rowNom13['nom'] ?></h3>
                        <span> <?php echo $rowDuree13['duree'] ?> | <?php echo $rowGenre13['genre'] ?></span>
                    </div>
                <!--Box 5-->
                    <div class="swiper-slide box">
                        <div class="box-img">
                            <img src='data:image/jpeg;base64,<?php echo $imageFilm17 ?>' alt="<?php echo $rowNom17['nom'] ?>"> 
                        </div>
                        <h3><?php echo $rowNom17['nom'] ?></h3>
                        <span> <?php echo $rowDuree17['duree'] ?> | <?php echo $rowGenre17['genre'] ?></span>
                    </div>
                <!--Box 6-->
                    <div class="swiper-slide box">
                        <div class="box-img">
                            <img src='data:image/jpeg;base64,<?php echo $imageFilm14 ?>' alt="<?php echo $rowNom14['nom'] ?>"> 
                        </div>
                        <h3><?php echo $rowNom14['nom'] ?></h3>
                        <span> <?php echo $rowDuree14['duree'] ?> | <?php echo $rowGenre14['genre'] ?></span>
                    </div>
                <!--Box 7-->    
                    <div class="swiper-slide box">
                        <div class="box-img">
                            <img src='data:image/jpeg;base64,<?php echo $imageFilm15 ?>' alt="<?php echo $rowNom15['nom'] ?>"> 
                        </div>
                        <h3><?php echo $rowNom15['nom'] ?></h3>
                        <span> <?php echo $rowDuree15['duree'] ?> | <?php echo $rowGenre15['genre'] ?></span>
                    </div>
                <!--Box 9-->
                <div class="swiper-slide box">
                        <div class="box-img">
                        <img src='data:image/jpeg;base64,<?php echo $imageFilm19 ?>' alt="<?php echo $rowNom19['nom'] ?>"> 
                        </div>
                        <h3><?php echo $rowNom19['nom'] ?></h3>
                        <span> <?php echo $rowDuree19['duree'] ?> | <?php echo $rowGenre19['genre'] ?></span>
                    </div>
                <!--Box 10-->
                <div class="swiper-slide box">
                        <div class="box-img">
                            <img src='data:image/jpeg;base64,<?php echo $imageFilm18 ?>' alt="<?php echo $rowNom18['nom'] ?>"> 
                        </div>
                        <h3><?php echo $rowNom18['nom'] ?></h3>
                        <span> <?php echo $rowDuree18['duree'] ?> | <?php echo $rowGenre18['genre'] ?></span>
                    </div>
                </div>
           </div>
   

</section>

<!--Newsletter-->
<section class="newsletter" id="newsletter">
    <h2>S'inscrire pour recevoir <br> la Newsletter</h2>
    <form action="traitement_newsletter.php" method="post">
        <input type="email" class="email" placeholder="Renseigner l'email..." required>
        <input type="submit" value="s'abonner" class="btn">
    </form>
</section>
<!--Footer-->

<!--Copyright-->



</body>

<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>


<script>
//    let slideIndex = 0;
//    showSlides(slideIndex);
    
    
    //Permet de défiler les slides avec des boutons
    var timeOut = 1000;
        var slideIndex = 0;
        var autoOn = true;

        autoSlides();

        function autoSlides() {
            timeOut = timeOut - 20;

            if (autoOn == true && timeOut < 0) {
                showSlides();
            }
            setTimeout(autoSlides, 20);
        }

        function prevSlide() {

            timeOut = 3000;

            var slides = document.getElementsByClassName("mySlides");
            var dots = document.getElementsByClassName("dot");

            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
                dots[i].className = dots[i].className.replace(" active", "");
            }
            slideIndex--;

            if (slideIndex > slides.length) {
                slideIndex = 1
            }
            if (slideIndex == 0) {
                slideIndex = 3
            }
            slides[slideIndex - 1].style.display = "block";
            dots[slideIndex - 1].className += " active";
        }

        function showSlides() {

            timeOut = 3000;

            var slides = document.getElementsByClassName("mySlides");
            var dots = document.getElementsByClassName("dot");

            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
                dots[i].className = dots[i].className.replace(" active", "");
            }
            slideIndex++;

            if (slideIndex > slides.length) {
                slideIndex = 1
            }
            slides[slideIndex - 1].style.display = "block";
            dots[slideIndex - 1].className += " active";
        }
        //Code JavaScript Swiper ici//
        var swiper = new Swiper(".swiper-container", {
            slidesPerView: 1,
            spaceBetween: 10,
            navigation: {
                nextE1: '.swiper-button-next',
                prevE1: '.swiper-button-prev',
            },
            pagination: {
              el: '.swiper-pagination',
                clickable: true,
            },
          });
    //Code JavaScript ici// 
    let header = document.querySelector('header');
    let catalogue = document.querySelector('#catalogue-icon');
    let navbar = document.querySelector('.navbar');

    window.addEventListener('scroll',()=> {
    header.classList.toggle('shadow', window.scrollY > 0);
    });

    catalogue.onclick = () => {
    catalogue.classList.toggle('bx-x');
    navbar.classList.toggle('active');
    }
    window.onscroll = () => {
    catalogue.classList.remove('bx-x');
    navbar.classList.remove('active');
    }
</script>

</html>

<!--Footer-->
    <?php
    include "../Autre/footer.php";
    ?>
<!--Copyright-->



<script>
//    let slideIndex = 0;
//    showSlides(slideIndex);
    
    
    //Permet de défiler les slides avec des boutons
    var timeOut = 1000;
        var slideIndex = 0;
        var autoOn = true;

        autoSlides();

        function autoSlides() {
            timeOut = timeOut - 20;

            if (autoOn == true && timeOut < 0) {
                showSlides();
            }
            setTimeout(autoSlides, 20);
        }

        function prevSlide() {

            timeOut = 3000;

            var slides = document.getElementsByClassName("mySlides");
            var dots = document.getElementsByClassName("dot");

            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
                dots[i].className = dots[i].className.replace(" active", "");
            }
            slideIndex--;

            if (slideIndex > slides.length) {
                slideIndex = 1
            }
            if (slideIndex == 0) {
                slideIndex = 3
            }
            slides[slideIndex - 1].style.display = "block";
            dots[slideIndex - 1].className += " active";
        }

        function showSlides() {

            timeOut = 3000;

            var slides = document.getElementsByClassName("mySlides");
            var dots = document.getElementsByClassName("dot");

            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
                dots[i].className = dots[i].className.replace(" active", "");
            }
            slideIndex++;

            if (slideIndex > slides.length) {
                slideIndex = 1
            }
            slides[slideIndex - 1].style.display = "block";
            dots[slideIndex - 1].className += " active";
        }

    //Code JavaScript ici// 
    let header = document.querySelector('header');
    let catalogue = document.querySelector('#catalogue-icon');
    let navbar = document.querySelector('.navbar');

    window.addEventListener('scroll',()=> {
    header.classList.toggle('shadow', window.scrollY > 0);
    });

    catalogue.onclick = () => {
    catalogue.classList.toggle('bx-x');
    navbar.classList.toggle('active');
    }
    window.onscroll = () => {
    catalogue.classList.remove('bx-x');
    navbar.classList.remove('active');
    }
</script>

</html>
