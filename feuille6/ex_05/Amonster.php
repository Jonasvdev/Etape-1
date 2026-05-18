<?php

require_once 'IUnit.php';

abstract class AMonster implements IUnit {
    protected string $nom;
    protected int $pv     = 0;
    protected int $pa     = 0;
    protected int $damage = 0;
    protected int $apcost = 0;

    private bool   $isDead  = false;
    private ?IUnit $closeTarget = null;

    public function __construct(string $nom){
        $this->nom = $nom;
    }

    // Accesseurs
    public function getName(): string { 
        return $this->nom; }
    public function getPV(): int {
         return $this->pv;  }
    public function getPA(): int{
         return $this->pa;  }
    public function getDamage(): int {
        return $this->damage; }

    // Méthodes de l'interface 

    public function equip($weapon): void
    {
        if ($this->isDead) return;
        echo "Les monstres sont fiers et combattent de leurs propres corps." . PHP_EOL;
    }

    public function attack($target): void
    {
        if ($this->isDead) return;

        if (!($target instanceof IUnit)) {
            throw new Exception("Erreur dans AMonster. Le paramètre n'est pas un IUnit.");
        }

        // Vérification de la portée de mêlée
        if ($this->closeTarget !== $target) {
            echo $this->nom . " : Je suis trop loin de " . $target->getName() . "." . PHP_EOL;
            return;
        }

        // Vérification des PA suffisants
        if ($this->pa < $this->apcost) {
            return;
        }

        echo $this->nom . " attaque " . $target->getName() . "." . PHP_EOL;
        $this->pa -= $this->apcost;
        $target->receiveDamage($this->damage);
    }

    public function receiveDamage($damage): void
    {
        if ($this->isDead) return;

        $this->pv -= $damage;

        if ($this->pv <= 0) {
            $this->pv    = 0;
            $this->isDead = true;
        }
    }

    public function moveCloseTo($target): void {
        if ($this->isDead) return;

        if (!($target instanceof IUnit)) {
            throw new Exception("Erreur dans AMonster. Le paramètre n'est pas un IUnit.");
        }

        if ($this->closeTarget === $target) {
            return;
        }

        $this->closeTarget = $target;
        echo $this->nom . " se rapproche de " . $target->getName() . "." . PHP_EOL;
    }

    public function recoverAP(): void
    {
        if ($this->isDead) return;

        $this->pa = min(50, $this->pa + 7);
    }
}