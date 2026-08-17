<?php
/* Template Name: Login Page */
if (!defined('ABSPATH')) exit;

get_header();
?>

<main class="site-content"> <!-- 🔥 CRITICAL: match Woo + rest of site -->

    <div class="login-page">
        <div class="login-wrapper">

            <h1 class="login-title">Вход или създаване на акаунт</h1>
            <p class="login-subtitle">Влезте или създайте профил за секунди.</p>

            <?php if (isset($_GET['login'])) : ?>

                <div class="login-error">

                    <?php
                    if ($_GET['login'] === 'failed') {
                        echo 'Грешен имейл или парола.';
                    }

                    if ($_GET['login'] === 'empty') {
                        echo 'Моля попълнете всички полета.';
                    }
                    ?>

                </div>

            <?php endif; ?>


            <?php if (isset($_GET['reset'])) : ?>

                <div class="login-message">

                    <?php
                    if ($_GET['reset'] === 'success') {
                        echo 'Изпратихме линк за възстановяване на паролата.';
                    }

                    if ($_GET['reset'] === 'notfound') {
                        echo 'Не съществува акаунт с този имейл.';
                    }

                    if ($_GET['reset'] === 'empty') {
                        echo 'Моля въведете имейл.';
                    }
                    ?>

                </div>

            <?php endif; ?>


            <?php

            $is_reset_mode = (
                isset($_GET['action']) &&
                (
                    $_GET['action'] === 'rp' ||
                    $_GET['action'] === 'resetpass'
                ) &&
                isset($_GET['key']) &&
                isset($_GET['login'])
            );

            ?>


            <?php if ($is_reset_mode) : ?>

                <div class="reset-password-box">

                    <h2>Създаване на нова парола</h2>

                    <form method="post">

                        <input type="hidden" name="rp_key" value="<?php echo esc_attr($_GET['key']); ?>">

                        <input type="hidden" name="rp_login" value="<?php echo esc_attr($_GET['login']); ?>">

                        <label>Нова парола</label>

                        <div class="password-field">
                            <input type="password" name="new_password" id="reset-password" required>
                            <button type="button" class="password-toggle" data-target="reset-password">👁</button>
                        </div>

                        <label>Повтори паролата</label>

                        <div class="password-field">
                            <input type="password" name="confirm_password" id="reset-password-repeat" required>
                            <button type="button" class="password-toggle" data-target="reset-password-repeat">👁</button>
                        </div>

                        <button type="submit" name="custom_do_password_reset">
                            Смени паролата
                        </button>

                    </form>

                </div>

            <?php elseif (!is_user_logged_in()) : ?>

                <div class="login-grid">

                    <!-- ================= LOGIN ================= -->
                    <div class="login-card">

                        <h2>Вход</h2>

                        <?php
                        wp_login_form([
                            'redirect'       => home_url('/profil'),
                            'form_id'        => 'login-form',
                            'label_username' => 'Имейл',
                            'label_password' => 'Парола',
                            'label_log_in'   => 'Вход',
                            'remember'       => true,
                        ]);
                        ?>

                        <p class="forgot-password-link">
                            <a href="#" id="toggle-forgot-password">
                                Забравена парола?
                            </a>
                        </p>

                        <div class="forgot-password-box" id="forgot-password-box" style="display:none;">

                            <form method="post">

                                <label>Имейл адрес</label>

                                <input type="email" name="reset_email" required>

                                <button type="submit" name="custom_reset_password">
                                    Изпрати линк за възстановяване
                                </button>

                            </form>

                        </div>

                    </div>

                    <!-- ================= REGISTER ================= -->
                    <div class="register-card">

                        <h2>Регистрация</h2>

                        <form method="post" class="register-form">

                            <label>Потребителско име</label>
                            <input type="text" name="username" required>

                            <label>Имейл</label>
                            <input type="email" name="email" required>

                            <label>Парола</label>

                            <div class="password-field">
                                <input type="password" name="password" id="reg-password" required>
                                <button type="button" class="password-toggle" data-target="reg-password">👁</button>
                            </div>

                            <label>Повтори паролата</label>

                            <div class="password-field">
                                <input type="password" name="password_repeat" id="reg-password-repeat" required>
                                <button type="button" class="password-toggle" data-target="reg-password-repeat">👁</button>
                            </div>

                            <div class="login-social">
                                <?php echo do_shortcode('[nextend_social_login]'); ?>
                            </div>

                            <button type="submit" name="custom_register">
                                Създай акаунт
                            </button>

                        </form>

                    </div>

                </div>

            <?php else : ?>

                <div class="logged-in-box">

                    <p>
                        Здравейте,
                        <?php echo esc_html(wp_get_current_user()->display_name); ?>
                    </p>

                    <a href="<?php echo esc_url(home_url('/profil')); ?>" class="btn">
                        Към профила
                    </a>

                    <a href="<?php echo esc_url(wp_logout_url(home_url('/vhod'))); ?>" class="btn-logout">
                        Изход
                    </a>

                </div>

            <?php endif; ?>

        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {

            const toggle = document.getElementById('toggle-forgot-password');
            const box = document.getElementById('forgot-password-box');

            if (toggle && box) {

                toggle.addEventListener('click', function(e) {

                    e.preventDefault();

                    if (box.style.display === 'none') {
                        box.style.display = 'block';
                    } else {
                        box.style.display = 'none';
                    }
                });
            }
        });
    </script>

</main>

<?php get_footer(); ?>