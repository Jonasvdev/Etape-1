<?php

require_once "Shark.php";
require_once "Canary.php";


class GreatWhite extends Shark {
private string $Canary ;

    public function __construct(string $name, string $Canary)
    {
        parent::__construct($name);
        $this->Canary = $Canary;
    }

    public function eat(Animal &$animal): void
    {
        if ($animal instanceof $this->Canary)
        {
            echo $this->getName() . " : La prochaine fois que tu essaieras de me donner ça à manger, je te mangerai à la place.\n";
            return;
        }
        
         // Message spécial s´il mange un requin

        if ($animal instanceof Shark && $animal !== $this) {

            echo $this->getName() . ": Le meilleur repas qu’on puisse souhaiter.\n";
        }

        parent::eat($animal);

    }
}