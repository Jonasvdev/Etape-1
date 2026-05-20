
Copier

<?php
 
function modify_cookie(string $name, mixed $value): void {

    // Modifie le cookie

    setcookie($name, $value, time() + 30 * 24 * 60 * 60);   // Avec unje duré de vie de 30 jours

    // Mettre à jour les cookies

    $_COOKIE['name'] = $value ;
}