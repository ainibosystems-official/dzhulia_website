<?php
defined('ABSPATH') || exit;

get_header();
?>


<div class="produkti-wrapper">

    <section class="products-section">

        <div class="products-wrapper">

            <?php

            if (woocommerce_product_loop()) {

                woocommerce_product_loop_start();

                while (have_posts()) {
                    the_post();
                    wc_get_template_part('content', 'product');
                }

                woocommerce_product_loop_end();
            }

            ?>

        </div>

    </section>

</div>

<?php get_footer(); ?>