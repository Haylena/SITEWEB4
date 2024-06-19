<?php
include __DIR__ . "/../Autre/menu_haut.php";
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="page_admin.css">
    
    <title>Votre Titre</title>
</head>
<body>
    <br />
    <br />
    <br />
    <div class="personne">
        <a href="admin_membres.php" class="lien-personnalise">Afficher tous les membres</a>
        <a href="../Forum/GestionForum.php" class="lien-personnalise">Gestion du forum</a>
    </div>

    <div class="back-button">
        <button onclick="goBack()">Retourner à la page précédente</button>

        <script>
            function goBack() {
                window.history.back();
            }
        </script>
    </div>
</body>
</html>

