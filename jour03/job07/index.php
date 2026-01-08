<?php

$str = "Certaines choses changent, et d'autres ne changeront jamais";

function string_replacement($str){
    $newStr = "";
    for ($i=1; isset($str[$i]) ; $i++) { 
        $newStr .= $str[$i];
    }
    $newStr .= $str[0];
    return $newStr;
}

echo string_replacement($str);