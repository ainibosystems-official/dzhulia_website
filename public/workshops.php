<?php
$page_title = "Ателие за Емоции";
include __DIR__ . "/../includes/config.php";
include __DIR__ . "/../includes/header.php";

$stmt = $pdo->query("SELECT * FROM workshops ORDER BY date ASC");
$workshops = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!-- ============================= -->
<!--   WORKSHOP HEADER / HERO     -->
<!-- ============================= -->

<section class="workshop-hero">

    <!-- Floating playful elements -->
    <img src="/img/hero_sun.png" class="float-sun" alt="">
    <img src="/img/icon_child.png" class="float-child" alt="">
    <img src="/img/icon_family.png" class="float-family" alt="">
    <img src="/img/icon_talk.png" class="float-talk" alt="">

    <!-- Background -->
    <div class="workshop-hero-bg"></div>

    <!-- Text -->
    <div class="workshop-hero-content">
        <h1>Ателие за Емоции</h1>
        <p>
            Творчески и емоционални работилници за деца – изпълнени с игра, учене,
            развитие и много усмивки.
        </p>
    </div>
</section>


<!-- ============================= -->
<!--        WORKSHOP LIST         -->
<!-- ============================= -->

<section class="services">
    <h2>Предстоящи Работилници</h2>

    <div class="service-grid">
        <?php $i = 0;
        foreach ($workshops as $w): ?>
            <div class="service-card reveal-animate tilt-card" style="--i: <?= $i ?>;">
                <h3><?= htmlspecialchars($w['title']) ?></h3>

                <p><?= nl2br(htmlspecialchars($w['description'])) ?></p>

                <p><strong>Дата:</strong> <?= htmlspecialchars($w['date']) ?></p>
                <p><strong>Група:</strong> <?= htmlspecialchars($w['age_group']) ?></p>

                <div class="price"><?= number_format($w['price'], 2) ?> лв.</div>
            </div>
        <?php $i++;
        endforeach; ?>
    </div>
</section>

<?php include __DIR__ . "/../includes/footer.php"; ?>
