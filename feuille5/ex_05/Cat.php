<?php

require_once "Animal.php";
require_once "shrak.php";
require_once "canaris.php";

class shrak extends animal {
    private string $name;
    private string $type = "BIRD";
    private int $eggs = 0; // indiquant le nombre d'œufs pondus au cours de sa vie
    private bool $frenzy;
    private string $animal ;

    public function __construct(string $name, string $type = "BIRD") {

        parent::__construct($name, 0, $type); 
        $this->name = $name;
        $this->eggs = 0;
        $this->type = $type;

    
    }

    public function eat(Animal &$animal): void {

    // Vérifie si c'est un Animal

        if ($animal === $this)
        {
            echo $this->getName() . " : Ça ne vaut pas la peine.\n";
            return;
        }

        $type = $animal->getType();

        if ($type === "mammal")

            $frenchType = "mammifère";

        else if ($type === "fish")

            $frenchType = "poisson";
        else
            $frenchType = "oiseau";

        echo $this->getName() . " a mangé un " . $frenchType . " nommé " . $animal->getName() . ".\n";

        if ($this->frenzy)
            $this->frenzy = false;

    // L'animal est détruit

        unset($animal) ;
    }
}


