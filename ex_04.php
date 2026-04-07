<?php

// cREATION D'UNE NOUVELLE CLASSE Gecko
class Gecko {

    private $age;
    private $name;

    // Constructeur de la classe
    public function __construct(string $name, int $age = 0) {

    // stockage du nom dans l'attribut

        $this->name = $name;
        $this->age = $age;

    if ($name !== ""){ 

        echo "Bonjour " . $this->name . " ! " . PHP_EOL;
    } 
    else{
        echo "Bonjour !\n";

    }



}
    
    public function getname(): string {

        return $this->name;
}


    public function getAge(): int {

    return $this->age;

}

    public function setAge(int $age): void {

    $this->age = $age;

}

    public function status(): void { 

        switch(true){

            case ($this->age ==  0);
            echo "Gecko non né \n";
            break;

            case($this->age == 1 || $this->age == 2):

            echo "bébé gecko \n";
            break;

            case ($this->age >= 3 && $this->age <= 10):

                echo "Gecko adulte\n";
                break;

            case ($this->age >= 11 && $this->age <= 13):

                echo "Vieux gecko\n";
                break;

            default:

                echo "Gecko impossible\n";
                break;
        }
    }

  // si le gecko disparaît , on affiche un message d'au revoir
public function __destruct() {

       if ($this->name !== ""){

        echo "Au revoir " . $this->name . " !\n";  

     } else {
        echo "Au revoir !\n";
     }
     
    } 
    

}

?>
