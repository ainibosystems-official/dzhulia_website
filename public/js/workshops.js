/* -----------------------------------------------------------
   PARALLAX TILT ON HERO
----------------------------------------------------------- */

const hero = document.querySelector(".parallax-tilt");

document.addEventListener("mousemove", (e) => {
    const x = (e.clientX / window.innerWidth - 0.5) * 10;
    const y = (e.clientY / window.innerHeight - 0.5) * 10;

    hero.style.transform = `rotateX(${y}deg) rotateY(${-x}deg)`;
});

/* -----------------------------------------------------------
   SCROLL TRIGGER BOUNCY CARDS
----------------------------------------------------------- */

const cards = document.querySelectorAll(".service-card");

function revealCards() {
    cards.forEach(card => {
        const rect = card.getBoundingClientRect();
        if (rect.top < window.innerHeight - 80) {
            card.classList.add("visible");
        }
    });
}

window.addEventListener("scroll", revealCards);
window.addEventListener("load", revealCards);

/* -----------------------------------------------------------
   FALLING PUZZLES
----------------------------------------------------------- */

function createPuzzle() {
    const puzzle = document.createElement("img");
    puzzle.src = "/img/icon_child.png"; // use any small icon
    puzzle.classList.add("puzzle-piece");

    const size = Math.random() * 40 + 20;
    puzzle.style.width = size + "px";

    puzzle.style.left = Math.random() * window.innerWidth + "px";

    const duration = Math.random() * 8 + 6;
    puzzle.style.animationDuration = duration + "s";

    document.body.appendChild(puzzle);

    setTimeout(() => {
        puzzle.remove();
    }, duration * 1000);
}

setInterval(createPuzzle, 800);


/* -----------------------------------------------------------
   FLOATING BALLOONS
----------------------------------------------------------- */

const heroSection = document.querySelector(".workshop-hero");

function createBalloon() {
    const balloon = document.createElement("img");
    balloon.src = "/img/icon_talk.png";
    balloon.classList.add("balloon");
    
    balloon.style.left = Math.random() * window.innerWidth + "px";
    balloon.style.top = Math.random() * 200 + "px";
    
    heroSection.appendChild(balloon);

    setTimeout(() => balloon.remove(), 7000);
}

setInterval(createBalloon, 4000);
