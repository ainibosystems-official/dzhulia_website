<?php
/* Template Name: Kursove */

get_header();
?>

<?php
/* Template Name: Kursove */

if (!defined('ABSPATH')) exit;

get_header();
?>

<div class="kursove-page">


    <!-- =====================================================
     HERO
===================================================== -->
    <section class="kursove-hero">
        <div class="kursove-hero-overlay"></div>

        <div class="kursove-hero-inner">
            <h1 class="kursove-title">Курсове</h1>

            <div class="title-decoration">
                <span></span>
                <span></span>
            </div>

            <p class="kursove-subtitle">
                Практични курсове за по-дълбоко разбиране на емоциите,
                вътрешния баланс и личностното развитие.
            </p>
        </div>
    </section>


    <!-- =====================================================
     COURSES
===================================================== -->
    <section class="kursove-listing-section">
        <div class="kursove-shell">

            <div class="kursove-section-head">
                <h2 class="kursove-section-title">Нашите курсове</h2>

                <div class="title-decoration">
                    <span></span>
                    <span></span>
                </div>

                <p class="kursove-section-text">
                    Курсове, създадени за дълбока вътрешна работа,
                    развитие и устойчив емоционален баланс.
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
                        'terms'    => 'kursove',
                    ),
                ),
            );

            $courses = new WP_Query($args);
            ?>

            <?php if ($courses->have_posts()) : ?>
                <div class="kursove-rows">

                    <?php $row_index = 0; ?>

                    <?php while ($courses->have_posts()) : $courses->the_post(); ?>
                        <?php

                        $product = wc_get_product(get_the_ID());
                        if (!$product) continue;

                        $product_id   = $product->get_id();
                        $product_link = get_permalink($product_id);
                        $price_html   = $product->get_price_html();

                        $thumb_html = get_the_post_thumbnail(
                            $product_id,
                            'large',
                            ['class' => 'kursove-row-image']
                        );

                        $excerpt = get_the_excerpt();
                        if (empty($excerpt)) {
                            $excerpt = wp_trim_words(
                                wp_strip_all_tags($product->get_short_description()),
                                26
                            );
                        }

                        $buy_url = $product->add_to_cart_url();
                        $buy_classes = 'produkti-btn produkti-btn-primary';

                        if ($product->is_type('simple') && $product->is_purchasable() && $product->is_in_stock()) {
                            $buy_classes .= ' add_to_cart_button ajax_add_to_cart';
                        } else {
                            $buy_url = $product_link;
                        }

                        $reverse = ($row_index % 2) ? 'kursove-row-reverse' : '';
                        ?>

                        <article class="kursove-row <?php echo esc_attr($reverse); ?>">

                            <!-- IMAGE -->
                            <div class="kursove-row-media reveal">

                                <?php if ($thumb_html) : ?>
                                    <?php echo $thumb_html; ?>
                                <?php else : ?>
                                    <img
                                        src="<?php echo esc_url(wc_placeholder_img_src('large')); ?>"
                                        class="kursove-row-image"
                                        alt="<?php the_title(); ?>">
                                <?php endif; ?>

                            </div>


                            <!-- CONTENT -->
                            <div class="kursove-row-content reveal">

                                <h3 class="kursove-row-title">
                                    <a href="<?php echo esc_url($product_link); ?>">
                                        <?php the_title(); ?>
                                    </a>
                                </h3>

                                <p class="kursove-row-text">
                                    <?php echo esc_html($excerpt); ?>
                                </p>

                                <?php if (!empty($price_html)) : ?>
                                    <div class="kursove-row-price">
                                        <?php echo $price_html; ?>
                                    </div>
                                <?php endif; ?>

                                <div class="kursove-row-actions">

                                    <a
                                        href="<?php echo esc_url($buy_url); ?>"
                                        class="produkti-btn produkti-btn-primary <?php echo esc_attr($product->is_type('simple') && $product->is_purchasable() && $product->is_in_stock() ? 'add_to_cart_button ajax_add_to_cart' : ''); ?>"
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

                <p class="no-courses-message">
                    В момента няма налични курсове.
                </p>

            <?php endif; ?>

        </div>
    </section>


    <!-- =====================================================
     INFO
===================================================== -->
    <section class="produkti-info-section">
        <div class="produkti-shell">
            <div class="produkti-info-box reveal">

                <h2 class="produkti-info-title">За кого са тези курсове</h2>

                <div class="title-decoration">
                    <span></span>
                    <span></span>
                </div>

                <p>
                    Курсовете са подходящи за хора, които искат да развият
                    по-добро разбиране за себе си, своите емоции и начина,
                    по който взаимодействат с околните.
                </p>

                <p>
                    Подходящи са както за родители и специалисти,
                    така и за всеки, който търси по-дълбок личностен растеж
                    и вътрешен баланс.
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

                <h2>Не сте сигурни кой курс е най-подходящ?</h2>

                <p>
                    Свържете се с нас и ще ви помогнем да изберете
                    най-подходящия курс според вашите нужди.
                </p>

                <a href="<?php echo esc_url(home_url('/kontakti')); ?>" class="produkti-btn produkti-btn-primary">
                    Свържи се
                </a>

            </div>
        </div>
    </section>

</div>

<?php get_footer(); ?>


<?php get_footer(); ?>