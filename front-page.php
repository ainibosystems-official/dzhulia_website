<?php
if (!defined('ABSPATH')) exit;
get_header();
?>

<section class="hero">

  <!-- RIGHT SIDE: image carousel -->
  <div class="hero-media">
    <div class="hero-carousel">
      <img
        src="<?php echo get_template_directory_uri(); ?>/assets/img/hero1.jpg"
        alt=""
        data-title="Психолог Джулия Божидарова"
        data-text="Подкрепа за деца, юноши, родители и семейства в моменти на трудност, промяна и нужда от повече спокойствие, яснота и сигурност"
        class="active">

      <img
        src="<?php echo get_template_directory_uri(); ?>/assets/img/hero2.jpg"
        alt=""
        data-title="Книги, карти и образователни ресурси"
        data-text="Създадени с мисия да помагат на децата и възрастните да говорят по-лесно за емоциите – у дома, в детската градина, в училище и в терапевтична среда.">

      <img
        src="<?php echo get_template_directory_uri(); ?>/assets/img/hero3.jpg"
        alt=""
        data-title="Приказно ателие за емоции"
        data-text="Авторско пространство, в което децата развиват емоционална интелигентност чрез приказки, игра, творчество и внимателно воден психологически подход.">


    </div>

    <!-- LEFT SIDE: text -->
    <div class="hero-content">
      <div class="hero-box">
        <h1 id="hero-title">Психолог Джулия Божидарова</h1>

        <p id="hero-text" class="soft-italic">
          Подкрепа за деца, юноши, родители и семейства в моменти на трудност, промяна и нужда от повече спокойствие, яснота и сигурност.
        </p>

        <div class="hero-actions">
          <a href="/uslugi" class="btn">Услуги</a>
          <a href="/kontakti" class="btn btn-secondary">Запази час</a>
        </div>
      </div>
</section>

<section class="about-short-section">
  <div class="about-short-wrapper">

    <div class="about-short-grid">


      <div class="about-short-image reveal-left">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/about-julia.jpg" alt="Психолог Джулия Божидарова">

      </div>

      <div class="about-short-content reveal-right">

        <h2 class="section-heading-left">
          За мен - Психолог Джулия Божидарова
        </h2>

        <div class="about-block">
          <p>
            Аз съм Джулия Божидарова – психолог и създател на програми за развитие на емоционалната интелигентност при деца.

            Работя с деца, родители и учители в посока повече спокойствие, разбиране и сигурност в отношенията.

            Моята мисия е всяко семейство да има достъп до подкрепа и практични начини за развиване на емоционалната интелигентност.
          </p>
        </div>

        <div class="about-subblock">
          <h3>Образование и професионален път</h3>

          <p>
            Имам бакалавърска степен по психология и магистърска степен по психологично консултиране.

            Преминала съм обучения в сферата на детската и семейната психология и продължавам професионалното си развитие в областта на позитивната психотерапия.
          </p>
        </div>

        <div class="about-subblock">
          <h3>Как работя</h3>

          <p>
            Работата ми е насочена към разбиране на вътрешния свят на детето и изграждане на спокойна връзка между дете и родител.

            Използвам подходи като емоционална регулация, позитивна психология, приказкотерапия и игрови техники, съобразени с нуждите на всяко семейство.
          </p>
        </div>

        <div class="about-subblock">
          <h3>За какво е моята работа</h3>

          <p>
            Подкрепям деца със силни емоции и тревожност, родители в търсене на насоки и семейства, преминаващи през промени.

            Вярвам, че когато детето бъде разбрано, започва истинската промяна.

            <br><br>#МисияЕмоции
          </p>
        </div>


        <a href="/za-men" class="btn about-cta-btn">
          Прочети повече
        </a>

      </div>

    </div>

  </div>
</section>

