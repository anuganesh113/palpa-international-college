<!-- Created by Anu Ganesh -->
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Palpa International College</title>
    
    <!------------------------ Meta Starts ---------------------->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width">
    <link rel="shortcut icon" type="image/x-icon" href="img/logo/header-logo.jpg">
    
    <meta property="og:title" content=""/>
    <meta property="og:type"   content="website" />
    <meta property="og:url"    content="" />
    <meta property="og:site_name" content=""/>
    <meta property="og:image" content=""/>
    <meta property="og:image:alt" content="">
    <meta property="og:description" content="">
    <!------------------------- Meta Ends ----------------------->


    <!----------------------- Fonts Starts ---------------------->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <!------------------------ Fonts Ends ----------------------->


    <!-------------------- Components Starts -------------------->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@animxyz/core@0.4.0/dist/animxyz.min.css">
    
    <!-- Owl Carousel -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link href="css/bowercomponent/slick-theme.css" rel="stylesheet">
    <link href="css/bowercomponent/slick.css" rel="stylesheet">
    <link href="css/bowercomponent/jquery.mCustomScrollbar.min.css" rel="stylesheet">
    <link href="css/bowercomponent/lightbox.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.2.0-beta.1/css/lightgallery.min.css" integrity="sha512-ShUKQmljhTR5WiAIb5afZNvW2htTJfyZ2d65SYzQ0lladX55FD2UZlgYaSvYmfobBvC4VRy+e/iorrf/5PcJNg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Swiper JS -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <!--------------------- Components Ends --------------------->


    <!-------------------- Site Style Starts -------------------->
    <link href="css/main.css" rel="stylesheet">
    <!-- <link href="css/thestyles.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet"> -->
    <!--------------------- Site Style Ends --------------------->

</head>

<body>

