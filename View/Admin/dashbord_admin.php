<?php
require_once __DIR__ . '/../../Model/Database.php';
require_once __DIR__ . '/../../Model/AdminModel.php';
require_once __DIR__ . '/../../Controlleur/AdminControlleur.php';
include __DIR__ . "/../Autre/menu_haut.php";

$database = new Database();
$adminModel = new AdminModel($database);
?>

<br />
<br />
<br />
<br />
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="dashbord_admin.css">
    <title>Dashbord Admin</title>
</head>
<body>
    
<div class="dashboard">
    <h2>Tableau de Bord</h2>
    <p>Bienvenue, <?php echo isset($_SESSION['nom_utilisateur']) ? $_SESSION['nom_utilisateur'] : 'Invité'; ?>!</p>

    <!-- Ajoutez ici du contenu sp�cifique � votre tableau de bord -->
    <div class="dashboard-content">
        <h3>Statistiques</h3>
        <p>Nombre d'utilisateurs enregistrés :  <?php echo $adminModel->getNumberOfUsers(); ?></p>
</p>
        <p>Dernières activités : <!-- Ajoutez des informations sur les activit�s r�centes --></p>
    </div>
</div>
<div class="menu-parametres">
    <h3> Gestion des Utilisateur</h3>
    <ul>
        <li><a href="page_admin.php">Liste des membres</a></li>
        <li><a href="../Autre/salle.php">Valeur capteur</a></li>
        <li><a href="#">Sécurité</a></li>
        <!-- Ajoutez d'autres param�tres selon vos besoins -->
    </ul>
</div>

</body>
</html>
 

