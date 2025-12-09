<?php
$page_title = "Вход";
include __DIR__ . "/../includes/auth.php";
include __DIR__ . "/../includes/header.php";

$error = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if ($_POST["user"] === "admin" && $_POST["pass"] === "1234") {
        $_SESSION["logged"] = true;
        header("Location: /dashboard.php");
        exit;
    } else {
        $error = "Грешно потребителско име или парола.";
    }
}
?>

<section class="login-section">

    <div class="login-card">

        <img src="/img/hero_sun.png" class="login-icon" alt="Sun">

        <h2>Вход в системата</h2>
        <p class="login-sub">Място само за администратора 😊</p>

        <?php if ($error): ?>
            <p class="login-error"><?= $error ?></p>
        <?php endif; ?>

        <form method="POST" class="login-form">
            <div class="form-group">
                <label>Потребител</label>
                <input type="text" name="user" required>
            </div>

            <div class="form-group">
                <label>Парола</label>
                <input type="password" name="pass" required>
            </div>

            <button type="submit" class="btn-primary login-btn">Влез</button>
        </form>
    </div>

</section>

<?php include __DIR__ . "/../includes/footer.php"; ?>
<script src="/js/script.js"></script>

