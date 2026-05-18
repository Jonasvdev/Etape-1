<?php

require_once 'AMonster.php';
require_once 'AssaultTerminator.php';

class RadScorpion extends AMonster {

    // Compteur statique partagé entre toutes les instances
    private static int $count = 0;

    public function __construct() {

        self::$count++;
        parent::__construct("RadScorpion n° " . self::$count);

        $this->pv     = 80;
        $this->pa     = 50;   // commence avec le maximum de PA
        $this->damage = 25;
        $this->apcost = 8;

        echo $this->nom . " : Crrr !" . PHP_EOL;
    }

    public function __destruct() {

        echo $this->nom . " : SPROTCH !" . PHP_EOL;
    }

    // Surcharge d'attack : double dégâts si la cible n'est pas un AssaultTerminator

    public function attack($target): void {

        // Sauvegarde du damage de base
        
        $baseDamage = $this->damage;

        if (!($target instanceof AssaultTerminator)) {
            $this->damage *= 2;
        }

        // On délègue toute la logique (portée, PA, messages) au parent

        parent::attack($target);

        // On restaure le damage de base après l'attaque

        $this->damage = $baseDamage;
    }


    
}