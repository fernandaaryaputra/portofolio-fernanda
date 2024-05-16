// navbar fixed
window.onscroll = function () {
    const header = document.querySelector("header");
    const fixedNav = header.offsetTop;
    if (window.pageYOffset > fixedNav) {
        header.classList.add("navbar-fixed");
    } else {
        header.classList.remove("navbar-fixed");
    }
};
document.addEventListener("DOMContentLoaded", function() {
    window.onscroll = function() {
        const header = document.querySelector(".header");
        const fixedNav = header.offsetTop;
        if (window.pageYOffset > fixedNav) {
            header.classList.add("navbar-fixed");
            header.style.zIndex = "999"; // Menetapkan z-index yang tinggi saat navbar tetap
        } else {
            header.classList.remove("navbar-fixed");
            header.style.zIndex = "auto"; // Mengembalikan z-index ke nilai default saat navbar tidak tetap
        }
    };
});


// hamburger
const hamburger = document.querySelector("#hamburger");
const navMenu = document.querySelector("#nav-menu");
hamburger.addEventListener("click", function () {
    hamburger.classList.toggle("hamburger-active");
    navMenu.classList.toggle("hidden");
});
