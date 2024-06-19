<?php

require_once __DIR__ . '/../Model/Database.php';
require_once __DIR__ . '/../Model/ForumModel.php';

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


if (isset($_POST['valider'])) {
    if (!empty($_POST['pseudo']) and !empty($_POST['messages'])) {
        $pseudo = htmlspecialchars($_POST['pseudo']);
        $messages = nl2br(htmlspecialchars($_POST['messages']));

        insertMessage($pseudo, $messages);
    } else {
        $errorMessage = "Veuillez compléter tous les champs";
    }
}

$messages = getMessages();
require_once __DIR__ .  '/../View/Forum/Forum.php';
?>
