<?php
session_start();
if (!$_SESSION['pseudo']) {
    header('Location:connexion.php');
}

?>



<!DOCTYPE html>
<html>
<link rel="stylesheet" href=" accueil.css" />
<title>Mon Compte</title>
<body>
    <aside id="menu">
        <ul>
            <li><a href="accueilt.php">Accueil</a></li>
            <li><a href="info.html">Informations personnelles</a></li>
            <li><a href="d&c/Compte.html">Donn�es et confidentialit�</a></li>
            <li><a href="#">S�curit�</a></li>
            <li><a href="#">Contacts et partage</a></li>
            <li><a href="#">A propos</a></li>
        </ul>

    </aside>

    <div id="content">
        <h1>Bienvenue </h1>
        <div class="two_ligne_text">
            <p>G�rez vos informations, ainsi que la confidentialit� et la s�curit� de vos donn�es <br /> pour profiter aux mieux des services Cin�waves</p>
        </div>
    </div>
    <div class="container">
        <div class="box1">
            <h3>Confidentialit� et <br />Personnalisation</h3>
            <a href="#">
                <img src="../../Images/Image Confidentialit�.jpg" alt="S�curit�" />
            </a>
            <div class="text">
                <p>Consultez les donn�es de votre compte Cin�waves et selectionnez les informations � enregistrer pour am�liorer votre exp�rience du cin�ma.</p>
            </div>
        </div>
        <div class="box2">
            <h3>S�curit�</h3>
            <a href="#">
                <img src="../../Images/Image_Securite.jpg" alt="S�curit�" />
            </a>
            <div class="text">
                <p>Consulter notre politique de s�curit�.</p>
                <p>Renforcer votre compte gr�ce � la double authentification</p>
            </div>
        </div>
    </div>
    <div class="button-container">
        <div class="box3">
            <h3>Vous recherchez autre chose ?</h3>
            <ul>
                <li><button><a href="#">Recherchez dans votre compte Cin�waves </a></button><span class="decoration"></span></li>
                <li><button><a href="#">Affichez les options d'aides</a></button></li>
                <li><button><a href="#">Envoyez des commentaires </a></button></li>
            </ul>
        </div>
    </div>
</body>


</html>