<?php
session_start();
$bdd = new PDO('mysql:host=localhost;dbname=cinewave;charset=utf8', 'root', '');

if (!isset($_SESSION['mot_de_passe'])) {
    header('Location: connexion.php');
    exit();
}

if (isset($_GET['id']) && !empty($_GET['id'])) {
    $id_client = $_GET['id'];

    $bannirUser = $bdd->prepare('UPDATE users SET type = -1 WHERE id_client = ?');
    $bannirUser->execute(array($id_client));

    header('Location: admin_membres.php');
    exit();
} else {
    echo "L'identifiant n'a pas été correctement fourni.";
}
?>
