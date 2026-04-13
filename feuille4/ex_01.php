<?php

// creation d ela classe mars et un attribu id
class Mars {

    private static int $count = 0; // Compteur statique pour les IDs
    private $id; // identifiant unique de chaque objet


    // L´INCREMENTATION DE L ID
    public function __construct() {
        
        $this->id = self::$count; // Assigne l'id actuel au nouvel objet

        self::$count++; // Incrémente le compteur

    }

    public function getId(): int {

        return $this->id;

    }
}









?>