<?php

$pdo = new PDO("mysql:host=localhost;dbname=jour08;charset=utf8", "root", "");

$sqlQuery = "SELECT * FROM `etudiants` WHERE prenom LIKE 'T%'";
$req = $pdo->prepare($sqlQuery);
$req->execute();
$req->setFetchMode(PDO::FETCH_ASSOC);
$etudiants = $req->fetchAll();



?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Requête</title>
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
        <table>
            <thead>
                <?php
                foreach (array_keys($etudiants[0]) as $champ) {
                    echo "<th>" . $champ . "</th>";
                }
                ?>
            </thead>
            <tbody>
                <?php
                foreach ($etudiants as $value) {
                    echo "<tr>";
                    foreach ($value as $variable) {
                        echo "<th>" . $variable . "</th>";
                    }
                }
                ?>
            </tbody>
        </table>
    </main>
</body>
</html>