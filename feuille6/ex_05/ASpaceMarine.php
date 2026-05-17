<?php

require_once 'IUnit.php';
require_once 'AWeapon.php';

abstract class ASpaceMarine implements IUnit {
    protected string   $nom;
    protected int      $pv     = 0;
    protected int      $pa     = 0;
    protected ?AWeapon $weapon = null;

    private bool   $isDead      = false;
    private ?IUnit $closeTarget = null;

    public function __construct(string $nom)
    {
        $this->nom = $nom;
    }

    // Accesseurs 

    public function getName(): string 
    { return $this->nom;    
    }
    public function getPV(): int {
         return $this->pv; 
     }
    public function getPA(): int { 
        return $this->pa; 
        }
    public function getWeapon(): ?AWeapon { 
        return $this->weapon; 
        }


    //  Méthodes de l'interface 
    public function equip($weapon): void {
        
        if ($this->isDead) return;

    // Le paramètre doit être un AWeapon

        if (!($weapon instanceof AWeapon)) {
            throw new Exception("Erreur dans ASpaceMarine. Le paramètre n'est pas un AWeapon.");
        }

        // Si l'arme est déjà portée par un autre Space Marine, on ne fait rien

        if ($weapon->isEquipped()) {
            return;
        }

        // Désquiper l'ancienne arme si besoin

        if ($this->weapon !== null) { 
            $this->weapon->setEquipped(false);
          

            echo $this->nom . " déséquipe " . $this->weapon->getName() . "." . PHP_EOL;
        }

        // Équiper la nouvelle arme

        $this->weapon = $weapon;
        $this->weapon->setEquipped(true);

        echo $this->nom . " est équipé de " . $this->weapon->getName() . "." . PHP_EOL;
    }

    public function attack($target): void{
        if ($this->isDead) return;

        if (!($target instanceof IUnit)) {
            throw new Exception("Erreur dans ASpaceMarine. Le paramètre n'est pas un IUnit.");
        }

        // Pas d'arme équipée
        if ($this->weapon === null) {
            echo $this->nom . " : Eh, c'est dingue ! Je ne vais pas me battre à mains nues." . PHP_EOL;
            return;
        }

        // Arme de mêlée : vérifier la portée

        if ($this->weapon->isMelee() && $this->closeTarget !== $target) {
            echo $this->nom . " : Je suis trop loin de " . $target->getName() . "." . PHP_EOL;
            return;
        }

        // PA insuffisants

        if ($this->pa < $this->weapon->getApcost()) {
            return;
        }

        // Attaque réussie

        echo $this->nom . " attaque " . $target->getName() . " avec une " . $this->weapon->getName() . "." . PHP_EOL;
        $this->pa -= $this->weapon->getApcost();
        $this->weapon->attack();
        $target->receiveDamage($this->weapon->getDamage());
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

    public function moveCloseTo($target): void
    {
        if ($this->isDead) return;

        if (!($target instanceof IUnit)) {
            throw new Exception("Erreur dans ASpaceMarine. Le paramètre n'est pas un IUnit.");
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

        $this->pa = min(50, $this->pa + 9); 
    }
}
