<?php
session_start();
$bdd = new PDO('mysql:host=localhost;dbname=cinewave;charset=utf8', 'root', '');
if(isset($_POST['valider'])){

    if(!empty($_POST['nom_utilisateur']) and !empty($_POST['mot_de_passe']) and !empty($_POST['mot_de_passe2'])){
        if ( $_POST['mot_de_passe'] == $_POST['mot_de_passe2']){
            $pseudo = htmlspecialchars($_POST['nom_utilisateur']);
            $password = htmlspecialchars($_POST['mot_de_passe']);
            $email= htmlspecialchars($_POST['email']);
            $nom = htmlspecialchars($_POST['nom']);
            $prenom = htmlspecialchars($_POST['prenom']);
            $insererMessage = $bdd->prepare('INSERT INTO users(nom_utilisateur,mot_de_passe,email,nom,prenom) VALUES(?,?,?,?,?)');


            $insererMessage->execute(array($pseudo, $password, $email, $nom, $prenom));

            if($insererMessage->rowCount()>0){
                $_SESSION['nom_utilisateur'] = $pseudo;
                $_SESSION['mot_de_passe'] = $password;
                $_SESSION['id_client'] = $insererMessage->fetch()['id_client'];

                header('Location: pageacuilletest.php');

            }
        }else{
            echo "Les mots de passe ne correspond pas";
        }
    }else{
        echo "Veuillez completez tous champs";
    }
}
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
        <form method="POST" action="" align="center">
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
    </section>

</body>
</html>