
<?php

require_once "AMonster.php";
require_once "ASpaceMarine.php";

class SpaceArena {
    private array $monsters = [];
    private array $spaceMarines = [];

    public function enlistMonsters(array $monsters): void {
        foreach ($monsters as $monster) {

            if (!($monster instanceof AMonster)) {
                throw new Exception("Stop cheating!");
            }

            if (!in_array($monster, $this->monsters, true)) {
                $this->monsters[] = $monster;
            }
        }
    }

    public function enlistSpaceMarines(array $spaceMarines): void {
        foreach ($spaceMarines as $marine) {

            if (!($marine instanceof ASpaceMarine)) {
                throw new Exception("Stop cheating!");
            }

            if (!in_array($marine, $this->spaceMarines, true)) {
                $this->spaceMarines[] = $marine;
            }
        }
    }

    public function fight(): bool {
        if (count($this->monsters) === 0) {

            echo "No monster available for this battle." . PHP_EOL;
            return false;
        }

        if (count($this->spaceMarines) === 0) {

            echo "Those cowards ran away." . PHP_EOL;
            return false;
        }

        $monster = array_shift($this->monsters);
        $marine  = array_shift($this->spaceMarines);

        echo $marine->getName() . " has entered the arena." . PHP_EOL;
        echo $monster->getName() . " has entered the arena." . PHP_EOL;

        while (true) {

            $oldHP = $this->getUnitHP($monster);

            $marine->attack($monster);

            if ($this->getUnitHP($monster) === $oldHP) {

                $marine->moveCloseTo($monster);

                $marine->attack($monster);

                if ($this->getUnitHP($monster) === $oldHP) {
                    $marine->recoverAP();
                }
            }

            if ($this->isDead($monster)) {

                $marine->recoverAP();

                if (count($this->monsters) === 0) {

                    echo "The spaceMarines team has won the battle." . PHP_EOL;
                    return true;
                }

                $monster = array_shift($this->monsters);

                echo $monster->getName() . " has entered the arena." . PHP_EOL;
            }

            $oldHP = $this->getUnitHP($marine);

            $monster->attack($marine);

            if ($this->getUnitHP($marine) === $oldHP) {

                $monster->moveCloseTo($marine);

                $monster->attack($marine);

                if ($this->getUnitHP($marine) === $oldHP) {
                    $monster->recoverAP();
                }
            }

            if ($this->isDead($marine)) {

                $monster->recoverAP();

                if (count($this->spaceMarines) === 0) {

                    echo "The monsters team has won the battle." . PHP_EOL;
                    return true;
                }

                $marine = array_shift($this->spaceMarines);

                echo $marine->getName() . " has entered the arena." . PHP_EOL;
            }
        }
    }

    private function isDead($unit): bool {
        return $this->getUnitHP($unit) <= 0;
    }


    private function getUnitHP($unit): int {
        if ($unit instanceof ASpaceMarine) {

            $reflection = new ReflectionClass($unit);

            $property = $reflection->getProperty('');

            return $property->getValue($unit);
        }

        if ($unit instanceof AMonster) {

            $reflection = new ReflectionClass($unit);

            $property = $reflection->getProperty('hp');


            return $property->getValue($unit);
        }

        return 0;
    }
}

?>
```
