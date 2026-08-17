<?php
if (!defined('ABSPATH')) exit;
get_header();

$theme_img = get_template_directory_uri() . '/assets/img/';
?>

<section class="usluga-hero usluga-kids">

    <div class="usluga-hero-inner reveal-up">

        <h1 class="usluga-title">
            Детско-юношеско консултиране
        </h1>

        <p class="usluga-subtitle">
            Психологическа подкрепа за деца и юноши при емоционални и поведенчески трудности – с внимание към техния вътрешен свят и с насоки за родителите.
        </p>

    </div>

</section>



<section class="service-single-intro">

    <div class="service-single-wrapper">

        <div class="service-single-grid">

            <div class="service-single-text reveal-left">

                <h2>Какво представлява детското консултиране</h2>

                <p>
                    Децата и юношите често не могат да обяснят с думи какво преживяват.
                    Вместо това те го показват чрез поведение, емоции или промени в отношението си.
                </p>

                <p>
                    Това, което виждаме отвън, много често е сигнал за нещо по-дълбоко – тревожност, несигурност, вътрешно напрежение или нужда, която детето не може да изрази по друг начин.
                </p>

                <p>
                    Консултацията помага тези преживявания да бъдат разбрани и подкрепени – спокойно, без натиск и с подход, съобразен с възрастта и индивидуалността на детето.
                </p>

                <p>
                    Работата се провежда чрез разговор, игрови техники, приказки и творчески подходи, които дават възможност на детето да изрази своя вътрешен свят по естествен и безопасен начин.
                </p>

            </div>

            <div class="service-single-image reveal-right">

                <img src="<?php echo $theme_img; ?>service1.jpg"
                    alt="Детско-юношеско консултиране">

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
    Тревожност, страхове и притеснения
</div>

<div class="service-topic reveal-up">
    Трудности в училище и адаптация
</div>

<div class="service-topic reveal-up">
    Проблеми в общуването с други деца
</div>

<div class="service-topic reveal-up">
    Силни емоции – гняв, плач, избухвания
</div>

<div class="service-topic reveal-up">
    Промени в семейството или средата
</div>

<div class="service-topic reveal-up">
    Подкрепа и насоки за родители
</div>

        </div>

    </div>

</section>



<section class="service-single-process reveal-up">

    <div class="service-single-wrapper">

        <h2 class="service-section-title reveal-up">
            Как протича консултацията
        </h2>

        <div class="service-process-grid">

            <div class="process-step reveal-left">

                <span class="process-number">1</span>

                <h3>Първоначален контакт</h3>

                <p>
                    Родителят се свързва с мен, за да обсъдим ситуацията и притесненията си.
                    Още в този разговор се стремим да внесем яснота и да преценим каква е най-подходящата посока на работа за детето и семейството.
                </p>

            </div>

            <div class="process-step reveal-up">

                <span class="process-number">2</span>

                <h3>Среща с родителя</h3>

                <p>
                    Провеждаме спокойна среща, в която родителят има пространство да сподели всичко, което го тревожи.

                    Събирам информация за развитието на детето, неговите индивидуални особености, семейната среда и конкретната ситуация, за да изградя цялостна картина на случващото се.

                    На тази база давам първоначални насоки и заедно определяме върху какво ще бъде фокусът на работата.
                </p>

            </div>

            <div class="process-step reveal-right">

                <span class="process-number">3</span>

                <h3>Среща с детето и план за работа</h3>

                <p>
                    Провеждам среща с детето, съобразена с неговата възраст, темп и личностни характеристики.

                    На база събраната информация и наблюдения изготвям терапевтичен план за работа, който е индивидуален и адаптиран към нуждите на детето.

                    Процесът се развива постепенно, с внимание към емоционалната сигурност на детето и с активното участие на родителя.
                </p>

            </div>

        </div>

    </div>

</section>



<section class="usluga-cta">

    <div class="usluga-cta-inner reveal-up">

        <h2><strong>
                Ако усещате, че детето Ви има нужда от подкрепа
            </strong>
        </h2>

        <p>
            Понякога малките сигнали са най-важните.
            Навременната подкрепа може да направи процеса по-лек, по-ясен и по-спокоен – както за детето, така и за цялото семейство.
        </p>

        <p>
            Можете спокойно да се свържете с мен, за да обсъдим ситуацията и да преценим най-добрата следваща стъпка.
        </p>

        <p>
            <strong>
                „Децата не винаги казват какво преживяват,
                но винаги го показват по свой начин.“
            </strong>
        </p>

        <a href="<?php echo home_url('/kontakti'); ?>" class="btn">
            Свържете се с мен
        </a>

    </div>

</section>


<?php get_footer(); ?>