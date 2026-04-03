<?php

function  my_create_map(...$args) {

    $map = [];
    }
    
    if(count($args) === 0) {
        echo "Aucun argument fourni.\n";
        exit ;

    foreach ($args as $arg) {

    // Vérifions si c'est bien un tableau et s'il contient au moins 2 éléments

        if(!is_array($arg) || count($arg) < 2) {
            echo "Les arguments fournis ne sont pas valides.\n";
            return NULL;
    
        }
        
        $values = array_values($arg);
        $key = $values[0];
        $values = $values[1];

        $map[$key] = $values;
    }
    return $map;
}



?>