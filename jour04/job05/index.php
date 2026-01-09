<?php

if(!empty($_POST)){
    if($_POST["username"] == "John" && $_POST["password"] == "Rambo"){
        echo " <p> C'est pas ma guerre ! </p>";
    } else {
        echo "<p> Votre pire cauchemar ! </p>";
    }
}

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Méthode POST</title>
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

        input[type=username],
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
        <form action="" method="POST">
            <input type="username" name="username" placeholder="Nom d'utilisateur">
            <input type="password" name="password" placeholder="Mot de passe">
            <input type="submit" value="Envoyer le formulaire">
        </form>
    </main>
</body>
</html>