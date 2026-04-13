<?php

// cREATION D'UNE NOUVELLE CLASSE Gecko
class Gecko {

    private $age;
    private $name;
    private $energy;
    private $drunk;
    private $snake;

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



    // Si elle est appeléé avec une chaîne de caractere, elle affiche "Bonjour << chaîne>> , je suuis <Nom> ! >> oû << chaîne >> est la chaîne passée en parametre
    
    public function hello($arg): void { 

            if (is_string($arg)){

                if($this->name){ 

                echo "Bonjour " . $arg . ", je suis " . $this->name . " !\n";

            } elseif ($this->name == "") { 

                echo "Bonjour, je suis " . $arg . " !\n";
            }


        }

    // si un entier est passé en parametre  , on affiche << Bonjour, je suis <Nom>! >> autant de fois que l'entier passé en parametre

        if (is_int($arg)){

            for ($i = 0; $i < $arg; $i++){

                if($this->name){

                    echo "Bonjour, je suis " . $this->name . " !\n";

                } elseif ($this->name == "") { 

                    echo "Bonjour !\n";
                }
            }
        }

    

}


// Creation d'une nouvelle methode <<eat>>



    public function eat(string $food) { 


        // elle ne renvoie rien si :

        if ($food == "MEAT"){

            return "Yummy !\n";
            
        } elseif ($food == "Vegetables"){

            return "Erk !\n";
            
        } else {

            return "I can't eat this !\n";

    }
    }



// On ajoute un accesseur et un mutateur pour l'attribut <<energy>>

// Chaque fois que votre Gecko mange quelque chose, il gagnera ou perdra de l'énergie.

    public function getEnergy(): int {

         return $this->energy ?? 0; // si l'énergie n'est pas définie, on retourne 0


    }


    public function setEnergy(int $energy): void {

        switch(strtolower($energy)){

            case ($energy < 0) :
                
            $energy = 0;
          break;


            case '$energy > 100 ' :
            $energy = 100;
         break;
        

            case '$food == "MEAT"':
    
            $energy += 10;

        break;
                    
            case '$food == "Vegetables"':
        
            $energy -= 10;
        break;  
                    
           default:
           $energy = $energy;  // si le gecko mange autre chose que de la viande ou des légumes, son énergie ne change pas
            

    }
        
}
  

// ajout de la méthode <<work>>

   public function work(): void {
    
    // Si énergie >= 25 "il travaille", sinon "il a trop sommeil et fait une sieste"

      switch($this->energy>= 25){
      
            case (true):

                echo "Je travaille T.T" . PHP_EOL;

                $this->energy -= 9;
                break;

         
            case (false):

                echo "Hé… J'ai trop sommeil, je ferais mieux de faire une sieste !" . PHP_EOL;

                $this->energy += 50;
                break;

      default:

                echo "Je ne sais pas quoi faire !\n";
                break;       
        }
}


// 

    public function fraternize(Gecko $other): void { 
       

        if ($other instanceof Gecko){

            if ($this->energy >= 30 && $other->getEnergy() >= 30){

                echo "je vais boire un verre avec " . $other->getName() . " !\n";
                echo "je vais boire un verre avec " . $this->getName() . " !\n";

                $this ->setEnergy($this->getEnergy() - 30);
                $other->setEnergy($other->getEnergy() - 30);

        // ils deviennent ivres


                $this->drunk = true;
                $other->drunk = true;

               
            }

            // Les deux sont fatigués

            elseif ($this->energy < 30 && $other->getEnergy() < 30) {

                echo "Pas aujourd'hui " . $other->getName() . " !\n";
                echo "Pas aujourd'hui " . $this->getName() . " !\n";


            }

            // l'un des deux est fatigué

            else {

                if ($this->energy < 30){

                    echo "Pas aujourd'hui " . $other->getName() . " Je suis trop fatigué pour sortir !\n";
                    echo "Oh c´est dommage, une autre fois " . $this->getName() . " !\n";

                } else {

                    echo "Désolé " . $this->getName() . "Je suis trop fatigué pour sortir !\n";
                    echo "Oh c´est dommage, une autre fois alors" . $other->getName() . " !\n";

                }
            }

            // si c´est un serpent
        class snake {}

            if ($other instanceof Snake){

             $nake= $other->getName();

            
                    if ($this->energy >= 10 ){

                        $this->energy = 0;  

                        // le gecko perd toute son énergie

                        echo "Fuyons !!! \n";

                    } else {
                    echo "... !\n";
                    }

                } 
            
            

                    else {

                            echo "Pas question .!\n";
                    }



     }
        
    

}

}

?>









