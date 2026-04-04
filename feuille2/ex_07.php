<?php
 
//Fonction : my_division_modulo

//Cette fonction effectue :
// - une division ( / )
// - un modulo ( % )

// ON VERIFIE QUE LES PARAMETRES SONT VALIDES

// Si les paramètres ne sont pas valides, la fonction doit lancer une exception avec un message d’erreur approprié.



function my_division_modulo(mixed $firstNumber, mixed $operChar, mixed $secondNumber): float {
    // Vérifier que les deux nombres sont bien numériques

    if (!is_numeric($firstNumber) || !is_numeric($secondNumber)) {

        throw new Exception("Les arguments fournis ne sont pas valides.\n" . PHP_EOL);
    }
 
    // Vérifier que l'opérateur est bien '/' ou '%'

    if ($operChar !== '/' && $operChar !== '%') {

        throw new Exception("Les arguments fournis ne sont pas valides.\n" . PHP_EOL);
    }
 
    // Vérifier que le diviseur n'est pas zéro (division par zéro interdite)

    if ((float)$secondNumber == 0) {

        throw new Exception("Les arguments fournis ne sont pas valides.\n" . PHP_EOL);
    }
 
    // Conversion en float pour éviter les problèmes de type

    $firstNumber = (float)$firstNumber;
    $secondNumber = (float)$secondNumber;

    // Effectuer l'opération demandée

    if ($operChar === '/') {

        return (float)$firstNumber / (float)$secondNumber;

    } else {
        return fmod((float)$firstNumber, (float)$secondNumber);
    }
    

    // Pour le modulo (%), on convertit en int (car % fonctionne sur des entiers)

    return (int)$firstNumber % (int)$secondNumber;

}



?>