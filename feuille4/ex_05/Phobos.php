<?php

// classe Mars

namespace planet ;
class Mars
{
    private string $name;

    public function __construct()
    {
        $this->name = "Mars";
    }

    public function getName(): string
    {
        return $this->name;
    }
}


namespace Planet\moon ;

 use planet\mars ;

class Phobos{

  private $mars ;

    public function __construct($mars){

        if ($mars !== null){
            echo "phobos placé en orbite. \n";
        }
        else {
            echo "Aucune planet fournie. \n";
        }

            
        }
    public function getMars(): ?\Mars {
        return $this->mars;
    }

}
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                               
?>