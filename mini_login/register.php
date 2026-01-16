<?php
include 'config.php';
include 'includes/header.php';

function register_management($pdo, $username, $password) {
    if (strlen($username) < 3) {
        return "Le nom d'utilisateur doit contenir au moins 3 caractères";
    }
    if (strlen($password) < 6 || !preg_match('/[0-9]/', $password)) {
        return "Le mot de passe doit contenir au moins 6 caractères et au moins un chiffre";
    }
    $sql = "SELECT id FROM users WHERE username = :username";
    $query = $pdo->prepare($sql);
    $query->execute([':username' => $username]);
    $result = $query->fetch(PDO::FETCH_ASSOC);
    if ($result !== false) {
        return "Ce nom d'utilisateur est déjà utilisé";
    }
    $hash = password_hash($password, PASSWORD_DEFAULT);
    $sql = "INSERT INTO users (username, password) VALUES (:username, :password)";
    $query = $pdo->prepare($sql);
    $query->execute([':username' => $username, ':password' => $hash]);
    return true;
}


?>

<main>
    <h1>Page d'inscription</h1>
    <form action="" method="POST">
        <input type="text" name="username" placeholder="Entrer votre nom d'utilisateur">
        <input type="password" name="password" placeholder="Choisissez votre mot de passe">
        <input type="submit" value="S'inscrire">
    </form>

    <section>
        <?php
        if (!empty($_POST)) {
            if (empty($_POST["username"]) || empty($_POST["password"])) {
                echo "<p>Veuillez remplir l'ensemble des champs</p>";
            } else {
                $result = register_management($pdo, trim($_POST["username"]), $_POST["password"]);
                if ($result === true) {
                    header("Location: index.php");
                    exit;
                } else {
                    echo "<p>" . $result . "</p>";
                }
            }
        }
        ?>
    </section>
</main>

<?php include 'includes/footer.php'; ?>