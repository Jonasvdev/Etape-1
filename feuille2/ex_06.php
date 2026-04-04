<?php

/*
** Structure globale de la carte :
**
** $worldMap = [
**     "Continent" => [
**         "Country" => [
**             "City" => "PostalCode"
**         ]
**     ]
** ];
*/

// C'est un tableau dans un tableau dans un tableau :

// Niveau 1 → les continents
// Niveau 2 → les pays (dans chaque continent)
// Niveau 3 → les villes avec leur code postal (dans chaque pays)



// On crée une carte du monde vide

$worldMap = [];


// Ajout d'un continent dans la carte du monde 


function my_create_continent(mixed $continentNameToAdd, mixed &$worldMap) : void{

    $worldMap[$continentNameToAdd] = []; 

}

function my_create_country(mixed $continentName, mixed $countryNameToAdd, mixed &$worldMap) : void {

        // Vérifier si le continent existe déjà

    if (!isset($worldMap[$continentName]) ) {

        echo "impossible de récupérer le continent.\n"; PHP_EOL;
        return ;
    }

    $worldMap[$continentName][$countryNameToAdd] = []; 
}

 function my_create_city(mixed $continentName, mixed $countryName, mixed $cityNameToAdd, mixed $postalCode, mixed &$worldMap) : void {

    // Vérifier si le continent et le pays existent déjà

    if (!isset($worldMap[$continentName])) {

        echo "impossible de récupérer le continent.\n"; PHP_EOL;
        return ;
    }

    // Vérifie si le pays existe déjà dans ce continent

    if (!isset($worldMap[$continentName][$countryName])) {

        echo "impossible de récupérer le pays.\n"; PHP_EOL;
        return ;
    }

    $worldMap[$continentName][$countryName][$cityNameToAdd] = $postalCode;
 }

        // Récupérer la liste des pays d’un continent
function my_get_countries(mixed $continentName, mixed $worldMap) : array|null {

    if (!isset($worldMap[$continentName]) ) {

        echo "impossible de récupérer le continent.\n"; PHP_EOL;
        return null;
    }

    return array_keys($worldMap[$continentName]);
    
}

{
    return array_keys($worldMap[$countryName][$countryName]);

}

        // Récupérer la liste des villes d’un pays
function my_get_cities_of_country(mixed $continentName, mixed $countryName, mixed $worldMap) : string|null {   
    
// Vérifier le continent 

    if (!isset($worldMap[$continentName]) ) {

        echo "impossible de récupérer le continent.\n"; PHP_EOL;
        return null;
    }

    // Vérifier le pays

    if (!isset($worldMap[$continentName][$countryName]) ) {

        echo "impossible de récupérer le pays.\n"; PHP_EOL;
        return null;
    }

    return(string) $worldMap[$continentName][$countryName];
}

        // Récupérer le code postal d’une ville
function my_get_city_postal_code(mixed $continentName, mixed $countryName, mixed $cityName, mixed $worldMap) : string|null { 
    
// Vérifier le continent
    
    if (!isset($worldMap[$continentName]) ) {

        echo "impossible de récupérer le continent.\n"; PHP_EOL;
        return null;
    }

    // Vérifier le pays

    if (!isset($worldMap[$continentName][$countryName]) ) {

        echo "impossible de récupérer le pays.\n"; PHP_EOL;
        return null;
    }

// Vérifier la ville

    if (!isset($worldMap[$continentName][$countryName][$cityName]) ) {

        echo "impossible de récupérer la ville.\n"; PHP_EOL;
        return null;
    }

    return(string) $worldMap[$continentName][$countryName][$cityName];
}































?>