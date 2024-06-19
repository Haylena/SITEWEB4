<?php
session_start();
$bdd = new PDO('mysql:host=localhost;dbname=messages_prives;charset=utf8', 'root', '');
if(!$_SESSION['pseudo']){
    header('Location:connexion.php');
}

?>

<!DOCTYPE HTML>
<html>
<head>
    <title>Les utlisateur</title>
    <meta charset="utf-8" />
</head>
<body>
    <?php
        $recupUser = $bdd->query('SELECT * FROM users ');
        while($user=$recupUser->fetch()){
            ?>
            <a href="message.php?id=<?php echo $user['id']; ?>">
                 <?php echo $user['pseudo']; ?></a>
            <a/>
            
            <?php 
        }
        ?>



