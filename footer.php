<?php if (!defined('ABSPATH')) exit; ?>

<?php wp_footer(); ?>


<footer class="site-footer">

    <div class="footer-wrapper">

        <div class="footer-grid">

            <!-- COLUMN 1 -->
            <div class="footer-col footer-about">

                <img class="footer-main-logo"
                    src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.svg"
                    alt="Емоции">

                <p class="footer-text">
                    Пространство за подкрепа, разбиране и вътрешен баланс.
                </p>

                <div class="footer-adys">

                    <img
                        src="<?php echo get_template_directory_uri(); ?>/assets/img/Adys SIGN - bulgarian-01.png"
                        alt="Adys Font"
                        class="footer-adys-logo">

                    <p class="footer-adys-text">
                        Този уебсайт е създаден с шрифт Adys,
                        специално разработен да улеснява четенето
                        при хората с дислексия.
                        Повече може да научите на
                        www.adysfont.com
                        <br>
                        Всички права запазени: © Кристина Костова, 2025.
                    </p>

                </div>

            </div>

            <!-- COLUMN 2 -->
            <div class="footer-col footer-nav">
                <h4 class="footer-heading">Навигация</h4>
                <div class="footer-nav-grid">
                    <a href="/za-men">За мен</a>
                    <a href="/uslugi">Услуги</a>
                    <a href="/produkti">Продукти</a>
                    <a href="/kursove">Курсове</a>
                    <a href="/atelier-za-emocii">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/atelie-za-emocii.svg"
                            alt="Ателие за Емоции"
                            class="footer-atelier-logo">
                    </a>
                    <a href="/blog">Блог</a>
                    <a href="/kontakti">Контакти</a>
                </div>
            </div>

            <!-- COLUMN 3 -->
            <div class="footer-col footer-contact">
                <h4 class="footer-heading">Контакт</h4>

                <p class="footer-contact-info">
                    📍 Айтос, Улица "Райна Княгиня 7, След манипулационен кабинет, Център, 8500<br>
                    ☎ +359 98 887 0772<br>
                    ✉ psiholog.dzhuliabozhidarova@gmail.com
                </p>

                <div class="footer-socials">

                    <a class="footer-social facebook"
                        href="https://www.facebook.com/PsychologyDzhuliaBozhidarova/"
                        target="_blank"
                        rel="noopener"
                        aria-label="Facebook">

                        <!-- Clean Facebook Icon -->
                        <svg viewBox="0 0 24 24">
                            <path fill="currentColor"
                                d="M14 9h3V6h-3c-2.2 0-4 1.8-4 4v2H7v3h3v7h3v-7h3l1-3h-4v-2c0-.6.4-1 1-1z" />
                        </svg>

                    </a>

                    <a class="footer-social instagram"
                        href="https://www.instagram.com/psychology.dzhuliabozhidarova/"
                        target="_blank"
                        rel="noopener"
                        aria-label="Instagram">

                        <!-- Clean Instagram Icon -->
                        <svg viewBox="0 0 24 24">
                            <path fill="currentColor"
                                d="M7 2C4.2 2 2 4.2 2 7v10c0 2.8 2.2 5 5 5h10c2.8 0 5-2.2 5-5V7c0-2.8-2.2-5-5-5H7zm5 5a5 5 0 1 1 0 10 5 5 0 0 1 0-10zm6-1.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z" />
                        </svg>

                    </a>

                </div>
            </div>

        </div>

    </div>

    <!-- LEGAL + CREDIT -->
    <div class="footer-bottom">
        <div class="footer-bottom-inner">

            <a href="/politika-poveritelnost">Политика за поверителност</a>
            <span class="divider">•</span>

            <a href="/politika-biskvitki">Политика за бисквитки</a>
            <span class="divider">•</span>

            <a href="/obshti-usloviya">Общи условия</a>
            <span class="divider">•</span>

            <a href="/politika-vrushtane-otkaz">Политика за връщане и отказ</a>
            <span class="divider">•</span>

            <a href="/dostavka-plashtane">Доставка и плащане</a>
            <span class="divider">•</span>

            <span>© <?php echo date("Y"); ?> Емоции</span>
            <span class="divider">•</span>

            <span>
                Разработено и поддържано от
                <a href="https://ainibosystems.bg" target="_blank">AiNiBo Systems</a>
            </span>

        </div>
    </div>
</footer>
<script>
    document.addEventListener("DOMContentLoaded", function() {

        /* =========================
           LOGIN FIELD (existing)
        ========================= */
        const passwordRow = document.querySelector('#login-form p.login-password');
        const passwordInput = document.querySelector('#login-form p.login-password input');

        if (passwordRow && passwordInput && !passwordRow.querySelector('.password-toggle-btn')) {

            const toggleBtn = document.createElement('button');
            toggleBtn.type = 'button';
            toggleBtn.className = 'password-toggle-btn';
            toggleBtn.setAttribute('aria-label', 'Покажи паролата');
            toggleBtn.textContent = '👁';

            toggleBtn.addEventListener('click', function() {
                const isHidden = passwordInput.type === 'password';
                passwordInput.type = isHidden ? 'text' : 'password';
                toggleBtn.textContent = isHidden ? '🙈' : '👁';
            });

            passwordRow.appendChild(toggleBtn);
        }

        /* =========================
           REGISTER FIELDS (NEW FIX)
        ========================= */
        const registerFields = document.querySelectorAll('.password-field');

        registerFields.forEach(function(field) {
            const input = field.querySelector('input');
            const btn = field.querySelector('.password-toggle');

            if (!input || !btn) return;

            btn.addEventListener('click', function() {
                const isHidden = input.type === 'password';

                input.type = isHidden ? 'text' : 'password';
                btn.textContent = isHidden ? '🙈' : '👁';
            });
        });

    });
</script>
</body>

</html>