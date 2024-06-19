<?php

require_once 'Database.php';

$bdd = new PDO('mysql:host=localhost;dbname=cinewave;charset=utf8', 'root', '');

function registerUser($nom_utilisateur, $email, $nom, $prenom, $mot_de_passe, $mot_de_passe2)
{
    global $bdd;

    if (!empty($nom_utilisateur) && !empty($email) && !empty($nom) && !empty($prenom) && !empty($mot_de_passe) && !empty($mot_de_passe2)) {
        if ($mot_de_passe == $mot_de_passe2) {
            $insererMessage = $bdd->prepare('INSERT INTO users(nom_utilisateur, mot_de_passe, email, nom, prenom) VALUES(?,?,?,?,?)');
            $insererMessage->execute(array($nom_utilisateur, $mot_de_passe, $email, $nom, $prenom));

            if ($insererMessage->rowCount() > 0) {
                return ['success' => true, 'id_client' => $bdd->lastInsertId()];
            } else {
                return ['success' => false, 'message' => 'Erreur lors de l\'enregistrement'];
            }
        } else {
            return ['success' => false, 'message' => 'Les mots de passe ne correspondent pas'];
        }
    } else {
        return ['success' => false, 'message' => 'Veuillez compléter tous les champs'];
    }
}
?>
