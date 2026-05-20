<?php
// demarrage de la session 

session_start();

// sauvegarde du nom dans la session 

if (isset($_GET['name'])) {
    setcookie('name', $_GET['name'] , time()) +30*24*60*60;
}



if (isset($_GET['name'])) {
    $name = $_GET['name'];

    // ce qui vient d'etre sauvegardé dans l'url

} elseif (isset($_COOKIE['name'])) {
    $name = $_COOKIE['name'];

    // le nom par defaut si rien n'existe

} else {
    $name = 'ornithorynque';
}

echo "Bonjour " .$_COOKIE['name'] ;





?>