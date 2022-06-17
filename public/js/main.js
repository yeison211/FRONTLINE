/*Inicializacion  */
let map = "";
window.addEventListener("DOMContentLoaded", (event) => {
    carrousel(".swiper");
    inicializarMapa(10.39, -75.51, 13);
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
function inicializarMapa(coodenada1, coordenada2, zoom) {
    map = L.map("map").setView([10.36283, -75.495921], 15);
    L.tileLayer("https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png", {
        attribution:
            '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors',
    }).addTo(map);
    map.scrollWheelZoom.disable();
    /*Caracteristicas adicionales */
    /*Coberturas*/
    /*==========Circulo#1 - Barrio_(Girasoles,Campoelias)================*/
    let circle = L.circle([10.36641, -75.503495], {
        color: "skyb",
        fillColor: "skyblue",
        fillOpacity: 0.5,
        radius: 230,
    }).addTo(map);
    /*==========Circulo#2 - Barrio_02_Octubre================*/
    let circle2 = L.circle([10.368909, -75.500901], {
        color: "skyb",
        fillColor: "skyblue",
        fillOpacity: 0.5,
        radius: 120,
    }).addTo(map);
    /*==========Circulo#5 - Barrio_Mirador_de_Cartagena================*/
    let circle3 = L.circle([10.360908, -75.498106], {
        color: "skyb",
        fillColor: "skyblue",
        fillOpacity: 0.5,
        radius: 180,
    }).addTo(map);
    /*==========Circulo#4 - Barrio_Mirador_de_Cartagena================*/
    let circle4 = L.circle([10.361414, -75.494091], {
        color: "skyb",
        fillColor: "skyblue",
        fillOpacity: 0.5,
        radius: 180,
    }).addTo(map);
    /*==========Circulo#5 - Barrio_Mirador_de_Cartagena================*/
    let circle5 = L.circle([10.361773, -75.490862], {
        color: "skyb",
        fillColor: "skyblue",
        fillOpacity: 0.5,
        radius: 90,
    }).addTo(map);
    /*==========Circulo#6 - Barrio_La_Paz================*/
    let circle6 = L.circle([10.360054, -75.490114], {
        color: "skyb",
        fillColor: "skyblue",
        fillOpacity: 0.5,
        radius: 190,
    }).addTo(map);
    /*==========Circulo#7 - Barrio_17_Mayo================*/
    let circle7 = L.circle([10.364653, -75.493051], {
        color: "skyb",
        fillColor: "skyblue",
        fillOpacity: 0.5,
        radius: 200,
    }).addTo(map);
    /*==========Circulo#8 - Global-Zona================*/
    let circle8 = L.circle([10.363737, -75.49648], {
        color: "skyb",
        fillColor: "skyblue",
        fillOpacity: 0.3,
        radius: 900,
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
        autoplay: {
            delay: 5000,
        },
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
