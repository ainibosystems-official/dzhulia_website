<?php
/* Template Name: Produkti */

if (!defined('ABSPATH')) exit;

get_header();
?>

<div class="produkti-page">

    <!-- =====================================================
         HERO
    ===================================================== -->
    <section class="produkti-hero">
        <div class="produkti-hero-overlay"></div>

        <div class="produkti-hero-inner">
            <h1 class="produkti-title">Продукти</h1>

            <div class="title-decoration">
                <span></span>
                <span></span>
            </div>

            <p class="produkti-subtitle">
                Авторски ресурси, създадени с грижа за развитието на емоционалната интелигентност при децата.
            </p>

            <p class="produkti-subtitle">
                Те помагат на децата да разбират и изразяват своите емоции по достъпен и вдъхновяващ начин.
            </p>

            <p class="produkti-subtitle">
                Подходящи са за родители, учители и специалисти, които работят с деца.
            </p>
        </div>
    </section>


    <!-- =====================================================
         PRODUCTS
    ===================================================== -->
    <section class="produkti-listing-section">
        <div class="produkti-shell">

            <div class="produkti-section-head">
                <h2 class="produkti-section-title">Нашите продукти</h2>

                <div class="title-decoration">
                    <span></span>
                    <span></span>
                </div>

                <p class="produkti-section-text">
                    Подбрани ресурси, които могат да се използват у дома,
                    в образователна среда или като естествено допълнение
                    към консултативна и терапевтична работа.
                </p>
            </div>

            <?php
            $args = array(
                'post_type'      => 'product',
                'post_status'    => 'publish',
                'posts_per_page' => -1,
                'orderby'        => 'menu_order',
                'order'          => 'ASC',
                'tax_query'      => array(
                    array(
                        'taxonomy' => 'product_cat',
                        'field'    => 'slug',
                        'terms'    => 'produkti',
                    ),
                ),
            );

            $products_query = new WP_Query($args);
            ?>

            <?php if ($products_query->have_posts()) : ?>
                <div class="produkti-rows">

                    <?php
                    $row_index = 0;
                    ?>

                    <?php while ($products_query->have_posts()) : $products_query->the_post(); ?>
                        <?php

                        $product = wc_get_product(get_the_ID());
                        if (!$product) continue;

                        $product_id   = $product->get_id();
                        $product_link = get_permalink($product_id);
                        $price_html   = $product->get_price_html();
                        $thumb_html   = get_the_post_thumbnail($product_id, 'large', ['class' => 'produkti-row-image']);

                        $excerpt = wp_strip_all_tags($product->get_short_description());

                        if (empty($excerpt)) {
                            $excerpt = get_the_excerpt();
                        }

                        /* limit to shorter preview */
                        $excerpt = wp_trim_words($excerpt, 18, ' [...]');

                        $buy_url = $product->add_to_cart_url();
                        $buy_classes = 'produkti-btn produkti-btn-primary';

                        if ($product->is_type('simple') && $product->is_purchasable() && $product->is_in_stock()) {
                            $buy_classes .= ' add_to_cart_button ajax_add_to_cart';
                        } else {
                            $buy_url = $product_link;
                        }

                        $reverse = ($row_index % 2) ? 'produkti-row-reverse' : '';

                        ?>

                        <article class="produkti-row <?php echo esc_attr($reverse); ?>">

                            <div class="produkti-row-media reveal">

                                <?php if ($thumb_html) : ?>
                                    <?php echo $thumb_html; ?>
                                <?php else : ?>
                                    <img
                                        src="<?php echo esc_url(wc_placeholder_img_src('large')); ?>"
                                        class="produkti-row-image"
                                        alt="<?php the_title(); ?>">
                                <?php endif; ?>

                            </div>


                            <div class="produkti-row-content reveal">

                                <h3 class="produkti-row-title">
                                    <a href="<?php echo esc_url($product_link); ?>">
                                        <?php the_title(); ?>
                                    </a>
                                </h3>

                                <p class="produkti-row-text">
                                    <?php echo esc_html($excerpt); ?>
                                </p>

                                <?php if (!empty($price_html)) : ?>
                                    <div class="produkti-row-price">
                                        <?php echo $price_html; ?>
                                    </div>
                                <?php endif; ?>

                                <div class="produkti-row-actions">

                                    <a
                                        href="<?php echo esc_url($buy_url); ?>"
                                        class="<?php echo esc_attr($buy_classes); ?>"
                                        data-product_id="<?php echo esc_attr($product_id); ?>"
                                        data-quantity="1"
                                        rel="nofollow">
                                        Купи
                                    </a>

                                    <a href="<?php echo esc_url($product_link); ?>" class="produkti-btn produkti-btn-secondary">
                                        Виж повече
                                    </a>

                                </div>

                            </div>

                        </article>

                        <?php $row_index++; ?>

                    <?php endwhile; ?>

                </div>

                <?php wp_reset_postdata(); ?>

            <?php else : ?>
                <div class="produkti-empty">
                    <p>В момента няма налични продукти в тази категория.</p>
                </div>
            <?php endif; ?>

        </div>
    </section>


    <!-- =====================================================
         INFO
