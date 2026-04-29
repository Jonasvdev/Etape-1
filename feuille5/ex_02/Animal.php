<?php

class Animal 
{
    const MAMMAL = 0;
    const FISH = 1;
    const BIRD = 2;

    private static int $count = 0;
    private static int $mammals = 0;
    private static int $fishes = 0;
    private static int $birds = 0;

    private string $name;
    private int $legs;
    private int $type;

    public function __construct(string $name, int $legs, int $type)
    {
        $this->name = $name;
        $this->legs = $legs;
        $this->type = $type;

        self::$count++;
        if ($type === self::MAMMAL)
            self::$mammals++;
        else if ($type === self::FISH)
            self::$fishes++;
        else
            self::$birds++;

        echo "My name is " . $this->name . " and I am a " . $this->getType() . "!\n";
    }

    public function __destruct()
    {
        self::$count--;
        if ($this->type === self::MAMMAL)
            self::$mammals--;
        else if ($this->type === self::FISH)
            self::$fishes--;
        else
            self::$birds--;
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

    public static function getNumberOfAnimalsAlive(): void
    {
        $count = self::$count;
        if ($count === 1)
            echo "Il y a actuellement 1 animal vivant dans notre monde.\n";
        else
            echo "Il y a actuellement " . $count . " animaux vivants dans notre monde.\n";
    }

    public static function getNumberOfMammals(): void
    {
        $count = self::$mammals;
        if ($count === 1)
            echo "Il y a actuellement 1 mammifère vivant dans notre monde.\n";
        else
            echo "Il y a actuellement " . $count . " mammifères vivants dans notre monde.\n";
    }

    public static function getNumberOfFishes(): void
    {
        $count = self::$fishes;
        if ($count === 1)
            echo "Il y a actuellement 1 poisson vivant dans notre monde.\n";
        else
            echo "Il y a actuellement " . $count . " poisson vivants dans notre monde.\n";
    }

    public static function getNumberOfBirds(): void
    {
        $count = self::$birds;
        if ($count === 1)
            echo "Il y a actuellement 1 oiseau vivant dans notre monde.\n";
        else
            echo "Il y a actuellement " . $count . " oiseaux vivants dans notre monde.\n";
    }
}