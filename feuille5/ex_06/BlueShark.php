<?php


require_once "Shark.php";

class BlueShark extends Shark {
private string $animal ;

private string $name;
private string $type = "poisson";
private int $leggs = 0;

    
    public function __construct(string $name)
    {
        parent::__construct($name);
    }

    public function eat(Animal &$animal): void {

    // Ne mange que les poissons

        if ($animal !== $this && $animal->getType() !== "fish")
        {
            echo $this->getName() . " : Ça ne vaut pas la peine.\n";
            return;
        }

        // sinon, mange normalement
        
        parent::eat($animal);
    }
}

