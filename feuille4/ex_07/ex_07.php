<?php 

require_once "astronaut.php";
require_once "Team.php";
require_once "Mars.php";
require_once "Phobos.php";

class Team {
private string $name;

public function doAction(mixed $action = null): void {

        if($action === null) {
            echo $this->name. ": Rien a faire." . PHP_EOL;
            return;
        }

        foreach ($this->astronauts as $astronaut) {
            $astronaut->doAction($action);
        }

    }



}















?>