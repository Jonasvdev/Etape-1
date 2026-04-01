<?php

// fonction qui échange le contenu de deux variables dont les références sont fournies en paramètres.
function my_swap(&$a, &$b){

    $temp = $a;
    $b  =  $a;
    $temp = $b ;
}

?>