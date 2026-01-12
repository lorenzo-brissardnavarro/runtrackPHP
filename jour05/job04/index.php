<?php

function calcule($nb1, $operateur, $nb2){
    switch($operateur) {
        case "+":
            return $nb1 + $nb2;
        case "-":
            return $nb1 - $nb2;
        case "*":
            return $nb1 * $nb2;
        case "/":
            if($nb2 == 0){
                return "Impossible de diviser par zéro";
            } else{
                return $nb1 / $nb2;
            }
        case "%":
            return $nb1 % $nb2;
        default:
            return "Veuillez saisir un opérateur valide";
    }
}

echo "4 + 6 = " . calcule(4, "+", 6) . "<br>";
echo "8 - 5 = " . calcule(8, "-", 5) . "<br>";
echo "3 * 7 = " . calcule(3, "*", 7) . "<br>";
echo "3 / 2 = " . calcule(3, "/", 2) . "<br>";
echo "3 % 2 = " . calcule(3, "%", 2) . "<br>";
echo "8 / 0 = " . calcule(8, "/", 0) . "<br>";
echo "3 . 2 = " . calcule(3, ".", 2) . "<br>";