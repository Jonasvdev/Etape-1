<?php

// Une fonction qui prend  en parametre un tableau de nombres et renvoie vrai si la somme de certaines elements du ntableau 
//peut etre egale à la valeur maximal du tableau si non la fonction renvoie faux 

function check_array_sum(array $numbers) : bool {

    $numbers = []; // Initialiser un tableau pour les nombres entiers


    $numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10]; // Exemple de tableau de nombres 

$numbers = array_filter($numbers, 'is_numeric'); // Filtrer les éléments non numériques 

    if (empty($numbers)) {

        echo "Le tableau est vide ou ne contient pas de nombres valides."; PHP_EOL;

        return false; // Si le tableau est vide, on ne peut pas atteindre une somme
    }

    $maxValue = max($numbers); // Trouver la valeur maximale du tableau 
    $sum = 0;

    foreach ($numbers as $number) {
        $sum += $number;
        if ($sum === $maxValue) {
            return true;
        }
    }

    return false;
}











?>