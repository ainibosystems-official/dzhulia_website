<?php
if (!defined('ABSPATH')) exit;
get_header();

$theme_img = get_template_directory_uri() . '/assets/img/';
?>

<section class="usluga-hero usluga-online">

    <div class="usluga-hero-inner reveal-up">

        <h1 class="usluga-title">
            Онлайн психологическа консултация
        </h1>

        <p class="usluga-subtitle">
            Психологическа подкрепа от разстояние —
            удобна, сигурна и съобразена
            с Вашето ежедневие и възможности.
        </p>

    </div>

</section>



<section class="service-single-intro">

    <div class="service-single-wrapper">

        <div class="service-single-grid">

            <div class="service-single-text reveal-left">

                <h2>Какво представлява онлайн консултацията</h2>

                <p>
                    Онлайн психологическата консултация
                    дава възможност да получите
                    професионална подкрепа,
                    независимо къде се намирате.
                </p>

                <p>
                    Срещите се провеждат
                    в спокойна и конфиденциална среда
                    и запазват същото ниво
                    на внимание, ангажираност
                    и професионализъм,
                    както присъствените консултации.
                </p>

                <p>
                    Онлайн форматът е особено подходящ
                    за хора с натоварено ежедневие,
                    живот в друг град или държава
                    или нужда от по-гъвкав начин на работа.
                </p>

                <p>
                    Консултирането позволява процесът
                    да бъде последователен и устойчив,
                    без разстоянието да бъде пречка
                    за навременната подкрепа.
                </p>

            </div>

            <div class="service-single-image reveal-right">

                <img src="<?php echo $theme_img; ?>service4.jpg"
                    alt="Онлайн консултиране">

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
                Трудности в отношенията
            </div>

            <div class="service-topic reveal-up">
                Ниска самооценка и несигурност
            </div>

            <div class="service-topic reveal-up">
                Емоционални кризи
            </div>

            <div class="service-topic reveal-up">
                Нужда от яснота и личностно развитие
            </div>

        </div>

</section>



<section class="service-single-process">

    <div class="service-single-wrapper">

        <h2 class="service-section-title reveal-up">
            Как протича онлайн консултацията
        </h2>

        <div class="service-process-grid">

            <div class="process-step reveal-left">

                <span class="process-number">1</span>

                <h3>Контакт</h3>

                <p>
                    Свързвате се с мен
                    по имейл или по телефон,
                    за да обсъдим накратко ситуацията
                    и да уговорим удобен ден и час.
                    Още на този етап
                    получавате ясна информация
                    за процеса и следващите стъпки.
                </p>

            </div>

            <div class="process-step reveal-up">

                <span class="process-number">2</span>

                <h3>Онлайн среща</h3>

                <p>
                    Консултацията се провежда
                    чрез удобна онлайн платформа,
                    в спокойна и конфиденциална среда.
                    Имате възможност свободно
                    да споделите това,
                    което преживявате.
                </p>

            </div>

            <div class="process-step reveal-right">

                <span class="process-number">3</span>

                <h3>Процес и посока на работа</h3>

                <p>
                    Заедно изследваме темите,
                    които стоят зад трудността,
                    и изграждаме ясна посока на работа,
                    съобразена с Вашите нужди и темпо.
                    Процесът е насочен
                    към повече яснота,
                    вътрешна стабилност
                    и реална промяна.
                </p>

            </div>


        </div>

</section>



<section class="usluga-cta">

    <div class="usluga-cta-inner">

        <h2>
            <strong>Ако усещате, че имате нужда от разговор</strong>
        </h2>

        <p>
            Не е необходимо да сте
            на определено място,
            за да получите подкрепа.
            Понякога най-важната стъпка
            е просто да не отлагате повече
            и да си дадете пространство
            за яснота и разбиране.
        </p>

        <p class="cta-quote">
            <strong>
                „Понякога най-важната промяна
                започва с едно решение —
                да не отлагате повече.“
                <strong>
        </p>

        <a href="<?php echo home_url('/kontakti'); ?>" class="btn">
            Свържете се с мен
        </a>

    </div>

</section>

<?php get_footer(); ?>