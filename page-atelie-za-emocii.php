<?php
if (!defined('ABSPATH')) exit;
get_header();

$theme_img = get_template_directory_uri() . '/assets/img/';
?>

<!-- =====================================================
HERO (UNCHANGED)
===================================================== -->

<section class="atelier-hero">

    <div class="atelier-carousel">

        <div class="atelier-slide active"
            data-title="Приказно ателие за емоции"
            data-text="Авторска програма за развитие на емоционалната интелигентност при деца чрез приказки, игра и творчество.">
            <img src="<?php echo $theme_img; ?>atelier1.jpg">
        </div>

        <div class="atelier-slide"
            data-title="Работа с деца в реална среда"
            data-text="Ателието се реализира всеки месец в 5 детски градини и достига до десетки деца, които учат да разбират и изразяват своите емоции.">
            <img src="<?php echo $theme_img; ?>atelier2.jpg">
        </div>

        <div class="atelier-slide"
            data-title="Групи в кабинета"
            data-text="Организирам групи в кабинета си, които се сформират при отворен прием – с внимателно подбрана среда и фокус върху всяко дете.">
            <img src="<?php echo $theme_img; ?>atelier3.jpg">
        </div>

    </div>

    <div class="atelier-text active">
        <div class="atelier-text-box">

            <img class="atelier-card-logo"
                src="<?php echo $theme_img; ?>atelie-za-emocii.svg">

            <h2 id="atelier-title">Приказно ателие за емоции</h2>

            <p id="atelier-text">
                Авторска програма за развитие на емоционалната интелигентност при деца чрез приказки, игра и творчество.
            </p>

        </div>
    </div>

    <div class="atelier-arrow left"></div>
    <div class="atelier-arrow right"></div>

</section>



<!-- =====================================================
ABOUT
===================================================== -->

<section class="atelier-about">

    <div class="atelier-wrapper">

        <div class="atelier-about-grid">

            <div class="atelier-about-text reveal-left">

                <h2>Какво е „Приказно ателие за емоции“?</h2>

                <p>
                    „Приказно ателие за емоции“ е моя авторска програма, създадена на база реална работа с деца, родители и семейства.
                </p>

                <p>
                    Това е пространство, в което децата могат свободно да изразяват себе си чрез приказки, игра, творчество и внимателно воден психологически процес.
                </p>

                <p>
                    Програмата се реализира всеки месец в 5 детски градини, където достига до много деца и им помага да изграждат умения, които често не се учат по друг начин – как да разбират, изразяват и управляват своите емоции.
                </p>

                <p>
                    В кабинета си организирам и малки групи, които се сформират при отваряне на прием, за да се осигури спокойна, сигурна и подкрепяща среда за всяко дете.
                </p>

                <p>
                    Всяка среща е внимателно структурирана така, че детето да се чувства прието, спокойно и свободно да бъде себе си.
                </p>

            </div>

            <div class="atelier-about-image reveal-right">

                <div class="atelier-about-slider">

                    <div class="atelier-about-track">

                        <img src="<?php echo $theme_img; ?>atelier-about-1.jpg"
                            class="atelier-about-slide">

                        <img src="<?php echo $theme_img; ?>atelier-about-2.jpg"
                            class="atelier-about-slide">

                        <img src="<?php echo $theme_img; ?>atelier-about-3.jpg"
                            class="atelier-about-slide">

                        <img src="<?php echo $theme_img; ?>atelier-about-4.jpg"
                            class="atelier-about-slide">

                    </div>

                    <!-- ARROWS -->

                    <button class="atelier-slider-btn atelier-prev">
                        ‹
                    </button>

                    <button class="atelier-slider-btn atelier-next">
                        ›
                    </button>

                </div>

            </div>

        </div>

    </div>

</section>



<!-- =====================================================
WHAT CHILDREN EXPERIENCE
===================================================== -->

