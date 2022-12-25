import "./bootstrap";
import Alpine from "alpinejs";

window.Alpine = Alpine;
Alpine.start();

// navbar fixed
window.onscroll = function () {
    const header = document.querySelector("header");
    const fixedNav = header.offsetTop;
    const toTop = document.querySelector("#to-top");
    // ketika halaman di scroll
    if (window.pageYOffset > fixedNav) {
        header.classList.add("navbar-fixed");
        toTop.classList.add("flex");
        toTop.classList.remove("hidden");
    } else {
        header.classList.remove("navbar-fixed");
        toTop.classList.add("hidden");
        toTop.classList.remove("flex");
    }
};

// hamburger menu
const hamburger = document.querySelector("#hamburger");
const navMenu = document.querySelector("#nav-menu");
// ketika tombol hamburger aktif
hamburger.addEventListener("click", function () {
    hamburger.classList.toggle("hamburger-active");
    navMenu.classList.toggle("hidden");
});
// klik di luar hamburger menu
window.addEventListener("click", function (e) {
    if (e.target != hamburger && e.target != navMenu) {
        hamburger.classList.remove("hamburger-active");
        navMenu.classList.add("hidden");
    }
});

// darkmode toggle
const darkToggle = document.querySelector("#dark-toggle");
const html = document.querySelector("html");
darkToggle.addEventListener("click", function () {
    // ketika tombol darkmode aktif
    if (darkToggle.checked) {
        html.classList.add("dark");
        localStorage.theme = "dark";
    } else {
        // ketika tombol darkmode nonaktif
        html.classList.remove("dark");
        localStorage.theme = "light";
    }
});

// pindahkan posisi toggle sesuai mode
if (
    localStorage.theme === "dark" ||
    (!("theme" in localStorage) &&
        window.matchMedia("(prefers-color-scheme: dark)").matches)
) {
    darkToggle.checked = true;
} else {
    darkToggle.checked = false;
}
