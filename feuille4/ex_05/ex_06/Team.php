<?php

// Team represente une equipe d´astraunaute

require_once "Astronaut.php";

class Team {
    private string $name;
    private array  $astronauts = [];

    public function __construct(string $name) {
        $this->name = $name;
    }

    public function getName(): string {
        return $this->name;
    }

    public function getAstronauts(): array {
        return $this->astronauts;
    }

    public function add(mixed $astronaut): void {

        if (!($astronaut instanceof Astronaut)) {

            echo $this->name . " : Désolé, vous ne faites pas partie de l'équipe." . PHP_EOL;
            return;
        }

        $this->astronauts[] = $astronaut;
    }

    public function remove(Astronaut $astronaut): void {

        $this->astronauts = array_values(
            array_filter(
                $this->astronauts,
                fn(Astronaut $a) => $a !== $astronaut
            )
        );
    }

    public function countMembers(): int {
        return count($this->astronauts);
    }

    //  // Si vide → rien afficher
    public function showMembers(): void {
        if (empty($this->astronauts)) {
            return;
        }

        $result = [];

        foreach ($this->astronauts as $astro) {

            // Vérifie si en mission (destination != null)

            if ($astro->getDestination() !== null) {
                $status = "en mission";
            } else {
                $status = "en attente";
            }

            // On construit la phrase

            $result[] = $astro->getName() . " " . $status;
        }

        // Affichage final

        echo $this->name . ": " . implode(", ", $result) . ".\n";
    }
}

























?>