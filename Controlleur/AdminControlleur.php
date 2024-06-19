<?php

require_once __DIR__ . '/../Model/AdminModel.php';
require_once __DIR__ . '/../Model/Database.php';

class AdminController {
    private $adminModel;

    public function __construct($connexion) {
        $this->adminModel = new AdminModel($connexion);
    }

    public function displayUsers() {
        $recupUsers = $this->adminModel->getUsers();
        return $recupUsers;
    }

    public function displayNumberOfUsers() {
        $result = $this->adminModel->getNumberOfUsers();
        return $result;
    }
}
?>