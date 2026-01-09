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