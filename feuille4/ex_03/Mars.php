<?php

// 1. Première classe Mars (chocolat) de l'exercice 1

namespace chocolate {
    class Mars {
        private string $name = "Mars";

        public function getName() { 
            return $this->name;
        }
    }
}

// 2. Nouvelle classe Mars (planète) dans le namespace planet

namespace planet {
    class Mars {

        // Attribut privé size
        private int $size;

        // Constructeur avec taille optionnelle

        public function __construct($size = null) {
            $this->size = $size;
        }

        // Getter pour size

        public function getSize() {
            return $this->size;
        }

        // Setter pour size

        public function setSize($size) {
            $this->size = $size;
        }
    }
}



?>
