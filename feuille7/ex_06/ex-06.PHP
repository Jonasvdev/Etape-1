<?php

session_start();

function remove_cookie(string $cookie): void{

    setcookie($cookie ,'', time() - 3600);

        if(isset($_COOKIE['cookie'])){
            
            unset($_COOKIE['cookie']);
        }
}


?>