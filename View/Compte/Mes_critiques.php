<!DOCTYPE html>
<html lang="en">
<head>
    <?php 
        require_once __DIR__ . '/../../Model/CritiqueModel.php';
        require_once __DIR__ . '/../../Model/Database.php';
        require_once __DIR__ . '/../../Controlleur/CritiqueControlleur.php';
    ?>
    <link rel="stylesheet" type="text/css" href="Mes_critiques.css">
    <style>
            /* Header */
            /* Header */


    body {
        color: black;
    }

    h1, p, a {
        color: white;
    }

    .yellow-box p {
        color: white;
    }

    label {
        color: black;
    }

    input, select {
        color: black;
    }

    body {
        font-family: Arial, sans-serif;
        line-height: 1.6;
        margin: 0;
        padding: 0;
        color: black;
        background-color: #212526;
    }

    .middle-side {
        width: 70%;
        text-align: left;
        padding: 20px;
        margin-left: 30%;
    }

    .move-left {
        margin-left: -10%;
    }

    .perso {
        margin-top: 4em;
        font-size: 0.8em;
        margin-left: -5%;
    }

    .additional-info {
        text-align: right;
        margin-top: 2em;
        margin-right: 35%;
    }

    .vertical-line {
        position: absolute;
        height: 100%;
        width: 1px;
        background-color: #999;
        left: 20%;
        top: 0;
    }

    .yellow-box {
        background-color: yellow;
        padding: 0px;
        text-align: center;
        margin-top: 1em;
        margin-left: 45%;
        width: 60%;
    }

        .yellow-box p {
            color: white;
        }

    .deroulant {
        margin-top: 20px;
        margin-left: -5%;
    }

    /* Menu */

    #menu {
        width: 19%;
        background-color: #212526;
        height: 100vh;
        position: fixed;
        left: 0;
        overflow-y: auto;
        padding: 10px;
    }

        #menu a {
            text-decoration: none;
            color: white;
            display: block;
            padding: 10px;
        }

            #menu a:hover {
                background-color: #2a2e2f;
            }

    li {
        list-style: none;
        padding: 10px;
    }

    /* Propositions */

    .propositions-box {
        width: 70%;
        background-color: #444;
        padding: 10px;
        border-radius: 8px;
        margin-top: 20px;
    }

        .propositions-box h2 {
            color: #fff;
            font-size: 1.2em;
            margin-bottom: 10px;
        }

    .options {
        display: flex;
        flex-direction: column;
    }

    label {
        cursor: pointer;
        padding: 10px;
        margin-bottom: 10px;
        background-color: #212526; /* Couleur de fond */
        color: white; /* Couleur du texte */
    }

    input, select {
        padding: 8px;
        margin-bottom: 16px;
        border: 1px solid #ccc;
        border-radius: 4px;
        background-color: #212526; /* Couleur de fond */
        color: white; /* Couleur du texte */
        display: block;
    }

        input[type="submit"] {
            background-color: #FFD700;
            color: black;
            cursor: pointer;
            padding: 10px;
            border: none;
            border-radius: 4px;
            display: block;
        }

            input[type="submit"]:hover {
                background-color: #FFA500;
            }
    
    </style>
</head>
<?php include "../Autre/menu_haut.php"; ?>
<br />
<br />
<br />
<body>
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

    <div class="middle-side">
        <h1 class="move-left">MES CRITIQUES</h1>
        <p class="perso">FILMS</p>
        
        <div class="deroulant">
            <select id="dropdown" name="dropdown">
                <option value="0">Toutes les notes</option>
                <option value="1">☆☆☆☆☆ (0 étoile)</option>
                <option value="2">★☆☆☆☆ (1 étoile)</option>
                <option value="3">★★☆☆☆ (2 étoiles)</option>
                <option value="4">★★★☆☆ (3 étoiles)</option>
                <option value="5">★★★★☆ (4 étoiles)</option>
                <option value="6">★★★★★ (5 étoiles)</option>
            </select>
        </div>

        <?php
    $database = new Database();
    $connexion = $database->connexion;

    $critiqueController = new CritiqueController($connexion);
    $critiques = $critiqueController->afficherCritique();

    if (!empty($critiques)) {
        while ($row = $critiques->fetch(PDO::FETCH_ASSOC)) {
            $filmId = $row['films_id_film'];  // Récupérez la valeur de film_id
            $note = $critiqueController->afficherNote($filmId);
            $nom = $critiqueController->afficherNom($filmId);
    
            if ($nom) {
                $row2 = $nom->fetch(PDO::FETCH_ASSOC);
                echo '<p>Votre note pour le film ' . $row2['nom'] . ' : ' . str_repeat('★', $note) . '</p>';
                echo '<p>Votre Critique : ' . $row['critique'] . '</p>';
            } else {
                echo '<p>Rédiger ma première critique.</p>';
                echo '<button>Votre avis compte! Partagez vos expériences, vos coups de cœur ou vos flops avec la communauté</button>';
            }
        }
    } else {
        echo '<p>Rédiger ma première critique.</p>';
        echo '<button>Votre avis compte! Partagez vos expériences, vos coups de cœur ou vos flops avec la communauté</button>';
    }
    
?>

        <div class="vertical-line"></div>
    </div>
</body>
</html>
