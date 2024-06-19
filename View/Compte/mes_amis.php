<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="mes_amis.css">
</head>
<?php include "../Autre/menu_haut.php";
$bdd = new PDO('mysql:host=localhost;dbname=cinewave;charset=utf8', 'root', '');
?>
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
<?php

$query = $bdd->prepare("SELECT * FROM friends WHERE username_1 = '" . $_SESSION['nom_utilisateur'] . "' OR username_2 = '" . $_SESSION['nom_utilisateur'] . "'");
$query->execute();

$friends = $query->fetchall();

$query = $bdd->prepare("SELECT * FROM users WHERE nom_utilisateur != '" . $_SESSION['nom_utilisateur'] . "'");
$query->execute();

$users = $query->fetchall();
?>

    <div class="middle-side">
        <h1">MES AMIS</h1>

            <?php
            
            for ($i = 0; $i < sizeof($friends); $i++) {
                if ($friends[$i]["username_1"] == $_SESSION['nom_utilisateur']) {
                    echo $friends[$i]['username_2'];

                    if ($friends[$i]["is_panding"] == true) {
                        echo " en attente";
                    } else {
                        
                    }
                }
            }
            ?>


        <h2 >Demandes d'amis</h2>

        <h3>Autres utilisateurs</h3>
        <?php
            for ($i = 0; $i < sizeof($users); $i++) {
                echo $users[$i]['nom_utilisateur'] . '<br/>';
            }
        ?>
        </div>
    </div>

    <div class="vertical-line"></div>
</body>
</html>
