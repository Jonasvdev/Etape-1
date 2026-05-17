<?php

abstract class AWeapon {
    protected string $nom;
    protected int    $damage  = 0;
    protected int    $apcost  = 0;
    protected bool   $isMelee = false;

    // true si l'arme est déjà équipée par un Space Marine
    private bool $equipped = false;

    public function __construct(string $nom)
    {
        $this->nom = $nom;
    }

    // Accesseurs 

    public function getName(): string{ 
        return $this->nom;     }
    public function getDamage(): int { 
        return $this->damage;  }
    public function getApcost(): int{
         return $this->apcost;  }
    public function isMelee(): bool{ 
        return $this->isMelee; }
    public function isEquipped(): bool{
         return $this->equipped; }

    // Appelée par ASpaceMarine pour (dés)équiper l'arme
    
    public function setEquipped(bool $value): void
    {
        $this->equipped = $value;
    }

    // Chaque arme concrète définit son propre comportement à l'attaque
    abstract public function attack(): void;
}