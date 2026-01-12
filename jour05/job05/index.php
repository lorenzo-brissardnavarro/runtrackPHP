<?php

$lettres = ["a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m", "n", "o", "p", "q", "r", "s", "t", "u", "v", "w", "x", "y", "z", "A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "O", "P", "Q", "R", "S", "T", "U", "V", "W", "X", "Y", "Z"];

function occurrences($str, $char){
    $count = 0;
    for ($i=0; isset($str[$i]); $i++) { 
        if($str[$i] == $char){
            $count++;
        }
    }
    return $count;
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
            <input type="text" name="chaine" placeholder="Entrer la chaine de caractères">
            <input type="text" name="lettre" placeholder="Entrer la lettre à analyser">
            <input type="submit" value="Envoyer le formulaire">
        </form>
        <section>
            <p>
            <?php 
            if (!empty($_GET["chaine"]) && !empty($_GET["lettre"])) {
                $isLettre = false;
                if (strlen($_GET["lettre"]) != 1) {
                    echo "Veuillez entrer une seule lettre.";
                }
                else {
                    for ($i = 0; isset($lettres[$i]); $i++) {
                        if ($_GET["lettre"] == $lettres[$i]) {
                            $isLettre = true;
                            break;
                        }
                    }
                    if ($isLettre) {
                        echo "Dans la chaine de caractères <em>'" . $_GET["chaine"] . "'</em> la lettre '" 
                            . $_GET["lettre"] . "' apparait " . occurrences($_GET["chaine"], $_GET["lettre"]) . " fois<br>";
                    } else {
                        echo "Veuillez entrer une lettre valide.";
                    }
                }
            }

            ?>
            </p>
        </section>
    </main>
</body>
</html>