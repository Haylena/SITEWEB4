<?php
include "menu_haut.php";

$bdd = new PDO('mysql:host=localhost;dbname=cinewave;charset=utf8', 'root', '');
if (!$bdd) {
    die("Connection failed: " . $bdd->errorInfo()[2]); 
}

$sql = "SELECT * FROM faq";
$result = $bdd->query($sql);
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8" />
    <title>FAQ Cinéma</title>
    <link rel="stylesheet" href="faq.css" />
</head>
<body>
    <div class="faq-container">
        <h2>FAQ - Cin�ma</h2>
        <div class="faq">
            <?php
            
            if ($result->rowCount() > 0) {
                while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
                    echo '<div class="faq-question" onclick="toggleAnswer(\'answer' . $row['id'] . '\')">' . $row['question'] . '</div>';
                    echo '<div class="faq-answer" id="answer' . $row['id'] . '">' . $row['answer'] . '</div>';
                }
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
