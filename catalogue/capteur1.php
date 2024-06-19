<?php
session_start();

$bdd = new PDO('mysql:host=localhost;dbname=messages_prives;charset=utf8', 'root', '');
?>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cin�wave</title>
    <link rel="stylesheet" href="StyleSheet1.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="js/validation.js"></script>
</head>
<body>

    <header>
        <div class="logo">
            <p><span>Cin�</span>Wave</p>
        </div>
        <ul class="menu">
             <li><a href="pageacuilletest.php">Acceuil</a></li>
            <li><a href="indexcinema.html">catalogue</a></li>
            <li><a href="FAQ.php">FAQ</a></li>
                <a id="home" href="#"><i class="fa fa-home"></i> </a>
                <li> <?php if (isset($_SESSION['pseudo'])) { ?>
                        <div class="logout">
                            <a href="deco.php"><i class="fa fa-sign-out"></i> Logout</a>
                        </div>
                <?php } else { ?>
                        <a id="login" href="connexion.php"><i class="fa fa-sign-in"></i> Login</a>
                <?php } ?>
                <div class="user">
                    <?php if (isset($_SESSION['pseudo']))
                        echo $_SESSION['pseudo'] . '<a href="Website\View\films_envie.php">&nbsp;&nbsp;Parametre </a>'; ?>
                </div></li>
            </header>








<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Places de Cinéma et Préférences Sonores</title>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
<style>
  body {
    font-family: 'Poppins', sans-serif;
    background-color: white;
    margin: 0;
    padding: 20px;
    color: #333;
    line-height: 1.6;
  }
  .container {
    display: flex;
    justify-content: center;
    align-items: flex-start;
    margin-top: 80px;
  }
  .cinema-layout {
    flex: 50%;
    text-align: center;
  }
  .legend-container {
    flex: 50%;
    padding-left: 20px;
    margin-top: 100px; /* Augmentée à 50px */
  }
  .legend {
    display: flex;
    align-items: center;
    margin-bottom: 15px;
    padding: 10px;
    background: #f9f9f9;
    border-left: 5px solid transparent;
    transition: all 0.3s ease;
  }
  .legend:hover {
    background: #f0f0f0;
    border-left-color: #555;
    cursor: pointer;
  }
  .color-box {
    width: 20px;
    height: 20px;
    margin-right: 10px;
    box-shadow: 0 2px 4px rgba(0,0,0,0.2);
  }
  .black { background-color: #000000; }
  .red { background-color: #FF0000; }
  .orange { background-color: #FFA500; }
  .yellow { background-color: #FFFF00; }
  .light-green { background-color: #90EE90; }
  .green { background-color: #008000; }
  p {
    margin: 0;
    font-weight: 400;
    font-size: 0.95em;
  }
  h1 {
    text-align: center;
    font-weight: 600;
    margin-bottom: 30px;
  }
</style>
</head>
<body>

<h1 style="margin-top: 100px; ">Choisissez votre siège idéal selon votre préférence sonore</h1>

<div class="container">
  <div class="cinema-layout">
    <img src="https://www.onefm.ch/wp-content/uploads/2019/01/meilleurs-places-salle-cinema-trois-colonnes-600x600.png" alt="Schéma des places de cinéma" style="max-width:100%;height:auto;">
  </div>
  <div class="legend-container">
    <!-- Les légendes pour expliquer les couleurs -->
    <div class="legend">
      <div class="color-box black"></div>
      <p>Minimum de son (idéal pour les très sensibles)</p>
    </div>
    <div class="legend">
      <div class="color-box red"></div>
      <p>Beaucoup de son (pour les amateurs d'action intense)</p>
    </div>
    <div class="legend">
      <div class="color-box orange"></div>
      <p>Un peu moins de son (pour une expérience équilibrée)</p>
    </div>
    <div class="legend">
      <div class="color-box yellow"></div>
      <p>Son modéré (pour ceux qui préfèrent un volume moyen)</p>
    </div>
    <div class="legend">
      <div class="color-box light-green"></div>
      <p>Peu de son (pour les personnes sensibles au son)</p>
    </div>
    <div class="legend">
      <div class="color-box green"></div>
      <p>Meilleur son (expérience sonore optimale)</p>
    </div>
  </div>
</div>

</body>
</html>
