<?php

if(isset($_POST["reset"])){
    setcookie("prenom1", "", time() - 3600, "/");
    unset($_COOKIE["prenom1"]);
}

if(!empty($_POST["prenom"])){
    setcookie("prenom1", $_POST["prenom"], time() + (86400 * 30), "/");
    $_COOKIE["prenom1"] = $_POST["prenom"];
}



?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Méthode POST</title>
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
        <?php
        if(empty($_COOKIE["prenom1"])) {
           echo '<form action="" method="POST">
            <input type="text" name="prenom" placeholder="Entrer le prénom">
            <input type="submit" value="Connexion">
            </form>';
        } else {
            echo '<section><p>Bonjour ' . $_COOKIE["prenom1"] . '</p></section><form action="" method="POST">
            <input type="submit" name="reset" value="Déconnexion">
            </form>';
        }
        ?>
    </main>
</body>
</html>