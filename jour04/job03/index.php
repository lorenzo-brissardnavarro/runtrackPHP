<?php

$count = 0;
if(!empty($_POST)){
    foreach ($_POST as $key => $value) {
        $count++;
        echo  "<p>" . $key . " => " . $value . "</p><br>";
    }
    echo "<p> Nombre d'arguments : " . $count . "</p>";
}

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Méthode Post</title>
</head>
<body>
    <main>
        <form action="" method="POST">
            <input type="email" name="email" placeholder="Adresse mail">
            <input type="password" name="pwd" placeholder="Mot de passe">
            <input type="submit" value="Envoyer le formulaire">
        </form>
    </main>
</body>
</html>