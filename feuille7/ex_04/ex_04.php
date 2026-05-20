<?php

//session_start();

function remove_session() :void {


    if(session_status() === PHP_SESSION_NONE){

        session_start();
        
    }

    // Note : cela détruira la session et pas seulement les données de session !

    if (ini_get("session.use_cookies")) {

        $params = session_get_cookie_params();

        setcookie(session_name(), '', time() - 42000,
        
            $params["path"], $params["domain"],
            $params["secure"], $params["httponly"]
        );
    }


    // vider les données de la session

    $_SESSION = [] ;

    // Detruire la session 

    session_destroy();

    // Réinitialiser le tableau de session

    session_reset();

    $_SESSION = [];
}




?>