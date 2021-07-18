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
lightGallery(document.querySelector('.gallery-container'), {
  cssEasing: 'cubic-bezier(0.680, -0.550, 0.265, 1.550)',
  speed: 1000,
});
// Light Gallery Script ends
function hideNavbar() {
  const galleryImg =document.querySelector('.gallery-item');
  const navbar = document.querySelector('.navigation');
  galleryImg.addEventListener('click', () => {
    navbar.style.display = "none";
  })
}

hideNavbar();

// scripts for navigation toggle button starts
let navToggleBtn = document.querySelector('.navigation__toggle');
let navToggleList = document.querySelector('.navigation__list');

navToggleBtn.addEventListener('click', () => {
  navToggleBtn.classList.toggle('open');
  navToggleList.classList.toggle('show');
});

// scripts for navigation toggle button ends

// scripts for navigation toggle  dropdown menu starts
let dropdownBtn= document.querySelector('.dropdown-btn');
let dropdownList = document.querySelector('.dropdown');

dropdownBtn.addEventListener('click', ()=> {
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

//Homepage Slider Scripts
const slides=document.querySelector(".slider").children;
const prev=document.querySelector(".prev");
const next=document.querySelector(".next");
const indicator=document.querySelector(".indicator");
let index=0;

  prev.addEventListener("click",function(){
      prevSlide();
      resetTimer();
  })

  next.addEventListener("click",function(){
     nextSlide(); 
     resetTimer();
  })

   function indicateSlide(element){
        index=element.id;
        changeSlide();
        resetTimer();
   }

  function prevSlide(){
     if(index==0){
       index=slides.length-1;
     }
     else{
       index--;
     }
     changeSlide();
  }

  function nextSlide(){
     if(index==slides.length-1){
       index=0;
     }
     else{
       index++;
     }
     changeSlide();
  }

  function changeSlide(){
           for(let i=0; i<slides.length; i++){
              slides[i].classList.remove("active");
           }
      slides[index].classList.add("active");
  }

  function resetTimer(){
      // when click to indicator or controls button 
      // stop timer 
      clearInterval(timer);
      // then started again timer
      timer=setInterval(autoPlay,4000);
  }

 function autoPlay(){
     nextSlide();
 }

let timer=setInterval(autoPlay,6000);

//End of Homepage Slider Scripts

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
