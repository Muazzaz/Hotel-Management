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
  <body>
    <header class="site-header js-site-header">
      <div class="container-fluid">
        <div class="row align-items-center">
          <div class="col-6 col-lg-4 site-logo" data-aos="fade">
            <a href="index.php">R Hotel</a>
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
                        <li><a href="rooms.php">Rooms</a></li>
                        

                        <li class="active">
                          <a href="contact.php">Contact</a>
                        </li>
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
            <h4> <a href="./login-user.php" class="text-white"> Login</a></h4> 
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
      style="background-image: url(images/hero_4.jpg)"
      data-stellar-background-ratio="0.5"
    >
      <div class="container">
        <div
          class="row site-hero-inner justify-content-center align-items-center"
        >
          <div class="col-md-10 text-center" data-aos="fade">
            <h1 class="heading mb-3">Contact</h1>
            <ul class="custom-breadcrumbs mb-4">
              <li><a href="index.php">Home</a></li>
              <li>&bullet;</li>
              <li>Contact</li>
            </ul>
          </div>
        </div>
      </div>

    
    </section>
  

    <section class="section contact-section" id="next">
      <div class="container">
        <div class="row">
          <div class="col-md-7" data-aos="fade-up" data-aos-delay="100">
            <form
              action="#"
              method="post"
              class="bg-white p-md-5 p-4 mb-5 border"
            >
              <div class="row">
                <div class="col-md-6 form-group">
                  <label for="name">Name</label>
                  <input type="text" id="name" class="form-control" />
                </div>
                <div class="col-md-6 form-group">
                  <label for="phone">Phone</label>
                  <input type="text" id="phone" class="form-control" />
                </div>
              </div>

              <div class="row">
                <div class="col-md-12 form-group">
                  <label for="email">Email</label>
                  <input type="email" id="email" class="form-control" />
                </div>
              </div>
              <div class="row mb-4">
                <div class="col-md-12 form-group">
                  <label for="message">Write Message</label>
                  <textarea
                    name="message"
                    id="message"
                    class="form-control"
                    cols="30"
                    rows="8"
                  ></textarea>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6 form-group">
                  <input
                    type="submit"
                    value="Send Message"
                    class="btn btn-primary text-white font-weight-bold"
                  />
                </div>
              </div>
            </form>
          </div>
          <div class="col-md-5" data-aos="fade-up" data-aos-delay="200">
            <div class="row">
              <div class="col-md-10 ml-auto contact-info">
                <p>
                  <span class="d-block">Address:</span>
                  <span class="text-black">
                    RUET,Rajshahi</br>Bangladesh </span
                  >
                </p>
                <p>
                  <span class="d-block">Phone:</span>
                  <span class="text-black"> 01405869820</span>
                </p>
                <p>
                  <span class="d-block">Email:</span>
                  <span class="text-black"> 1810038@student.ruet.ac.bd</span>
                </p>
              </div>
            </div>
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
