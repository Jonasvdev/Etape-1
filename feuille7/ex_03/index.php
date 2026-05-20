<?php
// demarrage de la session 

session_start();

// sauvegarde du nom dans la session 

if (isset($_GET['name'])) {
    $_SESSION['name'] = $_GET['name'];
}



if (isset($_GET['name'])) {
    $name = $_GET['name'];

    // ce qui vient d'etre sauvegardé dans l'url

} elseif (isset($_SESSION['name'])) {
    $name = $_SESSION['name'];

    // le nom par defaut si rien n'existe

} else {
    $name = 'ornithorynque';
}

echo "Bonjour " .$name ;





?>