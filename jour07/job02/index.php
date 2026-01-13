<?php

if (isset($_POST["reset"])){
    setcookie("nbvisites", 0, time() + 3600, "/");
    $_COOKIE["nbvisites"] = 0;
}

if(!isset($_COOKIE["nbvisites"])){
    $nb = 1;
}  else {
    $nb = $_COOKIE["nbvisites"] +1;
}

setcookie("nbvisites", $nb, time() + 3600, "/");

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>
        <?php echo "Nombre de visites : " . $nb ?>
    </h1>
    <form action="" method="POST">
        <input type="submit" name="reset" value="Réinitialiser le compteur">
    </form>
</body>
</html>