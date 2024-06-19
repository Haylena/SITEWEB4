<!DOCTYPE HTML>
<html>
<head>
    <?php
        require_once __DIR__ . '/../../Controlleur/ConnexionControlleur.php';
        require_once __DIR__ . '/../../Model/ConnexionModel.php';

    ?>
    <title>Espace de connexion</title>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="pcon.css" />
</head>
<body>

    <section id="reservation">
        <form method="POST" action="../../Controlleur/UserControlleur.php" align="center">
            <label> votre pseudo</label>
            <input type="text" name="nom_utilisateur" />
            <label> votre mot de passe</label>
            <input type="password" name="mot_de_passe" />
            <br />
            <input type="submit" name="login"/>
            <br />
            <a href="..\Connexion\page_inscription.php">Pas encore incrit?</a>

        </form>

        <?php if (isset($errorMessage)) { ?>
            <p><?php echo $errorMessage; ?></p>
        <?php } ?>
        <script>
            
        $(document).ready(function() {
             $("#login").addClass("active");
          });
        </script>
    </section>

</body>
</html>
