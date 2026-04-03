<?php



function my_add_elem_map($key, $value, &$map)
{
    if (!is_array($map)) {
        echo "Vous devez fournir des paramètres corrects.\n";
        return NULL;
    }

    $map[$key] = $value;
    return $map;
}

function my_modify_elem_map($key, $value, &$map)
{
    if (!is_array($map) || !array_key_exists($key, $map)) {
        echo "Vous devez fournir des paramètres corrects.\n";
        return NULL;
    }

    $map[$key] = $value;
    return $map;
}

function my_delete_elem_map($key, &$map)
{
    if (!is_array($map) || !array_key_exists($key, $map)) {
        echo "Vous devez fournir des paramètres corrects.\n";
        return NULL;
    }

    unset($map[$key]);
    return $map;
}

function my_is_elem_valid($key, $value, &$map)
{
    if (!is_array($map) || !array_key_exists($key, $map)) {
        echo "Vous devez fournir des paramètres corrects.\n";
        return false;
    }

    return $map[$key] === $value;
}










?>