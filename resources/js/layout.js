// Pindahkan fungsi-fungsi yang bisa reusable ke sini
export function initScrollAnimations() {
    function handleScrollAnimations() {
        const elements = document.querySelectorAll(
            ".fade-in-element, .slide-in-left, .slide-in-right, .slide-in-up"
        );

        elements.forEach((element) => {
            const elementTop = element.getBoundingClientRect().top;
            const elementVisible = 150;

            if (elementTop < window.innerHeight - elementVisible) {
                element.classList.add("animate");
            }
        });
    }

    window.addEventListener("scroll", handleScrollAnimations);
    // Initial check
    handleScrollAnimations();
}

export function initCounterAnimation() {
    function animateCounter(element) {
        const target = parseInt(element.getAttribute("data-target"));
        const increment = target / 100;
        let current = 0;

        const timer = setInterval(() => {
            current += increment;
            if (current >= target) {
                current = target;
                clearInterval(timer);
            }

            if (target >= 1000) {
                element.textContent = Math.floor(current / 1000) + "K+";
            } else {
                element.textContent = Math.floor(current);
            }
        }, 20);
    }

    const statNumbers = document.querySelectorAll(".stat-number");
    if (statNumbers.length > 0) {
        const observer = new IntersectionObserver((entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    animateCounter(entry.target);
                    observer.unobserve(entry.target);
                }
            });
        });

        statNumbers.forEach((stat) => observer.observe(stat));
    }
}
