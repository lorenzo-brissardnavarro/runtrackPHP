<?php

$str = "Les choses que l'on possède finissent par nous posséder";

// Pas de fonction système mais problème d'encodage pour certains caractères
function reverse_str($str){
    $newStr = "";
    for ($i=0; isset($str[$i]) ; $i++) { 
        $newStr = $str[$i] . $newStr;
    }
    return $newStr;
}

// Utilisation de la fonction système mb_substr pour résoudre les problèmes d'encodage
function reverse_str2($str){
    $newStr = "";
    for ($i = 0; isset($str[$i]); $i++) {
        $char = mb_substr($str, $i, 1, 'UTF-8');
        $newStr = $char . $newStr;
    }

    return $newStr;
}

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job 06 PHP</title>
</head>
<body>
    <main>
        <h2><?php echo "La phrase '<em>" . $str . "</em>' correspond à '<em>" . reverse_str2($str) . "</em>' à l'envers" ?></h2>
    </main>
</body>
</html>