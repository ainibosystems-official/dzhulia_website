<?php
if (!defined('ABSPATH')) exit;

/* =========================
   THEME SETUP
========================= */
add_action('after_setup_theme', function () {
  remove_theme_support('editor-styles');
  add_theme_support('woocommerce');
  add_theme_support('post-thumbnails'); // 🔥 REQUIRED

  // WooCommerce gallery features
  add_theme_support('wc-product-gallery-zoom');
  add_theme_support('wc-product-gallery-lightbox');
  add_theme_support('wc-product-gallery-slider');
});

/* =========================
   ENQUEUE CSS / JS
========================= */
add_action('wp_enqueue_scripts', function () {
  $theme_uri = get_template_directory_uri();

  /* Global CSS */
  wp_enqueue_style(
    'aze-main',
    $theme_uri . '/assets/css/main.css',
    [],
    '1.0'
  );

  /* About page */
  if (is_page('za-men')) {
    wp_enqueue_style(
      'aze-about',
      $theme_uri . '/assets/css/about.css',
      ['aze-main'],
      '1.0'
    );
  }

  /* Services list */
  if (is_page('uslugi')) {
    wp_enqueue_style(
      'aze-uslugi',
      $theme_uri . '/assets/css/uslugi.css',
      ['aze-main'],
      '1.0'
    );
  }

  /* Single services */
  if (is_page(array('detsko-yunoshesko-konsultirane', 'semeino-konsultirane', 'individualno-konsultirane', 'online-konsultirane'))) {
    wp_enqueue_style(
      'aze-usluga',
      $theme_uri . '/assets/css/usluga.css',
      ['aze-main'],
      '1.0'
    );
  }

  /* Atelier page */
  if (is_page('atelie-za-emocii')) {
    wp_enqueue_style(
      'aze-atelier',
      $theme_uri . '/assets/css/atelier.css',
      ['aze-main'],
      '1.0'
    );
  }

  /* Products page */
  /* Products + WooCommerce pages */
  if (
    is_page('produkti') ||
    is_page_template('page-produkti.php') ||
    is_shop() ||
    is_product() ||
    is_product_category() ||
    is_cart() ||               // 🔥 ADD THIS
    is_checkout() ||           // 🔥 ADD THIS
    is_account_page()          // 🔥 ADD THIS
  ) {
    wp_enqueue_style(
      'aze-produkti',
      $theme_uri . '/assets/css/produkti.css',
      ['aze-main'],
      '1.0'
    );
  }

  /* Single product page */
  if (is_product()) {
    wp_enqueue_style(
      'aze-single-product',
      $theme_uri . '/assets/css/single-product.css',
      ['aze-main'],
      '1.0'
    );
  }

  /* Cart Page */
  if (class_exists('WooCommerce') && is_cart()) {
    wp_enqueue_style(
      'aze-cart',
      get_template_directory_uri() . '/assets/css/cart.css',
      ['aze-main'],
      filemtime(get_template_directory() . '/assets/css/cart.css')
    );
  }

  wp_enqueue_script(
    'aze-scroll-animations',
    $theme_uri . '/assets/js/scroll-animations.js',
    [],
    '1.0',
    true
  );

  /* JS */
  wp_enqueue_script(
    'aze-hero-carousel',
    $theme_uri . '/assets/js/hero-carousel.js',
    [],
    '1.0',
    true
  );

  if (is_product()) {
    wp_enqueue_script(
      'aze-product-gallery',
      $theme_uri . '/assets/js/product-gallery.js',
      [],
      '1.0',
      true
    );
  }

  /* Courses page */
  if (is_page('kursove') || is_page_template('page-kursove.php')) {
    wp_enqueue_style(
      'aze-kursove',
      $theme_uri . '/assets/css/kursove.css',
      ['aze-main'],
      '1.0'
    );
  }

  if (is_page('blog')) {
    wp_enqueue_style(
      'aze-blog',
      $theme_uri . '/assets/css/blog.css',
      ['aze-main'],
      filemtime(get_template_directory() . '/assets/css/blog.css')
    );
  }

  /* Single blog post */
  if (is_single()) {
    wp_enqueue_style(
      'aze-blog-single',
      $theme_uri . '/assets/css/blog.css',
      ['aze-main'],
      filemtime(get_template_directory() . '/assets/css/blog.css')
    );
  }

  /* Blog archive */
  if (is_home() || is_archive()) {
    wp_enqueue_style(
      'aze-blog-archive',
      $theme_uri . '/assets/css/blog.css',
      ['aze-main'],
      filemtime(get_template_directory() . '/assets/css/blog.css')
    );
  }

  /* Login page */
  if (
    is_page('vhod') ||
    is_page('zabravena-parola')
  ) {
    wp_enqueue_style(
      'aze-login',
      $theme_uri . '/assets/css/login.css',
      ['aze-main'],
      filemtime(get_template_directory() . '/assets/css/login.css')
    );
  }

  if (is_page('vhod')) {
    wp_enqueue_script(
      'password-toggle',
      get_template_directory_uri() . '/assets/js/password-toggle.js',
      [],
      filemtime(get_template_directory() . '/assets/js/password-toggle.js'),
      true
    );
  }

  /* Legal pages */
  if (
    is_page(array(
      'politika-poveritelnost',
      'politika-biskvitki',
      'obshti-usloviya',
      'politika-vrushtane-otkaz',
      'dostavka-plashtane'
    ))
  ) {
    wp_enqueue_style(
      'aze-legal',
      $theme_uri . '/assets/css/legal.css',
      ['aze-main'],
      filemtime(get_template_directory() . '/assets/css/legal.css')
    );
  }
  if (is_page('profil')) {
    wp_enqueue_style(
      'aze-dashboard',
      get_template_directory_uri() . '/assets/css/dashboard.css',
      ['aze-main'],
      filemtime(get_template_directory() . '/assets/css/dashboard.css')
    );
  }
  wp_enqueue_script(
    'dashboard-js',
    get_template_directory_uri() . '/assets/js/dashboard.js',
    [],
    filemtime(get_template_directory() . '/assets/js/dashboard.js'),
    true
  );
});

