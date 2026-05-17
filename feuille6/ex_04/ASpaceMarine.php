<?php

require_once 'IUnit.php';

abstract class ASpaceMarine implements IUnit {
    protected string $nom;
    protected int $pv = 0;
    protected int $pa = 0;

    public function __construct(string $nom) {
        $this->nom = $nom;
    }

    // Accesseurs

    public function getName(): string { 
        return $this->nom; 
        }

    public function getPV(): int { 
        return $this->pv;  
        }

    public function getPA(): int{ 
        return $this->pa;  
        }
 
    // Méthodes de l'interface (à implémenter dans l'exercice suivant)

    public function equip($weapon): void {
        return;
    }
    public function attack($target): void {
            return;
    }
    public function receiveDamage($damage): void { 
        return;
    }
    public function moveCloseTo($target): void {
        return;
    }
    public function recoverAP(): void {
       return;
    }


}