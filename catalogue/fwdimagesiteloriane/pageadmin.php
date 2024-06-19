<?php
session_start();
if(!$_SESSION['mot_de_passe']){
    header('Location: connexion.php');
}

?>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Home</title>
</head>
<body>
    <a href="amembres.php">Afficher tous les membres</a>
    <a href="gestionforum.php">Afficher tous les membres</a>
</body>
</html>