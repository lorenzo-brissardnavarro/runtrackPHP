<?php

if(!empty($_POST)){
    if($_POST["username"] == "John" && $_POST["password"] == "Rambo"){
        echo "C'est pas ma guerre !";
    } else {
        echo "Votre pire cauchemar !";
    }
}

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Méthode POST</title>
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