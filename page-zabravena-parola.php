<?php
/* Template Name: Reset Password */

if (!defined('ABSPATH')) exit;

get_header();

/* =====================================
   HANDLE PASSWORD RESET
===================================== */

$message = '';

if (
    isset($_POST['custom_do_password_reset'])
    &&
    isset($_POST['rp_key'])
    &&
    isset($_POST['rp_login'])
) {

    $user = check_password_reset_key(
        $_POST['rp_key'],
        $_POST['rp_login']
    );

    if (is_wp_error($user)) {

        $message = 'Линкът е невалиден или е изтекъл.';
    } else {

        $new_password     = $_POST['new_password'];
        $confirm_password = $_POST['confirm_password'];

        if (empty($new_password) || empty($confirm_password)) {

            $message = 'Моля попълнете всички полета.';
        } elseif ($new_password !== $confirm_password) {

            $message = 'Паролите не съвпадат.';
        } else {

            reset_password($user, $new_password);

            wp_redirect(home_url('/vhod?password_reset=success'));
            exit;
        }
    }
}

?>

<main class="site-content">

    <div class="login-page">
        <div class="login-wrapper">

            <div class="reset-password-box">

                <h1 class="login-title">
                    Създаване на нова парола
                </h1>

                <?php if (!empty($message)) : ?>

                    <div class="login-error">
                        <?php echo esc_html($message); ?>
                    </div>

                <?php endif; ?>

                <?php if (
                    isset($_GET['key']) &&
                    isset($_GET['login'])
                ) : ?>

                    <form method="post" class="register-form">

                        <input
                            type="hidden"
                            name="rp_key"
                            value="<?php echo esc_attr($_GET['key']); ?>">

                        <input
                            type="hidden"
                            name="rp_login"
                            value="<?php echo esc_attr($_GET['login']); ?>">

                        <label>Нова парола</label>

                        <div class="password-field">
                            <input
                                type="password"
                                name="new_password"
                                id="reset-password"
                                required>

                            <button
                                type="button"
                                class="password-toggle"
                                data-target="reset-password">
                                👁
                            </button>
                        </div>

                        <label>Повтори паролата</label>

                        <div class="password-field">
                            <input
                                type="password"
                                name="confirm_password"
                                id="reset-password-repeat"
                                required>

                            <button
                                type="button"
                                class="password-toggle"
                                data-target="reset-password-repeat">
                                👁
                            </button>
                        </div>

                        <button
                            type="submit"
                            name="custom_do_password_reset">
                            Смени паролата
                        </button>

                    </form>

                <?php else : ?>

                    <div class="login-error">
                        Липсва информация за възстановяване.
                    </div>

                <?php endif; ?>

            </div>

        </div>
    </div>

</main>

<script>
    document.addEventListener('DOMContentLoaded', function() {

        const toggles = document.querySelectorAll('.password-toggle-btn');

        toggles.forEach(function(toggle) {

            toggle.addEventListener('click', function(e) {

                e.preventDefault();

                const target = document.getElementById(
                    this.dataset.target
                );

                if (!target) return;

                if (target.type === 'password') {

                    target.type = 'text';
                    this.textContent = '🙈';

                } else {

                    target.type = 'password';
                    this.textContent = '👁';
                }
            });

        });

    });
</script>

<?php get_footer(); ?>