<?php

// Une fonction qui prend  en parametre un tableau de nombres et renvoie vrai si la somme de certaines elements du ntableau 
//peut etre egale à la valeur maximal du tableau si non la fonction renvoie faux 

function check_array_sum(array $numbers) : bool {

    $numbers = []; // Initialiser un tableau pour les nombres entiers

    // verifier que le tableau ne contient pas de valeurs negatives

    foreach ($numbers as $number) {

        if (!is_numeric($number) || $number < 0) {

            echo "Le tableau doit contenir uniquement des nombres entiers positifs."; PHP_EOL;
            return false; // Si une valeur n'est pas un nombre ou est négative, on retourne faux
        }
    }

$numbers = array_filter($numbers, 'is_numeric'); // Filtrer les éléments non numériques 

    $numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10]; // Exemple de tableau de nombres 


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