<?php
session_start();
$bdd = new PDO('mysql:host=localhost;dbname=cinewave;charset=utf8', 'root', '');

if (!isset($_SESSION['mot_de_passe'])) {
    header('Location: connexion.php');
    exit();
}

if (isset($_GET['id']) && !empty($_GET['id'])) {
    $id_client = $_GET['id'];

    // Utilisez une requête préparée pour éviter les injections SQL
    $bannirUser = $bdd->prepare('DELETE FROM users WHERE id_client = ?');
    $bannirUser->execute(array($id_client));

    header('Location: amembres.php');
    exit();
} else {
    echo "L'identifiant n'a pas été correctement fourni.";
}
?>