<section class="atelier-experience">

    <div class="atelier-wrapper">

        <h2 class="atelier-section-title reveal-up">
            Какво преживяват децата
        </h2>

        <div class="atelier-experience-grid">

            <div class="atelier-card reveal-up">
                <h3>Игри</h3>
                <p>
                    Игрови активности, чрез които децата по естествен начин изследват емоциите си и учат как да ги разбират и изразяват.
                </p>
            </div>

            <div class="atelier-card reveal-up">
                <h3>Творчество</h3>
                <p>
                    Рисуване, приказки, ролеви игри и творчески техники, които помагат на детето да изрази вътрешния си свят по безопасен и достъпен начин.
                </p>
            </div>

            <div class="atelier-card reveal-up">
                <h3>Общуване</h3>
                <p>
                    Децата учат как да говорят за чувствата си, да слушат другите и да изграждат по-спокойни и уверени взаимоотношения.
                </p>
            </div>

        </div>

    </div>

</section>



<!-- =====================================================
BENEFITS
===================================================== -->

<section class="atelier-benefits">

    <div class="atelier-wrapper">

        <h2 class="atelier-section-title reveal-up">
            Какво развиват децата
        </h2>

        <div class="atelier-benefits-grid">

            <div class="atelier-benefit reveal-up">Разбиране на емоциите</div>
            <div class="atelier-benefit reveal-up">Увереност</div>
            <div class="atelier-benefit reveal-up">Комуникация</div>
            <div class="atelier-benefit reveal-up">Самоизразяване</div>
            <div class="atelier-benefit reveal-up">Емпатия</div>
            <div class="atelier-benefit reveal-up">Социални умения</div>

        </div>

    </div>

</section>



<!-- =====================================================
PARENTS SECTION
===================================================== -->

<section class="atelier-parents">

    <div class="atelier-wrapper">

        <div class="atelier-parents-grid">

            <div class="atelier-parents-image reveal-left">

                <div class="atelier-parents-slider">

                    <div class="atelier-parents-track">

                        <img
                            src="<?php echo $theme_img; ?>atelier-parents-1.jpg"
                            class="atelier-parents-slide">

                        <img
                            src="<?php echo $theme_img; ?>atelier-parents-2.jpg"
                            class="atelier-parents-slide">

                        <img
                            src="<?php echo $theme_img; ?>atelier-parents-3.jpg"
                            class="atelier-parents-slide">

                        <img
                            src="<?php echo $theme_img; ?>atelier-parents-4.jpg"
                            class="atelier-parents-slide">

                    </div>

                    <!-- ARROWS -->

                    <button class="atelier-slider-btn atelier-parents-prev">
                        ‹
                    </button>

                    <button class="atelier-slider-btn atelier-parents-next">
                        ›
                    </button>

                </div>

            </div>

            <div class="atelier-parents-text reveal-right">

                <h2>Работа с родители</h2>

                <p>
                    „Приказно ателие за емоции“ не е насочено само към детето – то включва и подкрепа за родителите.
                </p>

                <p>
                    Защото истинската промяна се случва тогава, когато детето бъде разбрано, а родителят се чувства уверен как да го подкрепи.
                </p>

                <p>
                    В процеса родителите получават насоки и разбиране за поведението на детето, както и практични идеи как да развиват емоционалната интелигентност у дома.
                </p>

                <p>
                    Така ефектът от ателието не остава само в срещите, а продължава в ежедневието.
                </p>

            </div>

        </div>

    </div>

</section>



<!-- =====================================================
CTA
===================================================== -->

<section class="atelier-cta">

    <div class="atelier-cta-inner reveal-up">

        <h2>
            Ако искате детето ви да развива емоционална увереност
        </h2>

        <p>
            Ателието е пространство, в което децата учат чрез преживяване – как да разбират себе си, да общуват по-спокойно и да се чувстват уверени в емоциите си.
        </p>

        <p>
            Групите в кабинета се сформират при отворен прием, а местата са ограничени, за да се запази индивидуалното внимание към всяко дете.
        </p>

        <p>
            <strong>
                „Децата не винаги могат да обяснят какво чувстват,
                но винаги намират начин да го покажат –
                когато им дадем пространство да творят.“
            </strong>
        </p>

        <a href="<?php echo home_url('/kontakti'); ?>" class="btn">
            Свържете се с мен
        </a>

    </div>

</section>

<?php get_footer(); ?>