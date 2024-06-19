
    
<?php
$bdd = new PDO('mysql:host=localhost;dbname=cinewave;charset=utf8', 'root', '');
?>

<?php
include "../Autre/menu_haut.php";
require_once __DIR__ . '/../../Controlleur/DescriptionControlleur.php';
require_once __DIR__ . '/../../Model/DescriptionModel.php';
require_once __DIR__ . '/../../Model/Database.php';

$database = new Database();
$descriptionController1 = new DescriptionController1($database->connexion);
$affiche1 = $descriptionController1->displayAffiche1();
$affiche2 = $descriptionController1->displayAffiche2();
$affiche3 = $descriptionController1->displayAffiche3();
$rowAffiche1 = $affiche1->fetch(PDO::FETCH_ASSOC);
$imageFilm1 = base64_encode($rowAffiche1['affiches']);
$rowAffiche2 = $affiche2->fetch(PDO::FETCH_ASSOC);
$imageFilm2 = base64_encode($rowAffiche2['affiches']);
$rowAffiche3 = $affiche3->fetch(PDO::FETCH_ASSOC);
$imageFilm3 = base64_encode($rowAffiche3['affiches']);
?>
<!--
           
            
            
            <li><a href="connexion.php">Connexion</a></li>
 -->           
            
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Autre/StyleSheet1.css">
    
    <title>Document</title>
</head>
<body>
      
    

    <section id="accueil">
        <div class="left">
            <h4>Votre nouveau cinéma</h4>
            <h1>Capteur Cinéwave</h1>
            <p>“Le Cinéma Réinventé” : Découvrez une nouvelle dimension du cinéma avec notre site unique. Que vous recherchiez une expérience sonore intense ou adaptée à des besoins spécifiques, comme pour les personnes handicapées, nous avons la place parfaite pour vous. Notre catalogue en ligne vous permet de choisir facilement votre expérience cinématographique idéale.
</p>
            <button><a href="../Connexion/connexion.php">Essayez Maintenant ?!</a></button>
        </div>
        <div class="right">
            <img src="../../image/img1.jpg">
        </div>
    </section>

    

    <section id="Client">
        <h4 class="mini_title">Catalogue à la une</h4>
        <h2 class="title">Catalogue</h2>
        <div class="dishes">
            <div class="dish">
            <img src='data:image/jpeg;base64,<?php echo $imageFilm1 ?>' style="width:200px;  height=500px">
                <p>xxx</p>
                
            </div>
            <div class="dish">
            <img src='data:image/jpeg;base64,<?php echo $imageFilm2 ?>' style="width:200px;  height=500px">
                <p>xxx</p>
                <h2>Évaluation</h2>
                <a href="../Cinema/indexcinema.php">Apreçu performances</a>
            </div>
            <div class="dish">
            <img src='data:image/jpeg;base64,<?php echo $imageFilm3 ?>' style="width: 200px;  height=500px">
                <p>xxx</p>
                <h2>Évaluation</h2>
                <a href="../Cinema/indexcinema.php">Recommandation</a>
            </div>
            

        </div>
    </section>



    <section id="#about_us">
        <h4 class="mini_title"> Suis nous somme? </h4>
        <h2 class="title">Pourquoi notre visons du cinéma est spécial</h2>
        <div class="about">
            <div class="left">
                <img src="../../image/img1.jpg">
            </div>
            <div class="right">
                <h3></h3>
                <p></p>
                
                <button><a href="#">Plus?</a></button>
            </div>
        </div>
    </section>


    
    <section class="comment_section">
    <h4 class="mini_title">Comments</h4>
    <h2 class="title"> What People this about us</h2>
    <div class="comments">
        <div class="comment">
            <div>
                <img src="../../images/img1.png">
                <h4>Smith Johnson</h4>
            </div>
            <p> “Une Symphonie Visuelle et Sonore” : Nous comprenons l’importance du son dans votre expérience cinématographique. C’est pourquoi nous offrons des places spécialement conçues pour maximiser votre plaisir auditif. Que vous soyez un audiophile ou que vous ayez des besoins d’accessibilité, notre catalogue en ligne vous guide vers l’expérience parfaite.
