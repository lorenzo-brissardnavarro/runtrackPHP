<?php

function calcule($nb1, $operateur, $nb2){
    switch($operateur) {
        case "+":
            return $nb1 + $nb2;
        case "-":
            return $nb1 - $nb2;
        case "*":
            return $nb1 * $nb2;
        case "/":
            if($nb2 == 0){
                return "Impossible de diviser par zéro";
            } else{
                return $nb1 / $nb2;
            }
        case "%":
            return $nb1 % $nb2;
        default:
            return "Veuillez saisir un opérateur valide";
    }
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

        input[type=number],
        select {
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
            <input type="number" name="nb1" placeholder="Entrer le 1er nombre">
            <select name='options' required>
                <option value='+' selected>Addition</option>
                <option value='-'>Soustraction</option>
                <option value='*'>Multiplication</option>
                <option value='/'>Division</option>
                <option value='%'>Modulo</option>
            </select>
            <input type="number" name="nb2" placeholder="Entrer le 2eme nombre">
            <input type="submit" value="Envoyer le formulaire">
        </form>
        <section>
            <p>
            <?php 
            if(!empty($_GET["nb1"]) && !empty($_GET["options"]) && (!empty($_GET["nb2"]) || $_GET["nb2"] == 0)){
                echo $_GET["nb1"] . " " . $_GET["options"] . " " . $_GET["nb2"] . " = " . calcule($_GET["nb1"], $_GET["options"], $_GET["nb2"]);
            }
            ?>
            </p>
        </section>
    </main>
</body>
</html>