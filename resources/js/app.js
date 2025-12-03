import "bootstrap";

document.addEventListener("DOMContentLoaded", () => {
    const toggle = document.getElementById("menuToggle");
    const links = document.getElementById("navbarLinks");

    if (toggle) {
        toggle.addEventListener("click", () => {
            links.classList.toggle("active");
        });
    }
});
