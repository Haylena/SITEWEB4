<?php
session_start();
require_once __DIR__ . '/../Model/GestionForumModel.php';
require_once __DIR__ . '/../Model/Database.php';

if (!isset($_SESSION['id_client']) || empty($_SESSION['id_client'])) {
    header('Location: connexion.php');
    exit();
}

if (isset($_POST['envoie'])) {
    $titre = isset($_POST['titre']) ? $_POST['titre'] : '';
    $contenue = isset($_POST['description']) ? $_POST['description'] : '';

    if (!empty($titre) && !empty($contenue)) {
        // Call a function in the model to handle message sending
        sendMessage($titre, $contenue);
    } else {
        $errorMessage = "Veuillez compléter tous les champs";
    }
}

?>
