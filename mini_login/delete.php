<?php
include 'config.php';
include 'includes/header.php';

$sql = "DELETE FROM users WHERE id = :id";
$query = $pdo -> prepare($sql);
$query -> execute([':id' => $_SESSION['user']['id']]);

session_destroy();
header("Location: index.php");

include 'includes/footer.php'; ?>