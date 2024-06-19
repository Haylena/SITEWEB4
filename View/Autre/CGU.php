<?php header('Content-Type: text/html; charset=utf-8');
require_once '../../Model/Database.php';
require_once '../../Model/CGUModel.php';
require_once '../../Controlleur/CGUControlleur.php';
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8" />
    <title>Mentions Légales et CGU</title>
    <link rel="stylesheet" href="faq.css" />
</head>
<body>
    <div class="faq-container">
        <h2>Mentions Légales</h2>
        <div class="faq">
        <?php foreach ($mentionsList as $mention) { ?>
                <div class="faq-question" onclick="toggleAnswer('answer<?= $mention['id'] ?>')"><?= $mention['QUESTION'] ?></div>
                <div class="faq-answer" id="answer<?= $mention['id'] ?>"><?= $mention['REPONSE'] ?></div>
            <?php } ?>
        </div>
    </div>
    <h2>Conditions Générales d'Utilisation (CGU) </h2>
        <div class="faq">
        <?php foreach ($cguList as $cgu) { ?>
            <div class="faq-question" onclick="toggleAnswer('answer<?= $cgu['id'] ?>')"><?= $cgu['QUESTION'] ?></div>
            <div class="faq-answer" id="answer<?= $cgu['id'] ?>"><?= $cgu['REPONSE'] ?></div>
        <?php } ?>
        </div>
    </div>
    

    <script>
        function toggleAnswer(answerId) {
            var answer = document.getElementById(answerId);
            if (answer.style.display === "block") {
                answer.style.display = "none";
            } else {
                answer.style.display = "block";
            }
        }
    </script>
</body>