<section class="help-section">
  <h2 class="help-heading">С какво мога да бъда полезна</h2>
  <div class="help-wrapper">

    <div class="help-grid">


      <div class="help-card reveal-up">
        <span class="help-accent"></span>
        <h3>Емоционални трудности при деца и юноши</h3>
        <p>
          Подкрепа при тревожност, страхове, трудна адаптация, избухвания, силни емоции, несигурност и затруднения в изразяването на чувства.
        </p>

      </div>


      <div class="help-card reveal-up">
        <span class="help-accent"></span>
        <h3>Трудности в поведението и взаимоотношенията</h3>
        <p>
          Работа при конфликти, напрежение у дома, трудности в общуването, проблеми в училищна среда, ниска самооценка и предизвикателства във връзките с връстници.
        </p>

      </div>


      <div class="help-card reveal-up">
        <span class="help-accent"></span>
        <h3>Подкрепа за родители и семейства</h3>
        <p>
          Насоки, разбиране и професионална подкрепа, когато семейството преминава през труден период, промяна, криза или има нужда от повече спокойствие и свързаност.
        </p>

      </div>

    </div>


</section>

<section class="services-section">

  <?php $theme_img = get_template_directory_uri() . '/assets/img/'; ?>

  <!-- 1 -->
  <div class="service-row">
    <div class="reveal-clip">
      <div class="service-image reveal-left">
        <img src="<?php echo $theme_img; ?>service1.jpg" alt="Индивидуална консултация">
      </div>
    </div>

    <div class="reveal-clip">
      <div class="service-content reveal-right">
        <h3>Детско-юношеско консултиране</h3>
        <p>Психологическа подкрепа за деца и юноши при емоционални, поведенчески и социални трудности. Работя както с детето, така и с родителите, защото устойчивата промяна се случва най-добре, когато има разбиране и подкрепа от цялата семейна среда.</p>
        <div class="service-buttons">
          <a href="<?php echo get_permalink(get_page_by_path('detsko-yunoshesko-konsultirane')); ?>" class="btn">Към услугата</a>
          <a href="<?php echo get_permalink(get_page_by_path('uslugi')); ?>" class="btn btn-secondary">Всички услуги</a>
        </div>
      </div>
    </div>
  </div>

  <!-- 2 -->
  <div class="service-row reverse">
    <div class="reveal-clip">
      <div class="service-image reveal-right">
        <img src="<?php echo $theme_img; ?>service2.jpg" alt="Онлайн консултация">
      </div>
    </div>

    <div class="reveal-clip">
      <div class="service-content reveal-left">
        <h3>Семейно консултиране</h3>
        <p>Подкрепа за семейства, които искат да подобрят комуникацията, да преминат по-осъзнато през конфликт, напрежение или промяна и да изградят по-стабилна и спокойна връзка помежду си.</p>
        <div class="service-buttons">
          <a href="<?php echo get_permalink(get_page_by_path('semeino-konsultirane')); ?>" class="btn">Към услугата</a>
          <a href="<?php echo get_permalink(get_page_by_path('uslugi')); ?>" class="btn btn-secondary">Всички услуги</a>
        </div>
      </div>
    </div>
  </div>

  <!-- 3 -->
  <div class="service-row">
    <div class="reveal-clip">
      <div class="service-image reveal-left">
        <img src="<?php echo $theme_img; ?>service3.jpg" alt="Работа с двойки">
      </div>
    </div>

    <div class="reveal-clip">
      <div class="service-content reveal-right">
        <h3>Индивидуално консултиране</h3>
        <p>Пространство за лична подкрепа, осъзнаване и работа върху тревожност, вътрешно напрежение, житейски предизвикателства, самооценка, емоционални трудности и важни лични теми.</p>
        <div class="service-buttons">
          <a href="<?php echo get_permalink(get_page_by_path('individualno-konsultirane')); ?>" class="btn">Към услугата</a>
          <a href="<?php echo get_permalink(get_page_by_path('uslugi')); ?>" class="btn btn-secondary">Всички услуги</a>
        </div>
      </div>
    </div>
  </div>

  <!-- 4 -->
  <div class="service-row reverse">
    <div class="reveal-clip">
      <div class="service-image reveal-right">
        <img src="<?php echo $theme_img; ?>service4.jpg" alt="Детско-юношеско консултиране">
      </div>
    </div>

    <div class="reveal-clip">
      <div class="service-content reveal-left">
        <h3>Онлайн консултиране</h3>
        <p>Възможност за професионална психологическа подкрепа от разстояние – удобен и достъпен формат за хора, които не могат да посещават кабинета на място, но имат нужда от сигурно пространство за разговор и насока.</p>
        <div class="service-buttons">
          <a href="<?php echo get_permalink(get_page_by_path('individualno-konsultirane')); ?>" class="btn">Към услугата</a>
          <a href="<?php echo get_permalink(get_page_by_path('uslugi')); ?>" class="btn btn-secondary">Всички услуги</a>
        </div>
      </div>
    </div>
  </div>

