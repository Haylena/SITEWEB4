<?php

require_once 'Database.php';

function sendMessage($titre, $contenue)
{
    $bdd = new PDO('mysql:host=localhost;dbname=cinewave;charset=utf8', 'root', '');

    // Insert the message into the database
    $insertMessage = $bdd->prepare('INSERT INTO message(titre, contenue) VALUES(?, ?)');
    $insertMessage->execute([$titre, $contenue]);

    $bdd = null;
}
?>
