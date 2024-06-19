<?php
require_once __DIR__ .  '/../../Model/Database.php';
require_once __DIR__ . '/../../Model/AdminModel.php';
require_once __DIR__ . '/../../Controlleur/AdminControlleur.php';
include __DIR__ . "/../Autre/menu_haut.php";
?>

<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="admin_membres.css">
    <title>Document</title>
</head>

<body>
    <div class="ban">
        <br />
        <br />
        <br />
        <br />
        <form class="search-form" method="get" action="../Autre/recherche_personne.php">
            <label for="search">Rechercher :</label>
            <input type="text" id="search" name="search" placeholder="Nom de l'utilisateur" />
            <input type="submit" value="Rechercher" />
        </form>

        <?php
        $recupUser = $bdd->query('SELECT * FROM users');
        while ($user = $recupUser->fetch()) {
            if ($user['type'] == -1) {
                echo "<p>L'utilisateur " . $user['nom_utilisateur'] . " est banni</p>";
            } else {
            echo "<p>" . $user['id_client'] . $user['nom_utilisateur'] . "<a href='Admin_bannir.php?id=" . $user['id_client'] . "' style='color: red; text-decoration:none;'> Bannir le membre</a></p>";
}
        }
        ?>
    </div>
    <div class="back-button">
        <button onclick="goBack()">Retour</button>

        <script>
            function goBack() {
                window.history.back();
            }
        </script>
    </div>
</body>
</html>
