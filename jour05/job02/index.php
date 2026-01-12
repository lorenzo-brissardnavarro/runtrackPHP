<?php


// Version avec return
function bonjour($jour){
    if($jour){
        return "Bonjour";
    } else {
        return "Bonsoir";
    }
}

echo "Le paramètre vaut true : " . bonjour(true) . "<br>";
echo "Le paramètre vaut false : " . bonjour(false) . "<br>";

// Version avec echo
function bonjour2($jour){
    if($jour){
        echo "Bonjour <br>";
    } else {
        echo "Bonsoir <br>";
    }
}

bonjour2(true);
bonjour2(false);