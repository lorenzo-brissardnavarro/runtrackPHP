<?php

$pdo = new PDO("mysql:host=localhost;dbname=jour08;charset=utf8", "root", "");

$sql = "UPDATE etudiants SET naissance = :naissance WHERE id = :id";

$query = $pdo -> prepare($sql);
$query -> execute([':naissance' => "1999-01-01", ':id' => 8]);


?>