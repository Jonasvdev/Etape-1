<?php

abstract class AWeapon
{
    protected string $name;
    protected int    $apcost;
    protected int    $damage;
    protected bool   $melee = false;

    public function __construct(string $name, int $apcost, int $damage) {

    // Vérification des types

        if (!is_string($name) || !is_int($apcost) || !is_int($damage)) {
            throw new Exception("Error in AWeapon constructor. Bad parameters.");
        }

        $this->name   = $name;
        $this->apcost = $apcost;
        $this->damage = $damage;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getApcost(): int
    {
        return $this->apcost;
    }

    public function getDamage(): int
    {
        return $this->damage;
    }

    public function isMelee(): bool
    {
        return $this->melee;
    }
    
// Méthode abstraite à implémenter dans les classes filles
    abstract public function attack(): void;
}