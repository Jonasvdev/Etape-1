<?php

interface IUnit
{
    public function equip($weapon): void;

    public function attack($target): void;

    public function receiveDamage($damage): void;

    public function moveCloseTo($target): void;
    
    public function recoverAP(): void;
}