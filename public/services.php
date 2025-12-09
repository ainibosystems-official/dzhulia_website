<?php
$page_title = "Услуги";
include __DIR__ . "/../includes/auth.php";
include __DIR__ . "/../includes/header.php";
?>

<section class="services">
    <h2>Услуги</h2>

    <div class="service-grid">

        <div class="service-card reveal-animate tilt-card">
            <img src="/img/icon_talk.png" alt="Консултации">
            <h3>Индивидуални Консултации</h3>
            <p>Подкрепа, анализ и емоционално развитие на деца и възрастни.</p>
            <div class="price">50 лв.</div>
        </div>

        <div class="service-card reveal-animate tilt-card">
            <img src="/img/icon_child.png" alt="Работа с деца">
            <h3>Работа с Деца</h3>
            <p>Игротерапия, арт техники, развитие на емоциите чрез творчество.</p>
            <div class="price">40 лв.</div>
        </div>

        <div class="service-card reveal-animate tilt-card">
            <img src="/img/icon_family.png" alt="Семейни срещи">
            <h3>Семейни Срещи</h3>
            <p>Подобряване на общуването, доверието и семейните отношения.</p>
            <div class="price">60 лв.</div>
        </div>

    </div>
</section>

<?php include __DIR__ . "/../includes/footer.php"; ?>
