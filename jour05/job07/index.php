<?php

function gras($str){
    $newStr = "";
    if(65 <= ord($str[0]) && ord($str[0]) <= 90){
        $newStr = "<b>$str</b><br>";
    } else {
        $newStr = "$str<br>";
    }
    return $newStr;
}

function cesar($str, $nb){
    $newStr = "";
    for ($i=0; isset($str[$i]) ; $i++) {
        $char = $str[$i];
        if(97 <= ord($char) && ord($char) <= 122){
            $newStr .= chr((ord($char) - ord("a") + $nb) % 26 + ord("a"));
        } elseif (65 <= ord($char) && ord($char) <= 90) {
            $newStr .= chr((ord($char) - ord("A") + $nb) % 26 + ord("A"));
        } else {
            $newStr .= $char;
        }
    }
    return $newStr;
}

function plateforme($str){
    $newStr = $str;
    if($str[-2] == "m" && $str[-1] == "e"){
        $newStr .= "_";
    }
    return $newStr . "<br>";
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

        input[type=text],
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
            <input type="text" name="text" placeholder="Entrer votre texte"
                value="<?php if(!empty($_GET['text'])) echo $_GET['text']; ?>" required>
            <select name="options" required>
                <option value="gras"
                    <?php if(!empty($_GET['options']) && $_GET['options'] == 'gras') echo 'selected'; ?>>
                    Gras
                </option>
                <option value="cesar"
                    <?php if(!empty($_GET['options']) && $_GET['options'] == 'cesar') echo 'selected'; ?>>
                    César
                </option>
                <option value="plateforme"
                    <?php if(!empty($_GET['options']) && $_GET['options'] == 'plateforme') echo 'selected'; ?>>
                    Plateforme
                </option>
            </select>
            <?php if(!empty($_GET) && $_GET['options'] == 'cesar') { ?>
                <input type="number" name="number" placeholder="Entrer le décalage" min="0"
                    value="<?php if(!empty($_GET['number'])) echo $_GET['number']; ?>" required>
            <?php } ?>
            <input type="submit" value="Envoyer le formulaire">
        </form>
        <section>
            <p>
            <?php 
            if(!empty($_GET["text"]) && !empty($_GET["options"])){
                switch ($_GET["options"]) {
                    case "gras":
                        $tab = explode(" ", $_GET["text"]);
                        $newStr = "";
                        foreach ($tab as $value) {
                            $newStr .= gras($value);
                        }
                        echo $newStr;
                        break;
                    case "cesar":
                        if(!empty($_GET["number"])) {
                            echo cesar($_GET["text"], $_GET["number"]);
                        }
                        break;
                    case "plateforme":
                        $tab = explode(" ", $_GET["text"]);
                        $newStr = "";
                        foreach ($tab as $value) {
                            $newStr .= plateforme($value);
                        }
                        echo $newStr;
                        break;
                    default:
                        echo "Aucune option sélectionnée";
                        break;
                }
            }
            ?>
            </p>
        </section>
    </main>
</body>
</html>

