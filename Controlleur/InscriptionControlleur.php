<?php
session_start();
require_once __DIR__ . '/../Model/InscriptionModel.php';
require_once __DIR__ . '/../Model/Database.php';

if (isset($_POST['valider'])) {
    $nom_utilisateur = htmlspecialchars($_POST['nom_utilisateur']);
    $email = htmlspecialchars($_POST['email']);
    $nom = htmlspecialchars($_POST['nom']);
    $prenom = htmlspecialchars($_POST['prenom']);
    $mot_de_passe = htmlspecialchars($_POST['mot_de_passe']);
    $mot_de_passe2 = htmlspecialchars($_POST['mot_de_passe2']);

    $inscriptionResult = registerUser($nom_utilisateur, $email, $nom, $prenom, $mot_de_passe, $mot_de_passe2);

    if ($inscriptionResult['success']) {
        $_SESSION['nom_utilisateur'] = $nom_utilisateur;
        $_SESSION['mot_de_passe'] = $mot_de_passe;
        $_SESSION['id_client'] = $inscriptionResult['id_client'];

        header('Location: ../View/Accueil/page_accueil_test.php');
        exit();
    } else {
        $errorMessage = $inscriptionResult['message'];
    }
}
?>
