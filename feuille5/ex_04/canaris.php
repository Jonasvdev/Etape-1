<?php

require_once "Animal.php";


require_once "Cat.php";

class shrak extends Cat {

private bool $freenzy;
private int $NbrPattes;
private string $name ;
private int $eggs = 0; // indiquant le nombre d'œufs pondus au cours de sa vie
private string $type = "BIRD";
private int $leggs = 2; 


    public function __construct(string $name, int $NbrPattes = 0, bool &$freenzy = false , string $type = "BIRD") {

        parent::__construct($name, $NbrPattes);
        $this->freenzy = $freenzy;
        $this->name = $name;
        $this->eggs = 0;
        $this->type = $type;
        $this->leggs = 2;

        echo "Un tueur est né !\n";
    }

    public function  smellBlood(mixed &$freenzy=true) {

        $freenzy = false;
       return $this->freenzy = $freenzy ;     
    }

    public function status(string $name, bool &$freenzy) {
        
        if ($freenzy == true) {
            echo "$name sent le sang et veut tuer." . PHP_EOL;
        }
         else {
            echo "$name nage paisiblement." . PHP_EOL;
        }
    }
     public function __destruct(){
        parent::__destruct();

}
}

class canaris extends shrak {
    private string $name;
    private string $type = "BIRD";
    private int $leggs = 2; 
    private int $eggs = 0; // indiquant le nombre d'œufs pondus au cours de sa vie

    public function __construct(string $name, int $eggs, string $type = "BIRD") {
        parent::__construct($name, 0, $type); 
        $this->name = $name;
        $this->eggs = $eggs;
        $this->type = $type;
        echo "Un canari est né !\n";
    }

    public function getEggscount() : int {
        return $this->eggs;
    }

    public function layEggs(): void {
        $this->eggs++;
        echo "$this->name a pondu un œuf. Total des œufs pondus : $this->eggs\n";
    }
    public function __destruct(){
        parent::__destruct();




}

}