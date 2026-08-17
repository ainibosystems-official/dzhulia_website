document.addEventListener("DOMContentLoaded", function () {
    document.addEventListener("click", function (e) {
        const btn = e.target.closest(".password-toggle");
        if (!btn) return;

        e.preventDefault();

        const wrapper = btn.closest(".password-field");
        if (!wrapper) return;

        const input = wrapper.querySelector("input");
        if (!input) return;

        if (input.type === "password") {
            input.type = "text";
            btn.textContent = "🙈";
            btn.setAttribute("aria-label", "Скрий паролата");
        } else {
            input.type = "password";
            btn.textContent = "👁";
            btn.setAttribute("aria-label", "Покажи паролата");
        }
    });
});