/*Inicializacion  */
let map = "";
window.addEventListener("DOMContentLoaded", (event) => {
    carrousel(".swiper");
    inicializarMapa(10.39, -75.51);
});

/*=================
NAVBAR
===================
*/
let toggleSideb = document.querySelector(".nav-bar__toggle-btn");
let sideBar = document.querySelector(".nav-movil");
let sideBaropen = false;
toggleSideb.addEventListener("click", toggleSidebar);
function toggleSidebar() {
    sideBaropen != sideBaropen;
    sideBar.classList.toggle("navm-open");
    toggleSideb.classList.toggle("tsb-open");
}
/*
===================
MAPA
====================
*/
function inicializarMapa(coodenada1, coordenada2) {
    map = L.map("map").setView([coodenada1, coordenada2], 15);
    L.tileLayer("https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png", {
        attribution:
            '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors',
    }).addTo(map);
    /*Caracteristicas adicionales */
    /*Coberturas */
    let circle = L.circle([10.39, -75.51], {
        color: "skyb",
        fillColor: "skyblue",
        fillOpacity: 0.5,
        radius: 1000,
    }).addTo(map);
}
/*=================
Carousel
===================
*/
function carrousel(clase) {
    const swiper = new Swiper(clase, {
        // Optional parameters
        direction: "vertical",
        loop: true,

        // If we need pagination
        pagination: {
            el: ".swiper-pagination",
        },

        // Navigation arrows
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },

        // And if we need scrollbar
        scrollbar: {
            el: ".swiper-scrollbar",
        },
    });
}
