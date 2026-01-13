<?php

$tab = ["a" => "4", "b" => "13", "c" => "(", "d" => "[)", "e" => "3", "f" => "|=", "g" => "6", "h" => "|-|", "i" => "|", "j" => ".]", "k" => "|<", "l" => "1", "m" => "|Y|",
"n" => "/V", "o" => "0", "p" => "|>", "q" => "0,", "r" => "|2", "s" => "5", "t" => "7", "u" => "[_]", "v" => "V", "w" => "\\v/", "x" => "}{", "y" => "'/", "z" => "2",
"A" => "4", "B" => "13", "C" => "(", "D" => "[)", "E" => "3", "F" => "|=", "G" => "6", "H" => "|-|", "I" => "|", "J" => ".]", "K" => "|<", "L" => "1", "M" => "|Y|",
"N" => "/V", "O" => "0", "P" => "|>", "Q" => "0,", "R" => "|2", "S" => "5", "T" => "7", "U" => "[_]", "V" => "V", "W" => "\\v/", "X" => "}{", "Y" => "'/", "Z" => "2",
"ä" => "A", "ö" => "O", "ü" => "U", "Ä" => "A", "Ö" => "O", "Ü" => "U", "ë" => "3"];

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


?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Méthode GET</title>
    <style>
        section {
            text-align: center;
            font-size: 25px;
            margin-top:10px;
        }
        form {
            border-radius: 5px;
            background-color: #f2f2f2;
            padding: 20px;
            width: 350px;
            margin: 0 auto;
            margin-top:50px;
        }

        input[type=text]{
            width: 100%;
            padding: 12px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type=submit] {
            width: 100%;
            background-color: #4CAF50;
            color: white;
            padding: 14px;
            margin: 8px 0;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type=submit]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <main>
        <form action="" method="GET">
            <input type="text" name="chaine" placeholder="Entrer la chaine de caractères à convertir">
            <input type="submit" value="Convertir en leet Speak">
        </form>
        <section>
            <p>
            <?php 
            if (!empty($_GET["chaine"])) {
                echo "<pre>La chaine <em>'" . $_GET["chaine"] . "'</em> correspond à " . leetSpeak3($_GET["chaine"], $tab) . "</pre>";
            }

            ?>
            </p>
        </section>
    </main>
</body>
</html>