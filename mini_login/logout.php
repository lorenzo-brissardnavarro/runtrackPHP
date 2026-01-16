<?php
include 'config.php';
include 'includes/header.php';

session_destroy();
header("Location: index.php");
exit();

include 'includes/footer.php'; ?>