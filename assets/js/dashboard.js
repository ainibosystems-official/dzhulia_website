document.addEventListener("DOMContentLoaded", function () {
    const menuItems = document.querySelectorAll(".dashboard-sidebar li");
    const tabs = document.querySelectorAll(".dashboard-content .tab");

    if (menuItems.length && tabs.length) {

        menuItems.forEach((item) => {
            item.addEventListener("click", function () {

                const target = this.getAttribute("data-tab");

                menuItems.forEach((li) => li.classList.remove("active"));
                tabs.forEach((tab) => tab.classList.remove("active"));

                this.classList.add("active");

                const targetTab = document.getElementById(target);

                if (targetTab) {
                    targetTab.classList.add("active");
                }

            });
        });

    }

});

document.addEventListener("DOMContentLoaded", function () {
    const deleteForm = document.querySelector('form button[name="delete_account"]');

    if (!deleteForm) return;

    deleteForm.closest("form").addEventListener("submit", function (e) {

        const confirmDelete = confirm(
            "⚠️ ВНИМАНИЕ!\n\n" +
            "Това действие е НЕОБРАТИМО.\n" +
            "Вашият профил ще бъде изтрит завинаги.\n\n" +
            "Сигурни ли сте, че искате да продължите?"
        );

        if (!confirmDelete) {
            e.preventDefault();
        }

    });
});

document.addEventListener("DOMContentLoaded", function () {

    const toggles = document.querySelectorAll(".password-toggle-btn");

    toggles.forEach(function (btn) {

        btn.addEventListener("click", function () {

            const target = document.getElementById(
                this.dataset.target
            );

            if (!target) return;

            if (target.type === "password") {

                target.type = "text";
                this.textContent = "🙈";

            } else {

                target.type = "password";
                this.textContent = "👁";
            }

        });

    });

});