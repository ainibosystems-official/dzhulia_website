<?php
$page_title = "Администратор";
$admin_page = true;

include __DIR__ . "/../includes/config.php";
include __DIR__ . "/../includes/auth.php";
requireLogin();
include __DIR__ . "/../includes/header.php";
?>

<section class="admin-wrapper">

    <div class="admin-hero">
        <img src="/img/icon_sun.png" class="admin-hero-icon" alt="">
        <h1>Администратор</h1>
        <p>Управление на работилници и съдържание</p>
    </div>

    <div class="admin-form-card">

        <?php if (isset($_GET["added"])): ?>
            <div class="admin-success">✔ Успешно добавено!</div>
        <?php endif; ?>

        <h2>➕ Добави ново ателие</h2>

        <form method="POST" action="/api/add_workshop.php" class="admin-form">

            <div class="admin-input">
                <label>Заглавие</label>
                <input type="text" name="title" required placeholder="Пример: Моите Емоции">
            </div>

            <div class="admin-input">
                <label>Описание</label>
                <textarea name="description" required placeholder="Описание на ателието…"></textarea>
            </div>

            <div class="admin-grid">
                <div class="admin-input">
                    <label>Дата</label>
                    <input type="date" name="date" required>
                </div>

                <div class="admin-input">
                    <label>Цена (лв.)</label>
                    <input type="number" name="price" required placeholder="25">
                </div>

                <div class="admin-input">
                    <label>Група</label>
                    <input type="text" name="age_group" required placeholder="4–7 г.">
                </div>

                <div class="admin-input">
                    <label>Места</label>
                    <input type="number" name="seats" required placeholder="10">
                </div>
            </div>

            <button class="btn-primary admin-submit">
                Добави Ателие
            </button>

        </form>

    </div>
</section>

<?php include __DIR__ . "/../includes/footer.php"; ?>
