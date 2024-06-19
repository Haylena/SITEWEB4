<?php
session_start();
$bdd = new PDO('mysql:host=localhost;dbname=cinewave;charset=utf8', 'root', '');




if(isset($_POST['envoyer'])){
    $message = htmlspecialchars($_POST['message']);
    $insererMessage = $bdd->prepare('INSERT INTO message(message,id_destinateur,id_auteur)VALUES(?,?,?)');
    $insererMessage->execute(array($message, $_GET['id'], $_SESSION['id']));
}

?>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Message privée</title>
    <meta charset="utf-8" />
</head>
<body>
    <form method="POST" action="">
        <textarea name="message"></textarea>
        <br/><br/>
        <input type="submit" name="envoyer" />
    </form>

    <section id="message">
        <?php 
            $recupMessages=$bdd->prepare('SELECT * FROM message WHERE id_auteur =? AND id_destinateur=? OR id_auteur=? AND id_destinateur= ? ');
            $recupMessages->execute(array($_SESSION['id'],$_GET['id'],$_GET['id'],$_SESSION['id']));
            while($message = $recupMessages->fetch()){
                if ($message['id_destinateur'] == $_SESSION['id']){
                    ?>
                    <p style="color:red;":><?= $message['message']; ?></p>
                    <?php
                }elseif($message['id_destinateur']==$_GET['id']){
                    ?>
                    <p style="color:blue;" :><?= $message['message']; ?></p>
                    <?php
                            }
        }
        ?>
        

    </section>
</body>
</html>
