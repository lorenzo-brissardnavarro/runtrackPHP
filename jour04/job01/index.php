<?php

$count = 0;
if(!empty($_GET)){
    foreach ($_GET as $key => $value) {
        $count++;
        echo "<p>" . $key . " => " . $value . "</p>";
    }
    echo "<p> Nombre d'arguments : " . $count . "</p>";
}

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Méthode Get</title>
    <style>
        p {
            text-align:center;
        }
        form {
            border-radius: 5px;
            background-color: #f2f2f2;
            padding: 20px;
            width: 350px;
            margin: 0 auto;
            margin-top:50px;
        }

        input[type=email],
        input[type=password] {
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
            <input type="email" name="email" placeholder="Adresse mail">
            <input type="password" name="pwd" placeholder="Mot de passe">
            <input type="submit" value="Envoyer le formulaire">
        </form>
    </main>
</body>
</html>