<!------------------------------------- Wrapper Starts ------------------------------------->
<div id="wrapper">

    <!--------------------------------- Header Wrapper Starts ---------------------------------->
    <header class="header" style="background-image: url('img/svgs/header4.svg')">
        <!-- <div class="top-header">
            <div class="top-header-item">
                <span class="contact"><i class="fas fa-phone"></i> NEED HELP? CALL US NOW: +977 9841338194</div>
                <span class="email"><i class="fas fa-email"></i>namaste@palpainternational.edu.np</span>
            </div>
            <div class="top-header-item"></div>
        </div> -->
        <nav class="navigation">
            <div class="wrapper">
                <div class="logo">
                <a href="index.php"><img src="img/logo/main-logo.png" alt="Logo"></a>
                </div>
                <input type="radio" name="slider" id="menu-btn">
                <input type="radio" name="slider" id="close-btn">
                <ul class="nav-links">
                    <label for="close-btn" class="btn close-btn"><i class="fas fa-times"></i></label>
                    <li>
                        <a href="index.php" class="nav-link">Home</a>
                    </li>
                    <li>
                        <a href="#" class="desktop-item nav-link has-dropdown">About <i class="fas fa-angle-down"></i></a>
                        <input type="checkbox" id="showDrop">
                        <label for="showDrop" class="mobile-item nav-link">About <i class="fas fa-angle-right"></i></label>
                        <ul class="drop-menu">
                            <li><a href="about-pi-college.php">About PI College</a></li>
                            <li><a href="message-ceo.php">Message from CEO</a></li>
                            <li><a href="team-members.php">Our Team Members</a></li>
                            <li><a href="credit-transfer.php">About Credit Transfer</a></li>
                            <li><a href="contact.php">Contact</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" class="desktop-item nav-link has-dropdown">Programs <i class="fas fa-angle-down"></i></a>
                        <input type="checkbox" id="showMega">
                        <label for="showMega" class="mobile-item">Programs <i class="fas fa-angle-right"></i></label>
                        <div class="mega-box">
                            <div class="content">
                                <div class="row">
                                    <header>Academic Programs</header>
                                    <ul class="mega-links">
                                        <li><a href="bba.php"><i class="fas fa-angle-right"></i>  BBA</a></li>
                                        <li><a href="bit.php"><i class="fas fa-angle-right"></i>  BIT</a></li>
                                        <li><a href="mba.php"><i class="fas fa-angle-right"></i>  MBA</a></li>
                                    </ul>
                                </div>
                                <div class="row">
                                    <header>Professional Programs</header>
                                    <ul class="mega-links">
                                    <li><a href="acca.php"><i class="fas fa-angle-right"></i> ACCA</a></li>
                                    <li><a href="cima.php"><i class="fas fa-angle-right"></i>  CIMA</a></li>
                                    <li><a href="cfa.php"><i class="fas fa-angle-right"></i>  CFA</a></li>
                                    </ul>
                                </div>
                                <div class="row">
                                    <header>Other Programs</header>
                                    <ul class="mega-links">
                                    <li><a href="ielts.php"><i class="fas fa-angle-right"></i> IELTS</a></li>
                                    <li><a href="sat.php"><i class="fas fa-angle-right"></i>  SAT</a></li>
                                    <li><a href="pte.php"><i class="fas fa-angle-right"></i>  PTE</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                    <a href="#" class="desktop-item nav-link has-dropdown">News & Events <i class="fas fa-angle-down"></i></a>
                    <input type="checkbox" id="showDrop2">
                    <label for="showDrop2" class="mobile-item">News & Events <i class="fas fa-angle-right"></i></label>
                    <ul class="drop-menu">
                        <li><a href="coming-soon.php">Recent News</a></li>
                        <li><a href="upcoming-events.php">Upcoming Events</a></li>
                    </ul>
                    </li>
                    <li><a href="gallery.php" class="nav-link">Gallery</a></li>
                    <li><a href="downloads.php" class="nav-link">Downloads</a></li>
                    <li class="last-menu-item">
                        <a href="#" class="apply-now-btn pulsate-fwd" data-toggle="modal" data-target="#basicExampleModal4">
                            Apply Now
                            <i class="fas fa-arrow-right"></i>
                        </a></li>
                </ul>
                <label for="menu-btn" class="btn menu-btn">
                    <span class="bar bar-1"></span>
                    <span class="bar bar-2"></span>
                    <span class="bar bar-3"></span>
                </label>
            </div> 
        </nav>
    </header>
    
    
    <!-- <div class="navigation-toggle-menu">
        <ul class="navigation-toggle-list">
                    <li class="navigation-toggle-item">
                        <a href="#" class="navigation-toggle-link">Home</a>
                    </li>
                    <li class="navigation-toggle-item">
                        <a href="#" class="navigation-toggle-link">About</a>
                    </li>
                    <li class="navigation-toggle-item">
                        <a href="#" class="navigation-toggle-link">Academics<i class="uil uil-angle-down toggle-dropdown-btn"></i></a>
                        <ul class="toggle-dropdown">
                            <li class="toggle-dropdown__item">
                                <a href="#" class="toggle-dropdown__link">Course of Study</a>
                            </li>
                            <li class="toggle-dropdown__item">
                                <a href="#" class="toggle-dropdown__link">Admission</a>
                            </li>
                            <li class="toggle-dropdown__item">
                                <a href="#" class="toggl
                                e-dropdown__link">Scholarship</a>
                            </li>
                        </ul>
                    </li>
                    <li class="navigation-toggle-item">
                    <a href="#" class="navigation-toggle-link">Gallery</a>
                    </li>
                    <li class="navigation-toggle-item">
                    <a href="#" class="navigation-toggle-link">Contact</a>
                    </li>
                </ul>
    </div> -->

    <!-- Modal -->
    <div class="program-modal modal fade" id="basicExampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="program-modal-dialog modal-dialog" role="document">
        <div class="program-modal-content modal-content">
            <div class="modal-header">
            <h3 class="modal-title" id="exampleModalLabel">Bachelor of Business Administration</h3>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <div class="modal-body">
                <div class="program-items-container">
                    <div class="program-item">
                        <div class="img-container">
                            <i class='bx bx-book-open'></i>
                        </div>
                        <div class="text-container">
                            <h4>Course Name</h4>
                            <p>BBA</p>
                        </div>
                    </div>
                    <div class="program-item">
                        <div class="img-container">
                            <i class='bx bx-calendar'></i>
                        </div>
                        <div class="text-container">
                            <h4>Course Duration</h4>
                            <p>4 Years</p>
                        </div>
                    </div>
                    <div class="program-item">
                        <div class="img-container">
                            <i class='bx bx-time'></i>
                        </div>
                        <div class="text-container">
                            <h4>Credit Hours</h4>
                            <p>120 Hrs.</p>
                        </div>
                    </div>
                    <div class="program-item">
                        <div class="img-container">
                            <i class='bx bxs-graduation' ></i>
                        </div>
                        <div class="text-container">
                            <h4>University</h4>
                            <p>Lincoln University College</p>
                        </div>
                    </div>
                </div>
                <div class="other-content">
                    <h4>Approved By:</h4>
                    <p>Government of Nepal & Government of Malaysia</p>
                    <h4>Credit Transfer</h4>
                    <p>UK, Canada, Europe, USA, Australia</p>
                    <h4>Course Outcome</h4>
                    <ul>
                        <li>Apply broad discipline knowledge to a range of theoretical and practical business situations through research and practical application</li>
                        <li>Think creatively and critically to generate innovative solutions to complex business and commercial problems</li>
                        <li>Access, evaluate and synthesise relevant information from a range of organisational and external sources.</li>
                        <li>Communicate appropriately and effectively in professional and public contexts</li>
                        <li>Apply technologies appropriately for a variety of commercial purposes</li>
                    </ul>
                    <h4>Specialization </h4>
                    <p>Accounting, Finance, Human Resource Management, Marketing, Entrepreneurship </p>
                    <h4>Local Equivalent </h4>
                    <p>From Tribhuvan University </p>
                    <h4>Campus Location</h4>
                    <p>Lalitpur , Nepal </p>
                    <h4>Program Head </h4>
                    <p>Pramesh Gyawali </p>
                </div>
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
        </div>
    </div>
    <div class="program-modal modal fade" id="basicExampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="program-modal-dialog modal-dialog" role="document">
        <div class="program-modal-content modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="exampleModalLabel">Bachelor of Information Technology</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <h3>Coming Soon..</h3>
            </div>
        </div>
        </div>
    </div>
    <div class="program-modal modal fade" id="basicExampleModal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="program-modal-dialog modal-dialog" role="document">
        <div class="program-modal-content modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="exampleModalLabel">Master of Business Administration</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="program-items-container">
                    <div class="program-item">
                        <div class="img-container">
                            <i class='bx bx-book-open'></i>
                        </div>
                        <div class="text-container">
                            <h4>Course Name</h4>
                            <p>MBA</p>
                        </div>
                    </div>
                    <div class="program-item">
                        <div class="img-container">
                            <i class='bx bx-calendar'></i>
                        </div>
                        <div class="text-container">
                            <h4>Course Duration</h4>
                            <p>2 Years</p>
                        </div>
                    </div>
                    <div class="program-item">
                        <div class="img-container">
                            <i class='bx bx-time'></i>
                        </div>
                        <div class="text-container">
                            <h4>Credit Hours</h4>
                            <p>60 Hrs.</p>
                        </div>
                    </div>
                    <div class="program-item">
                        <div class="img-container">
                            <i class='bx bxs-graduation'></i>
                        </div>
                        <div class="text-container">
                            <h4>University</h4>
                            <p>Lincoln University College</p>
                        </div>
                    </div>
                </div>
                <div class="other-content">
                    <h4>Approved By:</h4>
                    <p>Government of Nepal & Government of Malaysia</p>
                    <h4>Credit Transfer</h4>
                    <p>UK, Canada, Europe, USA, Australia</p>
                    <h4>Course Outcome</h4>
                    <ul>
                        <li>Demonstrate managerial and leadership qualities through communicating and working effectively.</li>
                        <li>Demonstrate the skills and principles of lifelong learning in their academic and career development.</li>
                        <li>Apply theories and concepts in the decision making process in the business environment.</li>
                        <li>Critically evaluate theories and concepts of business.</li>
                        <li>Generate solutions to problems using scientific and critical thinking skills.</li>
                    </ul>
                    <h4>Specialization </h4>
                    <p>Accounting, Finance, Human Resource Management, Marketing, Entrepreneurship</p>
                    <h4>Local Equivalent </h4>
                    <p>From Tribhuvan University </p>
                    <h4>Campus Location</h4>
                    <p>Lalitpur , Nepal </p>
                    <h4>Program Head </h4>
                    <p>Pramesh Gyawali </p>
                   
                </div>
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
        </div>
    </div>
    <div class="search-modal modal fade" id="basicExampleModal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="search-modal-dialog modal-dialog" role="document">
        <div class="search-modal-content modal-content">
            <div class="modal-header">
                <h2>Search For <span>Courses</span></h2>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <input type="text" name="search" id="" placeholder="Search For Courses">
                <button><i class="fas fa-search"></i></button>
            </div>
        </div>
        </div>
    </div>
    <div class="apply-now-modal program-modal modal fade" id="basicExampleModal4" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="program-modal-dialog modal-dialog" role="document">
            <div class="program-modal-content modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="applynow-content">
                        <div class="applynow-image">
                                <img src="img/apply-now/1.svg" alt="">
                        </div>
                        <div class="applynow-form">
                            <h2 class="form-title">Apply Now</h2>
                            <form action="" class="applynow-form" id="applynow-form">
                                <div class="form-group">
                                    <label for="name">
                                        <i class="fas fa-user"></i>
                                    </label>
                                    <input type="text" name="name" id="name" placeholder="Full Name"  required>
                                </div>
                                <div class="form-group">
                                    <label for="email">
                                        <i class="fas fa-envelope"></i>
                                    </label>
                                    <input type="email" name="email" id="email" placeholder="Your Email Address" required>
                                </div>
                                <div class="form-group">
                                    <label for="contact">
                                        <i class="fas fa-mobile-alt"></i>
                                    </label>
                                    <input type="text" name="contact" id="contact" placeholder="Your Mobile Number" required>
                                </div>
                                <div class="form-group">
                                    <label for="address">
                                        <i class="fas fa-map-marker-alt"></i>
                                    </label>
                                    <input type="text" name="address" id="address" placeholder="Your Current Address" required>
                                </div>
                                <div class="form-group">
                                    <!-- <select name="courses" id="courses">
                                        <option value="course-choose">Choose Your Course</option>
                                        <option value="bba">BBA</option>
                                        <option value="mba">MBA</option>
                                    </select> -->
                                    <h5>Choose Your Course</h5>
                                    <div class="course-options-wrapper">
                                        <input type="radio" name="course" value="bba" checked> BBA<br>
                                        <input type="radio" name="course" value="mba"> MBA<br>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <textarea name="message" id="message" cols="30" rows="5" placeholder="Your Message"></textarea>
                                </div>
                                <div class="form-group form-button">
                                    <input type="submit" name="applynow" id="applynow" class="form-submit" value="Apply Now">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- <div class="modal-footer">
                    <button type="button" class="btn btn-secondary submit-btn" data-dismiss="modal">Submit</button>
                </div> -->
            </div>
        </div>
    </div>
    
    <!---------------------------------- Header Wrapper Ends ----------------------------------->



    <!-------------------------------- Content Wrapper Starts ---------------------------------->
    <div id="content-wrapper">

