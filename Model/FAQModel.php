<?php
require_once 'Database.php';

function getFaqList()
{
    $bdd = new PDO('mysql:host=localhost;dbname=cinewave;charset=utf8', 'root', '');
    if (!$bdd) {
        die("Connection failed: " . $bdd->errorInfo()[2]); 
    }

    $sql = "SELECT * FROM faq";
    $result = $bdd->query($sql);

    $faqList = [];

    if ($result->rowCount() > 0) {
        while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
            $faqList[] = $row;
        }
    }

    $bdd = null;
    return $faqList;
}
?>
