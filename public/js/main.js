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