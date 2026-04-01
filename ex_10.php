<?php

// Écrivez une fonction « my_get_args » qui prend en paramètre un nombre variable d'arguments
// et renvoie ces arguments dans un tableau.
function my_get_args() {

    // Utilisons debug_backtrace pour obtenir les arguments de la fonction 
    
    return debug_backtrace()[1]['args'];
}

?>