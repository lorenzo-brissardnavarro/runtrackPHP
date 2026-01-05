<?php
// Variables
$boolean = true;
$int = 5;
$str = "chaine de caractères";
$float = 1.234;

$array = [
    "boolean" => $boolean,
    "int" => $int,
    "string" => $str,
    "float" => $float
];

function table($tab) {
    $html = "";

    foreach ($tab as $name => $value) {
        $type = gettype($value);
        $html .= "
            <tr>
                <td>$type</td>
                <td>$name</td>
                <td>$value</td>
            </tr>
        ";
    }

    return $html;
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Runtrack PHP : tableau </title>
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
            <tbody>
                <tr>
                    <td>Type</td>
                    <td>Nom</td>
                    <td>Valeur</td>
                </tr>
                <?php echo table($array); ?>
            </tbody>
        </table>
    </main>
</body>
</html>