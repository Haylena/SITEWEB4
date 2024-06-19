<?php
session_start();

$bdd = new PDO('mysql:host=localhost;dbname=cinewave;charset=utf8', 'root', '');
?>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cinéwave</title>
    <link rel="website icon" href="../../image/icon.png">
    <link rel="stylesheet" href="StyleSheet1.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="../../js/validation.js"></script>
</head>
<body>
<?php
require_once __DIR__ . '/../../Model/Database.php';
require_once __DIR__ . '/../../Model/UserModel.php';
?>
    <header>
        <div class="logo">
            <p><span>Ciné</span>Wave</p>
        </div>
        <ul class="menu">
            <li><a href="../Accueil/page_accueil_test.php">Accueil</a></li>
            <li><a href="../Cinema/indexcinema.php">Catalogue</a></li>
            <li><a href="../FAQ/FAQ.php">FAQ</a></li>
            <li> <?php if (isset($_SESSION['nom_utilisateur'])) { ?>
                    <div class="logout">
                        <form method="POST" action="../../Controlleur/UserControlleur.php">
                            <input class="fa fa-sign-out" type="submit" value="logout" name="logout">
                        </form>
                    </div>
            <?php } else { ?>
                    <a id="login" href="../Connexion/connexion.php"><i class="fa fa-sign-in"></i> Login</a>
            <?php } ?>
            </li>
            <li>
                <div class="user">
                    <?php if (isset($_SESSION['nom_utilisateur']))
                        echo $_SESSION['nom_utilisateur'] . '<a href="../Compte/films_envie.php">&nbsp;&nbsp;Parametre </a>'; ?>
                </div>
            </li>
            <?php
            if (isset($_SESSION['id_client'])) {
                $database = new Database();
                $userModel = new UserModel($database);

                $currentUser = $userModel->getUser($_SESSION['id_client']);

                if ($currentUser['type'] === 1) {
                    echo '<li><a href="../Admin/dashbord_admin.php">Administration</a></li>';
                }
            }
                ?>
            </header>






