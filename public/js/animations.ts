// FLOATING PUZZLES
const puzzles = document.querySelectorAll('.puzzle');

puzzles.forEach((el, i) => {
    const speed = 3000 + (i * 800);

    function float() {
        el.animate(
            [
                { transform: "translateY(0px) rotate(0deg)" },
                { transform: "translateY(-10px) rotate(3deg)" },
                { transform: "translateY(0px) rotate(0deg)" }
            ],
            {
                duration: speed,
                iterations: Infinity
            }
        );
    }

    float();
});

// FADE-IN ON SCROLL
const observer = new IntersectionObserver(entries => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.classList.add("visible");
        }
    });
});

document.querySelectorAll(".section, .card").forEach(el => {
    el.classList.add("hidden");
    observer.observe(el);
});
