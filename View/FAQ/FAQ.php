<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8" />
    <title>FAQ Cinéma</title>
    <link rel="stylesheet" href="faq.css" />
</head>
<body>
<?php
require_once __DIR__ . '/../../Model/Database.php';
require_once __DIR__ . '/../../Model/FAQModel.php';

include __DIR__ . "/../Autre/menu_haut.php";
?>
    <div class="faq-container">
        <h2>FAQ - Cinéma</h2>
        <div class="faq">
        <?php
            foreach (getFaqList() as $faq) {
                echo '<div class="faq-question" onclick="toggleAnswer(\'answer' . $faq['id'] . '\')">' . $faq['question'] . '</div>';
                echo '<div class="faq-answer" id="answer' . $faq['id'] . '">' . $faq['answer'] . '</div>';
            }
        ?>
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
</html>

<?php

$bdd = null;
?>
