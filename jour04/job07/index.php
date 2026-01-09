<?php

function draw_ligne_triangle($hauteur, $extremity) {
    $ligne = ""; 
    for ($i=0; $i < $hauteur-$extremity; $i++) { 
        $ligne .= " ";
    } 
    $ligne .= "/"; 
    for ($i=0; $i < ($extremity*2); $i++) { 
        $ligne .= "_"; 
    } $ligne .= "\\"; 
    for ($i=0; $i < $hauteur-$extremity; $i++) { 
        $ligne .= " "; 
    } 
    return $ligne; 
} 

function draw_ligne_rectangle($largeur, $hauteur, $extremity){
    $ligne = "|";
    if($extremity == $hauteur-1){
        for ($i=0; $i < $largeur-2; $i++) { 
            $ligne .= "_";
        }
    } else {
        for ($i=0; $i < $largeur-2; $i++) { 
            $ligne .= " ";
        }
    }
    $ligne .= "|";
    return $ligne;
}

function draw($hauteur){
    if(!empty($_GET["largeur"]) && !empty($_GET["hauteur"])){
        echo "<section><pre>";
        for ($i = 0; $i < $hauteur; $i++) {
            echo draw_ligne_triangle($_GET["hauteur"] , $i) . "\n";
        }
        for ($i=0; $i < $hauteur; $i++) {
            echo draw_ligne_rectangle($_GET["largeur"], $_GET["hauteur"], $i) . "\n";
        }
        echo "</pre></section>";
    }
}

function form_is_valid() {
    if (empty($_GET["largeur"]) || empty($_GET["hauteur"])) {
        return ["valid" => false, "message" => "Erreur : veuillez compléter l'ensemble des champs"];
    }
    elseif ($_GET["largeur"] != 2 * $_GET["hauteur"]) {
        return ["valid" => false, "message" => "Erreur : la largeur doit être le double de la hauteur"];
    }
    return ["valid" => true, "message" => ""];
}


$errorMessage = "";

if (!empty($_GET)) {
    $result = form_is_valid();
    if ($result["valid"]) {
        draw($_GET["hauteur"]);
    } else {
        $errorMessage = $result["message"]; 
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
        }
        p {
            color:red;
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

        input[type=number] {
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
            <input type="number" name="largeur" placeholder="Entrer la largeur de la maison" min="1" max="50">
            <input type="number" name="hauteur" placeholder="Entrer la hauteur de la maison" min="1" max="50">
            <input type="submit" value="Envoyer le formulaire">
            <?php
            if(!empty($errorMessage)){
                echo "<p>" . $errorMessage . "</p>";
            }
            ?>
        </form>
    </main>
</body>
</html>