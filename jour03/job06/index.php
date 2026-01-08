<?php
header( 'content-type: text/html; charset=utf-8' );
$str = "Les choses que l'on Possède finissent par nous posséder";

function reverse_str($str){
    $newStr = "";
    for ($i=0; isset($str[$i]) ; $i++) { 
        $newStr = $str[$i] . $newStr;
    }
    return $newStr;
}

echo mb_convert_encoding(reverse_str($str), "UTF-8");

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job 06 PHP</title>
</head>
<body>
    <main>
        <h2><?php echo "La phrase '" . $str . "' correspond à '" . reverse_str($str) . "' à l'envers" ?></h2>
    </main>
</body>
</html>