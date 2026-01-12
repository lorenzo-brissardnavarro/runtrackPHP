<?php

$tab = ["a" => "4", "b" => "13", "c" => "(", "d" => "[)", "e" => "3", "f" => "|=", "g" => "6", "h" => "|-|", "i" => "|", "j" => ".]", "k" => "|<", "l" => "1", "m" => "|Y|",
"n" => "/V", "o" => "0", "p" => "|>", "q" => "0,", "r" => "|2", "s" => "5", "t" => "7", "u" => "[_]", "v" => "V", "w" => "\\v/", "x" => "}{", "y" => "'/", "z" => "2",
"A" => "4", "B" => "13", "C" => "(", "D" => "[)", "E" => "3", "F" => "|=", "G" => "6", "H" => "|-|", "I" => "|", "J" => ".]", "K" => "|<", "L" => "1", "M" => "|Y|",
"N" => "/V", "O" => "0", "P" => "|>", "Q" => "0,", "R" => "|2", "S" => "5", "T" => "7", "U" => "[_]", "V" => "V", "W" => "\\v/", "X" => "}{", "Y" => "'/", "Z" => "2",
"ä" => "A", "ö" => "O", "ü" => "U", "Ä" => "A", "Ö" => "O", "Ü" => "U"];

// Fonction double boucle mais problème d'encodage
function leetSpeak($str, $tab){
    $newStr = "";
    for ($i=0; isset($str[$i]); $i++) {
        $remplacement = "";
        foreach ($tab as $key => $value) {
            if($str[$i] == $key){
                $remplacement = $value;
                break;
            }
        }
        if($remplacement == ""){
            $newStr .= $str[$i];
        } else {
            $newStr .= $remplacement;
        }
    }
    return $newStr;
}

echo "<pre>La chaine 'Hello World !' correspond à " . leetSpeak("Hello World !", $tab) . "</pre><br>";

// Fonction double isset mais problème d'encodage
function leetSpeak2($str, $tab){
    $newStr = "";
    for ($i=0; isset($str[$i]); $i++) { 
        if(isset($tab[$str[$i]])){
            $newStr .= $tab[$str[$i]];
        } else {
            $newStr .= $str[$i];
        }
    }
    return $newStr;
}

echo "<pre>La chaine 'Joyeux Nöel 2025' correspond à " . leetSpeak2("Joyeux Nöel 2025", $tab) . "</pre>";

// Fonction double isset sans problème d'encodage avec l'utilisation de mb_substr
function leetSpeak3($str, $tab) {
    $newStr = "";
    for ($i = 0; isset($str[$i]); $i++) {
        $char = mb_substr($str, $i, 1, 'UTF-8');
        if (isset($tab[$char])) {
            $newStr .= $tab[$char];
        } else {
            $newStr .= $char;
        }
    }
    return $newStr;
}

echo "<pre>La chaine 'Joyeux Nöel 2025' correspond à " . leetSpeak3("Joyeux Nöel 2025", $tab) . "</pre>";