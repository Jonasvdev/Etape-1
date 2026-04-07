<?php

// Une fonction qui prend en parametre une chaine de caracteres representant une expression polynomiale et la simplifie

function simplify_polynomial_expression(string $expression) : string {

    $terms = explode('+', str_replace(' ', '', $expression)); // Supprimer les espaces et séparer les termes

    $simplifiedTerms = [];

    foreach ($terms as $term) {

        if (preg_match('/^(\d*)x\^(\d+)$/', $term, $matches)) {

            // Terme de la forme ax^n

            $coefficient = $matches[1] === '' ? 1 : (int)$matches[1]; // Coefficient par défaut à 1

            $exponent = (int)$matches[2];

            if (isset($simplifiedTerms[$exponent])) {

                $simplifiedTerms[$exponent] += $coefficient; // Additionner les coefficients des termes similaires

            } else {
                
                $simplifiedTerms[$exponent] = $coefficient;
            }
        } elseif (preg_match('/^(\d*)x$/', $term, $matches)) {

            // Terme de la forme ax

            $coefficient = $matches[1] === '' ? 1 : (int)$matches[1]; // Coefficient par défaut à 1

            if (isset($simplifiedTerms[1])) {

                $simplifiedTerms[1] += $coefficient; // Additionner les coefficients des termes similaires

            } else {

                $simplifiedTerms[1] = $coefficient;
            }
        } elseif (is_numeric($term)) {

            // Terme constant

            if (isset($simplifiedTerms[0])) {

                $simplifiedTerms[0] += (int)$term; // Additionner les constantes

            } else {

                $simplifiedTerms[0] = (int)$term;
            }
        }
    }

    krsort($simplifiedTerms); // Trier les termes par ordre décroissant d'exposant

    $result = [];

    foreach ($simplifiedTerms as $exponent => $coefficient) {

        if ($coefficient === 0) continue; // Ignorer les termes nuls

        if ($exponent === 0) {

            $result[] = (string)$coefficient; // Terme constant

        } elseif ($exponent === 1) {

            $result[] = ($coefficient === 1 ? '' : (string)$coefficient) . 'x'; // Terme de degré 1

        } else {

            $result[] = ($coefficient === 1 ? '' : (string)$coefficient) . 'x^' . $exponent; // Terme de degré supérieur
        }
    }

    return implode(' + ', $result);
}   



?>