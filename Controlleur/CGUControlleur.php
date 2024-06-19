<?php
session_start();
require_once '../Model/Database.php';
require_once '../Model/CGUModel.php';

// Connect to your database
$bdd = new PDO('mysql:host=localhost;dbname=cinewave;charset=utf8', 'root', '');

// Check the connection
if (!$bdd) {
    die("Connection failed: " . $bdd->errorInfo()[2]); // Display the error message
}

// Retrieve data from the database
$cguList = getCGUList($bdd);
$mentionsList = getMentionsList($bdd);

$bdd = null;
?>
