/**
 * Created by Anu Ganesh
 */


//scripts for changing bg-color of navbar when the window is scrolled starts
let navbar = document.querySelector('.navigation');
window.addEventListener('scroll', () => {
  let windowPosition = window.scrollY > 80; 
  navbar.classList.toggle('scrolling-active', windowPosition);
});

//scripts for changing bg-color of navbar when the window is scrolled ends

  // Light Gallery Script starts
  lightGallery(document.querySelector('.gallery-container'));
  lightGallery(document.querySelector('.items-container'));
  // Light Gallery Script ends
  // scripts for navigation toggle button starts
let navToggleBtn = document.querySelector('.navigation__toggle');
let navToggleList = document.querySelector('.navigation__list');

navToggleBtn.addEventListener('click', () => {
  navToggleBtn.classList.toggle('open');
  navToggleList.classList.toggle('show');
});

// scripts for navigation toggle button ends

// scripts for navigation toggle  dropdown menu starts
let dropdownLink= document.querySelector('.nav-dropdown-link');
let dropdownList = document.querySelector('.dropdown');

dropdownLink.addEventListener('click', ()=> {
  dropdownList.classList.toggle('show');
});
// let navToggleItem = document.querySelector('.navigation-toggle-item');
// let  navToggleDropdown = document.querySelector('.toggle-dropdown');

// navToggleItem.addEventListener('click', () => {
//   navToggleDropdown.classList.toggle('show');
// });

// navToggleDropdown.style.display = 'block';

// scripts for navigation toggle  dropdown menu ends


//scripts for program modal starts

 let swiper = new Swiper(".mySwiper", {
    spaceBetween: 30,
    centeredSlides: true,
    // autoplay: {
    //   delay: 3000,
    //   disableOnInteraction: false,
    // },
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
  });

var winWidth = $(window).width();

$(document).ready(function () {
    sliderInit();
    addClassInit();
    navInit();
    mcustomInit();
    matchHeight();
});


/*------------------------------- Functions Starts -------------------------------*/
function sliderInit() {
    /*$('.common-banner-slider').slick({
        arrows: false,
        dots: true,
        autoplay: false,
        speed: 500,
        fade: true,
        pauseOnHover: false,
        cssEase: 'linear',
        slidesToShow: 2,
        slidesToScroll: 1,
        responsive: [
            {
                breakpoint: 667,
                settings: {
                    arrows: true,
                    dots: false
                }
            }
        ]
    });*/

}

function addClassInit() {

}

function navInit() {

}

function mcustomInit() {

}



/*-------------------------------- Functions Ends --------------------------------*/
