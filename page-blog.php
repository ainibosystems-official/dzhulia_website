<?php
/*
Template Name: Blog Page
*/
if (!defined('ABSPATH')) exit;
get_header();
?>

<!-- =========================
BLOG HERO
========================= -->

<section class="blog-hero">

    <div class="blog-hero-image"></div>

    <div class="blog-hero-overlay">
        <div class="blog-hero-content reveal-up">

            <h1 class="blog-hero-title">Блог</h1>

            <p class="blog-hero-subtitle">
                Мисли, насоки и вдъхновение за по-добро разбиране на емоциите.
            </p>

        </div>
    </div>

</section>


<!-- =========================
BLOG LIST BY CATEGORIES
========================= -->

<section class="blog-list-section">

    <div class="blog-wrapper">

        <?php
        $categories = get_categories();

        if ($categories) :
            foreach ($categories as $category) :

                // Query posts per category
                $args = array(
                    'post_type' => 'post',
                    'posts_per_page' => 6,
                    'cat' => $category->term_id
                );

                $query = new WP_Query($args);

                if ($query->have_posts()) :
        ?>

                    <!-- CATEGORY TITLE -->
                    <h2 class="blog-category-title reveal-up">
                        <?php echo esc_html($category->name); ?>
                    </h2>

                    <!-- GRID -->
                    <div class="blog-connected-grid">

                        <?php while ($query->have_posts()) : $query->the_post(); ?>

                            <article class="blog-pill reveal-up">

                                <!-- IMAGE -->
                                <div class="pill-image">
                                    <a href="<?php the_permalink(); ?>">
                                        <?php
                                        if (has_post_thumbnail()) {
                                            the_post_thumbnail('large');
                                        } else {
                                            echo '<img src="' . get_template_directory_uri() . '/assets/img/placeholder.jpg" alt="Blog image">';
                                        }
                                        ?>
                                    </a>
                                </div>

                                <!-- DOT -->
                                <div class="pill-dot"></div>

                                <!-- CONTENT -->
                                <div class="pill-content">

                                    <span class="blog-date">
                                        <?php echo get_the_date('d.m.Y'); ?>
                                    </span>

                                    <h3>
                                        <a href="<?php the_permalink(); ?>">
                                            <?php the_title(); ?>
                                        </a>
                                    </h3>

                                    <p class="blog-excerpt">
                                        <?php echo wp_trim_words(get_the_content(), 20, '...'); ?>
                                    </p>

                                    <a href="<?php the_permalink(); ?>" class="btn btn-gold">
                                        Прочети повече
                                    </a>

                                </div>

                            </article>

                        <?php endwhile; ?>

                    </div>

            <?php
                    wp_reset_postdata();
                endif;

            endforeach;
        else :
            ?>

            <p style="text-align:center; font-size:20px;">
                Все още няма категории или статии.
            </p>

        <?php endif; ?>

    </div>

</section>


<!-- =========================
CTA
========================= -->

<section class="blog-cta-section">

    <div class="blog-cta-inner reveal-up">

        <h2>Не сте сигурни откъде да започнете?</h2>

        <p>
            Понякога една кратка насока е достатъчна,
            за да се направи първата крачка.
        </p>

        <a href="/kontakti" class="btn btn-gold">
            Свържете се с мен
        </a>

    </div>

</section>


<?php get_footer(); ?>