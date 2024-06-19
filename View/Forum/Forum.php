<?php
require_once __DIR__ . '/../../Model/Database.php';
require_once __DIR__ . '/../../Model/ForumModel.php';
require_once __DIR__ . '/../../Controlleur/ForumControlleur.php';
include "../Autre/menu_haut.php";
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
    <?php
    if (isset($messages) && is_iterable($messages)) {
        foreach ($messages as $message) {
            echo '<div class="message">' . $message['pseudo'] . ': ' . $message['messages'] . '</div>';
        }
    } else {
        echo '<p>No messages available.</p>';
    }
    ?>
    </section>
    <?php if (isset($errorMessage)) { ?>
        <p><?php echo $errorMessage; ?></p>
    <?php } ?>
</body>

</html>