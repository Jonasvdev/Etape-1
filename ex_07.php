<?php

// Une fonction qui renvoie une chaîne de caractère

function get_angry_dog(int $nbr) : string {

    $result = ""; 
    for ($i= 0; $i < $nbr ; $i++) {
        $result .= "woof";
    }
    return $result ."\n";
}

?>