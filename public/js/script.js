/* ============================================================
   DETECT ADMIN MODE
============================================================ */
const isAdmin = document.body.classList.contains("admin-body");

/* ============================================================
   REVEAL-ON-SCROLL (PUBLIC ONLY)
============================================================ */
if (!isAdmin) {
    const reveals = document.querySelectorAll(".reveal-animate");

    function reveal() {
        reveals.forEach(el => {
            const rect = el.getBoundingClientRect();
            if (rect.top < window.innerHeight - 80) {
                el.classList.add("visible");
            }
        });
    }

    window.addEventListener("scroll", reveal);
    window.addEventListener("load", reveal);
}

/* ============================================================
   HERO TILT (PUBLIC ONLY)
============================================================ */
if (!isAdmin) {
    const hero = document.querySelector(".parallax-tilt");

    if (hero) {
        hero.addEventListener("mousemove", (e) => {
            const rect = hero.getBoundingClientRect();
            const x = (e.clientX - rect.left) / rect.width * 2 - 1;
            const y = (e.clientY - rect.top) / rect.height * 2 - 1;

            const maxTilt = 22;
            hero.style.transform =
                `rotateX(${y * -1.5 * maxTilt}deg) rotateY(${x * maxTilt}deg) scale(1.03)`;
        });

        hero.addEventListener("mouseleave", () => {
            hero.style.transform = "rotateX(0deg) rotateY(0deg) scale(1)";
        });
    }
}

/* ============================================================
   BOUNCY CARD REVEAL (PUBLIC ONLY)
============================================================ */
if (!isAdmin) {
    const cards = document.querySelectorAll(".service-card");

    function revealCards() {
        cards.forEach(card => {
            const rect = card.getBoundingClientRect();
            if (rect.top < window.innerHeight - 100) {
                card.classList.add("visible");
            }
        });
    }

    window.addEventListener("scroll", revealCards);
    window.addEventListener("load", revealCards);
}

/* ============================================================
   FALLING PUZZLES (PUBLIC ONLY)
============================================================ */
if (!isAdmin) {
    function createPuzzle() {
        const puzzle = document.createElement("img");
        const icons = [
            "/img/icon_child.png",
            "/img/icon_family.png",
            "/img/icon_talk.png"
        ];

        puzzle.src = icons[Math.floor(Math.random() * icons.length)];
        puzzle.classList.add("puzzle-piece");

        const size = Math.random() * 25 + 20;
        puzzle.style.width = size + "px";
        puzzle.style.left = Math.random() * window.innerWidth + "px";

        const duration = Math.random() * 4 + 7;
        puzzle.style.animationDuration = duration + "s";

        document.body.appendChild(puzzle);

        setTimeout(() => puzzle.remove(), duration * 1000);
    }

    setInterval(createPuzzle, 2500);
}

/* ============================================================
   BALLOONS (WORKSHOP PAGE ONLY)
============================================================ */
if (!isAdmin) {
    const workshopHero = document.querySelector(".workshop-hero");

    function createBalloon() {
        if (!workshopHero) return;

        const balloon = document.createElement("img");
        balloon.src = "/img/icon_talk.png";
        balloon.classList.add("balloon");

        balloon.style.left = Math.random() * window.innerWidth + "px";
        workshopHero.appendChild(balloon);

        setTimeout(() => balloon.remove(), 7000);
    }

    if (workshopHero) {
        setInterval(createBalloon, 3500);
    }
}

/* ============================================================
   FLOATING ICONS (PUBLIC ONLY)
============================================================ */
if (!isAdmin) {
    const floatingIcons = document.querySelectorAll(
        ".float-sun, .float-child, .float-family, .float-talk"
    );

    floatingIcons.forEach((icon, i) => {
        icon.style.animationDelay = (i * 0.6) + "s";
    });
}

/* ============================================================
   MOBILE BURGER MENU — ONE CLEAN VERSION
============================================================ */
const burgerBtn = document.querySelector(".mobile-menu-btn");
const burgerMenu = document.querySelector("nav ul");

if (burgerBtn && burgerMenu) {
    burgerBtn.addEventListener("click", () => {
        burgerMenu.classList.toggle("menu-open");
    });
}
