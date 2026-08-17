<?php
/*
Template Name: Контакти
*/
if (!defined('ABSPATH')) exit;
get_header();
?>

<section class="contact-split-section">

    <div class="contact-split-wrapper">

        <h2 class="products-heading reveal-up">Контакти</h2>

        <div class="contact-split-card">

            <!-- LEFT -->
            <div class="contact-panel contact-panel-form reveal-left">

                <div class="contact-panel-head">
                    <p class="contact-kicker">Пишете ми</p>
                    <h3 class="contact-title">С какво мога да бъда полезна?</h3>
                    <p class="contact-subtitle">
                        Ако имате въпрос, нужда от консултация или искате да запишете час, изпратете съобщение. Ще се свържа с вас възможно най-скоро.
                    </p>
                </div>

                <div class="contact-form-area">
                    <?php echo do_shortcode('[contact-form-7 id="969104a" title="Contact form 1"]'); ?>
                </div>

            </div>

            <!-- RIGHT -->
            <div class="contact-panel contact-panel-info reveal-right">

                <div class="contact-panel-head">
                    <p class="contact-kicker">Контакт</p>
                    <h3 class="contact-title">Изберете удобен начин да се свържем</h3>
                    <p class="contact-subtitle">
                        Може да ми пишете, да се обадите или да използвате формата за контакт. Ще получите насока за най-подходящата следваща стъпка.
                    </p>
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

                        <a href="https://www.facebook.com/PsychologyDzhuliaBozhidarova/" class="contact-social contact-facebook" target="_blank">
                            <span>Facebook</span>
                        </a>

                        <a href="https://www.instagram.com/psychology.dzhuliabozhidarova/" class="contact-social contact-instagram" target="_blank">
                            <span>Instagram</span>
                        </a>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>


<!-- MAP -->

<section class="contact-map-section reveal-up">

    <div class="contact-map-container">

        <div class="contact-map-header">
            <h3>Намерете ме тук</h3>
            <div class="map-divider"></div>
        </div>

        <div class="contact-map-card">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3478.127767653552!2d27.251500076491997!3d42.70023131354207!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40a67d033cf17a51%3A0xbc19306143a7c970!2z0JTQtdGC0YHQutCwINC4INGB0LXQvNC10LnQvdCwINC_0YHQuNGF0L7Qu9C-0LPQuNGPIC0g0JTQttGD0LvQuNGPINCR0L7QttC40LTQsNGA0L7QstCw!5e1!3m2!1sen!2sbg!4v1774874326818!5m2!1sen!2sbg"
                allowfullscreen=""
                loading="lazy"
                referrerpolicy="no-referrer-when-downgrade">
            </iframe>
        </div>

    </div>

</section>

<?php get_footer(); ?>