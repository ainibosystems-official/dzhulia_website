
document.addEventListener("DOMContentLoaded", () => {

  /* =========================
     HERO CAROUSEL
  ========================= */

  const slides = document.querySelectorAll(".hero-carousel img");
  const title = document.getElementById("hero-title");
  const text = document.getElementById("hero-text");

  if (slides.length && title && text) {

    let current = 0;
    const interval = 6000;

    slides[0].classList.add("active");

    setInterval(() => {

      // Fade out text
      title.classList.remove("hero-text-visible");
      text.classList.remove("hero-text-visible");
      title.classList.add("hero-text-hidden");
      text.classList.add("hero-text-hidden");

      // Fade image
      slides[current].classList.remove("active");

      current = (current + 1) % slides.length;
      const slide = slides[current];
      slide.classList.add("active");

      setTimeout(() => {
        title.textContent = slide.dataset.title;
        text.textContent = slide.dataset.text;

        title.classList.remove("hero-text-hidden");
        text.classList.remove("hero-text-hidden");
        title.classList.add("hero-text-visible");
        text.classList.add("hero-text-visible");

      }, 400);

    }, interval);
  }


  /* =========================
     MOBILE MENU
  ========================= */

  const toggle = document.querySelector(".menu-toggle");
  const mobileNav = document.querySelector(".mobile-nav-wrapper");
  const mobileLinks = document.querySelectorAll(".mobile-nav a");

  if (toggle && mobileNav) {

    toggle.addEventListener("click", () => {
      toggle.classList.toggle("active");      // Burger → X
      mobileNav.classList.toggle("active");   // Panel open
      document.body.classList.toggle("menu-open"); // Lock scroll
    });

    // Close when clicking a link
    mobileLinks.forEach(link => {
      link.addEventListener("click", () => {
        toggle.classList.remove("active");
        mobileNav.classList.remove("active");
        document.body.classList.remove("menu-open");
      });
    });

    // Close on ESC
    document.addEventListener("keydown", (e) => {
      if (e.key === "Escape") {
        toggle.classList.remove("active");
        mobileNav.classList.remove("active");
        document.body.classList.remove("menu-open");
      }
    });

  }

  document.addEventListener("DOMContentLoaded", function () {
    const section = document.querySelector(".about-short");

    function revealOnScroll() {
      const trigger = window.innerHeight * 0.85;
      const sectionTop = section.getBoundingClientRect().top;

      if (sectionTop < trigger) {
        section.classList.add("visible");
      }
    }

    window.addEventListener("scroll", revealOnScroll);
    revealOnScroll();
  });

  /* =========================
     GLOBAL REVEAL SYSTEM
  ========================= */

  const revealElements = document.querySelectorAll(
    ".reveal-left, .reveal-right, .reveal-up, .reveal"
);

  if (revealElements.length) {

    const observer = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          if (entry.target.classList.contains("reveal")) {
    entry.target.classList.add("active");
} else {
    entry.target.classList.add("in-view");
}
        }
      });
    }, {
      threshold: 0.2
    });

    revealElements.forEach(el => observer.observe(el));
  }

});

/* =========================
   ATELIER HERO — TRUE LOOP
========================= */

const carousel = document.querySelector(".atelier-carousel");
const slides = document.querySelectorAll(".atelier-slide");
const textContainer = document.querySelector(".atelier-text");
const titleEl = document.getElementById("atelier-title");
const textEl = document.getElementById("atelier-text");
const arrowLeft = document.querySelector(".atelier-arrow.left");
const arrowRight = document.querySelector(".atelier-arrow.right");

if (carousel && slides.length > 0) {

  // Clone first and last slides
  const firstClone = slides[0].cloneNode(true);
  const lastClone = slides[slides.length - 1].cloneNode(true);

  carousel.appendChild(firstClone);
  carousel.insertBefore(lastClone, slides[0]);

  const allSlides = document.querySelectorAll(".atelier-slide");

  let current = 1; // start at real first
  let isAnimating = false;
  const intervalTime = 6000;

  carousel.style.transform = `translateX(-${current * 100}%)`;

  function updateText(index, direction) {

    textContainer.classList.remove("active");
    textContainer.classList.add(direction === "right" ? "exit-left" : "exit-right");

    setTimeout(() => {

      const slide = allSlides[index];
      titleEl.textContent = slide.dataset.title;
      textEl.textContent = slide.dataset.text;

      textContainer.classList.remove("exit-left", "exit-right");
      textContainer.classList.toggle("right", direction === "left");

      textContainer.classList.add(direction === "right" ? "enter-right" : "enter-left");

      setTimeout(() => {
        textContainer.classList.remove("enter-left", "enter-right");
        textContainer.classList.add("active");
      }, 50);

    }, 400);
  }

  function moveTo(index, direction) {
    if (isAnimating) return;
    isAnimating = true;

    current = index;

    carousel.style.transition = "transform 0.9s cubic-bezier(0.22,1,0.36,1)";
    carousel.style.transform = `translateX(-${current * 100}%)`;

    updateText(current, direction);

    setTimeout(() => {

      if (current === 0) {
        carousel.style.transition = "none";
        current = allSlides.length - 2;
        carousel.style.transform = `translateX(-${current * 100}%)`;
      }

      if (current === allSlides.length - 1) {
        carousel.style.transition = "none";
        current = 1;
        carousel.style.transform = `translateX(-${current * 100}%)`;
      }

      isAnimating = false;

    }, 900);
  }

  function nextSlide() {
    moveTo(current + 1, "right");
  }

  function prevSlide() {
    moveTo(current - 1, "left");
  }

  let auto = setInterval(nextSlide, intervalTime);

  arrowRight?.addEventListener("click", nextSlide);
  arrowLeft?.addEventListener("click", prevSlide);

  // Swipe
  let startX = 0;

  carousel.addEventListener("touchstart", (e) => {
    startX = e.touches[0].clientX;
  });

  carousel.addEventListener("touchend", (e) => {
    const endX = e.changedTouches[0].clientX;
    if (startX - endX > 50) nextSlide();
    else if (endX - startX > 50) prevSlide();
  });

}

