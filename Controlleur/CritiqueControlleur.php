<?php

require_once __DIR__ . '/../Model/CritiqueModel.php';
require_once __DIR__ . '/../Model/Database.php';

class CritiqueController
{
    private $critiqueModel;

    public function __construct($connexion)
    {
        $this->critiqueModel = new CritiqueModel($connexion);
    }

    public function afficherCritique()
    {
        $critique = $this->critiqueModel->getCritique();
        return $critique;
    }

    public function afficherNote($filmId)
    {
        $note = $this->critiqueModel->getNote($filmId);
        return $note;
    }

    public function afficherNom($filmId)
    {
        $nom = $this->critiqueModel->getNom($filmId);
        return $nom;
    }
}

?>
