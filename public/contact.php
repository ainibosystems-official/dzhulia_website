<?php
$page_title = "Контакт";
include __DIR__ . "/../includes/header.php";
?>

<section class="contact">
    <div class="contact-container">

        <h2>Свържете се с мен</h2>
        <p class="contact-sub">
            Ако имате въпрос, желаете консултация или искате да запишете детето си в
            <strong>Ателие за Емоции</strong>, свържете се с мен чрез формата по-долу.
        </p>

        <form action="" method="post" class="contact-form">

            <div class="form-group">
                <label for="name">Вашето име</label>
                <input type="text" id="name" name="name" required placeholder="Име и фамилия">
            </div>

            <div class="form-group">
                <label for="email">Имейл адрес</label>
                <input type="email" id="email" name="email" required placeholder="example@mail.com">
            </div>

            <div class="form-group">
                <label for="phone">Телефон</label>
                <input type="text" id="phone" name="phone" placeholder="08x xxx xxxx">
            </div>

            <div class="form-group">
                <label for="message">Вашето съобщение</label>
                <textarea id="message" name="message" rows="5" required placeholder="Как мога да помогна?"></textarea>
            </div>

            <button type="submit" class="btn-primary">Изпрати съобщение</button>

            <?php
            // ******** OPTIONAL SIMPLE FORM HANDLER ********
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                echo "<p class='form-success'>Благодаря! Вашето съобщение беше изпратено.</p>";
            }
            ?>
        </form>

        <div class="contact-info">
            <h3>Данни за контакт</h3>
            <p><strong>Телефон:</strong> 0888 123 456</p>
            <p><strong>Имейл:</strong> psychology@dzhulia.bg</p>
            <p><strong>Град:</strong> Бургас</p>
        </div>

    </div>
</section>

<?php include __DIR__ . "/../includes/footer.php"; ?>

