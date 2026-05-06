<?php
 
require_once "AWeapon.php";
 
class PowerFist extends AWeapon
{
    public function __construct() {
        parent::__construct("Power Fist", 8, 50);
        $this->melee = true;
    }
 
    public function attack(): void {
        echo "SBAM" . PHP_EOL;
    }
}