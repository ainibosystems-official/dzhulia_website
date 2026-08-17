<?php
if (!defined('ABSPATH')) exit;
get_header();

$theme_img = get_template_directory_uri() . '/assets/img/';
?>

<section class="services-hero">

    <div class="services-hero-inner reveal-up">

        <h1 class="services-title">Услуги</h1>

        <p class="services-subtitle">
            Психологическа подкрепа за деца, родители и семейства – с внимание към емоциите, връзката и реалните нужди зад поведението.</p>
    </div>

</section>


<section class="services-page">


    <!-- SERVICE 1 -->

    <div class="service-row">

        <div class="reveal-clip">
            <div class="service-image reveal-left">

                <img src="<?php echo $theme_img; ?>service1.jpg"
                    alt="detsko-yunoshesko-konsultirane"
                    loading="lazy">

            </div>
        </div>

        <div class="reveal-clip">
            <div class="service-content reveal-right">

                <h2 class="service-title">Детско-юношеско консултиране</h2>

                <p class="service-intro">
                    Психологическа подкрепа за деца и юноши при емоционални, поведенчески и социални трудности.

                    Работя чрез игрови техники, приказки и практически подходи, съобразени с възрастта на детето.
                </p>

                <div class="service-details">

                    <div class="service-block">
                        <h4>Подходящо при</h4>
                        <ul>
                            <li>Тревожност, страхове, силни емоции</li>
                            <li>Избухвания, трудности в поведението</li>
                            <li>Адаптация в детска градина или училище</li>
                            <li>Затваряне в себе си или трудности в общуването</li>
                            <li>Когато усещате, че нещо се случва, но не знаете какво</li>
                        </ul>
                    </div>

                    <div class="service-block">
                        <h4>Как протича</h4>
                        <p>
                            Сесиите протичат в спокойна и защитена среда,
                            в която можете свободно да споделяте
                            своите преживявания.
                        </p>
                    </div>

                    <div class="service-block">
                        <h4>Фокус</h4>
                        <ul>
                            <li>Осъзнаване на емоции</li>
                            <li>Личностно развитие</li>
                            <li>Вътрешен баланс</li>
                        </ul>
                    </div>

                </div>

                <div class="service-buttons">

                    <a href="<?php echo home_url('/uslugi/detsko-yunoshesko-konsultirane'); ?>" class="btn">
                        Научи повече
                    </a>

                    <a href="<?php echo home_url('/kontakti'); ?>" class="btn btn-secondary">
                        Запази час
                    </a>

                </div>

            </div>
        </div>

    </div>



    <!-- SERVICE 2 -->

    <div class="service-row reverse">

        <div class="reveal-clip">
            <div class="service-image reveal-right">

                <img src="<?php echo $theme_img; ?>service2.jpg"
                    alt="Семейно консултиране"
                    loading="lazy">

            </div>
        </div>

        <div class="reveal-clip">
            <div class="service-content reveal-left">

                <h2 class="service-title">Семейно консултиране</h2>

                <p class="service-intro">
                    Подкрепа за семейства, които искат да подобрят комуникацията, да преминат по-спокойно през трудности и да изградят по-сигурна връзка помежду си.
                </p>

                <div class="service-details">

                    <div class="service-block">
                        <h4>С какво помага</h4>

                        <ul>
                            <li>Подобрява комуникацията в семейството</li>
                            <li>Създава повече спокойствие и разбиране</li>
                            <li>Подкрепя родителите в трудни ситуации</li>
                        </ul>
                    </div>

                    <div class="service-block">
                        <h4>Как протича</h4>

                        <p>
                            Работата е насочена към разбиране на трудностите в отношенията и изграждане на по-спокойна и сигурна семейна среда, в която всеки да се чувства чут и подкрепен.
                        </p>
                    </div>

                    <div class="service-block">
                        <h4>Подходящо при</h4>

                        <ul>
                            <li>Напрежение и конфликти у дома</li>
                            <li>Трудна комуникация с детето</li>
                            <li>Несигурност в родителската роля</li>
                            <li>Промени в семейството и адаптация</li>
                        </ul>
                    </div>

                </div>

                <div class="service-buttons">

                    <a href="<?php echo home_url('/uslugi/semeino-konsultirane'); ?>" class="btn">
                        Научи повече
                    </a>

                    <a href="<?php echo home_url('/kontakti'); ?>" class="btn btn-secondary">
                        Запази час
                    </a>

                </div>

            </div>
        </div>

    </div>

    <!-- SERVICE 3 -->

    <div class="service-row">

        <div class="reveal-clip">
            <div class="service-image reveal-left">

                <img src="<?php echo $theme_img; ?>service3.jpg"
                    alt="Индивидуално консултиране"
                    loading="lazy">

            </div>
        </div>

        <div class="reveal-clip">
            <div class="service-content reveal-right">

                <h2 class="service-title">Индивидуално консултиране</h2>

                <p class="service-intro">
                    Пространство за лична подкрепа, осъзнаване и работа върху вътрешни преживявания, трудности и житейски предизвикателства.
                </p>

                <div class="service-details">

                    <div class="service-block">
                        <h4>С какво помага</h4>

                        <ul>
                            <li>Намаляване на вътрешното напрежение</li>
                            <li>Повече яснота и осъзнатост</li>
                            <li>Подкрепа в трудни житейски периоди</li>
                        </ul>
                    </div>

                    <div class="service-block">
                        <h4>Как протича</h4>

                        <p>
                            Срещите създават спокойно и защитено пространство, в което човек може да бъде чут, разбран и подкрепен без осъждане.
                        </p>
                    </div>

                    <div class="service-block">
                        <h4>Подходящо при</h4>

                        <ul>
                            <li>Тревожност и вътрешно напрежение</li>
                            <li>Трудни решения и житейски промени</li>
                            <li>Обърканост и нужда от яснота</li>
                            <li>Повтарящи се ситуации без решение</li>
                        </ul>
                    </div>

                </div>

                <div class="service-buttons">

                    <a href="<?php echo home_url('/uslugi/individualno-konsultirane'); ?>" class="btn">
                        Научи повече
                    </a>

                    <a href="<?php echo home_url('/kontakti'); ?>" class="btn btn-secondary">
                        Запази час
                    </a>

                </div>

            </div>
        </div>

    </div>



    <!-- SERVICE 4 -->

    <div class="service-row reverse">

        <div class="reveal-clip">
            <div class="service-image reveal-right">

                <img src="<?php echo $theme_img; ?>service4.jpg"
                    alt="Онлайн консултиране"
                    loading="lazy">

            </div>
        </div>

        <div class="reveal-clip">
            <div class="service-content reveal-left">

                <h2 class="service-title">Онлайн консултиране</h2>

                <p class="service-intro">
                    Възможност за психологическа подкрепа от разстояние – удобен, достъпен и гъвкав формат, съобразен с динамиката на ежедневието.
                </p>

                <div class="service-details">

                    <div class="service-block">
                        <h4>С какво помага</h4>

                        <ul>
                            <li>Осигурява лесен достъп до подкрепа</li>
                            <li>Спестява време и пътуване</li>
                            <li>Създава удобство и гъвкавост</li>
                        </ul>
                    </div>

                    <div class="service-block">
                        <h4>Как протича</h4>

                        <p>
                            Онлайн срещите се провеждат в спокойна и защитена среда, като осигуряват същото ниво на внимание, подкрепа и професионализъм, както присъствените консултации.
                        </p>
                    </div>

                    <div class="service-block">
                        <h4>Подходящо при</h4>

                        <ul>
                            <li>Липса на възможност за срещи на място</li>
                            <li>Живот в друг град или държава</li>
                            <li>Натоварено ежедневие</li>
                            <li>Нужда от по-гъвкав формат</li>
                        </ul>
                    </div>

                </div>

                <div class="service-buttons">

                    <a href="<?php echo home_url('/uslugi/online-konsultirane'); ?>" class="btn">
                        Научи повече
                    </a>

                    <a href="<?php echo home_url('/kontakti'); ?>" class="btn btn-secondary">
                        Запази час
                    </a>

                </div>

            </div>
        </div>

    </div>

</section>



<!-- CTA SECTION -->

<section class="services-cta">

    <div class="services-cta-inner">

        <h2><strong>
                Понякога първата стъпка е най-важната
            </strong>
        </h2>

        <p>
            Не е нужно да чакате нещата да се задълбочат. Навременната подкрепа може да направи процеса по-лек, по-ясен и по-спокоен – както за детето, така и за цялото семейство.
        </p>

        <a href="<?php echo home_url('/kontakti'); ?>" class="btn">
            Свържете се с мен
        </a>

    </div>

</section>


<?php get_footer(); ?>