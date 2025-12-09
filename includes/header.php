<!DOCTYPE html>
<html lang="bg">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?= isset($page_title) ? htmlspecialchars($page_title) : "Психолог Джулия Божидарова" ?></title>

    <link rel="stylesheet" href="/css/style.css">
</head>

<body class="<?= ($admin_page ?? false) ? 'admin-body' : '' ?>">

    <?php include __DIR__ . "/nav.php"; ?>

    <?php if (!isset($admin_page) || !$admin_page): ?>
        <!-- FLOATING HOMEPAGE DECORATIONS -->
        <img src="/img/hero_sun.png" class="float-sun" alt="">
        <img src="/img/icon_child.png" class="float-child" alt="">
        <img src="/img/icon_talk.png" class="float-talk" alt="">
        <img src="/img/icon_family.png" class="float-family" alt="">
    <?php endif; ?>

    <!-- IMPORTANT: OPEN MAIN WRAPPER -->
    <main>