<?php

require_once __DIR__ . '/../Model/SalleModel.php';
require_once __DIR__ . '/../Model/Database.php';

class SalleController
{
    private $salleModel;

    public function __construct($connexion)
    {
        $this->salleModel = new SalleModel($connexion);
    }

    // Exemple de m�thode pour r�cup�rer la liste des salles
    public function getSalles()
    {
        return $this->salleModel->getSalles();
    }

    // Exemple de m�thode pour r�cup�rer les d�tails d'une salle en fonction de son ID
    public function getSalleById($salleId)
    {
        return $this->salleModel->getSalleById($salleId);
    }

    public function getCapteursBySalle($salleId)
    {
        return $this->salleModel->getCapteursBySalle($salleId);

    }

    public function getValeurBySalle($salleId)
    {
        return $this->salleModel->getValeurBySalle($salleId);

    }

}