<?php

$str = "I'm sorry Dave I'm afraid I can't do that";

$array = ["a", "e", "i", "o", "u", "y", "A", "E", "I", "O", "U", "Y"];


function countVowels($str, $array){
    $count = 0;
    for ($i = 0; isset($str[$i]); $i++) {
        for ($j = 0; isset($array[$j]); $j++) {
            if ($str[$i] == $array[$j]) {
                $count++;
            }
        }
    }
    return $count;
}

echo countVowels($str, $array);