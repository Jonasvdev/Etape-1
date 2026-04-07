<?php

// cREATION D'UNE NOUVELLE CLASSE Gecko
class Gecko
{
    // Propriété de la classe
    public $name;

    // Constructeur de la classe
    public function __construct(string $name = "") {

    // stockage du nom dans l'attribut

        $this->name = $name;

    if ($name !== ""){ 

        echo "Bonjour " . $this->name . " ! " . PHP_EOL;
    } 
    else{
        echo "Bonjour !\n";

    }

}

}

?>