===================================================== -->
    <section class="produkti-info-section">

        <div class="produkti-shell">

            <div class="produkti-info-box reveal">

                <h2 class="produkti-info-title">
                    За кого са тези продукти
                </h2>

                <div class="title-decoration">
                    <span></span>
                    <span></span>
                </div>

                <p class="produkti-info-intro">
                    Тези продукти са създадени за всички,
                    които участват в развитието на детето —
                    родители, учители, психолози,
                    логопеди и специалисти,
                    които търсят по-практичен
                    и емоционално интелигентен подход.
                </p>

                <div class="produkti-info-grid">

                    <div class="produkti-info-card">

                        <h3>Подходящи за</h3>

                        <ul>
                            <li>Родители, които искат да разбират и подкрепят детето си</li>

                            <li>Учители в детски градини и училища</li>

                            <li>Психолози, логопеди и специалисти</li>
                        </ul>

                    </div>

                    <div class="produkti-info-card">

                        <h3>Могат да се използват</h3>

                        <ul>
                            <li>У дома като ежедневен инструмент</li>

                            <li>В образователна среда с група деца</li>

                            <li>В терапевтична практика</li>

                            <li>Като допълнение към консултативен процес</li>
                        </ul>

                    </div>

                    <div class="produkti-info-card">

                        <h3>Подходящ подарък</h3>

                        <ul>
                            <li>От родител към дете</li>

                            <li>От учител към група деца</li>

                            <li>От специалист към терапевтична среда</li>
                        </ul>

                    </div>

                </div>

                <p class="produkti-info-footer">
                    Създадени са така, че да бъдат лесни за използване,
                    но с дълбок и устойчив ефект —
                    подарък, който не просто радва,
                    а развива умения за цял живот.
                </p>

            </div>

        </div>

    </section>
    <!-- =====================================================
         CTA
===================================================== -->
    <section class="produkti-cta-section">

        <div class="produkti-shell">

            <div class="produkti-cta-box reveal">

                <h2>
                    Не сте сигурни кой продукт е най-подходящ?
                </h2>

                <p>
                    Ако се колебаете откъде да започнете,
                    можете спокойно да се свържете с мен.
                </p>

                <p class="produkti-cta-subtext">
                    Ще Ви насоча към най-подходящия продукт
                    според възрастта на детето,
                    ситуацията и нуждите Ви.
                </p>

                <a href="<?php echo esc_url(home_url('/kontakti')); ?>" class="produkti-btn produkti-btn-primary">
                    Свържи се
                </a>

            </div>

        </div>

    </section>

</div>

<?php get_footer(); ?>