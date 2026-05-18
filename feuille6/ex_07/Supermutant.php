<?php

require_once 'AMonster.php';

class SuperMutant extends AMonster {

    // Compteur statique propre à SuperMutant
    private static int $count = 0;

    public function __construct() {

        self::$count++;
        parent::__construct("SuperMutant" . self::$count);

        $this->pv     = 120;
        $this->pa     = 30;
        $this->damage = 20;
        $this->apcost = 6;

        echo $this->nom . " : RAAAHHH !" . PHP_EOL;
    }

    public function __destruct(){
        echo $this->nom . " : THUD !" . PHP_EOL;
    }
}