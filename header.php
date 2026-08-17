<?php if (!defined('ABSPATH')) exit; ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php wp_head(); ?>
</head>


<body <?php body_class(); ?>>

  <header class="site-header">
    <div class="header-inner">

      <!-- ================= LOGO ================= -->
      <div class="logo">
        <a href="<?php echo home_url(); ?>" class="logo-link">
          <img
            src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.svg"
            alt="Ателие за емоции"
            class="site-logo">
        </a>
      </div>

      <!-- ================= DESKTOP NAV ================= -->
      <nav class="main-nav desktop-nav">

        <a href="<?php echo home_url(); ?>" class="nav-home" aria-label="Начало">
          <svg viewBox="0 0 24 24" class="home-icon">
            <!-- Roof -->
            <path d="M3 11L12 4l9 7"
              fill="none"
              stroke="currentColor"
              stroke-width="1.8"
              stroke-linecap="round"
              stroke-linejoin="round" />

            <!-- Walls + door (rounded style like your image) -->
            <path d="M6 10v8c0 1 1 2 2 2h8c1 0 2-1 2-2v-8"
              fill="none"
              stroke="currentColor"
              stroke-width="1.8"
              stroke-linecap="round"
              stroke-linejoin="round" />

            <!-- Door -->
            <path d="M10 20v-5c0-1 1-2 2-2s2 1 2 2v5"
              fill="none"
              stroke="currentColor"
              stroke-width="1.8"
              stroke-linecap="round"
              stroke-linejoin="round" />
          </svg>
        </a>

        <a href="/za-men">За мен</a>

        <!-- Услуги -->
        <div class="nav-item has-dropdown">
          <a href="/uslugi">Услуги</a>
          <div class="dropdown">
            <a href="/uslugi/detsko-yunoshesko-konsultirane">Детско-юношеско консултиране</a>
            <a href="/uslugi/semeino-konsultirane">Семейно консултиране</a>
            <a href="/uslugi/individualno-konsultirane">Индивидуално консултиране</a>
            <a href="/uslugi/online-konsultirane">Онлайн консултиране</a>
          </div>
        </div>

        


        <!-- Продукти -->
        <div class="nav-item has-dropdown">
          <a href="<?php echo home_url('/produkti'); ?>">Продукти</a>

          <div class="dropdown">
            <?php
            $args = array(
              'post_type'      => 'product',
              'posts_per_page' => -1,
              'orderby'        => 'menu_order',
              'order'          => 'ASC',
              'tax_query'      => array(
                array(
                  'taxonomy' => 'product_cat',
                  'field'    => 'slug',
                  'terms'    => 'produkti'
                )
              )
            );

            $products = new WP_Query($args);

            if ($products->have_posts()) :
              while ($products->have_posts()) : $products->the_post();
            ?>
                <a href="<?php the_permalink(); ?>">
                  <?php the_title(); ?>
                </a>
            <?php
              endwhile;
              wp_reset_postdata();
            endif;
            ?>
          </div>
        </div>
        
        
        
        <!-- Курсове -->
        <div class="nav-item has-dropdown">
          <a href="<?php echo home_url('/kursove'); ?>">Курсове</a>

          <div class="dropdown">
            <?php
            $args = array(
              'post_type'      => 'product',
              'posts_per_page' => -1,
              'orderby'        => 'menu_order',
              'order'          => 'ASC',
              'tax_query'      => array(
                array(
                  'taxonomy' => 'product_cat',
                  'field'    => 'slug',
                  'terms'    => 'kursove'
                )
              )
            );

            $kursove = new WP_Query($args);

            if ($kursove->have_posts()) :
              while ($kursove->have_posts()) : $kursove->the_post();
            ?>
                <a href="<?php the_permalink(); ?>">
                  <?php the_title(); ?>
                </a>
            <?php
              endwhile;
              wp_reset_postdata();
            endif;
            ?>
          </div>
        </div>
        
        <a href="<?php echo home_url('/atelie-za-emocii'); ?>" class="atelier-logo">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/atelie-za-emocii.svg" alt="Ателие за Емоции">
        </a>
        
        <!-- Блог -->
        <div class="nav-item has-dropdown">
          <a href="<?php echo esc_url(home_url('/blog')); ?>">Блог</a>

          <div class="dropdown">
            <?php
            $categories = get_categories([
              'hide_empty' => true
            ]);

            foreach ($categories as $category) :
            ?>
              <a href="<?php echo esc_url(get_category_link($category->term_id)); ?>">
                <?php echo esc_html($category->name); ?>
              </a>
            <?php endforeach; ?>
          </div>
        </div>

        <a href="/kontakti">Контакти</a>

      </nav>

      <!-- ================= DESKTOP ACTIONS ================= -->
      <div class="header-actions desktop-actions">

        <!-- CART -->
        <a href="<?php echo wc_get_cart_url(); ?>" class="cart-link">
          <span class="cart-count <?php echo WC()->cart->get_cart_contents_count() == 0 ? 'is-empty' : ''; ?>">
            <?php echo WC()->cart->get_cart_contents_count(); ?>
          </span>

          <svg class="cart-icon" viewBox="0 0 24 24" fill="none">
            <g transform="translate(0.5, -0.5)">
              <path d="M6 6h15l-1.5 9h-12z"
                stroke="currentColor"
                stroke-width="2"
                stroke-linecap="round"
                stroke-linejoin="round" />
              <circle cx="9" cy="20" r="1.8" fill="currentColor" />
              <circle cx="18" cy="20" r="1.8" fill="currentColor" />
              <path d="M6 6L5 3H2"
                stroke="currentColor"
                stroke-width="2"
                stroke-linecap="round" />
            </g>
          </svg>
        </a>

        <?php if (is_user_logged_in()) : ?>

          <!-- МОЯТ ПРОФИЛ -->
          <a href="<?php echo esc_url(home_url('/profil')); ?>" class="btn-profile">
            Моят профил
          </a>

          <!-- LOGOUT -->
          <a href="<?php echo esc_url(wp_logout_url(home_url('/vhod'))); ?>" class="btn-login">
            Изход
          </a>

        <?php else : ?>

          <a href="<?php echo esc_url(home_url('/vhod')); ?>" class="btn-login">
            Вход
          </a>

        <?php endif; ?>

      </div>

      <!-- Mobile Icons -->
      <div class="mobile-icons">

        <!-- Home -->
        <a href="<?php echo home_url(); ?>" class="nav-home" aria-label="Начало">
          <svg viewBox="0 0 24 24" class="home-icon">
            <!-- Roof -->
            <path d="M3 11L12 4l9 7"
              fill="none"
              stroke="currentColor"
              stroke-width="1.8"
              stroke-linecap="round"
              stroke-linejoin="round" />

            <!-- Walls + door (rounded style like your image) -->
            <path d="M6 10v8c0 1 1 2 2 2h8c1 0 2-1 2-2v-8"
              fill="none"
              stroke="currentColor"
              stroke-width="1.8"
              stroke-linecap="round"
              stroke-linejoin="round" />

            <!-- Door -->
            <path d="M10 20v-5c0-1 1-2 2-2s2 1 2 2v5"
              fill="none"
              stroke="currentColor"
              stroke-width="1.8"
              stroke-linecap="round"
              stroke-linejoin="round" />
          </svg>
        </a>

        <!-- Cart -->
        <a href="<?php echo wc_get_cart_url(); ?>" class="cart-link">

          <?php $count = WC()->cart->get_cart_contents_count(); ?>

          <span class="cart-count <?php echo WC()->cart->get_cart_contents_count() == 0 ? 'is-empty' : ''; ?>">
            <?php echo WC()->cart->get_cart_contents_count(); ?>
          </span>
          <svg class="cart-icon" viewBox="0 0 24 24" fill="none">
            <g transform="translate(0.5, -0.5)">
              <path d="M6 6h15l-1.5 9h-12z"
                stroke="currentColor"
                stroke-width="2"
                stroke-linecap="round"
                stroke-linejoin="round" />
              <circle cx="9" cy="20" r="1.8" fill="currentColor" />
              <circle cx="18" cy="20" r="1.8" fill="currentColor" />
              <path d="M6 6L5 3H2"
                stroke="currentColor"
                stroke-width="2"
                stroke-linecap="round" />
            </g>
          </svg>
        </a>

        <?php if (is_user_logged_in()) : ?>

          <!-- PROFILE ICON -->
          <a href="<?php echo esc_url(home_url('/profil')); ?>" class="profile-link" aria-label="Моят профил">
            <svg viewBox="0 0 24 24" class="profile-icon" fill="none">
              <circle cx="12" cy="8" r="4"
                stroke="currentColor"
                stroke-width="2" />
              <path d="M4 20c2-4 6-6 8-6s6 2 8 6"
                stroke="currentColor"
                stroke-width="2"
                stroke-linecap="round" />
            </svg>
          </a>

        <?php endif; ?>

        <!-- Account (dynamic later) -->
        <?php if (is_user_logged_in()) : ?>

          <a href="<?php echo esc_url(wp_logout_url(home_url('/vhod'))); ?>" class="account-link" aria-label="Изход">
            <!-- Logout icon -->
            <svg class="account-icon" viewBox="0 0 24 24" fill="none">
              <path d="M3 21h12V3H3v18z"
                stroke="currentColor"
                stroke-width="2"
                stroke-linejoin="round" />
              <path d="M16 12h5M18 10l3 2-3 2"
                stroke="currentColor"
                stroke-width="2"
                stroke-linecap="round"
                stroke-linejoin="round" />
            </svg>
          </a>

        <?php else : ?>

          <a href="<?php echo esc_url(home_url('/vhod')); ?>" class="account-link" aria-label="Вход">
            <!-- LOGIN ICON (arrow INTO door) -->
            <svg class="account-icon" viewBox="0 0 24 24" fill="none">
              <!-- Door -->
              <path d="M3 21h12V3H3v18z"
                stroke="currentColor"
                stroke-width="2"
                stroke-linejoin="round" />

              <!-- Arrow pointing LEFT (into door) -->
              <path d="M21 12h-6M18 14l-3-2 3-2"
                stroke="currentColor"
                stroke-width="2"
                stroke-linecap="round"
                stroke-linejoin="round" />
            </svg>
          </a>

        <?php endif; ?>
        <!-- Door + Arrow (login icon) -->



        <!-- Burger -->
        <button class="menu-toggle" aria-label="Меню">
          <span></span>
          <span></span>
          <span></span>
        </button>

      </div>

      <!-- ================= MOBILE DROPDOWN ================= -->
      <div class="mobile-nav-wrapper">

        <nav class="main-nav mobile-nav">

          <a href="/za-men" class="mobile-single">За мен</a>

          <!-- Услуги -->
          <div class="mobile-group">
            <a href="/uslugi" class="mobile-parent">Услуги</a>

            <div class="mobile-subpages">
              <a href="/uslugi/detsko-yunoshesko-konsultirane" class="mobile-child">Детско-юношеско консултиране</a>
              <a href="/uslugi/semeino-konsultirane" class="mobile-child">Семейно консултиране</a>
              <a href="/uslugi/individualno-konsultirane" class="mobile-child">Индивидуално консултиране</a>
              <a href="/uslugi/online-konsultirane" class="mobile-child">Онлайн консултиране</a>
            </div>
          </div>

          

          <!-- Продукти -->
          <div class="mobile-group">
            <a href="/produkti" class="mobile-parent">Продукти</a>

            <div class="mobile-subpages">
              <?php
              $args = array(
                'post_type'      => 'product',
                'posts_per_page' => -1,
                'orderby'        => 'menu_order',
                'order'          => 'ASC',
                'tax_query'      => array(
                  array(
                    'taxonomy' => 'product_cat',
                    'field'    => 'slug',
                    'terms'    => 'produkti'
                  )
                )
              );

              $products = new WP_Query($args);

              if ($products->have_posts()) :
                while ($products->have_posts()) : $products->the_post();
              ?>
                  <a href="<?php the_permalink(); ?>" class="mobile-child">
                    <?php the_title(); ?>
                  </a>
              <?php
                endwhile;
                wp_reset_postdata();
              endif;
              ?>
            </div>
          </div>
          
          
          
          <!-- Курсове -->
          <div class="mobile-group">
            <a href="/kursove" class="mobile-parent">Курсове</a>

            <div class="mobile-subpages">
              <?php
              $args = array(
                'post_type'      => 'product',
                'posts_per_page' => -1,
                'orderby'        => 'menu_order',
                'order'          => 'ASC',
                'tax_query'      => array(
                  array(
                    'taxonomy' => 'product_cat',
                    'field'    => 'slug',
                    'terms'    => 'kursove'
                  )
                )
              );

              $kursove = new WP_Query($args);

              if ($kursove->have_posts()) :
                while ($kursove->have_posts()) : $kursove->the_post();
              ?>
                  <a href="<?php the_permalink(); ?>" class="mobile-child">
                    <?php the_title(); ?>
                  </a>
              <?php
                endwhile;
                wp_reset_postdata();
              endif;
              ?>
            </div>
          </div>
          
          <a href="<?php echo home_url('/atelie-za-emocii'); ?>" class="atelier-logo">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/atelie-za-emocii.svg" alt="Ателие за Емоции">
          </a>
          
          <!-- Блог -->
          <div class="mobile-group">

            <a href="<?php echo home_url('/blog'); ?>" class="mobile-parent">Блог</a>

            <div class="mobile-subpages">
              <?php
              $categories = get_categories();

              foreach ($categories as $category) :
              ?>
                <a href="<?php echo get_category_link($category->term_id); ?>" class="mobile-child">
                  <?php echo esc_html($category->name); ?>
                </a>
              <?php endforeach; ?>
            </div>

          </div>

          <a href="/kontakti" class="mobile-single">Контакти</a>

        </nav>



      </div> <!-- .mobile-nav-wrapper -->

    </div> <!-- .header-inner -->
  </header>
  

  