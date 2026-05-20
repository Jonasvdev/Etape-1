<?php

$errors  = [];

$success = false;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $nom  = trim($_POST['nom'] ?? '');

    $email = trim($_POST['email'] ?? '');

    $password  = $_POST['password'] ?? '';

    $confirmation_password  = $_POST['confirmation_password'] ?? '';


    // Validation du nom : entre 3 et 10 caractères

    if (strlen($nom) < 3 || strlen($nom) > 10) {

        $errors[] = "Nom invalide";
    }

    // Validation de l'email avec une expression régulière

    if (!preg_match('/^[a-zA-Z0-9._%+\-]+@[a-zA-Z0-9.\-]+\.[a-zA-Z]{2,}$/', $email)) {

        $errors[] = "Adresse e-mail invalide";
    }

    // Validation du mot de passe : entre 3 et 10 caractères et confirmation identique

    if (strlen($password) < 3 || strlen($password) > 10 || $password !== $confirmation_password) {

        $errors[] = "Mot de passe invalide ou confirmation du mot de passe incorrecte";
    }

    // Si aucune erreur, on enregistre l'utilisateur dans le fichier JSON

    if (empty($errors)) {

        $file  = 'users.json';
        $users = [];

        // On lit le fichier JSON existant s'il existe déjà

        if (file_exists($file)) {
            $users = json_decode(file_get_contents($file), true);
        }

        // On crée le nouvel utilisateur

        $users[] = [
            'nom' => $nom,
            'email'  => $email,
            'password'   => password_hash($password, PASSWORD_DEFAULT),
            'created_at' => date('Y-m-d H:i:s'),
        ];

        // On écrit le tableau mis à jour dans le fichier JSON

        file_put_contents($file, json_encode($users, JSON_PRETTY_PRINT));

        $success = true;
    }
}

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Inscription</title>
</head>
<body>

    <?php if ($success): ?>

        <p>Utilisateur créé</p>

    <?php endif; ?>

    <?php foreach ($errors as $error): ?>

        <p><?php echo $error; ?></p>

    <?php endforeach; ?>


    <form method="POST" action="">

    <input type="text" name="nom"  placeholder="nom">

    <input type="text" name="email"  placeholder="email">

    <input type="password" name="password" placeholder="password">

    <input type="password" name="confirmation_password" placeholder="confirmation_password">

    <button type="submit">S'inscrire</button>

    </form>

</body>
</html>