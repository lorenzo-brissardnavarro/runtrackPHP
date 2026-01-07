<?php

$str = "Dans l'espace, personne ne vous entend crier";

function count_characters($str){
    $count = 0;
    while (isset($str[$count])) {
        $i++;
    }
    return $count;
}

echo "Dans la phrase : " . $str . " il y a " . count_characters($str) . " caractères";