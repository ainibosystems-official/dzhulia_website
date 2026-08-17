<?php
/* Template Name: Dashboard */
if (!defined('ABSPATH')) exit;

if (!is_user_logged_in()) {
    wp_redirect(home_url('/vhod'));
    exit;
}

/* DELETE ACCOUNT – handle before output */
if (isset($_POST['delete_account'])) {
    require_once(ABSPATH . 'wp-admin/includes/user.php');
    wp_delete_user(get_current_user_id());
    wp_redirect(home_url());
    exit;
}

get_header();
?>

<main class="dashboard-page">

    <div class="dashboard-wrapper">

        <!-- SIDEBAR -->
        <aside class="dashboard-sidebar">
            <ul>
                <li class="active" data-tab="profile">Моят профил</li>
                <li data-tab="courses">Моите курсове</li>
                <li data-tab="orders">Моите поръчки</li>
                <li data-tab="password">Смени парола</li>
                <li data-tab="delete">Изтрий профила</li>
            </ul>
        </aside>

        <!-- CONTENT -->
        <div class="dashboard-content">

            <!-- PROFILE -->
            <div class="tab active" id="profile">
                <h2>Моят профил</h2>

                <?php
                $user = wp_get_current_user();

                $name = $user->display_name;

                if (empty($name)) {
                    $name = $user->first_name;
                }

                if (empty($name)) {
                    $name = $user->user_login;
                }
                ?>

                <p>
                    Здравей<?php echo !empty($name) ? ', ' . esc_html($name) : ''; ?>
                </p>
            </div>

            <!-- COURSES -->
            <div class="tab" id="courses">
                <h2>Моите курсове</h2>
                <p>Тук ще виждаш закупените курсове.</p>
            </div>

            <!-- ORDERS -->
<div class="tab" id="orders">

    <h2>Моите поръчки</h2>

    <?php
    if (class_exists('WooCommerce')) {

        $orders = wc_get_orders([
            'customer' => get_current_user_id(),
            'limit'    => -1,
        ]);

        if ($orders) {

            foreach ($orders as $order) {

                ?>

                <div class="dashboard-order-card">

                    <div class="dashboard-order-top">

                        <div>
                            <strong>
                                Поръчка #<?php echo esc_html($order->get_id()); ?>
                            </strong>

                            <span class="order-date">
                                <?php echo esc_html(
                                    wc_format_datetime(
                                        $order->get_date_created()
                                    )
                                ); ?>
                            </span>
                        </div>

                        <div class="order-total">
                            <?php echo $order->get_formatted_order_total(); ?>
                        </div>

                    </div>

                    <?php
                    foreach ($order->get_items() as $item_id => $item) :

                        $product = $item->get_product();

                        if (!$product) continue;

                        $product_id = $product->get_id();
                    ?>

                        <div class="dashboard-order-item">

                            <div class="dashboard-order-image">
                                <?php
                                echo get_the_post_thumbnail(
                                    $product_id,
                                    'thumbnail'
                                );
                                ?>
                            </div>

                            <div class="dashboard-order-info">

                                <h3>
                                    <?php echo esc_html($item->get_name()); ?>
                                </h3>

                                <p>
                                    Количество:
                                    <?php echo esc_html($item->get_quantity()); ?>
                                </p>

                            </div>

                        </div>

                    <?php endforeach; ?>

                </div>

                <?php
            }

        } else {

            echo '<p>Нямате поръчки.</p>';
        }

    } else {

        echo '<p>WooCommerce не е активен.</p>';
    }
    ?>

</div>
            <!-- CHANGE PASSWORD -->
            <div class="tab" id="password">
                <div class="profile-card">
                    <h2>Смени парола</h2>

                    <?php if (isset($_GET['password_updated'])) : ?>
                        <p class="success-msg">Паролата беше успешно променена.</p>
                    <?php endif; ?>

                    <?php if (isset($_GET['password_error'])) : ?>
                        <p class="error-msg">
                            <?php
                            if ($_GET['password_error'] === 'wrong_old') echo 'Грешна стара парола.';
                            if ($_GET['password_error'] === 'mismatch') echo 'Новите пароли не съвпадат.';
                            if ($_GET['password_error'] === 'empty') echo 'Моля попълнете всички полета.';
                            ?>
                        </p>
                    <?php endif; ?>

                    <form method="POST">
                        <div class="form-group">
                            <label>Стара парола (ако имате)</label>

                            <div class="password-field">
                                <input type="password" id="old-password" name="old_password">

                                <button type="button"
                                    class="password-toggle-btn"
                                    data-target="old-password">👁</button>
                            </div>
                        </div>

                        <div class="form-group">
                            <label>Нова парола</label>

                            <div class="password-field">
                                <input type="password" id="new-password" name="new_password" required>

                                <button type="button"
                                    class="password-toggle-btn"
                                    data-target="new-password">👁</button>
                            </div>
                        </div>

                        <div class="form-group">
                            <label>Повтори нова парола</label>

                            <div class="password-field">
                                <input type="password" id="confirm-password" name="confirm_password" required>

                                <button type="button"
                                    class="password-toggle-btn"
                                    data-target="confirm-password">👁</button>
                            </div>
                        </div>

                        <button type="submit" name="change_password" class="btn-save">
                            Запази
                        </button>
                    </form>
                </div>
            </div>

            <!-- DELETE ACCOUNT -->
            <div class="tab" id="delete">
                <h2>Изтрий профила</h2>

                <?php if (isset($_GET['delete_error'])) : ?>
                    <p class="error-msg">
                        <?php
                        if ($_GET['delete_error'] === 'wrong_password') echo 'Грешна парола.';
                        if ($_GET['delete_error'] === 'mismatch') echo 'Паролите не съвпадат.';
                        if ($_GET['delete_error'] === 'empty') echo 'Моля попълнете всички полета.';
                        ?>
                    </p>
                <?php endif; ?>

                <form method="post">

                    <div class="form-group">
                        <label>Парола</label>

                        <div class="password-field">
                            <input type="password" id="delete-password" name="delete_password" required>

                            <button type="button"
                                class="password-toggle-btn"
                                data-target="delete-password">👁</button>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Повтори парола</label>

                        <div class="password-field">
                            <input type="password" id="delete-password-confirm" name="delete_password_confirm" required>

                            <button type="button"
                                class="password-toggle-btn"
                                data-target="delete-password-confirm">👁</button>
                        </div>
                    </div>

                    <button type="submit" name="delete_account" class="danger btn-delete-account">
                        Изтрий профила
                    </button>

                </form>
            </div>

        </div>

    </div>

</main>

<?php get_footer(); ?>