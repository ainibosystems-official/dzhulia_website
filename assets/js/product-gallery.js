document.addEventListener("DOMContentLoaded", function () {

    const mainImage = document.getElementById("main-product-image");

    if (!mainImage) return;

    const thumbs = document.querySelectorAll(".product-thumb");

    thumbs.forEach(thumb => {

        thumb.addEventListener("click", function () {

            const newSrc = this.getAttribute("data-full");

            if (!newSrc) return;

            mainImage.src = newSrc;

            thumbs.forEach(t => t.classList.remove("active"));
            this.classList.add("active");

        });

    });

});