<?php

function occurrences($str, $char){
    $count = 0;
    for ($i=0; isset($str[$i]); $i++) { 
        if($str[$i] == $char){
            $count++;
        }
    }
    return $count;
}

echo "Dans la chaine de caractères 'Bonjour', la lettre 'o' apparait " . occurrences("Bonjour", "o") . " fois<br>";
echo "Dans la chaine de caractères 'Ceci est une phrase de test', la lettre 'e' apparait " . occurrences("Ceci est une phrase de test", "e") . " fois<br>";