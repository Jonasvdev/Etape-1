<?php

// une fonction qui prend un entier comme paramètre.
 function print_movi_from_nbr(int $nbr): void {

    switch ($nbr){
        case 3 :
            echo "Les Trois Frères\n";
            break;
        
        case 6 : 
             echo "Le sixieme Sens\n";
             break;
        
        case 23 : 
            echo "Le Nombre 23\n";
            break ;
    
        case 28 :
            echo "28 jours\n" ;
            break;

        case $nbr !=[3,6,23,28] :
            echo "je ne sais pas\n";
            break;
            

        // Autre alternative 

        default :
            echo "Je ne sais pas\n";


    }
 }



?>