</section>



<section class="products-section">

  <h2 class="products-heading">Продукти</h2>

  <div class="products-wrapper">
    <?php
    $home_products_query = new WP_Query(array(
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
    ));

    if ($home_products_query->have_posts()) {
      $product_ids = array();

      while ($home_products_query->have_posts()) {
        $home_products_query->the_post();
        $product_ids[] = get_the_ID();
      }

      wp_reset_postdata();

      echo do_shortcode(
        '[products ids="' . implode(',', $product_ids) . '" columns="4" orderby="post__in"]'
      );
    }
    ?>
  </div>

</section>

<?php
$args = array(
  'post_type'      => 'product',
  'posts_per_page' => -1,
  'tax_query'      => array(
    array(
      'taxonomy' => 'product_cat',
      'field'    => 'slug',
      'terms'    => 'kursove',
    ),
  ),
  'orderby' => 'menu_order',
  'order'   => 'ASC'
);

$courses = new WP_Query($args);
?>

<section class="courses-section">

  <h2 class="products-heading">Курсове</h2>

  <div class="courses-wrapper">

    <?php if ($courses->have_posts()) : ?>

      <?php while ($courses->have_posts()) : $courses->the_post(); ?>

        <div class="course-row">

          <div class="reveal-clip">
            <div class="course-image reveal-left">
              <a href="<?php the_permalink(); ?>">
                <?php the_post_thumbnail('large'); ?>
              </a>
            </div>
          </div>

          <div class="reveal-clip">
            <div class="course-content reveal-right">
              <h3><?php the_title(); ?></h3>

              <p>
                <?php echo wp_trim_words(get_the_excerpt(), 28); ?>
              </p>

              <div class="course-buttons">
                <a href="<?php the_permalink(); ?>" class="btn">
                  Виж курса
                </a>

                <a href="/courses" class="btn btn-secondary">
                  Всички курсове
                </a>
              </div>

            </div>
          </div>

        </div>

      <?php endwhile; ?>

    <?php else : ?>

      <p class="no-courses-message">
        В момента няма налични курсове.
      </p>

    <?php endif; ?>

  </div>

  <section class="atelier-hero">

    <!-- =========================
       CAROUSEL
  ========================= -->
    <div class="atelier-carousel">

      <div class="atelier-slide active"
        data-title="Приказно ателие за емоции"
        data-text="Авторска програма за развитие на емоционалната интелигентност при деца чрез приказки, игра и творчество.">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/atelier1.jpg" alt="Приказно ателие за емоции">
      </div>

      <div class="atelier-slide"
        data-title="Работа с деца в реална среда"
        data-text="Ателието се реализира всеки месец в 5 детски градини и достига до десетки деца, които учат да разбират и изразяват своите емоции.">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/atelier2.jpg" alt="Работилници за деца">
      </div>

      <div class="atelier-slide"
        data-title="Групи в кабинета"
        data-text="Организирам групи в кабинета си, които се сформират при отворен прием – с внимателно подбрана среда и фокус върху всяко дете.">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/atelier3.jpg" alt="Семейни срещи">
      </div>

    </div>

    <!-- =========================
       TEXT OVERLAY
  ========================= -->
    <div class="atelier-text active">
      <div class="atelier-text-box">
        <img
          class="atelier-card-logo"
          src="<?php echo get_template_directory_uri(); ?>/assets/img/atelie-za-emocii.svg"
          alt="Ателие за емоции">
        <h2 id="atelier-title">Приказно ателие за емоции</h2>
        <p id="atelier-text">
          Авторска програма за развитие на емоционалната интелигентност при деца чрез приказки, игра и творчество.
        </p>
      </div>
    </div>

    <!-- =========================
       NAVIGATION ARROWS (Desktop)
  ========================= -->
    <div class="atelier-arrow left" aria-label="Предишен слайд">
    </div>

    <div class="atelier-arrow right" aria-label="Следващ слайд">
    </div>

  </section>

