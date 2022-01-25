/**
 * Created by Anu Ganesh
 */

// const { $ } = require("dom7");

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

// let navToggleBtn = document.querySelector('.navigation__toggle');
// let navToggleList = document.querySelector('.navigation__list');

// navToggleBtn.addEventListener('click', () => {
//   navToggleBtn.classList.toggle('open');
//   navToggleList.classList.toggle('show');
// });

// scripts for navigation toggle button ends

// scripts for navigation toggle  dropdown menu starts
// let dropdownLinks= document.querySelectorAll('.nav-dropdown-link');
// let dropdownList = document.querySelector('.dropdown');

// dropdownLinks.forEach(dropdownLink => {
//   dropdownLink.addEventListener('click', ()=> {
//       dropdownList.classList.toggle('show');
//   });
// })

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



/*------------------------------- Functions Starts -------------------------------*/

jQuery(function () {
  sliderInit();
  // addClassInit();
  // navInit();
  // mcustomInit();
  // matchHeight();
});

function sliderInit() {
    $('.gallery-menu-slider').slick({
        arrows: true,
        dots: true,
        autoplay: true,
        speed: 500,
        fade: true,
        pauseOnHover: false,
        cssEase: 'linear',
        slidesToShow: 4,
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
    });
    // $('.slider-wrapper').slick({
    //   arrows: true,
    //   dots: true,
    //   autoplay: true,
    //   speed: 1000,
    //   fade: true,
    //   pauseOnHover: false,
    //   cssEase: 'ease',
    //   slidesToShow: 1,
    //   slidesToScroll: 1,
    //   responsive: [
    //       {
    //           breakpoint: 667,
    //           settings: {
    //               arrows: true,
    //               dots: false
    //           }
    //       }
    //   ]
    // });
}
// function mcustomInit(){
//   $(".mscroll").mCustomScrollbar(
//     {theme:"light-3"}
//   );
// }
// function navInit() {
//   // $('.navigation__toggle').click(function (e) {
//   //     $('#mobile__nav').toggleClass('open-nav');
//   // })
// }



/*-------------------------------- Functions Ends --------------------------------*/
