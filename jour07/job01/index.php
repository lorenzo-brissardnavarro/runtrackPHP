<?php

session_start();

if(!isset($_SESSION["nbvisites"])){
    $_SESSION["nbvisites"] = 0;
} 
if (isset($_GET["reset"])){
    $_SESSION["nbvisites"] = 0;
}

$_SESSION["nbvisites"]++;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>
        <?php echo "Nombre de visites : " . $_SESSION["nbvisites"] ?>
    </h1>
    <form action="" method="GET">
        <input type="submit" name="reset" value="Réinitialiser le compteur">
    </form>
</body>
</html>