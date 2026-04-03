<?php



function my_add_elem_map(mixed $key, mixed $value, mixed &$map){

    if (!is_array($map)) {
        echo "Vous devez fournir des paramètres corrects.\n";
        return NULL;
    }

    $map[$key] = $value;
    return $map;
}

function my_modify_elem_map(mixed $key, mixed $value, mixed &$map) {

    if (!is_array($map) || !array_key_exists($key, $map)) {
        echo "Vous devez fournir des paramètres corrects.\n";

        return is_array($map) ?  
        $map : [];
    }

    $map[$key] = $value;
    return $map;
}

function my_delete_elem_map(mixed $key, mixed &$map) {

    if (!is_array($map) || is_null($key) || !array_key_exists($key, $map)) {
        echo "Vous devez fournir des paramètres corrects.\n";
        return is_array($map) ? $map : [];
    }

    unset($map[$key]);
    return $map;
}

function my_is_elem_valid(mixed $key, mixed $value, mixed &$map) : bool {

    if (!is_array($map) || is_null($key) || !array_key_exists($key, $map)) {
        echo "Vous devez fournir des paramètres corrects.\n"; 
        return false;
    }

    if(!array_key_exists($key, $map) || $map[$key] !== $value) {

        echo "La clé n'existe pas dans la map.\n";
        return false;

    } else {
        echo "La clé existe dans la map et sa valeur correspond à la valeur fournie.\n";
    }   return true;

    return $map[$key] === $value;
}










?>