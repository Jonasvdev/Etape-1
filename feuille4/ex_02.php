<?php


class Astronaut {
    
     // Compteur statique partagé entre toutes les instances.
      // Permet de générer un identifiant unique et auto-incrémenté.
     
     private static int $count = 0;
//  string Nom de l'astronaute 
    private string $name;

//  int Nombre de collations disponibles (initialisé à 0) 
    private int $snacks;

//  mixed Destination de l'astronaute (null par défaut) 
    private mixed $destination;

//  Identifiant unique de l'astronaute 
    private int $id;

    
     // Constructeur de la classe Astronaut.
     //Le nom est obligatoire. Les autres attributs sont initialisés à leurs valeurs par défaut.
     // L'identifiant est automatiquement assigné et incrémenté à chaque création.
    
    public function __construct(string $name) {
        $this->name = $name;
        $this->snacks = 0;          // Aucune collation au départ
        $this->destination = null;  // Pas encore de destination assignée
        $this->id = self::$count++; // Assignation puis incrémentation du compteur

        // Affichage du message de création
        echo "Astronaut $this->name created!" . PHP_EOL;
    }

    
     // Retourne l'identifiant unique de l'astronaute.
    // Aucun setter n'est fourni : l'identifiant est en lecture seule.
    
    public function getId(): int {
        return $this->id;
    }

    
     // Retourne la destination de l'astronaute.
     // Aucun setter n'est fourni : la destination est en lecture seule depuis l'extérieur.
     
  
    public function getDestination(): mixed {
        return $this->destination;
    }
}


?>