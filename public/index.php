<?php
$page_title = "Начало";
$admin_page = false;

require_once __DIR__ . '/../includes/auth.php';
include __DIR__ . '/../includes/header.php';
?>

<!-- =============================== -->
<!--        HERO SECTION             -->
<!-- =============================== -->

<section class="hero parallax-tilt">

    <!-- Floating playful elements -->
    <img src="/img/hero_sun.png" class="float-sun" alt="">
    <img src="/img/icon_child.png" class="float-child" alt="">
    <img src="/img/icon_family.png" class="float-family" alt="">
    <img src="/img/icon_talk.png" class="float-talk" alt="">

    <!-- Background kids image -->
    <img src="/img/hero_kids.png" class="hero-kids" alt="">

    <div class="hero-content">
        <img src="/img/logo.png" class="hero-logo" alt="Лого Психолог Джулия">

        <h1>Психологическа подкрепа за деца, родители и семейства</h1>
        <p>Топла, професионална грижа за емоционалното развитие и благополучие.</p>

        <div class="hero-buttons">
            <a href="/contact.php" class="btn-primary">Запази час</a>
            <a href="/workshops.php" class="btn-secondary">Ателие за Емоции</a>
        </div>
    </div>
</section>


<!-- =============================== -->
<!--        ABOUT SECTION            -->
<!-- =============================== -->

<section class="about">
    <div class="about-container">
        <div class="about-text">
            <h2>За Мен</h2>
            <p>
                Аз съм Джулия Божидарова – психолог, работещ с деца, родители и семейства.
                Подкрепям децата да разбират своите емоции, а родителите – да изграждат здрава
                и спокойна семейна среда.
            </p>
            <a href="/services.php" class="btn-outline btn-about">Виж услуги</a>
        </div>

        <div class="about-img">
            <img src="/img/about_therapy.png" alt="Терапия с деца">
        </div>
    </div>
</section>


<!-- =============================== -->
<!--       SERVICES SECTION          -->
<!-- =============================== -->

<section class="services">
    <h2>Услуги</h2>

    <div class="service-grid">
        <div class="service-card reveal-animate tilt-card">
            <img src="/img/icon_talk.png" alt="Консултации">
            <h3>Индивидуални Консултации</h3>
            <p>Подкрепа, анализ и емоционално развитие на деца и възрастни.</p>
        </div>

        <div class="service-card reveal-animate tilt-card">
            <img src="/img/icon_child.png" alt="Работа с деца">
            <h3>Работа с Деца</h3>
            <p>Игротерапия, арт техники, развитие на емоции чрез творчество.</p>
        </div>

        <div class="service-card reveal-animate tilt-card">
            <img src="/img/icon_family.png" alt="Семейни сесии">
            <h3>Семейни Срещи</h3>
            <p>Подобряване на общуването, доверие и семейни отношения.</p>
        </div>
    </div>
</section>


<!-- =============================== -->
<!--         EMOTIONS WORKSHOP       -->
<!-- =============================== -->

<section class="workshop-teaser parallax-tilt">

    <img src="/img/icon_child.png" class="wt-float wt-child" alt="">
    <img src="/img/icon_family.png" class="wt-float wt-family" alt="">
    <img src="/img/icon_talk.png" class="wt-float wt-talk" alt="">
    <img src="/img/hero_sun.png" class="wt-float wt-sun" alt="">

    <img src="/img/workshop_teaser.png" class="workshop-img" alt="Ателие за Емоции">

    <div class="workshop-content">
        <h2>Ателие за Емоции</h2>
        <p>Забавно и полезно преживяване за деца, което развива емоционалната интелигентност!</p>
        <a href="/workshops.php" class="btn-primary btn-workshop-more">Виж повече</a>
    </div>
</section>

<?php include __DIR__ . '/../includes/footer.php'; ?>
