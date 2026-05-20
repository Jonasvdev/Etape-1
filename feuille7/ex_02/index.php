<?php

$name = 'Platypus' ;

    if (isset($_GET['name'])){

        $name = $_GET['name'];

    } else
        $name = $this->name;

 echo 'Bonjour' .$name ;


?>