<?php

class cat {}
class dog {}
class lion {}
class elephant {}
class tiger {}

// une fonction qui orend en parametre un nombre variable d'arguments et qui retourne un tableau contenant les noms de tous les objets passés en paramètre, triés par ordre alphabétique.



function my_order_class_name(mixed...$obj) : array {

    $result = array();          // Tableau final
    $uniqueClasses = array();   // Pour éviter les doublons

    // Parcourir tous les arguments

    foreach ($obj as $element) {

        // On vérifie que c'est bien un objet

        if (!is_object($element)) {

            continue; // On ignore si ce n'est pas un objet
        }

        // Récupérer le nom COMPLET de la classe

        $className = get_class($element);

        // Vérifier unicité du nom de classe

        if (in_array(strtolower($className), $uniqueClasses)) {
            continue;
        }

        // On stocke pour éviter doublon 

        $uniqueClasses[] = strtolower($className);

        // Longueur du nom de classe

        $length = strlen($className);

        // Initialise le tableau si nécessaire

        if (!isset($result[$length])) {

            $result[$length] = array();
        }

        // Ajouter l'objet dans le groupe

        $result[$length][] = $element;
    }

    // Tri des clés (longueur) en ordre croissant

    ksort($result);

    // Tri alphabétique dans chaque groupe

    foreach ($result as &$group) {

        usort($group, function ($a, $b) {

            return strcasecmp(get_class($a), get_class($b));
        });
    }

    return $result;
}





?>