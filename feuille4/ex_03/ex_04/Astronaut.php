<?php

require_once "Mars.php";

class Astronaut {
    private string $name;
    private string $Planet;
    private $id;

    private $mars;

    private int $snacks = 0;
    private ?Mars $destination = null;


    public function __construct(string $name) {
        $this->name = $name;
    }
 
    // accessurs et mutateurs pour les propriétés

    public function getName() {
        return $this->name;
    }

    public function getDestination(): ?Mars{
        return $this->destination ;  // Retourne la destination actuelle de l'astronaute (peut être null)
    }


    public function getSnacks(): int {
        return $this->snacks;
    }



    public function doActions($mars = null): void { 

        if ($mars === null) {
            echo "{$this->name} : Rien à faire." .PHP_EOL;
        }

         elseif ($mars->isplanete()) {

            $this->destination = $mars;  // Met à jour la destination de l'astronaute

            echo "{$this->name} : Mission lancée !" .PHP_EOL;  

        } elseif ($mars->isChocolate()) {


            echo "{$this->name} : Snack reçu !(Mars { $mars->getId() })" .PHP_EOL;

                $this->snacks++;  // Incrémente le nombre de snacks consommés   

        }
    }


    // destruction de l'astronaute

    public function __destruct() {

        if ($this->destination !== null) {

            echo "{$this->name} : Mission annulée ! " .PHP_EOL;

        } else {
        

        echo "{$this->name} : Je n'ai peut-être rien fait, mais j'ai au moins
        {$this->snacks} Mars à manger !" . PHP_EOL;


        }
    }

}
?>