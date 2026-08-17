<?php
if (!defined('ABSPATH')) exit;
get_header();
?>


<main style="padding:40px;">
  <h1>INDEX.PHP</h1>

  <?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
      <article style="margin-bottom:30px;">
        <h2><?php the_title(); ?></h2>
        <?php the_content(); ?>
      </article>
    <?php endwhile; ?>
  <?php else : ?>
    <p>No posts found.</p>
  <?php endif; ?>
</main>

<?php get_footer(); ?>