
document.addEventListener('DOMContentLoaded', function () {

    function removeDuplicateSummary() {
        if (window.innerWidth <= 768) {

            const summaries = document.querySelectorAll(
                '.wp-block-woocommerce-checkout-order-summary-block'
            );

            if (summaries.length > 1) {
                // remove the second (bottom one)
                summaries[1].remove();
            }
        }
    }

    removeDuplicateSummary();

    // Woo re-renders blocks sometimes → run again
    const observer = new MutationObserver(removeDuplicateSummary);
    observer.observe(document.body, { childList: true, subtree: true });

});

document.addEventListener("DOMContentLoaded", function () {
    const button = document.querySelector(".wc-block-checkout__actions");
    const summary = document.querySelector(".wc-block-checkout__sidebar");

    if (button && summary) {
        summary.appendChild(button);
    }
});

// Prevent checkout button flicker
document.addEventListener('DOMContentLoaded', () => {
    const fixButton = () => {
        const btn = document.querySelector('.wc-block-components-button');
        if (!btn) return;

        btn.style.opacity = '1';
        btn.style.visibility = 'visible';
    };

    // Run initially
    fixButton();

    // Run on Woo updates
    const observer = new MutationObserver(() => {
        fixButton();
    });

    observer.observe(document.body, {
        childList: true,
        subtree: true
    });
});
