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

 // si le gecko disparaît , on affiche un message d'au revoir

    public function __destruct() {

       if ($this->name !== ""){

        echo "Au revoir " . $this->name . " !\n";  

     } else {
        echo "Au revoir !\n";
     }
     
    }
    public function getname(): string {

        return $this->name;
}

}