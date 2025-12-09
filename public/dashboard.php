<?php
$page_title = "Администратор";
$admin_page = true; 

include __DIR__ . "/../includes/config.php";
include __DIR__ . "/../includes/auth.php";
requireLogin();
include __DIR__ . "/../includes/header.php";
?>

<!-- ============================= -->
<!--         ADMIN HERO            -->
<!-- ============================= -->

<section class="admin-hero playful-hero">

    <div class="admin-hero-bg"></div>

    <!-- Floating decorative shapes -->
    <img src="/img/icon_star.png" class="admin-float admin-float-1" alt="">
    <img src="/img/icon_puzzle.png" class="admin-float admin-float-2" alt="">
    <img src="/img/icon_heart.png" class="admin-float admin-float-3" alt="">

    <div class="admin-hero-content playful-hero-content">
        <h1>Администраторски Панел</h1>
        <p>Управлявайте лесно работилниците и съдържанието на сайта.</p>
    </div>

</section>

<!-- ============================= -->
<!--        ADMIN FORM PANEL       -->
<!-- ============================= -->

<section class="admin-section">

    <div class="admin-card admin-pop tilt-card">


        <h2 class="admin-form-title">Добави Нова Работилница</h2>

        <form method="POST" action="/api/add_workshop.php" class="admin-form">

            <div class="form-row">
                <label>Заглавие</label>
                <input type="text" name="title" placeholder="Пример: Моите емоции" required>
            </div>

            <div class="form-row">
                <label>Описание</label>
                <textarea name="description" placeholder="Въведи описание…" required></textarea>
            </div>

            <div class="form-grid">

                <div class="form-row">
                    <label>Дата</label>
                    <input type="date" name="date" required>
                </div>

                <div class="form-row">
                    <label>Цена (лв.)</label>
                    <input type="number" name="price" placeholder="25" required>
                </div>

                <div class="form-row">
                    <label>Възрастова група</label>
                    <input type="text" name="age_group" placeholder="4–7 г." required>
                </div>

                <div class="form-row">
                    <label>Места</label>
                    <input type="number" name="seats" placeholder="10" required>
                </div>

            </div>

            <button class="btn-primary admin-btn pulse-hover" type="submit">
                ➕ Добави Ателие
            </button>

        </form>

    </div>

</section>

<?php include __DIR__ . "/../includes/footer.php"; ?>