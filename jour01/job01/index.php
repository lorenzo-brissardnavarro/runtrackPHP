<?php

$str = "LaPlateforme";
echo($str.'</br>');

$str2 = "Vive";
$str3 = "!";
echo($str2 . " " . $str . " " . $str3."</br>");

$val = 6;
echo($val."</br>");
$val = $val + 4;
echo($val."</br>");

$myBool = true;
echo($myBool." : Lorsque echo est utilisé avec true, PHP affiche automatiquement 1, car true est converti en cette chaîne de caractères </br>");
$myBool = false;
echo($myBool."Lorsque echo est utilisé avec false, aucune sortie n'est produite, car false est converti en une chaîne vide");