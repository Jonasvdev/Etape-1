<?php

require_once "AWeapon.php";

class PlasmaRifle extends AWeapon {
    public function __construct()
    {
        parent::__construct("Plasma Rifle", 5, 21);
        $this->melee = false;
    }

    public function attack() : void {
        echo "PIOU\n";
    }
}

?>