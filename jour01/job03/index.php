<?php

//Variables
$boolean = true;
$int = 5;
$str = "chaine de caractères";
$float = 1.234;

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Runtrack PHP : tableau </title>
</head>
<body>
    <main>
        <table>
            <tbody>
                <tr>
                    <td>Type</td>
                    <td>Nom</td>
                    <td>Valeur</td>
                </tr>
                <tr>
                    <td><?php echo gettype($boolean) ?></td>
                    <td>Nom</td>
                    <td><?php echo($boolean) ?></td>
                </tr>
                <tr>
                    <td><?php echo gettype($int) ?></td>
                    <td>Nom</td>
                    <td><?php echo($int) ?></td>
                </tr>
                <tr>
                    <td><?php echo gettype($str) ?></td>
                    <td>Nom</td>
                    <td><?php echo($str) ?></td>
                </tr>
                <tr>
                    <td><?php echo gettype($float) ?></td>
                    <td>Nom</td>
                    <td><?php echo($float) ?></td>
                </tr>
            </tbody>
        </table>
    </main>
</body>
</html>