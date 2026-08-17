<?php
if (!defined('ABSPATH')) exit;
get_header();
?>

<!-- =========================
SINGLE HERO
========================= -->

<section class="single-hero">

  <?php if (has_post_thumbnail()) : ?>
    <div class="single-hero-image">
      <?php the_post_thumbnail('full'); ?>
    </div>
  <?php endif; ?>

</section>


<!-- =========================
CONTENT
========================= -->

<section class="single-blog">

  <div class="single-wrapper">

    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        <article class="single-content reveal up">

          <!-- CATEGORY -->
          <span class="single-category">
            <?php the_category(', '); ?>
          </span>

          <!-- TITLE -->
          <h1 class="single-title">
            <?php the_title(); ?>
          </h1>

          <!-- DATE -->
          <span class="single-date">
            <?php echo get_the_date('d.m.Y'); ?>
          </span>

          <!-- TEXT -->
          <div class="single-text">
            <?php the_content(); ?>
          </div>

          <!-- BACK BUTTON -->
          <a href="<?php echo home_url('/blog'); ?>" class="btn btn-teal single-back">
            ← Назад към блога
          </a>

        </article>

    <?php endwhile;
    endif; ?>

  </div>

</section>

<?php get_footer(); ?>