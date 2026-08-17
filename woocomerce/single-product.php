<?php
defined('ABSPATH') || exit;

get_header();
?>

<main class="product-single">

    <?php
    while (have_posts()) :
        the_post();

        global $product;
    ?>

        <section class="product-single-section">

            <div class="product-single-shell">

                <div class="product-single-grid">

                    <!-- IMAGE -->
                    <div class="product-single-gallery">

                        <div class="product-image-frame">

                            <?php
                            $image_id = $product->get_image_id();

                            if ($image_id) {
                                echo wp_get_attachment_image($image_id, 'large', false, [
                                    'class' => 'product-single-image'
                                ]);
                            } else {
                                echo '<img src="' . wc_placeholder_img_src('large') . '" class="product-single-image" />';
                            }
                            ?>

                        </div>

                    </div>

                    <?php
                    $image_id = $product->get_image_id();

                    if ($image_id) {
                        echo wp_get_attachment_image($image_id, 'large', false, [
                            'class' => 'product-single-image'
                        ]);
                    } else {
                        echo '<img src="' . wc_placeholder_img_src('large') . '" class="product-single-image" />';
                    }
                    ?>

                </div>


                <!-- CONTENT -->
                <div class="product-single-content">

                    <h1 class="product-single-title"><?php the_title(); ?></h1>

                    <div class="product-single-price">
                        <?php echo $product->get_price_html(); ?>
                    </div>

                    <div class="product-single-description">
                        <?php the_content(); ?>
                    </div>

                    <div class="product-single-cart">
                        <?php woocommerce_template_single_add_to_cart(); ?>
                    </div>

                </div>

            </div>

            </div>

        </section>

    <?php endwhile; ?>

</main>

<?php get_footer(); ?>