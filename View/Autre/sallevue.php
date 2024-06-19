<?php
// Inclure les fichiers n�cessaires
require_once __DIR__ . '/../../Model/Database.php';
require_once __DIR__ . '/../../Model/SalleModel.php';
require_once __DIR__ . '/../../Controlleur/SalleController.php';

// Initialisez la connexion � la base de donn�es
$database = new Database();
$connexion = $database->connexion;
include "menu_haut.php";
// Initialisez le contr�leur de salle
$salleController = new SalleController($connexion);

// Obtenez l'ID de la salle depuis les param�tres d'URL
if (isset($_GET['salle_id'])) {
    $salleId = $_GET['salle_id'];

    // Obtenez les d�tails de la salle
    $salle = $salleController->getSalleById($salleId);

    // Obtenez les capteurs de la salle
    $capteurs = $salleController->getCapteursBySalle($salleId);

    // Obtenez les valeurs du capteur
    $valeurs = $salleController->getValeurBySalle($salleId);
    $donneesCapteur = $valeurs->fetchAll(PDO::FETCH_ASSOC); // R�cup�rez les donn�es du capteur

    ?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        <title>Vue de la Salle</title>
        <style>
            body {
                font-family: Arial, sans-serif;
            }

        </style>
    </head>
<br />
<br />

    <body>
        <br />
        <br />
        <br />
        <br />
        <h1>VUE DE LA SALLE</h1>

        <?php
        // Affichez les d�tails de la salle
        echo '<h2>D�tails de la Salle :</h2>';
        echo '<p>Nom : ' . $salle['nom_salle'] . '</p>';
        echo '<p>Description : ' . $salle['description_salle'] . '</p>';

        // Affichez les informations du capteur
        echo '<h2>Information du Capteur :</h2>';
        echo '<ul>';
        while ($capteur = $capteurs->fetch(PDO::FETCH_ASSOC)) {
            echo '<li>Localisation : ' . $capteur['localisation'] . '</li>';
            echo '<li>Description : ' . $capteur['description'] . '</li>';
            // Ajoutez d'autres d�tails du capteur si n�cessaire
        }
        echo '</ul>';

        

        // Graphique des Mesures du Capteur
        echo '<h2>Graphique des Mesures du Capteur :</h2>';
        echo '<canvas id="sensorChart" width="400" height="200"></canvas>';

        // Donn�es pour le graphique
        echo '<script>';
        echo 'var sensorData = ' . json_encode($donneesCapteur) . ';';
        echo '</script>';
        ?>

        <script>
            // Cr�er un graphique avec Chart.js
            var labels = sensorData.map(function (valeur) {
                return valeur.id_mesure, valeur.heure_valeur ;
            });

            var data = sensorData.map(function (valeur) {
                return valeur.SPL;
            });

            var ctx = document.getElementById('sensorChart').getContext('2d');
            var myChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: labels,
                    datasets: [{
                        label: 'Niveau de Pression Sonore (SPL)',
                        data: data,
                        backgroundColor: 'rgba(75, 192, 192, 0.2)',
                        borderColor: 'rgba(75, 192, 192, 1)',
                        borderWidth: 1
                    }]
                },
                options: {
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });
        </script>
        <h1 style="margin-top: 100px; ">Choisissez votre si�ge id�al selon votre pr�f�rence sonore</h1>





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
          margin-top: 100px; /* Augment�e � 50px */
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

    .back-button {
        margin-top: 20px;
        text-align: center;
    }

        .back-button button {
            padding: 10px 20px;
            background-color: #333;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

            .back-button button:hover {
                background-color: red;
            }
        </style>





<div class="container">
  <div class="cinema-layout">
    <img src="https://www.onefm.ch/wp-content/uploads/2019/01/meilleurs-places-salle-cinema-trois-colonnes-600x600.png" alt="Sch�ma des places de cin�ma" style="max-width:100%;height:auto;">
  </div>
  <div class="legend-container">
    <!-- Les l�gendes pour expliquer les couleurs -->
    <div class="legend">
      <div class="color-box black"></div>
      <p>Minimum de son (id�al pour les tr�s sensibles)</p>
    </div>
    <div class="legend">
      <div class="color-box red"></div>
      <p>Beaucoup de son (pour les amateurs d'action intense)</p>
    </div>
    <div class="legend">
      <div class="color-box orange"></div>
      <p>Un peu moins de son (pour une exp�rience �quilibr�e)</p>
    </div>
    <div class="legend">
      <div class="color-box yellow"></div>
      <p>Son mod�r� (pour ceux qui pr�f�rent un volume moyen)</p>
    </div>
    <div class="legend">
      <div class="color-box light-green"></div>
      <p>Peu de son (pour les personnes sensibles au son)</p>
    </div>
    <div class="legend">
      <div class="color-box green"></div>
      <p>Meilleur son (exp�rience sonore optimale)</p>
    </div>
  </div>
</div>
        <br />
        <br />
        <br />
        <br />
        <div class="back-button">
            <button onclick="goBack()">Retour</button>

            <script>
            function goBack() {
                window.history.back();
            }
            </script>
        </div>
    </body>
    </html>

    <?php
} else {
    // G�rez le cas o� le param�tre d'ID de salle est manquant
    echo '<p>Param�tre d\'ID de salle manquant.</p>';
}
?>
