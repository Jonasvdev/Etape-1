<?php

// cREATION D'UNE NOUVELLE CLASSE Gecko
class Gecko
{
    // Propriété de la classe
    public $name;

    // Constructeur de la classe
    public function __construct($new_name) {
        $this->name = $new_name;
        echo "Bonjour " . $this->name . " !<br>";
    }

}



?>