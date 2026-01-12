<?php

function bonjour($jour){
    if($jour){
        return "Bonjour";
    } else {
        return "Bonsoir";
    }
}

echo "Le paramètre vaut true : " . bonjour(true) . "<br>";
echo "Le paramètre vaut false : " . bonjour(false) . "<br>";