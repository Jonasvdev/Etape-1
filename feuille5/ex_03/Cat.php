<?php

require_once "Animal.php";


class Cat extends Animal {

    private const MAMMIFÈRES = 0;
    private string $name;

    private string $color ;

        public function __construct(string $name, string $color = "gris" ) {

            parent::__construct($name, 4, self::MAMMIFÈRES);
            $this->color = $color;

            // Message obligatoire

            echo $this->name . ": MEEEOOWWWW\n";

        }
        
        public function getColor(): string {
            return $this->color;
        }

        public function setColor(string $color): void {
            $this->color = $color;  
        }


        public function meow(): void {
            echo $this->name . "le chat " . $this->color . " miaule\n";
        }

        public function __destruct(){
            parent::__destruct();
    }


}