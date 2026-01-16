<?php
include 'config.php';
include 'includes/header.php';

if (!isset($_SESSION['user'])) {
    header("Location: index.php");
    exit;
}

function update_profile($pdo, $userId, $newUsername, $newPassword) {
    if (strlen($newUsername) < 3) {
        return "Le nom d'utilisateur doit contenir au moins 3 caractères";
    }
    if (strlen($newPassword) < 6 || !preg_match('/[0-9]/', $newPassword)) {
        return "Le mot de passe doit contenir au moins 6 caractères et un chiffre";
    }
    $sql = "SELECT id FROM users WHERE username = :username AND id != :id";
    $query = $pdo->prepare($sql);
    $query->execute([':username' => $newUsername, ':id' => $userId]);
    $result = $query->fetch(PDO::FETCH_ASSOC);
    if ($result !== false) {
        return "Ce nom d'utilisateur est déjà utilisé";
    }
    $sql = "UPDATE users SET username = :username, password = :password WHERE id = :id";
    $query = $pdo->prepare($sql);
    $query->execute([
        ':username' => $newUsername,
        ':password' => password_hash($newPassword, PASSWORD_DEFAULT),
        ':id' => $userId
    ]);
    $_SESSION['user']['username'] = $newUsername;
    return true;
}



?>

<main>
    <h1>Modification du profil</h1>
    <form action="" method="POST">
        <input type="text" name="username" placeholder="Nouveau nom d'utilisateur" value="<?php echo htmlspecialchars($_SESSION['user']['username']) ?>">
        <input type="password" name="password" placeholder="Nouveau mot de passe">
        <input type="submit" value="Modifier">
    </form>
    <section>
        <?php
        if (!empty($_POST)) {
            if (empty($_POST["username"]) || empty($_POST["password"])) {
                echo "<p>Veuillez remplir l'ensemble des champs</p>";
            } else {
                $result = update_profile($pdo, $_SESSION['user']['id'], trim($_POST["username"]), $_POST["password"]);
                if ($result === true) {
                    header("Location: profile.php");
                } else {
                    echo "<p>" . $result . "</p>";
                }
            }
        }
        ?>
    </section>
</main>

<?php include 'includes/footer.php'; ?>