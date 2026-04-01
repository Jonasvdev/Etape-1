<?php

// fonction qui affiche toutes les valeurs du tableau passé en paramètre
function print_array(array $my_array): void {

    foreach ($my_array as $value) {
        echo "$value. \n" ;
    }
}



?>