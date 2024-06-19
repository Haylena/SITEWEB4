<?php
session_start();
$bdd = new PDO('mysql:host=localhost;dbname=messages_prives;charset=utf8', 'root', '');
if (!$_SESSION['password']) {
    header('Location: connexion.php');
}
if(isset($_POST['envoie'])) {
    if (!empty($_POST['titre']) and !empty($_POST['contenue'])){
        
    }else{
        echo "Veulliez compl�ter tous les champs";
    }
?>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title></title>
    <meta charset="utf-8" />
</head>
<body>
    <form method="POST" action="">
        <input type="text" name="titre" />
        <br />
        <textarea name="description"></textarea>
        <br />
        <input type="submit" name="envoie" />
    </form>
</body>
</html>