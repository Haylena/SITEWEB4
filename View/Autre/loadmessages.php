<?php
$bdd = new PDO('mysql:host=localhost;dbname=cinewave;charset=utf8', 'root', '');
$recupMessages = $bdd->query('SELECT * FROM forum ');
while ($message = $recupMessages->fetch()) {
    ?>
        <div class="message">
            <h4><?= $message['pseudo']; ?></h4>
            <p><?= $message['messages']; ?></p>
        </div>
    <?php

}
?>