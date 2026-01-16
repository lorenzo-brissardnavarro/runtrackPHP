<?php
include 'config.php';
include 'includes/header.php';

function login_management($pdo, $username, $password) {
    $sql = "SELECT * FROM users WHERE username = :username";
    $query = $pdo->prepare($sql);
    $query->execute([':username' => $username]);
    $user = $query->fetch(PDO::FETCH_ASSOC);
    if ($user === false) {
        return "Identifiant ou mot de passe incorrect";
    }
    if (!password_verify($password, $user['password'])) {
        return "Identifiant ou mot de passe incorrect";
    }
    $_SESSION['user'] = ['id' => $user['id'], 'username' => $user['username']];
    return true;
}


?>


<main>
    <h1>Page de connexion</h1>
    <form action="" method="POST">
        <input type="text" name="username" placeholder="Entrer votre nom d'utilisateur">
        <input type="password" name="password" placeholder="Mot de passe">
        <input type="submit" value="Se connecter">
    </form>
    <section>
        <?php
        if (!empty($_POST)) {
            if (empty($_POST["username"]) || empty($_POST["password"])) {
                echo "<p>Veuillez remplir l'ensemble des champs</p>";
            } else {
                $result = login_management($pdo, trim($_POST["username"]), $_POST["password"]);
                if ($result === true) {
                    header("Location: profile.php");
                    exit;
                } else {
                    echo "<p>" . $result . "</p>";
                }
            }
        }
        ?>
    </section>

    <a href="register.php">Créer un compte</a>
</main>

<?php include 'includes/footer.php'; ?>