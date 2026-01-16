<?php
include 'config.php';
include 'includes/header.php';

if (!isset($_SESSION['user'])) {
    header("Location: index.php");
    exit;
}
?>

<main>
    <h1>Bienvenue <?php echo htmlspecialchars($_SESSION['user']['username']) ?> !</h1>
    <a href="edit.php">Modifier le profil</a><br>
    <a href="delete.php">Supprimer le profil</a><br>
    <a href="logout.php">Déconnexion</a>
</main>

<?php include 'includes/footer.php'; ?>