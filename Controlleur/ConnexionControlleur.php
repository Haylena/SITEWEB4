<?php
require_once __DIR__ . '/../Model/ConnexionModel.php';
require_once __DIR__ . '/../Model/Database.php';


class ConnexionControlleur {
    private $connexionModel;

    public function __construct(PDO $pdo) {
        $this->connexionModel = new ConnexionModel($pdo);
    }

    public function displayLoginUser() {
        session_start();
        if (isset($_POST['valider'])) {
            $nom_utilisateur = $_POST['nom_utilisateur'];
            $mot_de_passe = $_POST['mot_de_passe'];
        
            $userData = $this->connexionModel->loginUser($nom_utilisateur, $mot_de_passe);
        
            if ($userData) {
                $_SESSION['nom_utilisateur'] = $nom_utilisateur;
                $_SESSION['mot_de_passe'] = $mot_de_passe;
                $_SESSION['id'] = $userData['id'];
        
                if ($userData['type'] == 0) {
                    header('Location: pageacuilletest.php');
                    exit();
                } elseif ($userData['type'] == 1) {
                    header('Location: dashbordadmin.php');
                    exit();
                }
            } else {
                $errorMessage = "Aucun utilisateur trouvé";
            }
        }
    }
}

?>