</section>

<section class="contact-split-section">
  <div class="contact-split-wrapper">

    <h2 class="products-heading">Контакти</h2>

    <div class="contact-split-card">

      <!-- LEFT: FORM PANEL -->
      <div class="contact-panel contact-panel-form reveal-left">
        <div class="contact-panel-head">
          <p class="contact-kicker">Пишете ми</p>
          <h3 class="contact-title">С какво мога да бъда полезна?</h3>
          <p class="contact-subtitle">Ако имате въпрос, нужда от консултация или искате да запишете час, изпратете съобщение. Ще се свържа с вас възможно най-скоро.</p>
        </div>

        <div class="contact-form-area">
          <?php echo do_shortcode('[contact-form-7 id="969104a" title="Contact form 1"]'); ?>
        </div>
      </div>

      <!-- RIGHT: INFO PANEL -->
      <div class="contact-panel contact-panel-info reveal-right">
        <div class="contact-panel-head">
          <p class="contact-kicker">Контакт</p>
          <h3 class="contact-title">Изберете удобен начин да се свържем</h3>
          <p class="contact-subtitle">Може да ми пишете, да се обадите или да използвате формата за контакт. Ще получите насока за най-подходящата следваща стъпка.</p>
        </div>

        <div class="contact-info-list">

          <div class="contact-info-item">
            <div class="contact-info-icon">☎</div>
            <div class="contact-info-text">
              <div class="label">Телефон</div>
              <a href="tel:+359988870772">+359 98 887 0772</a>
            </div>
          </div>

          <div class="contact-info-item">
            <div class="contact-info-icon">✉</div>
            <div class="contact-info-text">
              <div class="label">Имейл</div>
              <a href="mailto:psiholog.dzhuliabozhidarova@gmail.com">psiholog.dzhuliabozhidarova@gmail.com</a>
            </div>
          </div>

          <div class="contact-info-item">
            <div class="contact-info-icon">⏰</div>
            <div class="contact-info-text">
              <div class="label">Работно време</div>
              <div class="plain">Понеделник – Петък · 09:00 – 18:00</div>
            </div>
          </div>

          <div class="contact-info-item">
            <div class="contact-info-icon">📍</div>
            <div class="contact-info-text">
              <div class="label">Адрес</div>
              <div class="plain">Айтос, Улица "Райна Княгиня 7, След манипулационен кабинет, Център, 8500</div>
            </div>
          </div>

          <div class="contact-socials">

            <a href="https://www.facebook.com/PsychologyDzhuliaBozhidarova/"
              class="contact-social contact-facebook"
              target="_blank"
              rel="noopener">
              <span>Facebook</span>
            </a>

            <a href="https://www.instagram.com/psychology.dzhuliabozhidarova/"
              class="contact-social contact-instagram"
              target="_blank"
              rel="noopener">
              <span>Instagram</span>
            </a>

          </div>

        </div>

      </div>
    </div>

    <!-- MAP SECTION -->
    <div class="contact-map-section reveal-up">

      <div class="contact-map-container">

        <!-- Optional Title -->
        <div class="contact-map-header">
          <h3>Намерете ме тук</h3>
          <div class="map-divider"></div>
        </div>

        <!-- Map Card -->
        <div class="contact-map-card">
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3478.127767653552!2d27.251500076491997!3d42.70023131354207!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40a67d033cf17a51%3A0xbc19306143a7c970!2z0JTQtdGC0YHQutCwINC4INGB0LXQvNC10LnQvdCwINC_0YHQuNGF0L7Qu9C-0LPQuNGPIC0g0JTQttGD0LvQuNGPINCR0L7QttC40LTQsNGA0L7QstCw!5e1!3m2!1sen!2sbg!4v1774874326818!5m2!1sen!2sbg"
            allowfullscreen=""
            loading="lazy"
            referrerpolicy="no-referrer-when-downgrade">
          </iframe>
        </div>

      </div>

    </div>
</section>

<?php wp_reset_postdata(); ?>

<?php get_footer(); ?>