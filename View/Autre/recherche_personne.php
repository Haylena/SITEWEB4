<?php
$bdd = new PDO('mysql:host=localhost;dbname=cinewave;charset=utf8', 'root', '');
include "menu_haut.php";
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Résultats de la recherche</title>

    <style>
        .search-results {
            margin-top: 80px; /* Ajustez la marge sup�rieure selon vos pr�f�rences */
        }

            .search-results p {
                margin: 10px 0; /* Ajustez la marge autour de chaque r�sultat selon vos pr�f�rences */
            }

        .back-button {
            margin-top: 20px; /* Ajustez la marge sup�rieure selon vos pr�f�rences */
        }

    </style>
</head>
<body>

    <?php
    if (isset($_GET['search']) && !empty($_GET['search'])) {
        $search = $_GET['search'];

        // Utilisez une requ�te pr�par�e pour �viter les attaques par injection SQL
        $query = $bdd->prepare("SELECT * FROM users WHERE nom_utilisateur LIKE :search");
        $query->bindValue(':search', '%' . $search . '%', PDO::PARAM_STR);
        $query->execute();

        // Affiche les r�sultats de la recherche
        echo '<div class="search-results">';
        echo '<h3>Résultats de la recherche :</h3>';
        while ($user = $query->fetch()) {
            echo '<p>' . $user['id_client'] . ' ' . $user['nom_utilisateur'] . '<a href="abannir.php?id=' . $user['id_client'] . '" style="color: red; text-decoration:none;"> Bannir le membre</a></p>';
        }
        echo '</div>';

        // Ferme la requ�te pr�par�e
        $query->closeCursor();
    } else {
        // Message � afficher si la recherche est vide
        echo '<p>Aucun résultat. Veuillez saisir un nom d\'utilisateur.</p>';
    }
    ?>

    <!-- Bouton pour retourner � la page pr�c�dente -->
    <div class="back-button">
        <button onclick="goBack()">Retourner � la page pr�c�dente</button>

        <script>
            function goBack() {
                window.history.back();
            }
        </script>
    </div>

</body>
</html>

