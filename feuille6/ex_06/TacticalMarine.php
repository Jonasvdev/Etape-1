<?php
require_once 'PlasmaRifle.php';
require_once 'ASpaceMarine.php';


Abstract class TacticalMarine extends ASpaceMarine {


    public function __construct(string $name) {
        parent::__construct($name);
        $this->pv = 100;
        $this->pa = 30;
    

    $this->equip(new PlasmaRifle());

    echo $name . " en service " . PHP_EOL; 
}

   public function recoverAP(): void {

        $this->pa = min(50, $this->pa + 12);
        }
    
    // Message de mort spécifique pour TacticalMarine

      public function __destruct() {
        
         $name = $this->getName();
        echo $name . " le Marine Tactique est tombé !" . PHP_EOL;


}
    
}