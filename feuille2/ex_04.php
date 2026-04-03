<?php

// une fonction qui prend un mot de passe en clair et renvoie un tableau 
// contenant le mot de passe haché en MD5, ainsi que le sel utilisé pour 
// le hachage. Le sel doit être différent à chaque appel.

function my_password_hash(string $password) : array{

    // Générer un sel aléatoire
    $salt = bin2hex(random_bytes(8));

    // Créer le hash (mot de passe + sel)
    $hash = md5($password . $salt);

    // Retourner sous forme de tableau
    
    return [
        "salt" => $salt,
        "hash" => $hash
    ];
}

function my_password_verify(string $password, string $salt, string $hash) : bool {
    
    // Recalculer le hash avec le même sel
    $new_hash = md5($password . $salt);

    // Comparer
    return $new_hash === $hash;
}




?>