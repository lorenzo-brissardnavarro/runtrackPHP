<?php

session_start();

function creation_grille(){
    $grille = [["-", "-", "-"], ["-", "-", "-"], ["-", "-", "-"]];
    return $grille;
}


function est_remplie($grille){
    foreach ($grille as $value) {
        foreach ($value as $value1) {
            if($value1 == '-'){
                return false;
            }
        }
    }
    return true;
}


function victoire($grille){
    for ($i=0; $i < 3; $i++) { 
        if($grille[$i][0] != '-' && $grille[$i][0] == $grille[$i][1] && $grille[$i][1] == $grille[$i][2]){
            return true;
        }
        if($grille[0][$i] != '-' and $grille[0][$i] == $grille[1][$i] && $grille[1][$i] == $grille[2][$i]){
            return true;
        }
    }
    if($grille[0][0] != '-' and $grille[0][0] == $grille[1][1] && $grille[1][1] == $grille[2][2]){
        return true;
    }
    if($grille[0][2] != '-' and $grille[0][2] == $grille[1][1] && $grille[1][1] == $grille[2][0]){
        return true;
    }
    return false;
}


function changement_joueur($joueur){
    if($joueur == 'X'){
        return "O";
    } else {
        return "X";
    }
}


if (!isset($_SESSION["grille_morpion"])) {
    $_SESSION["grille_morpion"] = creation_grille();
    $_SESSION["joueur"] = "X";
    $_SESSION["message"] = "";
}

if (isset($_POST["reset"])) {
    session_destroy();
}

if (isset($_POST["case"])) {
    [$i, $j] = explode("-", $_POST["case"]);

    if ($_SESSION["grille_morpion"][$i][$j] === "-") {
        $_SESSION["grille_morpion"][$i][$j] = $_SESSION["joueur"];

        if (victoire($_SESSION["grille_morpion"])) {
            $_SESSION["message"] = "Victoire du joueur ". $_SESSION["joueur"];
            session_destroy();
        } elseif (est_remplie($_SESSION["grille_morpion"])) {
            $_SESSION["message"] = "Match nul";
            session_destroy();
        } else {
            $_SESSION["joueur"] = changement_joueur($_SESSION["joueur"]);
        }
    }
}

?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Runtrack PHP : morpion</title>
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
            height: 60px;
            width: 100px;
        }

        th {
            background-color: #f0f0f0;
            font-weight: bold;
        }

        tr:nth-child(2n) {
            background-color: #fafafa;
        }
        section {
            text-align: center;
            font-size: 25px;
            margin-top:10px;
        }
        form {
            border-radius: 5px;
            background-color: #f2f2f2;
            padding: 20px;
            margin: 0 auto;
            margin-top:50px;
            text-align:center;
        }
    </style>
</head>
<body>
    <main>
        <section>
            <h2>
                <?php
                if(!empty($_SESSION["message"])){
                    echo $_SESSION["message"];
                } else {
                    echo "Tour de " . $_SESSION["joueur"];
                } 
                ?>
            </h2>
        </section>
        <form method="POST">
            <table>
                <?php
                for ($i = 0; $i < 3; $i++) {
                    echo "<tr>";
                    for ($j = 0; $j < 3; $j++) {
                        echo "<td>";
                        if ($_SESSION["grille_morpion"][$i][$j] === "-") {
                            echo '<button type="submit" name="case" value="' . $i . '-' . $j . '">-</button>';
                        } else {
                            echo $_SESSION["grille_morpion"][$i][$j];
                        }

                        echo "</td>";
                    }
                    echo "</tr>";
                }
                ?>
                </table>

            <br>
            <button type="submit" name="reset">Réinitialiser la partie</button>
        </form>
    </main>
</body>
</html>