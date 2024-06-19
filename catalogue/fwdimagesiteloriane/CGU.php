<?php header('Content-Type: text/html; charset=utf-8');
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
            <?php
            // Connectez-vous � votre base de donn�es
            $bdd = new PDO('mysql:host=localhost;dbname=cinewave;charset=utf8', 'root', '');

            // V�rifiez la connexion
            if (!$bdd) {
                die("Connection failed: " . $bdd->errorInfo()[2]); // Affiche le message d'erreur
            }

            // R�cup�rez les donn�es depuis la base de donn�es
            $sql = "SELECT * FROM cgu";
            $result = $bdd->query($sql);

            // Affichez les donn�es dynamiquement
            while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
                echo '<div class="faq-question" onclick="toggleAnswer(\'answer' . $row['id'] . '\')">' . $row['QUESTION'] . '</div>';
                echo '<div class="faq-answer" id="answer' . $row['id'] . '">' . $row['REPONSE'] . '</div>';
            }

            // Fermez la connexion � la base de donn�es
            $bdd = null;
            ?>
        </div>
    </div>
    <h2>Conditions Générales d'Utilisation (CGU) </h2>
        <div class="faq">
            <div class="faq-question" onclick="toggleAnswer('answer5')">1. Objet :</div>
            <div class="faq-answer" id="answer5">Les présentes conditions régissent l'utilisation du site Cinewaves.</div>

            <div class="faq-question" onclick="toggleAnswer('answer6')">2. Utilisation du site :</div>
            <div class="faq-answer" id="answer6"> Vous vous engagez à utiliser ce site conformément à la législation en vigueur et à ces CGU.
                Il est interdit d'utiliser ce site à des fins illégales ou de violer les droits d'autrui.
                Vous ne devez pas perturber le fonctionnement normal du site ni accéder à des parties du site auxquelles vous n'avez pas été autorisé.
             </div>

            <div class="faq-question" onclick="toggleAnswer('answer7')">3. Accès au site :</div>
            <div class="faq-answer" id="answer7">Le site est accessible gratuitement à tout utilisateur disposant d'un accès à internet. Tous les coûts afférents à l'accès au site, que ce soient les frais matériels, logiciels ou d'accès à internet sont exclusivement à la charge de l'utilisateur.</div>

            <div class="faq-question" onclick="toggleAnswer('answer8')">4. Propriété intellectuelle :</div>
            <div class="faq-answer" id="answer8">  Les contenus de ce site, incluant, sans s'y limiter, les images, textes, graphiques et sons, sont la propriété exclusive de l'éditeur et sont protégés par les lois sur la propriété intellectuelle.</div>

            <div class="faq-question" onclick="toggleAnswer('answer9')">5. Responsabilités :</div>
            <div class="faq-answer" id="answer9">L'éditeur ne sera pas responsable des dommages directs ou indirects causés au matériel de l'utilisateur, lors de l'accès au site Cinewaves, et résultant soit de l'utilisation d'un matériel ne répondant pas aux spécifications indiquées, soit de l'apparition d'un bug ou d'une incompatibilité.</div>

            <div class="faq-question" onclick="toggleAnswer('answer10')">6. Modification des conditions :</em> </div>
            <div class="faq-answer" id="answer10">Cinewaves se réserve le droit de modifier les présentes conditions d'utilisation à tout moment et sans préavis. L'utilisateur est donc invité à les consulter régulièrement.</div>
           
            <div class="faq-question" onclick="toggleAnswer('answer11')">7. Droit applicable et juridiction compétente :</em> </div>
            <div class="faq-answer" id="answer11"> Les présentes conditions sont régies par le droit français. En cas de litige non résolu à l'amiable, les tribunaux français seront seuls compétents.</div>
            
            <div class="faq-question" onclick="toggleAnswer('answer12')">8. Contact :</em></div>
            <div class="faq-answer" id="answer12"> Pour toute question ou demande d'information concernant le site, ou tout signalement de contenu ou d'activités illicites, l'utilisateur peut contacter l'éditeur à l'adresse email Cinewaves@gmail.com ou via le formulaire de contact disponible sur le site.</div>
            
            
            
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