</p>
        </div>
        <div class="comment">
            <div>
                <img src="../../images/img1.png">
                <h4>Smith Johnson</h4>
            </div>
            <p>“Le Cinéma pour Tous” : Notre mission est de rendre le cinéma accessible à tous. Notre site propose une sélection variée de films avec des options sonores adaptées à tous les besoins, y compris pour les personnes handicapées. Choisissez votre film, votre siège et préparez-vous à vivre une expérience cinématographique inégalée.
</p>
        </div>
        <div class="comment">
            <div>
                <img src="../../images/img1.png">
                <h4>Smith Johnson</h4>
            </div>
            <p>“Au Cœur du Son” : Plongez dans une expérience sonore sur mesure avec notre catalogue cinématographique en ligne. Choisissez votre siège en fonction de vos préférences sonores et profitez d’un son parfaitement adapté à votre expérience de visionnage, que vous soyez au centre de l’action ou dans une zone plus calme.
</p>
        </div>
    </div>
</section>

<section id="contact">
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />
    <style>
        #contact {
            margin: 0 auto 20px; /* Ajustez la valeur de la marge inférieure selon vos besoins */
        }

        #contact form {
            display: flex;
            flex-direction: column; /* Modifier ceci en "column" */
            width: 70%;
            margin: auto;
        }
            #contact h2 {
                text-align: center; /* Ajoutez cette ligne pour centrer le texte */
            }
        #contact form label {
            margin-bottom: 8px;
            font-size: 16px;
        }

        #contact form input,
        #contact form textarea {
            margin-bottom: 20px;
            padding: 15px;
            border: 1px solid #fff;
            border-radius: 4px;
            outline: none;
            background-color: #f2f2f2 !important; /* Ajouter !important pour forcer l'application */
        }

        #contact form textarea {
            resize: vertical;
        }

        #contact form input[type="submit"] {
            background-color: #fff;
            color: #f60c0c;
            cursor: pointer;
        }
    </style>
    <h2>Contactez-nous</h2>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Récupérer les données du formulaire
        $nom = htmlspecialchars($_POST["nom"]);
        $email = htmlspecialchars($_POST["email"]);
        $message = htmlspecialchars($_POST["message"]);

        // Traiter les données (vous pouvez ajouter une logique de traitement ici)
    
        // Exemple de traitement simple : afficher les données
        echo "<p>Merci, $nom, pour votre message ! Nous vous répondrons à l'adresse e-mail : $email.</p>";
    }
    ?>

    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <label for="nom">Nom :</label>
        <input type="text" id="nom" name="nom" required>

        <label for="email">Adresse e-mail :</label>
        <input type="email" id="email" name="email" required>

        <label for="message">Message :</label>
        <textarea id="message" name="message" rows="4" required></textarea>

        <input type="submit" value="Envoyer">
    </form>
</section>

<div id="forum-button">
    <style>
        #forum-button {
            text-align: center; /* Centre le bouton */
            margin-top: 20px; /* Ajoute un espace au-dessus du bouton */
        }

        #forum-button button {
            background-color: #f60c0c;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            font-size: 16px;
            cursor: pointer;
            text-decoration: none; /* Supprime le soulignement du lien */
            display: inline-block; /* Empêche le bouton de prendre la largeur complète */
        }

        #forum-button button:hover {
            background-color: #fff;
            color: #f60c0c;
        }
    </style>
    <button><a href="../Forum/Forum.php">En parler sur le Forum</a></button>
</div>
    <br />
                <br />
<br />
                <br />
<br />
                <br />
    
<?php include "../Autre/footer.php"; ?>

    <script>
        var small_menu = document.querySelector('.toggle_menu')
        var menu = document.querySelector('.menu')

        small_menu.onclick = function () {
            small_menu.classList.toggle('active');
            menu.classList.toggle('responsive');
        }
    </script>
    <script src="Script1.js"></script>
</body>
</html>


