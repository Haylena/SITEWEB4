<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);



$bdd = new PDO('mysql:host=localhost;dbname=cinewave;charset=utf8', 'root', '');





if(isset($_POST['valider'])){
    if(!empty($_POST['pseudo']) and !empty($_POST['messages'])){
        $pseudo = htmlspecialchars($_POST['pseudo']);
        $messages = nl2br(htmlspecialchars($_POST['messages']));

        $insererMessage = $bdd->prepare('INSERT INTO forum(pseudo,messages) VALUES(?,?)');
        if (!$insererMessage) {
            echo "\nPDO::errorInfo():\n";
            print_r($bdd->errorInfo());
        }
        $insererMessage->execute(array($pseudo, $messages));

    }else{
        echo "Veulliez compléter tous les champs";
    }
}

?>

<?php
include "menu_haut.php";
?>
<!DOCTYPE HTML>
<html>
<head>
    <title>Forum</title>
    <meta charset="utf-8">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel="stylesheet" href="forum.css" />
</head>
<body>
    
    <section id="forumulaire">
    <form method="POST" action="" align="center">
        <label>Votre pseudo</label>
        <input type="text" name="pseudo">
        <br><br>
        <label>votre message</label>
        <textarea name="messages"></textarea>
        <br>
        <input type="submit" name="valider">
    </form>
    </section>
    <section id="message">
    <script>
        setInterval('load_messages()', 500);
        function load_messages() {
            $('#message').load('loadmessages.php')
        }
    </script>

    </section>
</body>



       










</html>