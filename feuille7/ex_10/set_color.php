<?php

// Les couleurs autorisées

$colors_valides = ['blanc', 'noir', 'rouge', 'bleu'];

$error = false;

// On entre ici seulement si le formulaire a été soumis

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $background = trim($_POST['background'] ?? '');

    // On vérifie si la couleur tapée est dans la liste des couleurs autorisées

    if (in_array($background, $colors_valides)) {

        // La couleur est valide : on la sauvegarde dans un cookie

        setcookie('background_color', $background, time() + 30 * 24 * 60 * 60);

        // On envoie l'utilisateur vers show_color.php 

        header('Location: show_color.php', true, 302);
        exit();

    } else {

        // La couleur n'est pas valide : on supprime le cookie s'il existe
        // et on affiche le message d'erreur

        setcookie('background_color', '', time() - 3600);

        unset($_COOKIE['background_color']);
        $error = true;
    }
}

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Choisir une couleur</title>
</head>
<body>

    <?php if ($error): ?>
        <p>Couleur invalide</p>
    <?php endif; ?>

    <form method="POST" action="">
        <input type="text" name="background" placeholder="background">
        <button type="submit">Envoyer</button>
    </form>

</body>
</html>