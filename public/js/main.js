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

/*=================
carousel
===================
*/

window.addEventListener('load', function(){
    new Glider(document.querySelector('.carousel__lista'), {
        slidesToScroll: 1,
        slidesToShow:1,
        dots: '.carousel__indicadores',
        draggable: true,
        arrows: {
          prev: '.carousel_anterior',
          next: '.carousel_siguiente'
        }
      });
  });
  responsive: [
    {
      // screens greater than >= 775px
      breakpoint: 775,
      settings: {
        // Set to `auto` and provide item width to adjust to viewport
        slidesToShow: 'auto',
        slidesToScroll: 'auto',
        itemWidth: 150,
        duration: 0.25
      }
    },{
      // screens greater than >= 1024px
      breakpoint: 1024,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1,
        itemWidth: 150,
        duration: 0.25
      }
    }
  ]

