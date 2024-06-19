<?php
require_once __DIR__ . '/../../Model/Database.php';
require_once __DIR__ . '/../../Model/GestionForumModel.php';
require_once __DIR__ . '/../../Controlleur/GestionForumControlleur.php';
?>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title></title>
    <meta charset="utf-8" />
</head>
<body>
<?php include_once __DIR__ . '/../Autre/menu_haut.php' ?>
    <form method="POST" action="../../Controlleur/GestionForumControlleur.php">
        <input type="text" name="titre" />
        <br />
        <textarea name="description"></textarea>
        <br />
        <input type="submit" name="envoie" />
    </form>
    <?php if (isset($errorMessage)) { ?>
        <p><?php echo $errorMessage; ?></p>
    <?php } ?>
</body>
</html>