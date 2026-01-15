<?php

$pdo = new PDO("mysql:host=localhost;dbname=jour08;charset=utf8", "root", "");

$sql = "INSERT INTO etudiants (prenom, nom, naissance, sexe, email) VALUES (:prenom, :nom, :naissance, :sexe, :email)";

$query = $pdo -> prepare($sql);
$query -> execute(array(':prenom' => "Aicha", ':nom' => "Ouattara", ':naissance' => "1998-01-01", ':sexe' => "Femme", ':email' => "aicha.ouattara.pro@laplateforme.io"));



?>
