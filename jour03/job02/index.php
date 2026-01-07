<?php

$str = "Tous ces instants seront perdus dans le temps comme les larmes sous la pluie.";

function len($str){
    $count = 0;
    while (isset($str[$count])) {
        $count++;
    }
    return $count;
}

function shorten($str){
    $newStr = "";
    for ($i = 0; $i < len($str); $i += 2) {
        $newStr .= $str[$i];
    }
    return $newStr;
}

$newStr = shorten($str);
echo $newStr;


// Autre version pour faire l'exercice
function shorten2($str){
    $i = 0;
    $result = "";
    while (isset($str[$i])) {
        if ($i % 2 == 0) {
            $result .= $str[$i];
        }
        $i++;
    }
    return $result;
}

echo "<br>" . shorten2($str);

