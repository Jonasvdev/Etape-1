<?php

require_once 'AWeapon.php';

class PowerFist extends AWeapon
{
    public function __construct() {
        parent::__construct('Power Fist' , 6, 15);
        $this->damage  = 15;
        $this->apcost  = 6;
        $this->melee = true; // arme de mêlée
    }

    public function attack(): void {
        echo "Le Power Fist s'abat avec une force dévastatrice !" . PHP_EOL;
    }
}