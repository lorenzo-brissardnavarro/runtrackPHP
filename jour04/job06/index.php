<?php

if(!empty($_POST)){
    if($_POST["number"] % 2 == 0){
        echo "<p>" . $_POST["number"] . " est nombre pair </p>";
    } else {
        echo "<p>" . $_POST["number"] . " est nombre impair </p>";
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
            <input type="number" name="number" placeholder="Entrer un nombre" min="0" max="100">
            <input type="submit" value="Envoyer le formulaire">
        </form>
    </main>
</body>
</html>