/* =====================================
   WOOCOMMERCE THEME INTEGRATION
===================================== */

/* Remove WooCommerce default wrappers */
remove_action('woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10);
remove_action('woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10);

/* Add our theme wrapper */
add_action('woocommerce_before_main_content', function () {
  echo '<main class="site-content">';
}, 10);

add_action('woocommerce_after_main_content', function () {
  echo '</main>';
}, 10);


remove_action('woocommerce_sidebar', 'woocommerce_get_sidebar', 10);

add_filter('woocommerce_product_single_add_to_cart_text', function () {
  return 'Добави в количката';
});

add_filter('woocommerce_product_add_to_cart_text', function () {
  return 'Добави в количката';
});

/* 🔥 ADD YOUR BTN CLASS */
add_filter('woocommerce_product_single_add_to_cart_class', function ($classes) {
  $classes[] = 'btn';
  return $classes;
});

add_filter('wc_add_to_cart_message_html', 'custom_add_to_cart_message', 10, 2);

function custom_add_to_cart_message($message, $products)
{

  $cart_url = wc_get_cart_url();

  return '
    <div class="custom-cart-notice">
        <span>Продуктът е добавен в количката</span>
        <a href="' . esc_url($cart_url) . '" class="btn btn-gold">
            Виж количка
        </a>
    </div>';
}

add_filter('woocommerce_add_to_cart_fragments', function ($fragments) {

  $count = WC()->cart->get_cart_contents_count();

  ob_start();
?>
  <span class="cart-count <?php echo $count == 0 ? 'is-empty' : ''; ?>">
    <?php echo $count; ?>
  </span>
<?php

  $fragments['.cart-count'] = ob_get_clean();

  return $fragments;
});

/* =====================================
   ENABLE AJAX ADD TO CART (SINGLE PRODUCT)
===================================== */
function enable_ajax_add_to_cart_script()
{
  if (class_exists('WooCommerce') && is_product()) {
    wp_enqueue_script('wc-add-to-cart');
    wp_enqueue_script('wc-cart-fragments');
  }
}
add_action('wp_enqueue_scripts', 'enable_ajax_add_to_cart_script');

/* =====================================
   PREVENT DUPLICATE ADD TO CART ON REFRESH
===================================== */
add_action('template_redirect', function () {
  if (isset($_GET['add-to-cart'])) {
    wp_safe_redirect(remove_query_arg('add-to-cart'));
    exit;
  }
});

/* =====================================================
   LOAD CHECKOUT STYLESHEET
===================================================== */
function enqueue_custom_theme_styles()
{
  $styles = array(
    'cart.css',
    'checkout.css'
  );

  foreach ($styles as $style) {
    $file_path = get_stylesheet_directory() . '/assets/css/' . $style;
    if (file_exists($file_path)) {
      wp_enqueue_style(
        'custom-' . sanitize_title($style),
        get_stylesheet_directory_uri() . '/assets/css/' . $style,
        array(),
        filemtime($file_path)
      );
    }
  }
}
add_action('wp_enqueue_scripts', 'enqueue_custom_theme_styles');


/* =====================================================
   LOAD CHECKOUT JS
===================================================== */
function load_custom_checkout_assets()
{
  if (
    (function_exists('is_checkout') && is_checkout()) ||
    (function_exists('is_cart') && is_cart())
  ) {
    wp_enqueue_script(
      'aze-checkout-js',
      get_template_directory_uri() . '/assets/js/checkout.js',
      array(),
      filemtime(get_template_directory() . '/assets/js/checkout.js'),
      true
    );
  }
}
add_action('wp_enqueue_scripts', 'load_custom_checkout_assets');

add_filter('login_redirect', function ($redirect_to, $request, $user) {
  return home_url('/profil');
}, 10, 3);


add_action('init', function () {

  if (!isset($_POST['custom_register'])) {
    return;
  }

  $username = sanitize_user($_POST['username']);
  $email = sanitize_email($_POST['email']);
  $password = $_POST['password'];
  $password_repeat = $_POST['password_repeat'];

  if ($password !== $password_repeat) {
    wp_die('Паролите не съвпадат.');
  }

  if (username_exists($username) || email_exists($email)) {
    wp_die('Потребителят вече съществува.');
  }

  $user_id = wp_create_user($username, $password, $email);

  if (is_wp_error($user_id)) {
    wp_die($user_id->get_error_message());
  }

  wp_set_current_user($user_id);
  wp_set_auth_cookie($user_id);

  wp_redirect(home_url('/profil'));
  exit;
});

add_action('template_redirect', function () {

  $is_reset_mode = (
    isset($_GET['action']) &&
    (
      $_GET['action'] === 'rp' ||
      $_GET['action'] === 'resetpass'
    )
  );

  if (
    is_page('vhod') &&
    is_user_logged_in() &&
    !$is_reset_mode
  ) {

    wp_redirect(home_url('/profil'));
    exit;
  }
});

function handle_password_change()
{
  if (!isset($_POST['change_password'])) return;
  if (!is_user_logged_in()) return;

  $user = wp_get_current_user();

  $old_password     = $_POST['old_password'] ?? '';
  $new_password     = $_POST['new_password'] ?? '';
  $confirm_password = $_POST['confirm_password'] ?? '';

  // 🔥 KEEP CURRENT TAB
  $redirect_url = add_query_arg('tab', 'parola', home_url('/profil'));

  // ❌ Empty
  if (empty($new_password) || empty($confirm_password)) {
    wp_redirect(add_query_arg('password_error', 'empty', $redirect_url));
    exit;
  }

  // ❌ Mismatch
  if ($new_password !== $confirm_password) {
    wp_redirect(add_query_arg('password_error', 'mismatch', $redirect_url));
    exit;
  }

  // 🔐 Old password check
  if (!empty($old_password)) {
    if (!wp_check_password($old_password, $user->user_pass, $user->ID)) {
      wp_redirect(add_query_arg('password_error', 'wrong_old', $redirect_url));
      exit;
    }
  }

  // ✅ Change password
  wp_set_password($new_password, $user->ID);

  // 🔁 Redirect BACK to same tab (NOT login)
  wp_redirect(add_query_arg('password_updated', '1', $redirect_url));
  exit;
}

add_action('init', 'handle_password_change');

if (isset($_POST['delete_account'])) {

  if (!is_user_logged_in()) return;

  $user = wp_get_current_user();

  $password = $_POST['delete_password'] ?? '';
  $confirm  = $_POST['delete_password_confirm'] ?? '';

  // 🔹 If user has NO password (Google login)
  if (empty($user->user_pass)) {

    require_once(ABSPATH . 'wp-admin/includes/user.php');
    wp_delete_user($user->ID);

    wp_redirect(home_url());
    exit;
  }

  // ❌ Empty fields
  if (empty($password) || empty($confirm)) {
    wp_redirect(add_query_arg('delete_error', 'empty', wp_get_referer()));
    exit;
  }

  // ❌ Password mismatch
  if ($password !== $confirm) {
    wp_redirect(add_query_arg('delete_error', 'mismatch', wp_get_referer()));
    exit;
  }

  // ❌ Wrong password
  if (!wp_check_password($password, $user->user_pass, $user->ID)) {
    wp_redirect(add_query_arg('delete_error', 'wrong_password', wp_get_referer()));
    exit;
  }

  // ✅ Delete user
  require_once(ABSPATH . 'wp-admin/includes/user.php');
  wp_delete_user($user->ID);

  wp_redirect(home_url());
  exit;
}

/* =====================================
   CUSTOM LOGIN ERROR REDIRECT
===================================== */
add_action('wp_login_failed', function () {

  wp_redirect(home_url('/vhod/?login=failed'));

  exit;
});

/* Empty username/password */
add_filter('authenticate', function ($user, $username, $password) {

  /* Run ONLY for our custom login form */
  if (!isset($_POST['custom_login'])) {
    return $user;
  }

  if (empty($username) || empty($password)) {

    wp_redirect(home_url('/vhod/?login=empty'));
    exit;
  }

  return $user;
}, 1, 3);

/* =====================================
   CUSTOM LOST PASSWORD
===================================== */

function custom_lost_password_handler()
{

  if (!isset($_POST['custom_reset_password'])) {
    return;
  }

  $email = sanitize_email($_POST['reset_email']);

  if (empty($email)) {

    wp_redirect(add_query_arg(
      'reset',
      'empty',
      home_url('/vhod')
    ));

    exit;
  }

  $user = get_user_by('email', $email);

  if (!$user) {

    wp_redirect(add_query_arg(
      'reset',
      'notfound',
      home_url('/vhod')
    ));

    exit;
  }

  retrieve_password($user->user_login);

  wp_redirect(add_query_arg(
    'reset',
    'success',
    home_url('/vhod')
  ));

  exit;
}

add_action('init', 'custom_lost_password_handler');

/* =====================================
   CUSTOM RESET PASSWORD LINK
===================================== */

add_filter('lostpassword_url', function ($lostpassword_url, $redirect) {

  return home_url('/vhod?action=lostpassword');
}, 10, 2);

/* =====================================
   CUSTOM PASSWORD RESET EMAIL LINK
===================================== */

add_filter('retrieve_password_message', function ($message, $key, $user_login, $user_data) {

  $reset_url = home_url(
    '/zabravena-parola?key=' . $key . '&login=' . rawurlencode($user_login)
  );

  $message  = "Здравейте,\n\n";
  $message .= "Получихме заявка за смяна на паролата.\n\n";
  $message .= "Използвайте този линк:\n\n";
  $message .= $reset_url . "\n\n";

  return $message;
}, 10, 4);

/* =====================================================
   FORCE PHONE REQUIRED
===================================================== */

add_filter('woocommerce_checkout_fields', function ($fields) {

  $fields['billing']['billing_phone']['required'] = true;

  return $fields;
});

/* =====================================================
   CUSTOM THANK YOU TITLE
===================================================== */

add_filter(
  'woocommerce_thankyou_order_received_text',
  function ($text, $order) {

    return '
        <div class="custom-thank-you-title">

            <h1>Благодарим Ви!</h1>

            <p>
                Вашата поръчка беше успешно приета.
                Ще се свържем с Вас при нужда от допълнителна информация.
            </p>

        </div>
        ';
  },
  10,
  2
);

/* =====================================================
   FORCE PHONE FIELD REQUIRED
===================================================== */

add_filter('woocommerce_checkout_fields', 'atelier_override_phone_field', 99999);

function atelier_override_phone_field($fields)
{

  if (isset($fields['billing']['billing_phone'])) {

    $fields['billing']['billing_phone']['required'] = true;

    $fields['billing']['billing_phone']['label'] = 'Телефон';

    $fields['billing']['billing_phone']['placeholder'] = '';

    $fields['billing']['billing_phone']['custom_attributes'] = array(
      'required' => 'required'
    );
  }

  return $fields;
}

/* =====================================================
   DISABLE SHIPPING CALCULATION ON CART PAGE
===================================================== */

add_filter('woocommerce_cart_ready_to_calc_shipping', function ($show_shipping) {

  if (is_cart()) {
    return false;
  }

  return $show_shipping;
});

/* =====================================================
   MAKE POSTCODE OPTIONAL
===================================================== */

add_filter('woocommerce_checkout_fields', function ($fields) {

  if (isset($fields['shipping']['shipping_postcode'])) {

    $fields['shipping']['shipping_postcode']['required'] = false;
  }

  if (isset($fields['billing']['billing_postcode'])) {

    $fields['billing']['billing_postcode']['required'] = false;
  }

  return $fields;
});

