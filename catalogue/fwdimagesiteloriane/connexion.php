<?php
session_start();

$bdd = new PDO('mysql:host=localhost;dbname=cinewave;charset=utf8', 'root', '');

if (isset($_POST['valider'])) {
    if (!empty($_POST['nom_utilisateur']) && !empty($_POST['mot_de_passe'])) {

        $recupUser = $bdd->prepare('SELECT * FROM users WHERE nom_utilisateur = ? AND mot_de_passe = ?');
        $recupUser->execute(array($_POST['nom_utilisateur'], $_POST['mot_de_passe']));

        if ($recupUser->rowCount() > 0) {
            $userData = $recupUser->fetch(PDO::FETCH_ASSOC);

            $_SESSION['nom_utilisateur'] = $_POST['nom_utilisateur'];
            $_SESSION['mot_de_passe'] = $_POST['mot_de_passe'];
            $_SESSION['id'] = $userData['id'];

            if ($userData['type'] == 0) {
                header('Location: pageacuilletest.php');
                exit();
            } elseif ($userData['type'] == 1) {
                header('Location: pageadmin.php');
                exit();
            }
        } else {
            echo "Aucun utilisateur trouvé";
        }
    } else {
        echo "Entrez votre pseudo et mot de passe";
    }
}
?>





<!DOCTYPE HTML>
<html>
<head>
    <title>espace de connexion</title>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="pcon.css" />
</head>
<body>

    <section id="reservation">
        <form method="POST" action="" align="center">
            <label> votre pseudo</label>
            <input type="text" name="nom_utilisateur" />
            <label> votre mot de passe</label>
            <input type="password" name="mot_de_passe" />
            <br />
            <input type="submit" name="valider" />
            <br />
            <a href="pagedinscription.php">Pas encore incrit?</a>

        </form>
        <script>
        $(document).ready(function() {
             $("#login").addClass("active");
          });
        </script>
    </section>

</body>
</html>




<!--
<!DOCTYPE HTML>
<html>
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Cin�wave</title>
    <link rel="stylesheet" href="pcon.css" />
</head>
    <section id="reservation">
            <h4 class="mini_title">Connexion</h4>
            <h2 class="title">Connexion</h2>
            <form method="POST" action="" align="center">
                <label> votre pseudo</label>
                <input type="text" name="pseudo" />
                <label> votre mot de passe</label>
                <input type="text" name="password" />
                

                <input type="submit" value="valider" />

            </form>
    </section>

    
</html>
-->