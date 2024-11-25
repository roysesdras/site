<?php
// Vérifier si le formulaire a été soumis via POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Adresse email où les messages seront envoyés
    $receiving_email = 'votre-email@example.com';

    // Récupérer et sécuriser les données du formulaire
    $name = htmlspecialchars(trim($_POST['name'] ?? ''));
    $email = htmlspecialchars(trim($_POST['email'] ?? ''));
    $message = htmlspecialchars(trim($_POST['message'] ?? ''));

    // Initialiser un tableau pour les erreurs
    $errors = [];

    // Valider les champs requis
    if (empty($name)) {
        $errors[] = 'Le champ "Nom" est requis.';
    }

    if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = 'Le champ "Email" est invalide.';
    }

    if (empty($message)) {
        $errors[] = 'Le champ "Message" est requis.';
    }

    // Vérifier s'il y a des erreurs
    if (!empty($errors)) {
        echo json_encode([
            'status' => 'error',
            'message' => 'Veuillez corriger les erreurs suivantes :',
            'errors' => $errors
        ]);
        exit;
    }

    // Préparer les données pour l'email
    $subject = "Nouveau message depuis le formulaire : $name";
    $email_content = "Nom : $name\n";
    $email_content .= "Email : $email\n";
    $email_content .= "Message :\n$message\n";

    $email_headers = "From: $name <$email>\r\nReply-To: $email";

    // Envoyer l'email
    if (mail($receiving_email, $subject, $email_content, $email_headers)) {
        // Réponse en cas de succès
        echo json_encode([
            'status' => 'success',
            'message' => 'Votre message a été envoyé avec succès. Merci de nous avoir contactés.'
        ]);
    } else {
        // Réponse en cas d'échec
        echo json_encode([
            'status' => 'error',
            'message' => 'Une erreur est survenue lors de l\'envoi de votre message. Veuillez réessayer plus tard.'
        ]);
    }
} else {
    // Réponse pour les requêtes non-POST
    echo json_encode([
        'status' => 'error',
        'message' => 'Requête invalide. Veuillez utiliser le formulaire pour soumettre vos données.'
    ]);
}
?>