<?php include ('header.php') ?>
<main id="home-page">
  <section class="banner-section">
      <div class="slider">
          <div class="slide active" style="background-image: linear-gradient(32deg, black, #5f5b5b40), url(img/slider/students/1.jpg);">
              <!-- <div class="container"> -->
                  <div class="caption">
                    <h1>
                      <span class="slider-heading-upper tracking-in-expand-fwd-top">Study at <span>Palpa International College</span></span>
                      <span class="slider-heading-lower tracking-in-contract">for a <span>better</span> Tomorrow</span>
                    </h1>
                    <a href="#programs" class="slide-in-blurred-bottom">View Courses <i class="fas fa-arrow-right"></i></a>
                    <a href="#programs" class="slide-in-blurred-bottom contact-btn">Contact Us <i class="fas fa-arrow-right"></i></a>
                  </div>
              <!-- </div> -->
          </div>
          <div class="slide" style="background-image: linear-gradient(32deg, black, #5f5b5b40), url('img/slider/students/2.jpg')">
            <div class="caption">
              <h1>
                <span class="slider-heading-upper tracking-in-expand-fwd-top">Study at <span>Stem</span></span>
                <span class="slider-heading-lower tracking-in-contract">for a <span>better</span> Tomorrow</span>
              </h1>
              <a href="#programs" class="slide-in-blurred-bottom">View Courses</a>
            </div>
          </div>
          <div class="slide" style="background-image: linear-gradient(32deg, black, #5f5b5b40), url('img/slider/students/3.jpg')">
            <div class="caption">
              <h1>
                <span class="slider-heading-upper tracking-in-expand-fwd-top">Study at <span>Stem</span></span>
                <span class="slider-heading-lower tracking-in-contract">for a <span>better</span> Tomorrow</span>
              </h1>
                <a href="#programs" class="slide-in-blurred-bottom">View Courses</a>
            </div>
          </div>
      </div>
      <!-- controls  -->
      <div class="controls">
          <div class="prev">
              <i class="fas fa-chevron-left"></i>
          </div>
          <div class="next">
              <i class="fas fa-chevron-right"></i>
          </div>
      </div>
  </section>
  <section class="common-about-section">
    <div class="custom-container">
      <div class="about-container">
        <div class="section-title">
          <h1 class="common-section-heading">Who We Are</h1>
        </div>
        <div class="section-content">
          <div class="img-container">
            <img src="img/about/1.jpg" alt="Students">
          </div>
          <div class="text-container">
            <h2>Welcome to Stem Academy</h2>
            <!-- <hr> -->
            <p>Stem Academy is a government approved academic institution, which offers BBA (Bachelor of Business Administration) and MBA (Master of Business Administration) under the affiliation of Lincoln University College , Malaysia .It is approved from Ministry of Education Nepal (approval Number letter number 125/ 075/075- 186) and equivalent from Tribhuvan University (TU) , Nepal. Graduates from our college will be eligible to apply the government and private sector of Nepal. Degree gained from Stem Academy will be accrediated and valid in all over the world including Nepal.Our College will be mainly focused in the following stream of Education - S: Science, T: Technology, E: Enterprenuership and M: Management.</p>
          
            <button type="button" class="common-section-btn">Learn more</button>
          </div>
        </div>
        
      </div>
    </div>
    
  </section>
  <section class="programs-section" id="programs">
    <div class="custom-container">
      <div class="section-title">
        <h1 class="common-section-heading">Programs</h1>
      </div>
      <div class="section-content">
        <a href="#" data-toggle="modal" data-target="#basicExampleModal">
          <div class="course-card overlay" style="background-image:url('img/programs/1.jpg')">
              <h2>Bachelors</h2>
              <hr>
              <p>Bachelor of Business Administration</p>
              <p class="modal-link">Click Here to see the course details<i class="fas fa-angle-double-right"></i></p>
              
          </div>
        </a>
        <a href="#" data-toggle="modal" data-target="#basicExampleModal2">
          <div class="course-card overlay" style="background-image:url('img/programs/2.jpg')">
              <h2>Masters</h2>
              <hr>
              <p>Master of Business Administration</p>
              <p class="modal-link">Click Here to see the course details<i class="fas fa-angle-double-right"></i></p>
          </div>
        </a>

      </div>
      <button class="common-section-btn programs-btn">
        View Program Details<i class="fas fa-arrow-right"></i>
      </button>
    </div>
  </section>
  <section class="news-and-events-section">
    <div class="custom-container">
      <div class="section-title">
        <h1 class="common-section-heading">News & Events</h1>
      </div>
      <div class="section-content">
        <div class="recent-news-section">
          <div class="rn-heading ne-heading">
            <h2>Recent News</h2>
          </div>
          <div class="rn-content">
            <div class="news-item">
              <div class="img-container">
                <img src="img/slider/fd/1.jpg" alt="">
              </div>
              <div class="text-container">
                <p class="date">January 20, 2021</p>
                <h3 class="title">MalaysiaMet International Scholarship</h3>
              </div>
            </div>
            <div class="news-item">
              <div class="img-container">
                <img src="img/slider/hm/3.jpg" alt="">
              </div>
              <div class="text-container">
                <p class="date">January 20, 2021</p>
                <h3 class="title">MalaysiaMet International Scholarship</h3>
              </div>
            </div>
            <div class="news-item">
              <div class="img-container">
                <img src="img/slider/hm/3.jpg" alt="">
              </div>
              <div class="text-container">
                <p class="date">January 20, 2021</p>
                <h3 class="title">MalaysiaMet International Scholarship</h3>
              </div>
            </div>
          </div>
          <button class="ne-btn common-section-btn">view all news</button>
        </div>
        <div class="upcoming-events-section">
          <div class="ue-heading  ne-heading">
            <h2>Upcoming Events</h2>
          </div>
          <div class="ue-content">
            <div class="ue-item">
              <div class="img-container">
                <img src="img/slider/hm/3.jpg" alt="">
              </div>
              <div class="text-container">
                <p class="date">January 20, 2021</p>
                <h3 class="title">Autumn Convocation will be held on January 2021, register now.

                </h3>
              </div>
            </div>
            <div class="ue-item">
              <div class="img-container">
                <img src="img/slider/hm/3.jpg" alt="">
              </div>
              <div class="text-container">
                <p class="date">January 20, 2021</p>
                <h3 class="title">Autumn Convocation will be held on January 2021, register now.
                </h3>
              </div>
            </div>
          </div>
          <button class="ne-btn common-section-btn">view all events</button>
        </div>
      </div>
      <!-- <button class="common-section-btn ne-btn">View All<i class="fas fa-arrow-right"></i></button> -->
    </div>
  </section>
  <section class="gallery-section">
    <div class="custom-container">
      <div class="section-title">
        <h1 class="common-section-heading">Gallery</h1>
      </div>
      <div class="section-content">
        <div class="gallery-container">
          <div class="single-img">
            <img src="img/slider/ca/1.jpg" alt="" class="gallery-image">
          </div>
          <div class="single-img">
            <img src="img/slider/fd/2.jpg" alt="" class="gallery-image">
          </div>
          <div class="single-img">
            <img src="img/slider/hm/2.jpg" alt="" class="gallery-image">
          </div>
          <div class="single-img">
            <img src="img/slider/ca/2.jpg" alt="" class="gallery-image">
          </div>
          <div class="single-img">
            <img src="img/slider/mt/1.jpg" alt="" class="gallery-image">
          </div>
          <div class="single-img">
            <img src="img/slider/hm/1.jpg" alt="" class="gallery-image">
          </div>
        </div>

      </div>
      <button class="common-section-btn gallery-btn">View All<i class="fas fa-arrow-right"></i></button>
    </div>
  </section>
  <section class="testimonials-section">
    <div class="custom-container">
    <div class="section-title">
        <h1 class="common-section-heading">Testimonials</h1>
      </div>
      <div class="section-content">
        <div class="testimonial-slider">
        <div class="swiper-container mySwiper">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <div class="img-container">
            <img src="img/testimonial/1.jpg" alt="student picture">
          </div>
          <div class="text-container">
          <p class="alumni-thoughts">Palpa International College helped me to build the confidence I needed to face the real world and achieve my goals. I was truly overwhelmed to be a part of an education system that prepared me for real life situations. For me it was the perfect place to explore my interests and learn how to stand out from the crowd.</p>
          <p class="alumni-details">
            - Karuna Shrestha
          </p>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="img-container">
            <img src="img/testimonial/1.jpg" alt="student picture">
          </div>
          <div class="text-container">
          <p class="alumni-thoughts">Palpa International College helped me to build the confidence I needed to face the real world and achieve my goals. I was truly overwhelmed to be a part of an education system that prepared me for real life situations. For me it was the perfect place to explore my interests and learn how to stand out from the crowd.</p>
          <p class="alumni-details">
            - Karuna Shrestha
          </p>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="img-container">
            <img src="img/testimonial/1.jpg" alt="student picture">
          </div>
          <div class="text-container">
          <p class="alumni-thoughts">Palpa International College helped me to build the confidence I needed to face the real world and achieve my goals. I was truly overwhelmed to be a part of an education system that prepared me for real life situations. For me it was the perfect place to explore my interests and learn how to stand out from the crowd.</p>
          <p class="alumni-details">
            - Karuna Shrestha
          </p>
          </div>
        </div>
      </div>
      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
      <div class="swiper-pagination"></div>
    </div>
        </div>
      </div>
    </div>
  </section>
  

</main>

<?php include ('footer.php') ?>