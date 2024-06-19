<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mon compte</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="films_envie.css">
    <style>
    .films-container {
        display: flex;
        flex-wrap: wrap;
        gap: 20px;
        justify-content: flex-start;
        margin-top: 20px;
        margin-left: 22%;
    }

    .films-container img {
        width: 200px;
        height: 300px;
    }
</style>
</head>
<?php include "../Autre/menu_haut.php"; ?>
    <br />
    <br />
    <br />


<aside id="menu">
    <ul>
        <a href="films_envie.php"><li>MES FILMS</li></a>
        <a href="Mes_critiques.php"><li>MES CRITIQUES</li></a>
        <a href="mes_amis.php"><li>MES AMIS</li></a>
        <a href=""><li>MES CINÉMAS</li></a>
        <a href="Mes_preferences.php"><li>MES PRÉFÉRENCES</li></a>
        <a href="films_vu.php"><li>NOTEZ LES FILMS</li></a>
    </ul>
</aside>

    <div class="section1">
        <h2>Mes films</h2>
        <button class="button">
            <i class="fa fa-share-alt" aria-hidden="true"></i>
            <span>Partager</span>
        </button>
        <ul>
            <li><a href="#">Envie de voir</a></li>
            <li><a href="#">Que j'ai vu</a></li>
        </ul>
    </div>

    <div id="films-container" class="films-container">
        <?php
        require_once __DIR__ . '/../../Controlleur/FilmControlleur.php';
        require_once __DIR__ . '/../../Controlleur/CritiqueControlleur.php';
        require_once __DIR__ . '/../../Model/Database.php';
        require_once __DIR__ . '/../../Model/FilmModel.php';
        
        $database = new Database();
        $connexion = $database->connexion;
        
        $filmController = new FilmController($connexion);

        $filmController = new FilmController($connexion);

        $resultatFilms = $filmController->displayFilms();
        if ($resultatFilms->rowCount() > 0) {
            while ($row = $resultatFilms->fetch(PDO::FETCH_ASSOC)) {
                $afficheFilm = base64_encode($row['affiches']);
                echo "<img src='data:image/jpeg;base64,$afficheFilm' alt='Affiche du film'>";
            }
        } else {
            $resultatImage = $filmController->displayDefaultImage();
            if ($resultatImage->rowCount() > 0) {
                $rowImage = $resultatImage->fetch(PDO::FETCH_ASSOC);
                $imageParDefaut = base64_encode($rowImage['image']);
                echo "<img src='data:image/jpeg;base64,$imageParDefaut' alt='Image par défaut'>";
            } else {
                echo "Erreur : Image par défaut non trouvée.";
            }
        }
        ?>
    </div>

</body>
</html>
