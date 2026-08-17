/* =====================================================
   REVEAL ANIMATIONS
===================================================== */

const reveals = document.querySelectorAll('.reveal-up');

function revealOnScroll() {

    const trigger = window.innerHeight * 0.85;

    reveals.forEach(el => {

        const top = el.getBoundingClientRect().top;

        if (top < trigger) {
            el.classList.add('in-view');
        }
    });
}

window.addEventListener('scroll', revealOnScroll);

document.addEventListener('DOMContentLoaded', function () {

    revealOnScroll();

    /* =====================================================
       ABOUT SLIDER
    ===================================================== */

    const track =
        document.querySelector('.atelier-about-track');

    const slides =
        document.querySelectorAll('.atelier-about-slide');

    const prevBtn =
        document.querySelector('.atelier-prev');

    const nextBtn =
        document.querySelector('.atelier-next');

    /* IMPORTANT:
       DO NOT RETURN HERE
    */

    if (track && slides.length) {

        let current = 0;

        function updateSlider() {

            track.style.transform =
                `translateX(-${current * 100}%)`;
        }

        function nextSlide() {

            current =
                (current + 1) % slides.length;

            updateSlider();
        }

        function prevSlide() {

            current =
                (current - 1 + slides.length)
                % slides.length;

            updateSlider();
        }

        /* AUTO */

        setInterval(nextSlide, 4500);

        /* MANUAL */

        nextBtn?.addEventListener(
            'click',
            nextSlide
        );

        prevBtn?.addEventListener(
            'click',
            prevSlide
        );
    }

    /* =====================================================
       PARENTS SLIDER
    ===================================================== */

    const parentsTrack =
        document.querySelector('.atelier-parents-track');

    const parentsSlides =
        document.querySelectorAll('.atelier-parents-slide');

    const parentsPrev =
        document.querySelector('.atelier-parents-prev');

    const parentsNext =
        document.querySelector('.atelier-parents-next');

    if (parentsTrack && parentsSlides.length) {

        let parentsCurrent = 0;

        function updateParentsSlider() {

            parentsTrack.style.transform =
                `translateX(-${parentsCurrent * 100}%)`;
        }

        function nextParentsSlide() {

            parentsCurrent =
                (parentsCurrent + 1)
                % parentsSlides.length;

            updateParentsSlider();
        }

        function prevParentsSlide() {

            parentsCurrent =
                (parentsCurrent - 1 + parentsSlides.length)
                % parentsSlides.length;

            updateParentsSlider();
        }

        /* AUTO */

        setInterval(nextParentsSlide, 5000);

        /* MANUAL */

        parentsNext?.addEventListener(
            'click',
            nextParentsSlide
        );

        parentsPrev?.addEventListener(
            'click',
            prevParentsSlide
        );
    }

    /* =====================================================
       PRODUCT GALLERY
    ===================================================== */

    const mainImage =
        document.getElementById('main-product-image');

    if (mainImage) {

        const thumbs =
            document.querySelectorAll('.product-thumb');

        thumbs.forEach(thumb => {

            thumb.addEventListener('click', function () {

                const newSrc =
                    this.getAttribute('data-full');

                if (!newSrc) return;

                mainImage.src = newSrc;

                thumbs.forEach(t =>
                    t.classList.remove('active')
                );

                this.classList.add('active');
            });
        });
    }

});