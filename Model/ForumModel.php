<?php

require_once 'Database.php';

function insertMessage($pseudo, $messages)
{
    $bdd = new PDO('mysql:host=localhost;dbname=cinewave;charset=utf8', 'root', '');

    $insererMessage = $bdd->prepare('INSERT INTO forum(pseudo, messages) VALUES(?, ?)');
    if (!$insererMessage) {
        echo "\nPDO::errorInfo():\n";
        print_r($bdd->errorInfo());
    }
    $insererMessage->execute(array($pseudo, $messages));

    $bdd = null;
}

function getMessages()
{
    $bdd = new PDO('mysql:host=localhost;dbname=cinewave;charset=utf8', 'root', '');

    $sql = "SELECT * FROM forum ORDER BY id DESC";
    $result = $bdd->query($sql);

    $messages = [];

    if ($result) {
        while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
            $messages[] = $row;
        }
    }

    $bdd = null;
    return $messages;
}
?>
