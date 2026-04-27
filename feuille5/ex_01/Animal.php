<?php

class Animal
{
    const MAMMAL = 0;
    const FISH = 1;
    const BIRD = 2;

    private string $name;
    private int $legs;
    private int $type;

    public function __construct(string $name, int $legs, int $type)
    {
        $this->name = $name;
        $this->legs = $legs;
        $this->type = $type;
        echo "My name is " . $this->name . " and I am a " . $this->getType() . "!\n";
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getLegs(): int
    {
        return $this->legs;
    }

    public function getType(): string
    {
        if ($this->type === self::MAMMAL)
            return "mammal";
        else if ($this->type === self::FISH)
            return "fish";
        else
            return "bird";
    }
}