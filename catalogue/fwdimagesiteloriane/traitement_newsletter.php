<?php
// Vérifier si le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Assurer la sécurité des données saisies
    $email = htmlspecialchars(stripslashes(trim($_POST["email"])));

    // Ici, vous pouvez ajouter le code pour enregistrer l'email dans une base de données
    // ou pour envoyer un e-mail de confirmation, etc.

    echo "Email reçu : " . $email;
    // Redirection vers une page de remerciement ou autre action
}
?>
