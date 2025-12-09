<?php
require_once __DIR__ . "/auth.php";
?>

<nav>
    <div class="logo">
        <a href="/">
            <img src="/img/logo.png" alt="Лого">
        </a>
    </div>

    <!-- Mobile menu button -->
    <div class="mobile-menu-btn">☰</div>

    <!-- Navigation links -->
    <ul>
        <li><a href="/">Начало</a></li>
        <li><a href="/services.php">Услуги</a></li>
        <li><a href="/workshops.php">Ателие за Емоции</a></li>
        <li><a href="/contact.php">Контакт</a></li>

        <?php if (!isLoggedIn()): ?>
            <li><a href="/login.php">Вход</a></li>
        <?php else: ?>
            <li><a href="/dashboard.php">Админ</a></li>
            <li><a href="/logout.php">Изход</a></li>
        <?php endif; ?>
    </ul>
</nav>
