<?php
if (!defined('ABSPATH')) exit;
get_header();

$current_category = get_queried_object();
?>

<!-- =========================
CATEGORY HERO
========================= -->

<section class="blog-hero">

    <div class="blog-hero-image"></div>

    <div class="blog-hero-overlay">
        <div class="blog-hero-content reveal-up">

            <h1 class="blog-hero-title">
                <?php echo esc_html($current_category->name); ?>
            </h1>

            <p class="blog-hero-subtitle">
                Статии, свързани с тази тема.
            </p>

        </div>
    </div>

</section>


<!-- =========================
CATEGORY POSTS
========================= -->

<section class="blog-list-section">

    <div class="blog-wrapper">

        <div class="blog-connected-grid">

            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

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
                                <?php echo wp_trim_words(get_the_excerpt(), 20, '...'); ?>
                            </p>

                            <a href="<?php the_permalink(); ?>" class="btn btn-gold">
                                Прочети повече
                            </a>

                        </div>

                    </article>

                <?php endwhile;
            else : ?>

                <p style="text-align:center; font-size:20px;">
                    Няма статии в тази категория.
                </p>

            <?php endif; ?>

        </div>

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