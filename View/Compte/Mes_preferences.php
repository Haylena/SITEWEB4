<?php
require_once __DIR__ . '/../../Model/UserModel.php';
session_start();

$bdd = new PDO('mysql:host=localhost;dbname=cinewave;charset=utf8', 'root', '');

$userModel = new UserModel($bdd);

$currentUser = $userModel->getUser($_SESSION['id_client']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="Mes_preferences.css">
</head>
<header>
    <div class="logo">
        <a href="#">
            <img src="../Images/logo_cinewaves.png" alt="Logo Cinéwaves">
        </a>
    </div>
    <nav>
        <ul>
            <li><a href="#">Actualités</a></li>
            <li><a href="#">Cinéma</a></li>
        </ul>
    </nav>
    <div class="search">
        <input type="text" placeholder="Rechercher un film, une salle...">
    </div>
</header>
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
        <h1 class="move-left">MES PREFERENCES</h1>
        <div class="tabs">
            <ul>
                <a href="#" class="tab"><li>PROFIL</li></a>
                <a href="#" class="tab"><li>NEWSLETTER</li></a>
            </ul>
        </div>
        <div class="content">
            <form action="../../Controlleur/UserControlleur.php" method="post">
                <label for="pseudo">Pseudo:</label>
                <input type="text" id="pseudo" name="pseudo" value="<?php echo $currentUser['nom_utilisateur']; ?>" readonly>

                <label for="email">Email:</label>
                <input type="email" id="email" name="email" value="<?php echo $currentUser['email']; ?>" readonly>

                <label for="genre">Genre:</label>
                <input type="text" id="genre" name="genre" value="<?php echo empty($currentUser['genre']) ? 'AUCUN' : $currentUser['genre']; ?>" readonly>
                
                <button type="button" id="modifier" onclick="enableEdit()">Modifier</button>
                
                <input type="submit" id="envoyer" name="modifier" value="Enregistrer" style="display: none;">
            </form>

            <script>
                function enableEdit() {
                    document.getElementById('pseudo').readOnly = false;
                    document.getElementById('email').readOnly = false;
                    document.getElementById('genre').readOnly = false;
                    document.getElementById('modifier').style.display = 'none'
                    document.getElementById('envoyer').style.display = 'block';
                }
            </script>
        </div>
    </div>

    <div class="vertical-line"></div>
</body>
</html>
