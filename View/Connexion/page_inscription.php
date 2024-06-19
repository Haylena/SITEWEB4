<?php
require_once '../../Controlleur/InscriptionControlleur.php';
require_once '../../Model/Database.php';
require_once '../../Model/InscriptionModel.php';
?>

<!DOCTYPE HTML>
<html>
<head>
    <title>page d'inscrption</title>
    <meta charset="utf-8">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel="stylesheet" href="pcon.css" />
</head>
<body>
    

    <section id="reservation">
        <form method="POST" action="../../Controlleur/InscriptionControlleur.php" align="center">
            <label> votre nom d'utilisataur</label>
            <input type="text" name="nom_utilisateur" />
            <label> votre adresse mail</label>
            <input type="email" name="email" />
            <label> votre nom </label>
            <input type="text" name="nom" />
            <label> votre prénom</label>
            <input type="text" name="prenom" />

            <label> votre mot de passe</label>
            <input type="password" name="mot_de_passe" />
            <br />
            <label> Confirmation de votre mot de passe</label>
            <input type="password" name="mot_de_passe2" />
            <br />
            <input type="submit" name="valider" />
            <br />
            <a href="connexion.php">D�j� inscrit?</a>

        </form>
        <?php if (isset($errorMessage)) { ?>
            <p><?php echo $errorMessage; ?></p>
        <?php } ?>
        
    </section>

</body>
</html>