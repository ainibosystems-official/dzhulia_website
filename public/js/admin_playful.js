
// Soft tilt on hero following mouse
document.querySelectorAll(".tilt-hover").forEach(el => {
    document.addEventListener("mousemove", e => {
        const x = (e.clientX / window.innerWidth - 0.5) * 10;
        const y = (e.clientY / window.innerHeight - 0.5) * 10;
        el.style.transform = `rotateX(${y}deg) rotateY(${-x}deg)`;
    });
});
