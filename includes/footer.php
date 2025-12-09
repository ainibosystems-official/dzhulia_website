    </main> <!-- CLOSE MAIN WRAPPER -->

<footer>
    © <?= date("Y") ?> Психолог Джулия Божидарова — Ателие за Емоции
</footer>

<!-- SINGLE BURGER MENU HANDLER -->
<script>
document.addEventListener("DOMContentLoaded", () => {
    const btn = document.querySelector(".mobile-menu-btn");
    const nav = document.querySelector("nav ul");

    if (btn && nav) {
        btn.addEventListener("click", () => {
            nav.classList.toggle("menu-open");
        });
    }
});
</script>

<!-- Load animations and front-end JS everywhere -->
<script src="/js/main.js"></script>

</body>
</html>
