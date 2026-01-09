<?php


function table($tab) {
    $html = "";
    if(!empty($tab)){
        foreach ($tab as $key => $value) {
            echo "<tr>
                <td>$key</td>
                <td>$value</td>
                </tr>
            ";
        }
    }
    return $html;
}

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Méthode Post</title>
    <style>
        table {
            border-collapse: collapse;
            margin: 40px auto;
            min-width: 400px;
            font-family: Arial, sans-serif;
        }

        th, td {
            border: 1px solid #333;
            padding: 8px 12px;
            text-align: left;
        }

        th {
            background-color: #f0f0f0;
            font-weight: bold;
        }

        tr:nth-child(2n) {
            background-color: #fafafa;
        }
    </style>
</head>
<body>
    <main>
        <form action="" method="POST">
            <input type="email" name="email" placeholder="Adresse mail">
            <input type="password" name="pwd" placeholder="Mot de passe">
            <input type="submit" value="Envoyer le formulaire">
        </form>
        <table>
            <tbody>
                <tr>
                    <td>Clé</td>
                    <td>Valeur</td>
                </tr>
                <?php  echo table($_POST); ?>
            </tbody>
        </table>
    </main>
</body>
</html>