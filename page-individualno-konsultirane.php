<?php
if (!defined('ABSPATH')) exit;
get_header();

$theme_img = get_template_directory_uri() . '/assets/img/';
?>

<section class="usluga-hero usluga-individual">

    <div class="usluga-hero-inner reveal-up">

        <h1 class="usluga-title">
            Индивидуална психологическа консултация
        </h1>

        <p class="usluga-subtitle">
            Пространство за разбиране, осъзнаване и подкрепа,
            в което можете спокойно да изследвате
            своите мисли, чувства и преживявания.
        </p>

    </div>

</section>



<section class="service-single-intro">

    <div class="service-single-wrapper">

        <div class="service-single-grid">

            <div class="service-single-text reveal-left">

                <h2>Какво представлява индивидуалната консултация</h2>

                <p>
                    Индивидуалната психологическа консултация
                    е процес, в който човек има възможност
                    да се срещне със себе си
                    в спокойна и подкрепяща среда.
                </p>

                <p>
                    Това е пространство,
                    в което можете свободно да говорите
                    за своите преживявания —
                    без осъждане, без натиск
                    и с професионално разбиране.
                </p>

                <p>
                    Консултацията помага трудностите
                    да бъдат разгледани в дълбочина,
                    да се открие смисълът зад тях
                    и да се изгради
                    по-ясна и устойчива вътрешна опора.
                </p>

            </div>

            <div class="service-single-image reveal-right">

                <img src="<?php echo $theme_img; ?>service3.jpg"
                    alt="Индивидуално консултиране">

            </div>

        </div>

    </div>

</section>



<section class="service-single-topics">

    <div class="service-single-wrapper">

        <h2 class="service-section-title reveal-up">
            Теми, върху които можем да работим
        </h2>

        <div class="service-topics-grid">

            <div class="service-topic reveal-up">
    Тревожност и вътрешно напрежение
</div>

<div class="service-topic reveal-up">
    Стрес и усещане за претоварване
</div>

<div class="service-topic reveal-up">
    Трудни житейски решения
</div>

<div class="service-topic reveal-up">
    Ниска самооценка и несигурност
</div>

<div class="service-topic reveal-up">
    Емоционални трудности
</div>

<div class="service-topic reveal-up">
    Нужда от развитие и себепознание
</div>


        </div>

</section>



<section class="service-single-process">

    <div class="service-single-wrapper">

        <h2 class="service-section-title reveal-up">
            Как протича консултацията
        </h2>

        <div class="service-process-grid">

            <div class="process-step reveal-left">

                <span class="process-number">1</span>

                <h3>Контакт и първоначална ориентация</h3>

                <p>
                    Свързвате се с мен чрез формата
                    за контакт или по телефон,
                    за да уговорим удобен час.
                    Още на този етап
                    се ориентираме към темата,
                    с която идвате.
                </p>

            </div>

            <div class="process-step reveal-up">

                <span class="process-number">2</span>

                <h3>Среща и изясняване</h3>

                <p>
                    По време на срещата
                    имате пространство спокойно
                    да споделите това,
                    което преживявате.
                    Заедно изследваме ситуацията,
                    мислите и емоциите зад нея.
                </p>

            </div>

            <div class="process-step reveal-right">

                <span class="process-number">3</span>

                <h3>Процес и посока на работа</h3>

                <p>
                    Очертава се ясна посока на работа,
                    съобразена с Вашите нужди и темпо.
                    Процесът е насочен
                    към повече яснота,
                    вътрешна стабилност
                    и по-спокойно справяне
                    с житейските ситуации.
                </p>

            </div>


        </div>

</section>



<section class="usluga-cta">

    <div class="usluga-cta-inner reveal-up">

        <h2>
            <strong>Ако усещате нужда от разговор</strong>
        </h2>

        <p>
            Не е необходимо да чакате
            нещата да се задълбочат.
            Понякога една навременна стъпка
            води до повече яснота,
            спокойствие и увереност.
        </p>

        <p class="cta-quote">
            <strong>
                „Промяната започва
                в момента, в който си позволим
                да бъдем честни със себе си.“
                <strong>
        </p>

        <a href="<?php echo home_url('/kontakti'); ?>" class="btn">
            Свържете се с мен
        </a>

    </div>

</section>

<?php get_footer(); ?>