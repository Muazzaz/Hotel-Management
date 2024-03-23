<?php include('./config/connectiondb.php');

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Project Hotel</title>
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="" />
    <link
      rel="stylesheet"
      type="text/css"
      href="//fonts.googleapis.com/css?family=|Roboto+Sans:400,700|Playfair+Display:400,700"
    />

    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/animate.css" />
    <link rel="stylesheet" href="css/owl.carousel.min.css" />
    <link rel="stylesheet" href="css/aos.css" />
    <link rel="stylesheet" href="css/bootstrap-datepicker.css" />
    <link rel="stylesheet" href="css/jquery.timepicker.css" />
    <link rel="stylesheet" href="css/fancybox.min.css" />

    <link rel="stylesheet" href="fonts/ionicons/css/ionicons.min.css" />
    <link rel="stylesheet" href="fonts/fontawesome/css/font-awesome.min.css" />

    
    <link rel="stylesheet" href="css/style.css" />
  </head>
  <e>
    <header class="site-header js-site-header">
      <div class="container-fluid">
        <div class="row align-items-center">
          <div class="col-6 col-lg-4 site-logo" data-aos="fade">
            <a href="index.html">R Hotel</a>
          </div>
          <div class="col-4 col-lg-6">
            <div class="site-menu-toggle js-site-menu-toggle" data-aos="fade">
              <span></span>
              <span></span>
              <span></span>
            </div>
          

            <div class="site-navbar js-site-navbar">
              <nav role="navigation">
                <div class="container">
                  <div class="row full-height align-items-center">
                    <div class="col-md-6 mx-auto">
                      <ul class="list-unstyled menu">
                        <li><a href="index.php">Home</a></li>
                        <li class="active"><a href="rooms.php">Rooms</a></li>
                        
                        <li><a href="contact.php">Contact</a></li>
                        <li><a href="reservation.php">Reservation</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </nav>
            </div>
          </div>
          <?php 
          if (isset($_SESSION['login_user_success']))
          {
            ?>
           <div class="col-1 col-lg-1 mb-3  text-white d-flex justify-content-end"> 
            <h4> <a href="user_intro.php" class="text-user">
            <?php
            echo $_SESSION['username_user'];
          ?>
          </a></h4> 
          </div>
          <div class="col-1 col-lg-1 mb-3  text-white d-flex justify-content-end">
          <h4><a href="./logout-user.php" class="text-white">Logout</a></h4> 
          </div>

          
          <?php
          }
          else
          {
            ?>
            <div class="col-1 col-lg-1 mb-3  text-white d-flex justify-content-end">
            <h4> <a href="./login-user.php" class="text-white"> login</a></h4> 
          </div>
          <div class="col-1 col-lg-1 mb-3  text-white d-flex justify-content-end">
            <h4> <a href="./signup-user.php" class="text-white"> Signup</a></h4> 
          </div>
            <?php
          }
          
          ?>
        </div>
      </div>
    </header>
    

    <section
      class="site-hero inner-page overlay"
      style="background-image: url(images/slider_52.jpg)"
      data-stellar-background-ratio="0.5"
    >
      <div class="container">
        <div
          class="row site-hero-inner justify-content-center align-items-center"
        >
          <div class="col-md-10 text-center" data-aos="fade">
            <h1 class="heading mb-3">Rooms</h1>
            <ul class="custom-breadcrumbs mb-4">
              <li><a href="index.php">Home</a></li>
              <li>&bullet;</li>
              <li>Rooms</li>
            </ul>
          </div>
        </div>
      </div>

     
    </section>
    

    <section class="section pb-4 bg bg-dark">
      <div class="container">
        <div class="row check-availabilty" id="next">
          <div class="block-32" data-aos="fade-up" data-aos-offset="-200">
            <form action="#">
              <div class="row">
                <div class="col-md-6 mb-3 mb-lg-0 col-lg-3">
                  <label for="checkin_date" class="font-weight-bold text-black"
                    >Check In</label
                  >
                  <div class="field-icon-wrap">
                    <div class="icon"><span class="icon-calendar"></span></div>
                    <input type="text" id="checkin_date" class="form-control" />
                  </div>
                </div>
                <div class="col-md-6 mb-3 mb-lg-0 col-lg-3">
                  <label for="checkout_date" class="font-weight-bold text-black"
                    >Check Out</label
                  >
                  <div class="field-icon-wrap">
                    <div class="icon"><span class="icon-calendar"></span></div>
                    <input
                      type="text"
                      id="checkout_date"
                      class="form-control"
                    />
                  </div>
                </div>
                <div class="col-md-6 mb-3 mb-md-0 col-lg-3">
                  <div class="row">
                    <div class="col-md-6 mb-3 mb-md-0">
                      <label for="adults" class="font-weight-bold text-black"
                        >Adults</label
                      >
                      <div class="field-icon-wrap">
                        <div class="icon">
                          <span class="ion-ios-arrow-down"></span>
                        </div>
                        <select name="" id="adults" class="form-control">
                          <option value="">1</option>
                          <option value="">2</option>
                          <option value="">3</option>
                          <option value="">4+</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-md-6 mb-3 mb-md-0">
                      <label for="children" class="font-weight-bold text-black"
                        >Children</label
                      >
                      <div class="field-icon-wrap">
                        <div class="icon">
                          <span class="ion-ios-arrow-down"></span>
                        </div>
                        <select name="" id="children" class="form-control">
                          <option value="">0</option>
                          <option value="">1</option>
                          <option value="">2</option>
                          <option value="">3</option>
                          <option value="">4+</option>
                        </select>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-lg-3 align-self-end">
                  <button class="btn btn-primary btn-block text-white">
                    Check Availabilty
                  </button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>

    <section class="section bg-dark mb-5 mt-0">
      <div class="row ">
      <div class="gallery">
        <a href="reservation.php" class="gallery-link" title="Order Now">
            <img src="images/img_5.jpg" class="room-img" />
            <h3 class="room-name bg-dark2 rounded">Single Suits</h3>
            <p class="room-description">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa
                commodi possimus iure hic excepturi. Corporis!
            </p>
            <p class="room_price bg-dark2 rounded">
              BDT 5000/Night
            </p>
        </a>
        <a href="reservation.php" class="gallery-link" title="Order Now">
            <img src="images/slider-5.jpg" class="room-img" />
            <h3 class="room-name bg-dark2 rounded">Family Suits</h3>
            <p class="room-description">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa
                commodi possimus iure hic excepturi. Corporis!
            </p>
            <p class="room_price bg-dark2 rounded">
              BDT 8000/Night
            </p>
        </a>
        <a href="reservation.php" class="gallery-link" title="Order Now">
            <img src="images/img_4.jpg" class="room-img" />
            <h3 class="room-name bg-dark2 rounded">Predesntial Suits</h3>
            <p class="room-description">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa
                commodi possimus iure hic excepturi. Corporis!
            </p>
            <p class="room_price bg-dark2 rounded">
              BDT 20000/Night
            </p>
        </a>
        <a href="reservation.php" class="gallery-link" title="Order Now">
          <img src="images/proom_2.jpg" class="room-img" />
          <h3 class="room-name bg-dark2 rounded">Couple villa</h3>
          <p class="room-description">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa
              commodi possimus iure hic excepturi. Corporis!
          </p>
          <p class="room_price bg-dark2 rounded">
            BDT 10000/Night
          </p>
      </a>
        <a href="reservation.php" class="gallery-link" title="Order Now">
            <img src="images/img_6.jpg" class="room-img" />
            <h3 class="room-name bg-dark2 rounded">Single Room</h3>
            <p class="room-description">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa
                commodi possimus iure hic excepturi. Corporis!
            </p>
            <p class="room_price bg-dark2 rounded">
              BDT 2000/Night
            </p>
        </a>
       
        <a href="reservation.php" class="gallery-link" title="Order Now">
            <img src="images/img_3.jpg" class="room-img" />
            <h3 class="room-name bg-dark2 rounded">Family villa</h3>
            <p class="room-description">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa
                commodi possimus iure hic excepturi. Corporis!
            </p>
            <p class="room_price bg-dark2 rounded">
              BDT 4500/Night
            </p>
        </a>
    </div>
  </div>
    </section>
    

    <section class="section bg-light">
      <div class="container">
        <div class="row justify-content-center text-center mb-5">
          <div class="col-md-7">
            <h2 class="heading offertext" data-aos="fade">Great Offers</h2>
            <p data-aos="fade">
              From luxury getaways, last minute staycations
              and family holidays to romantic dinners at our 
              incredible restaurants, we have a wide range of
              fantastic packages and offers available for you.
               you want to relax and recuperate or spend time 
               exploring our resort with loved ones, there’s 
               something for everyone at Our Hotel.
            </p>
          </div>
        </div>

        <div
          class="site-block-half d-block d-lg-flex bg-white"
          data-aos="fade"
          data-aos-delay="100"
        >
          <a
            href="#"
            class="image d-block bg-image-2"
            style="background-image: url('images/img_1.jpg')"
          ></a>
          <div class="text">
            <span class="d-block mb-4"
              ><span class="display-4 text-primary">BDT 3500</span>
              <span class="text-uppercase letter-spacing-2">/ per night</span>
            </span>
            <h2 class="mb-4 text-black">Family Room</h2>
            <p>
              Far far away, behind the word mountains, far from the countries
              Vokalia and Consonantia, there live the blind texts. Separated
              they live in Bookmarksgrove right at the coast of the Semantics, a
              large language ocean.
            </p>
            <p><a href="reservation.php" class="btn btn-primary text-white">Book Now</a></p>
          </div>
        </div>
        <div
          class="site-block-half d-block d-lg-flex bg-white"
          data-aos="fade"
          data-aos-delay="200"
        >
          <a
            href="#"
            class="image d-block bg-image-2 order-2"
            style="background-image: url('images/slider-6.jpg')"
          ></a>
          <div class="text order-1">
            <span class="d-block mb-4"
              ><span class="display-4 text-primary">BDT 15000</span>
              <span class="text-uppercase letter-spacing-2">/ per night</span>
            </span>
            <h2 class="mb-4 text-black">Presidential Room</h2>
            <p>
              Far far away, behind the word mountains, far from the countries
              Vokalia and Consonantia, there live the blind texts. Separated
              they live in Bookmarksgrove right at the coast of the Semantics, a
              large language ocean.
            </p>
            <p><a href="reservation.php" class="btn btn-primary text-white">Book Now</a></p>
          </div>
        </div>
      </div>
    </section>

    <section
      class="section bg-image overlay"
      style="background-image: url('images/hero_4.jpg')"
    >
      <div class="container">
        <div class="row align-items-center">
          <div
            class="col-12 col-md-6 text-center mb-4 mb-md-0 text-md-left"
            data-aos="fade-up"
          >
            <h2 class="text-white font-weight-bold">
              A Best Place To Stay. Reserve Now!
            </h2>
          </div>
          <div
            class="col-12 col-md-6 text-center text-md-right"
            data-aos="fade-up"
            data-aos-delay="200"
          >
            <a
              href="reservation.php"
              class="btn btn-outline-white-primary py-3 text-white px-5"
              >Reserve Now</a
            >
          </div>
        </div>
      </div>
    </section>

    <footer class="section slider-section bg-dark">
      <div class="container">
        <div class="row mb-4">
          <div class="col-md-6 mb-5">
            <ul class="list-unstyled link">
              <li class="my-3"><a href="about.php">About Us</a></li>
              <li class="my-3"><a href="rooms.php">The Rooms &amp; Suites</a></li>
              <li class="my-3"><a href="contact.php">Contact Us</a></li>
              <li class="my-3"><a href="reservation.php">Reservation</a></li>
            </ul>
          </div>

          <div class="col-md-6 mb-5 pr-md-5 contact-info">
            <p>
              <span class="d-block"
                ><span class="ion-ios-location h5 mr-3 text-primary"></span
                >Address:</span
              >
              <span>
                RUET, <br/>
                Rajshahi <br />
                Bangladesh</span
              >
            </p>
            <p>
              <span class="d-block"
                ><span class="ion-ios-telephone h5 mr-3 text-primary"></span
                >Phone:</span
              >
              <span> 01405869820</span>
            </p>
            <p>
              <span class="d-block"
                ><span class="ion-ios-email h5 mr-3 text-primary"></span
                >Email:</span
              >
              <span> 1810038@student.ruet.ac.bd</span>
            </p>
          </div>
          </div>
          <div class="row">
            <p class="col-md-4 copyrighttext">
              Created By Hasan Al Muazzaz @
              <script>
                document.write(new Date().getFullYear());
              </script>
            </p>

            <p class="col-md-4  text-right social">
              <a href="#"><span class="fa fa-tripadvisor mx-2 "></span></a>
              <a href="#"><span class="fa fa-facebook mx-2"></span></a>
              <a href="#"><span class="fa fa-twitter mx-2"></span></a>
              <a href="#"><span class="fa fa-linkedin mx-2"></span></a>
              <a href="#"><span class="fa fa-vimeo mx-2"></span></a>
            </p>
          </div>
        </div>
      </div>
    </footer>

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/jquery-migrate-3.0.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.stellar.min.js"></script>
    <script src="js/jquery.fancybox.min.js"></script>

    <script src="js/aos.js"></script>

    <script src="js/bootstrap-datepicker.js"></script>
    <script src="js/jquery.timepicker.min.js"></script>

    <script src="js/main.js"></script>
  </body>
</html>