document.addEventListener("DOMContentLoaded", function () {

  document.querySelectorAll('.products-section ul.products li.product').forEach(card => {
    const img = card.querySelector('img');
    if (img) {
      card.style.setProperty('--product-bg', `url(${img.src})`);
    }
  });

});

document.addEventListener("DOMContentLoaded", function () {

  const logo = document.querySelector(".logo-link");

  if (!logo) return;

  logo.addEventListener("click", function (e) {

    // Check if we are on homepage
    const isHome = window.location.pathname === "/" ||
      window.location.pathname === "/index.php";

    if (isHome) {
      e.preventDefault();

      window.scrollTo({
        top: 0,
        behavior: "smooth"
      });
    }

  });

});

document.addEventListener("DOMContentLoaded", function () {

  const triggers = document.querySelectorAll(".logo-link, .nav-home");

  triggers.forEach(el => {
    el.addEventListener("click", function (e) {

      const isHome = window.location.pathname === "/" ||
        window.location.pathname === "/index.php";

      if (isHome) {
        e.preventDefault();

        window.scrollTo({
          top: 0,
          behavior: "smooth"
        });
      }

    });
  });

});



// =========================
// GLOBAL ADD TO CART POPUP (ALL PAGES)
// =========================

(function () {

  function showCartPopup() {

    let popup = document.querySelector(".custom-cart-notice-popup");

    if (!popup) {
      popup = document.createElement("div");
      popup.className = "custom-cart-notice-popup";
      popup.textContent = "Продуктът е добавен в количката";
      document.body.appendChild(popup);
    }

    popup.classList.remove("show");
    void popup.offsetWidth;
    popup.classList.add("show");

    clearTimeout(popup._timer);
    popup._timer = setTimeout(() => {
      popup.classList.remove("show");
    }, 2500);
  }

  // AJAX (shop, courses, single AJAX)
  if (typeof jQuery !== "undefined") {
    jQuery(function ($) {
      $(document.body).on("added_to_cart", function () {
        showCartPopup();
      });
    });
  }

  // fallback (if Woo reload happens)
  document.addEventListener("DOMContentLoaded", function () {
    if (!document.body.classList.contains("single-product")) return;

    const notice = document.querySelector(".woocommerce-message");

    if (notice && notice.textContent.toLowerCase().includes("добав")) {
      showCartPopup();
    }
  });

})();


// Sync quantity with AJAX Add-to-Cart button
document.addEventListener("DOMContentLoaded", function () {
  const qtyInput = document.querySelector(".floating-cart input.qty");
  const ajaxButton = document.querySelector(".floating-cart .ajax_add_to_cart");

  if (!qtyInput || !ajaxButton) return;

  function updateQuantity() {
    ajaxButton.setAttribute("data-quantity", qtyInput.value);
    const url = new URL(ajaxButton.href);
    url.searchParams.set("quantity", qtyInput.value);
    ajaxButton.href = url.toString();
  }

  qtyInput.addEventListener("input", updateQuantity);
  qtyInput.addEventListener("change", updateQuantity);
});

document.addEventListener("DOMContentLoaded", function () {
    if (window.matchMedia("(pointer: coarse)").matches) {
        document.body.classList.add("force-mobile-menu");
    }
});

document.addEventListener("DOMContentLoaded", () => {
    console.log({
        innerWidth: window.innerWidth,
        hoverNone: window.matchMedia("(hover: none)").matches,
        hoverHover: window.matchMedia("(hover: hover)").matches,
        pointerCoarse: window.matchMedia("(pointer: coarse)").matches,
        pointerFine: window.matchMedia("(pointer: fine)").matches,
        forceClass: document.body.classList.contains("force-mobile-menu")
    });
});