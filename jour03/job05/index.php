<?php

$str = "On n est pas le meilleur quand on le croit mais quand on le sait";

$dic = ["voyelles" => 0, "consonnes" => 0];

$consonnes = ["b", "c", "d", "f", "g", "h", "j", "k", "l", "m", "n", "p", "q", "r", "s", "t", "v", "w", "x", "z", "B", "C", "D", "F", "G", "H", "J", "K", "L", "M", "N", "P", "Q", "R", "S", "T", "V", "W", "X", "Z"];
$voyelles = ["a", "e", "i", "o", "u", "y", "A", "E", "I", "O", "U", "Y"];

function count_letters($str, $dic, $consonnes, $voyelles){
    for ($i=0; isset($str[$i]) ; $i++) { 
        // Boucle pour les consonnes
        for ($j=0; isset($consonnes[$j]); $j++) { 
            if ($str[$i] == $consonnes[$j]){
                $dic["consonnes"]++;
                break;
            }
        }
        // Boucle pour les voyelles
        for ($k=0; isset($voyelles[$k]); $k++) { 
            if ($str[$i] == $voyelles[$k]){
                $dic["voyelles"]++;
                break;
            }
        }
    }
    return $dic;
}

$newDic = count_letters($str, $dic, $consonnes, $voyelles);

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job 05 PHP</title>
    <style>
        table {
            border-collapse: collapse;
            margin: 40px auto;
            min-width: 400px;
            font-family: Arial, sans-serif;
        }

        th, td {
            border: 1px solid #333;
            padding: 8px 12px;
            text-align: center;
        }

        th {
            background-color: #f0f0f0;
            font-weight: bold;
        }

        tr:nth-child(2n) {
            background-color: #fafafa;
        }
    </style>
</head>
<body>
    <main>
        <table>
            <thead>
                <tr>
                <th scope="col">Consonnes</th>
                <th scope="col">Voyelles</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <th scope="row"><?php echo $newDic["consonnes"] ?></th>
                <th><?php echo $newDic["voyelles"] ?></th>
                </tr>
            </tbody>
        </table>
    </main>
</body>
</html>
