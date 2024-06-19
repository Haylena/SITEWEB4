<?php
require_once '../Model/UserModel.php';
require_once '../Model/Database.php';
require_once '../Model/ConnexionModel.php';

class UserController {
    private $userModel;

    public function __construct(PDO $pdo) {
        $this->userModel = new UserModel($pdo);
    }

    public function displayProfileForm() {
        session_start();
        $userId = isset($_SESSION['user_id']) ? $_SESSION['user_id'] : null;

        $pseudo = $this->userModel->getPseudo($userId);
        require 'profile_form.php';
    }
}

if (isset($_POST['logout'])) {
    session_start();
    session_unset();
    session_destroy();
    header("Location: ../View/Accueil/page_accueil_test.php");
}

if (isset($_POST['login']) && isset($_POST['nom_utilisateur']) && isset($_POST['mot_de_passe'])) {
    $database = new Database();

    $user = (new ConnexionModel($database))->loginUser($_POST['nom_utilisateur'], $_POST['mot_de_passe']);

    if (!$user) {
        exit();
    }

    header('Location: ../View/Accueil/page_accueil_test.php');
}

if (isset($_POST['modifier']) && isset($_POST['pseudo']) && isset($_POST['email']) && isset($_POST['genre'])) {
    session_start();

    $database = new Database();

    $user = (new UserModel($database))->updateUser($_SESSION['id_client'], $_POST['pseudo'], $_POST['email'], $_POST['genre']);

    if (!$user) {
        echo 'Not user';
    }

    header('Location: ../View/Compte/Mes_preferences.php');
}

/*
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    session_start();

    $userId = isset($_SESSION['user_id']) ? $_SESSION['user_id'] : null;

    if ($userId !== null) {
        $newPseudo = $_POST['pseudo'];
        $newEmail = $_POST['email'];
        $newGenre = $_POST['genre'];
        $newDateNaissance = $_POST['dob'];

        $pdo = new PDO("mysql:host=your_host;dbname=your_db", "your_username", "your_password");
        $userModel = new UserModel($pdo);

        $userModel->updatePseudo($userId, $newPseudo);
        $userModel->updateEmail($userId, $newEmail);
        $userModel->updateGenre($userId, $newGenre);
        $userModel->updateDateNaissance($userId, $newDateNaissance);
        
        header('Location: Mes_preferences.php');
        exit();
    } else {
        echo "L'utilisateur n'est pas correctement identifié.";
    }
*/
?>
