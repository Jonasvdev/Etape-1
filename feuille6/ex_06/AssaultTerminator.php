<?php

require_once 'AssaultTerminator.php';
require_once 'PlasmaRifle.php';


abstract class AssaultTerminator extends ASpaceMarine {

    public function __construct(string $name) {
        parent::__construct($name);
        $this->pv = 150;
        $this->pa = 30;
    
        $this->equip(new PowerFist());

        echo $name . " en service " . PHP_EOL; 
    }

    public function receiveDamage($damage): void {
        $reducedamage = max(1, $damage - 3); // Réduction de 3 points de dégâts 
        $this->pv -= $reducedamage;

         if ($damage < 1) {
            $damage = 1;
        }

        parent::receiveDamage($damage);
    } 
    

     // Message de mort via le destructeur

    public function __destruct()
    {
        echo "BOUUUMMMM ! " . $this->nom . " a explosé !." . PHP_EOL;
    }
}

