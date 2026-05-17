<?php

require_once 'AWeapon.php';

class PlasmaRifle extends AWeapon {
    public function __construct() {
        parent::__construct("Plasma Rifle", 4, 9);
        $this->damage  = 9;
        $this->apcost  = 4;
        $this->melee = false; // arme à distance
    }

    public function attack(): void {
        echo "Le Plasma Rifle crache un boulet de plasma incandescent !" . PHP_EOL;
    }
}