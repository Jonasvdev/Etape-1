<?php

// fonction qui affiche une séquence à la n-ième itération.
function sequence(int $nbr)
{
    if ($nbr < 0) {
        return;
    }

    $value = 0;

    for ($i = 0; $i <= $nbr; $i++) {


        echo $value . "\n";

        $value++;
    }
}