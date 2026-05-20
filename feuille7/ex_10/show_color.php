<?php

// Les couleurs autorisées (même liste que dans set_color.php)

$colors_valides = ['blanc', 'noir', 'rouge', 'bleu'];

// On traduit les mots français en codes couleur CSS

$colors_css = [
    'blanc' => 'white',
    'noir'  => 'black',
    'rouge' => 'red',
    'bleu'  => 'blue',
];

// Si le cookie n'existe pas ou si sa valeur n'est pas dans la liste autorisée,
// on renvoie l'utilisateur vers set_color.php

if (!isset($_COOKIE['background_color']) || !in_array($_COOKIE['background_color'], $colors_valides)) {

    header('Location: set_color.php', true, 302);
    exit();
}

// On récupère la couleur CSS correspondant à la valeur du cookie

$couleur = $colors_css[$_COOKIE['background_color']];

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Couleur de fond</title>
</head>
<body style="background-color: <?php echo $couleur; ?>;">

    <p>Couleur actuelle : <?php echo $_COOKIE['background_color']; ?></p>

</body>
</html>