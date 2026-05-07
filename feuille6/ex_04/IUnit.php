<?php

interface IUnit
{
    public function getName(): string;
    public function getPV(): int;
    public function getPA(): int;

    public function equip(): void;
    public function attack(IUnit $target): void;
    public function receiveDamage(int $damage): void;
    public function moveCloseTo(IUnit $target): void;
    public function recoverAP(): void;
}