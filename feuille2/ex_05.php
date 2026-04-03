<?php

// Ajoute un élément dans la map à partir d'une clé et d'une valeur. 
 // Si la clé existe déjà, affiche un message d'erreur.

function my_add_elem_map(mixed $key, mixed $value, mixed &$map){

    if (!is_array($map)) {
        echo "Vous devez fournir des paramètres corrects.\n";
        return NULL;
    }

    $map[$key] = $value;
    return $map;
}

// odifie la valeur d'une clé existante dans la map.
 // Si la clé n'existe pas, affiche un message d'erreur.


function my_modify_elem_map(mixed $key, mixed $value, mixed &$map) {

    if (!is_array($map) || !array_key_exists($key, $map)) {
        echo "Vous devez fournir des paramètres corrects.\n";

        return is_array($map) ?  
        $map : [];
    }

    $map[$key] = $value;
    return $map;
}

// Supprime un élément de la map à partir de sa clé.
 // Si la clé n'existe pas, affiche un message d'erreur.


function my_delete_elem_map(mixed $key, mixed &$map) {

    if (!is_array($map) || is_null($key) || !array_key_exists($key, $map)) {
        echo "Vous devez fournir des paramètres corrects.\n";
        return is_array($map) ? $map : [];
    }

    unset($map[$key]);
    return $map;
}


// Vérifie si une clé existe dans la map et si sa valeur correspond à celle fournie.


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