<?php

// une fonction « my_included_putstr » qui affichera la chaîne de caractères fournie en paramètre.

function my_included_putstr(string $str) : void {
    echo $str . "\n";
}


// incluez ex_01_2.php et appelez la fonction « my_included_putstr » en lui fournissant le premier argument depuis la ligne de commande.

include "ex_01_2.php";

if (isset($argv[1])) {
    
    my_included_putstr($argv[1]);
}
?>