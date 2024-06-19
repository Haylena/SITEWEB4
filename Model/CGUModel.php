<?php

require_once 'Database.php';

function getCGUList($bdd)
{
    $sql = "SELECT * FROM cgu";
    $result = $bdd->query($sql);

    $cguList = [];

    while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
        $cguList[] = $row;
    }

    return $cguList;
}

function getMentionsList($bdd)
{
    $sql = "SELECT * FROM mentions_legales";
    $result = $bdd->query($sql);

    $mentionsList = [];

    while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
        $mentionsList[] = $row;
    }

    return $mentionsList;
}
?>
