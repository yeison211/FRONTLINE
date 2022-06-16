/*=================
NAVBAR
===================
*/
let toggleSideb = document.querySelector(".nav-bar__toggle-btn");
let sideBar = document.querySelector(".nav-movil");
let sideBaropen = false;
document.body.addEventListener("click", (e) => {
    console.log(e.target);
});
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
var map = L.map("map").setView([10.39, -75.51], 15);

L.tileLayer("https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png", {
    attribution:
        '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors',
}).addTo(map);
/*Coberturas */
var circle = L.circle([10.39, -75.51], {
    color: "skyb",
    fillColor: "skyblue",
    fillOpacity: 0.5,
    radius: 1000,
}).addTo(map);
