<?php

session_start();
$bdd = new PDO('mysql:host=localhost;dbname=cinewave;charset=utf8', 'root', '');

if (!$_SESSION['mot_de_passe']) {
    header('Location: connexion.php');
}

?>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Afficher les membres</title>
</head>
<body>
    <?php
        $recupUser=$bdd->query('SELECT * FROM users');
        while($user=$recupUser->fetch()){
            ?>
            <p><?= $user['id_client'] ?><?=" "?><?= $user['nom_utilisateur'] ?><a href="abannir.php?id=<?= $user['id_client']; ?>" style="color: red; text-decoration:none;"> Bannir le membre</a></p>
            <?php

        }
        ?>


</body>
</html>