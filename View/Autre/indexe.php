<?php

$bdd = new PDO('mysql:host=localhost;dbname=cinewave;charset=utf8', 'root', '');

include "menu_haut.php"
?>


<br />
<br />
<body>
    <br />
    <br />
    <br />
    <br />
    <?php
        $recupUser = $bdd->query('SELECT * FROM users ');
        while($user=$recupUser->fetch()){
            ?>
            <a href="message.php?id=<?php echo $user['id_client']; ?>">
                 <?php echo $user['nom_utilisateur']; ?></a>
            <a/>
            
            <?php 
        }
        ?>



