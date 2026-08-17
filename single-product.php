<?php
defined('ABSPATH') || exit;

get_header();
?>

<main class="product-modern-page">

    <?php wc_print_notices(); ?>

    <?php while (have_posts()) : the_post();
        global $product;

        /* =========================
       DYNAMIC CONTENT
    ========================= */

        $short_desc = $product->get_short_description();

        // custom fields (optional - future proof)
        $why_text = get_post_meta(get_the_ID(), 'why_text', true);

        $benefit_1 = get_post_meta(get_the_ID(), 'benefit_1', true);
        $benefit_2 = get_post_meta(get_the_ID(), 'benefit_2', true);
        $benefit_3 = get_post_meta(get_the_ID(), 'benefit_3', true);
        $benefit_4 = get_post_meta(get_the_ID(), 'benefit_4', true);

        $how_1 = get_post_meta(get_the_ID(), 'how_1', true);
        $how_2 = get_post_meta(get_the_ID(), 'how_2', true);
        $how_3 = get_post_meta(get_the_ID(), 'how_3', true);
    ?>

        <!-- HERO -->
        <section class="product-hero">

            <div class="product-hero-grid">

                <!-- LEFT: GALLERY -->
                <div class="product-gallery">

                    <?php
                    $attachment_ids = $product->get_gallery_image_ids();
                    $main_image_id = $product->get_image_id();
                    ?>

                    <!-- MAIN IMAGE -->
                    <div class="product-main-image">
                        <?php
                        if ($main_image_id) {
                            $main_url = wp_get_attachment_image_url($main_image_id, 'large');
                            echo '<img id="main-product-image" src="' . esc_url($main_url) . '" />';
                        } else {
                            echo '<img id="main-product-image" src="' . wc_placeholder_img_src('large') . '">';
                        }
                        ?>
                    </div>

                    <!-- THUMBNAILS -->
                    <?php if ($attachment_ids) : ?>
                        <div class="product-thumbnails">

                            <?php foreach ($attachment_ids as $attachment_id) : ?>

                                <img
                                    src="<?php echo wp_get_attachment_image_url($attachment_id, 'thumbnail'); ?>"
                                    data-full="<?php echo wp_get_attachment_image_url($attachment_id, 'large'); ?>"
                                    class="product-thumb">

                            <?php endforeach; ?>

                        </div>
                    <?php endif; ?>

                </div>

                <!-- RIGHT: CONTENT -->
                <div class="product-content">

                    <h1 class="product-title"><?php the_title(); ?></h1>

                    <div class="product-price">
                        <?php echo $product->get_price_html(); ?>
                    </div>

                    <div class="product-short">
                        <?php echo $product->get_short_description(); ?>
                    </div>

                </div>

            </div>

        </section>

        <!-- ✅ WORKING AJAX ADD TO CART -->
        <div class="floating-cart">
            <div class="floating-cart-form">

                <!-- Quantity -->
                <div class="quantity">
                    <input
                        type="number"
                        class="qty"
                        value="1"
                        min="1"
                        step="1">
                </div>

                <!-- AJAX Add to Cart Button -->
                <a href="<?php echo esc_url($product->add_to_cart_url()); ?>"
                    class="single-ajax-cart single_add_to_cart_button button add_to_cart_button ajax_add_to_cart"
                    data-product_id="<?php echo esc_attr($product->get_id()); ?>"
                    data-quantity="1"
                    rel="nofollow">
                    Добави в количката
                </a>

            </div>
        </div>


        <?php if (has_term('kutiq', 'product_cat')) : ?>

            <!-- KUTIQ CONTENT -->

            <!-- BENEFITS -->
            <section class="product-benefits reveal">

                <div class="benefits-grid">

                    <div class="benefit hover-pop">
                        <span>🧠</span>
                        <p>
                            Помага на детето да разпознава
                            и разбира своите емоции
                        </p>
                    </div>

                    <div class="benefit hover-pop">
                        <span>💬</span>
                        <p>
                            Подобрява комуникацията
                            между дете и възрастен
                        </p>
                    </div>

                    <div class="benefit hover-pop">
                        <span>👨‍👩‍👧</span>
                        <p>
                            Подсилва връзката
                            между родител и дете
                        </p>
                    </div>

                    <div class="benefit hover-pop">
                        <span>🌱</span>
                        <p>
                            Изгражда увереност,
                            спокойствие и саморегулация
                        </p>
                    </div>

                </div>

            </section>


            <!-- WHY -->
            <section class="product-why reveal">

                <div class="product-why-box">

                    <h2>
                        Когато детето не може да каже какво чувства,
                        то го показва
                    </h2>

                    <p>
                        Понякога чрез сълзи.
                        Понякога чрез гняв.
                        Понякога чрез мълчание.
                    </p>

                    <blockquote>
                        „Тайната кутия на емоциите“ е създадена,
                        за да превърне тези моменти
                        в разбиране, свързване и увереност.
                    </blockquote>

                    <h3>💛 Защо създадох тази кутия</h3>

                    <p>
                        Децата често преживяват силни емоции,
                        които не могат да изразят.
                    </p>

                    <ul>
                        <li>Тревожност</li>
                        <li>Избухвания</li>
                        <li>Затваряне в себе си</li>
                    </ul>

                    <p>
                        Като психолог и майка създадох тази кутия
                        като мост между психологията и играта —
                        начин детето да разбере себе си
                        по естествен и достъпен начин.
                    </p>

                    <h3>🧠 Научна основа</h3>

                    <p>
                        Емоционалната интелигентност
                        е ключова за развитието на детето.
                    </p>

                    <p>
                        Колкото по-рано детето се научи да:
                    </p>

                    <ul>
                        <li>Разпознава емоциите си</li>
                        <li>Ги изразява</li>
                        <li>Се справя с тях</li>
                    </ul>

                    <p>
                        толкова по-уверено,
                        спокойно и стабилно ще бъде.
                    </p>

                    <p>
                        Кутията е създадена
                        на база игрово-терапевтичен подход
                        и следва авторски 3-степенен модел:
                    </p>

                    <ul>
                        <li>Осъзнаване – разпознаване и назоваване</li>
                        <li>Подготовка – изразяване чрез игра и творчество</li>
                        <li>Затвърждаване – изграждане на умения за саморегулация</li>
                    </ul>

                </div>

            </section>


            <!-- HOW -->
            <section class="product-how reveal">

                <div class="product-how-grid">

                    <!-- CARD 1 -->
                    <div class="how-card hover-pop">

                        <h3>👨‍👩‍👧 За кого е тази кутия</h3>

                        <p>
                            Подходяща е за родители,
                            учители, психолози,
                            логопеди и специалисти,
                            които искат да подкрепят
                            емоционалното развитие на детето.
                        </p>

                        <ul>
                            <li>Родители и семейства</li>
                            <li>Детски градини и училища</li>
                            <li>Психолози и логопеди</li>
                            <li>Специалисти, работещи с деца</li>
                        </ul>

                    </div>

                    <!-- CARD 2 -->
                    <div class="how-card hover-pop">

                        <h3>📦 Какво съдържа кутията</h3>

                        <p>
                            Кутията съчетава
                            психологически техники,
                            игра и творчество
                            в цялостен практически комплект.
                        </p>

                        <ul>
                            <li>Книга с приказки и техники</li>
                            <li>„Дъга на емоциите“</li>
                            <li>Ръководство за родителя</li>
                            <li>Шаблони и емоционални талисмани</li>
                            <li>Бонус чеклисти и постер</li>
                        </ul>

                    </div>

                    <!-- CARD 3 -->
                    <div class="how-card hover-pop">

                        <h3>🧩 Как се използва</h3>

                        <p>
                            Кутията е създадена,
                            за да бъде лесна за използване
                            у дома, в терапевтична среда
                            или в образователен процес.
                        </p>

                        <ul>
                            <li>Отделете спокойно време</li>
                            <li>Позволете на детето да избира</li>
                            <li>Не поправяйте</li>
                            <li>Повтаряйте и споделяйте</li>
                        </ul>

                        <p>
                            👉 Най-силният ефект идва
                            чрез връзката родител–дете.
                        </p>

                    </div>

                </div>

            </section>

        <?php endif; ?>


        <?php if (has_term('daga', 'product_cat')) : ?>

            <!-- DAGA CONTENT -->

            <!-- BENEFITS -->
            <section class="product-benefits reveal">

                <div class="benefits-grid">

                    <div class="benefit hover-pop">
                        <span>🌈</span>
                        <p>
                            Помага на детето
                            да разпознава
                            и назовава емоциите си
                        </p>
                    </div>

                    <div class="benefit hover-pop">
                        <span>🧠</span>
                        <p>
                            Развива емоционална интелигентност
                            и самосъзнание
                        </p>
                    </div>

                    <div class="benefit hover-pop">
                        <span>💬</span>
                        <p>
                            Създава естествена връзка
                            и разговор за емоциите
                        </p>
                    </div>

                    <div class="benefit hover-pop">
                        <span>🌱</span>
                        <p>
                            Изгражда увереност,
                            спокойствие и саморегулация
                        </p>
                    </div>

                </div>

            </section>


            <!-- WHY -->
            <section class="product-why reveal">

                <div class="product-why-box">

                    <h2>
                        💛 Какво представлява
                    </h2>

                    <p>
                        „Дъгата на емоциите“
                        е визуален емоционален компас,
                        създаден в съответствие
                        с най-съвременните психологически методи
                        за развитие на емоционалната интелигентност при децата.
                    </p>

                    <p>
                        Тя помага на детето ежедневно да:
                    </p>

                    <ul>
                        <li>Разпознава емоциите си</li>
                        <li>Назовава как се чувства</li>
                        <li>Споделя преживяванията си</li>
                    </ul>

                    <p>
                        и по този начин изгражда
                        самосъзнание,
                        емоционална регулация
                        и вътрешна сигурност.
                    </p>

                    <blockquote>
                        Моята мисия е всяко дете
                        да бъде чуто и разбрано.
                    </blockquote>

                    <p>
                        А родителите,
                        учителите и специалистите
                        да разполагат с ясни,
                        достъпни и ефективни инструменти
                        за работа с детските емоции.
                    </p>

                </div>

            </section>


            <!-- HOW -->
            <section class="product-how reveal">

                <div class="product-how-grid">

                    <!-- CARD 1 -->
                    <div class="how-card hover-pop">

                        <h3>👨‍👩‍👧 За кого е подходяща</h3>

                        <p>
                            „Дъгата на емоциите“
                            е подходяща за родители,
                            учители, психолози,
                            логопеди и специалисти,
                            работещи с деца.
                        </p>

                        <ul>
                            <li>Родители и семейства</li>
                            <li>Детски градини и училища</li>
                            <li>Психолози и логопеди</li>
                            <li>Специалисти, работещи с деца</li>
                        </ul>

                    </div>

                    <!-- CARD 2 -->
                    <div class="how-card hover-pop">

                        <h3>🧠 За продукта</h3>

                        <p>
                            Авторски инструмент,
                            създаден от психолог
                            Джулия Божидарова.
                        </p>

                        <ul>
                            <li>Подходящ за деца с и без дислексия</li>
                            <li>Създаден със специален шрифт</li>
                            <li>Произведен в България</li>
                            <li>Изработен от натурални материали</li>
                            <li>Образователен инструмент, не играчка</li>
                        </ul>

                    </div>

                    <!-- CARD 3 -->
                    <div class="how-card hover-pop">

                        <h3>🧩 Как се използва</h3>

                        <p>
                            Детето избира емоцията,
                            която усеща,
                            показва я чрез дъгата
                            и така започва разговор.
                        </p>

                        <ul>
                            <li>Всеки ден</li>
                            <li>След детска градина или училище</li>
                            <li>В трудни моменти</li>
                            <li>Като част от игра или терапия</li>
                        </ul>

                        <p>
                            👉 Само няколко минути на ден
                            създават дългосрочен ефект.
                        </p>

                    </div>

                </div>

            </section>

        <?php endif; ?>

        <?php if (has_term('knigi', 'product_cat')) : ?>

            <!-- BOOK CONTENT -->

            <!-- BENEFITS -->
            <section class="product-benefits reveal">

                <div class="benefits-grid">

                    <div class="benefit hover-pop">
                        <span>📖</span>
                        <p>
                            Помага на детето
                            да разбира емоциите си
                            чрез истории и герои
                        </p>
                    </div>

                    <div class="benefit hover-pop">
                        <span>💛</span>
                        <p>
                            Превръща емоциите
                            в естествен разговор
                            между дете и родител
                        </p>
                    </div>

                    <div class="benefit hover-pop">
                        <span>🧠</span>
                        <p>
                            Развива емоционална интелигентност,
                            емпатия и самосъзнание
                        </p>
                    </div>

                    <div class="benefit hover-pop">
                        <span>✨</span>
                        <p>
                            Създава преживяване,
                            което остава
                            за цял живот
                        </p>
                    </div>

                </div>

            </section>


            <!-- WHY -->
            <section class="product-why reveal">

                <div class="product-why-box">

                    <h2>
                        ✨ Нещо, което децата ще обикнат…
                        и родителите ще търсят
                    </h2>

                    <p>
                        „Героите на емоциите“
                        е авторска книга ,
                        създадена да превърне
                        емоциите в истинско приключение.
                    </p>

                    <blockquote>
                        Истории, образи и преживявания,
                        които помагат на детето
                        да разбере себе си
                        по естествен и запомнящ се начин.
                    </blockquote>

                    <p>
                        Чрез герои, емоции и въображение,
                        детето постепенно се учи
                        да разпознава вътрешния си свят,
                        да изразява чувствата си
                        и да изгражда повече увереност и спокойствие.
                    </p>

                    <h3>📚 Какво прави продукта различен</h3>

                    <ul>
                        <li>Авторски истории и персонажи</li>
                        <li>Подходящ за работа у дома и с професионалисти</li>
                        <li>Създаден с фокус върху емоционалното развитие</li>
                        <li>Превръща ученето за емоциите в преживяване</li>
                    </ul>

                    <p>
                        Книгата е създадена така,
                        че детето не просто да слуша история,
                        а да се разпознава в нея.
                    </p>

                </div>

            </section>


            <!-- HOW -->
            <section class="product-how reveal">

                <div class="product-how-grid">

                    <!-- CARD 1 -->
                    <div class="how-card hover-pop">

                        <h3>👨‍👩‍👧 За кого е подходяща</h3>

                        <p>
                            Подходяща е за родители,
                            учители, психолози
                            и специалисти,
                            които искат да говорят
                            с децата за емоции
                            по достъпен и интересен начин.
                        </p>

                        <ul>
                            <li>Родители и семейства</li>
                            <li>Детски градини и училища</li>
                            <li>Психолози и логопеди</li>
                            <li>Работа в терапевтична среда</li>
                        </ul>

                    </div>

                    <!-- CARD 2 -->
                    <div class="how-card hover-pop">

                        <h3>🎁 Какво включва</h3>

                        <p>
                            Книгата превръща
                            емоционалното развитие
                            в игра, разговор и преживяване,
                            които помагат на детето
                            по-лесно да разбира и изразява себе си.
                        </p>

                        <ul>
                            <li>Авторска книга</li>
                            <li>Подходящ за деца с и без дислексия</li>
                            <li>Практически насоки</li>
                            <li>Интерактивен подход</li>
                        </ul>

                    </div>

                    <!-- CARD 3 -->
                    <div class="how-card hover-pop">

                        <h3>📚 Книгата вече е налична</h3>

                        <p>
                            „Героите на емоциите“ вече е тук и
                            достига до първите семейства,
                            които искат да помагат на децата си
                            да разбират и изразяват емоциите си по-уверено.
                        </p>

                        <p>
                            👉 Поръчайте своя екземпляр
                            и станете част от това емоционално пътешествие.
                        </p>

                    </div>

                </div>

            </section>

        <?php endif; ?>

        <?php if (has_term('karti', 'product_cat')) : ?>

            <!-- CARDS CONTENT -->

            <!-- BENEFITS -->
            <section class="product-benefits reveal">

                <div class="benefits-grid">

                    <div class="benefit hover-pop">
                        <span>🎭</span>
                        <p>
                            Помагат на детето
                            да разпознава
                            и назовава емоциите си
                        </p>
                    </div>

                    <div class="benefit hover-pop">
                        <span>💬</span>
                        <p>
                            Насърчават разговорите
                            за чувства
                            по естествен и лек начин
                        </p>
                    </div>

                    <div class="benefit hover-pop">
                        <span>🧠</span>
                        <p>
                            Развиват емоционална интелигентност,
                            емпатия и самосъзнание
                        </p>
                    </div>

                    <div class="benefit hover-pop">
                        <span>✨</span>
                        <p>
                            Превръщат ученето
                            за емоциите
                            в истинско приключение
                        </p>
                    </div>

                </div>

            </section>


            <!-- WHY -->
            <section class="product-why reveal">

                <div class="product-why-box">

                    <h2>
                        🌟 Светът на Лумера оживява
                        чрез емоциите
                    </h2>

                    <p>
                        „Героите на емоциите“
                        са авторски карти,
                        създадени да помогнат
                        на децата да разбират
                        по-добре своя вътрешен свят.
                    </p>

                    <blockquote>
                        Двадесет и две карти
                        от света на Лумера,
                        които превръщат емоциите
                        в история, разговор и преживяване.
                    </blockquote>

                    <p>
                        Всяка карта представя герой,
                        емоция и ситуация,
                        в която детето може
                        да разпознае себе си.
                    </p>

                    <h3>💛 Защо създадох тези карти</h3>

                    <p>
                        Понякога децата
                        не могат да обяснят
                        какво чувстват.
                    </p>

                    <p>
                        Но чрез игра,
                        образи и герои,
                        те много по-лесно
                        започват да говорят,
                        да споделят
                        и да разбират себе си.
                    </p>

                    <ul>
                        <li>Подходящи за разговори у дома</li>
                        <li>Подкрепят емоционалното развитие</li>
                        <li>Създават усещане за свързаност</li>
                        <li>Помагат на детето да се чувства чуто и разбрано</li>
                    </ul>

                    <h3>🧠 Как помагат</h3>

                    <p>
                        Картите са създадени
                        на база практически психологически подходи,
                        игрово преживяване
                        и реална работа с деца.
                    </p>

                    <p>
                        Те подпомагат:
                    </p>

                    <ul>
                        <li>Разпознаването на емоции</li>
                        <li>Емоционалното изразяване</li>
                        <li>Развиването на емпатия</li>
                        <li>По-спокойната комуникация</li>
                    </ul>

                </div>

            </section>


            <!-- HOW -->
            <section class="product-how reveal">

                <div class="product-how-grid">

                    <!-- CARD 1 -->
                    <div class="how-card hover-pop">

                        <h3>👨‍👩‍👧 За кого са подходящи</h3>

                        <p>
                            Картите са подходящи
                            за родители,
                            учители,
                            психолози,
                            логопеди
                            и специалисти,
                            работещи с деца.
                        </p>

                        <ul>
                            <li>Семейства и родители</li>
                            <li>Детски градини и училища</li>
                            <li>Терапевтична практика</li>
                            <li>Работа в малки групи</li>
                        </ul>

                    </div>

                    <!-- CARD 2 -->
                    <div class="how-card hover-pop">

                        <h3>🎴 Какво включва комплектът</h3>

                        <p>
                            Комплектът съдържа
                            двадесет и две авторски карти
                            от света на Лумера.
                        </p>

                        <ul>
                            <li>Герои и емоции</li>
                            <li>Подходящ за деца с и без дислексия</li>
                            <li>Визуален и емоционален подход</li>
                            <li>Подходящи за разговор и игра</li>
                            <li>Практичен инструмент за ежедневието</li>
                        </ul>

                    </div>

                    <!-- CARD 3 -->
                    <div class="how-card hover-pop">

                        <h3>🧩 Как се използват</h3>

                        <p>
                            Детето избира карта,
                            разпознава емоцията,
                            свързва я със ситуация
                            и постепенно започва
                            да говори по-свободно
                            за това, което чувства.
                        </p>

                        <ul>
                            <li>У дома</li>
                            <li>В училище или детска градина</li>
                            <li>В терапевтична среда</li>
                            <li>Като ежедневен ритуал</li>
                        </ul>

                        <p>
                            👉 Само няколко минути
                            могат да създадат
                            дълбок емоционален ефект.
                        </p>

                    </div>

                </div>

            </section>

        <?php endif; ?>

    <?php endwhile; ?>

</main>

<?php get_footer(); ?>