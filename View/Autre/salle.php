<?php
// Inclure les fichiers n�cessaires (ajuster les noms des fichiers en fonction de votre structure)
require_once __DIR__ . '/../../Model/Database.php';
require_once __DIR__ . '/../../Model/SalleModel.php'; // Vous devez cr�er ce fichier pour g�rer les op�rations li�es aux salles
require_once __DIR__ . '/../../Controlleur/SalleController.php'; // Vous devez cr�er ce fichier pour g�rer les op�rations li�es aux salles
include __DIR__ . "/../Autre/menu_haut.php";
// Initialisez la connexion � la base de donn�es
$database = new Database();
$connexion = $database->connexion;

// Initialisez le contr�leur de salle
$salleController = new SalleController($connexion);

// Obtenez la liste des salles depuis la base de donn�es
$salles = $salleController->getSalles(); // Vous devez impl�menter cette m�thode dans votre SalleController

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Liste des Salles</title>
    <br />
    <br />
    <br />
    <br />
    <br />
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        .salle-button {
            margin-top: 100px;
            width: 100px;
            height: 100px;
            margin: 10px;
            border: 2px solid #ccc;
            border-radius: 8px;
            background-color: #f0f0f0;
            font-size: 16px;
            cursor: pointer;
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
</head>
<body>
    <h1>Liste des Salles</h1>

    <div>
        <?php
        // Afficher un bouton pour chaque salle
        while ($salle = $salles->fetch(PDO::FETCH_ASSOC)) {
            $salleId = $salle['id_salle'];
            $nomSalle = $salle['nom_salle'];
            ?>
            <button class="salle-button" onclick="redirectToSalle(<?php echo $salleId; ?>)"><?php echo $nomSalle; ?></button>
            <?php
        }
        ?>
        ?>

        <script>
            // Rediriger vers la page sp�cifique de la salle lorsqu'un bouton est cliqu�
            function redirectToSalle(salleId) {
                window.location.href = 'sallevue.php?salle_id=' + salleId; // Vous devrez cr�er une page sallevue.php pour afficher les d�tails de la salle
            }
        </script>
    </div>
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
