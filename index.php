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
            <a href="index.php">Hotel</a>
          </div>
          <div class="col-4 col-lg-6 d-flex justify-content-end">
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
                        <li class="active"><a href="index.php">Home</a></li>
                        <li><a href="rooms.php">Rooms</a></li>
                        <li><a href="contact.php">Contact</a></li>
                        <li><a href="reservation.php">Reservation</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </nav>
            </div>
          </div><?php 
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
          <h4><a href="./user/logout-user.php" class="text-white">Logout</a></h4> 
          </div>

          
          <?php
          }
          else
          {
            ?>
            <div class="col-1 col-lg-1 mb-3  text-white d-flex justify-content-end">
            <h4> <a href="./user/login-user.php" class="text-white"> Login</a></h4> 
          </div>
          <div class="col-1 col-lg-1 mb-3  text-white d-flex justify-content-end">
            <h4> <a href="./user/signup-user.php" class="text-white"> Signup</a></h4> 
          </div>
            <?php
          }
          
          ?>
        </div>
      </div>
    </header>
    

    <section class="site-hero overlay" data-stellar-background-ratio="1">
      <video id="myVideo" autoplay loop muted>
        <source src='./video/video.mp4'' type='video/mp4' />
      </video>

      <div class="container">
        <div
          class="row site-hero-inner justify-content-center align-items-center"
        >
          <div class="col-md-10 text-center" data-aos="fade-up">
            <span class="custom-caption text-uppercase text-white d-block mb-3"
              >Welcome To 5
              <span class="fa fa-star text-primary"></span> Hotel</span
            >
            <h1 class="heading">A Best Place To Stay</h1>
          </div>
        </div>
      </div>
    </section>
   

    <section class="section bg-image overlay">
      <div class="container tuni" data-stellar-background-ratio="0.5">
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
                    Reservation
                  </button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>

    <section class="py-5 bg-image overlay">
      <div class="container">
        <div class="row align-items-center">
          <div
            class="col-md-12 col-lg-7 ml-auto order-lg-2 position-relative mb-5"
            data-aos="fade-up"
          >
            <figure class="img-absolute">
              <img src="images/customer_3.jpg" alt="Image" class="img-fluid" />
            </figure>
            <img src="images/img_1.jpg" alt="Image" class="img-fluid rounded" />
          </div>
          <div class="col-md-12 col-lg-4 order-lg-1" data-aos="fade-up">
            <h2 class="heading">Welcome!</h2>
            <div class="backg">
              <h4 class="mb-4 text1">
                We welcome you to our facility and send gifts for both. We hope
                you would have a pleasant stay here and enjoy the offers during
                your reside.Hope you would love the ambience. The facilities
                available are the best in class and we look forward to your
                pleasant stay.
              </h4>
            </div>
            <p id="link1">
              <a
                href="https://www.youtube.com/watch?v=rFlsNu76bdQ"
                data-fancybox
                class="text-uppercase letter-spacing-1"
                >See video</a
              >
            </p>
          </div>
        </div>
      </div>
    </section>

    <section class="section bg-image overlay">
      <div class="container">
        <div class="row justify-content-center text-center mb-5">
          <div class="sec bg-transparent mb-0" data-aos="fade-up">
            <div class="container1">
              <div class="row justify-content-center text-center">
                <div class="col-md-7 py-5">
                  <h2 class="heading" id="Headroom" data-aos="fade-up">
                    Rooms &amp; Suites
                  </h2>
                  <p
                    id="child-headroom"
                    data-aos="fade-up"
                    data-aos-delay="100"
                  >
                    A secluded haven for romantics, adventurers, and the
                    mindful; Our luxury resort offers the ultimate private
                    retreat. A place where time slows down, connecting you with
                    vibrant mother nature and offering rejuvenation. The
                    new,state-of-the-art wellness center Lembah Spa has an
                    extensive menu of holistic treatments and fitness center
                    with a squash court.
                  </p>
                </div>
              </div>
              <div
                class="row card1"
                data-aos="fade-up"
                data-aos-duration="2000"
              >
                <div class="content1">
                  <div class="imgBx1">
                    <a href="rooms.php"> <img src="images/img_6.jpg" / ></a>
                  </div>
                  <div class="contentBx1 bg-dark2 rounded">Single Room</div>
                </div>
                <p class="sci1 bg-dark2 rounded">BDT 7200 \ Night</p>
              </div>
              <div class="card1" data-aos="fade-up" data-aos-duration="2000">
                <div class="content1">
                  <div class="imgBx1">
                    <a href="rooms.php"> <img src="images/img_3.jpg" / ></a>
                  </div>
                  <div class="contentBx1 bg-dark2 rounded">Family Room</div>
                </div>
                <p class="sci1 bg-dark2 rounded">BDT 9600 \ Night</p>
              </div>
              <div class="card1" data-aos="fade-up" data-aos-duration="2000">
                <div class="content1">
                  <div class="imgBx1">
                    <a href="rooms.php"> <img src="images/img_4.jpg" / ></a>
                  </div>
                  <div class="contentBx1 bg-dark2 rounded">
                    Predential Suits
                  </div>
                </div>
                <p class="sci1 bg-dark2 rounded">BDT 20000 \ Night</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="section slider-section bg-dark">
      <div class="container">
        <div class="row justify-content-center text-center mb-5">
          <div class="col-md-7">
            <h2 class="heading" data-aos="fade-up">Photos</h2>
            <p id="ptext" data-aos="fade-up" data-aos-delay="100">
              Our villas are more than a ‘room with a view’ – We provide the
              ultimate luxury experience from the moment you step through the
              hand carved timber doors. Step into the premium luxury villas ,
              some designed perfectly for couples and others for families.
              Unique to All villas, all 40 rooms have heated pools to ensure
              ultimate relaxation any time of day.
            </p>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div
              class="home-slider major-caousel owl-carousel mb-5"
              data-aos="fade-up"
              data-aos-delay="200"
            >
              <div class="slider-item">
                <a
                  href="images/slider-1.jpg"
                  data-fancybox="images"
                  data-caption="Caption for this image"
                  ><img
                    src="images/photos_5.jpg"
                    alt="Image placeholder"
                    class="img-fluid"
                /></a>
              </div>
              <div class="slider-item">
                <a
                  href="images/slider-2.jpg"
                  data-fancybox="images"
                  data-caption="Caption for this image"
                  ><img
                    src="images/photos_2.jpg"
                    alt="Image placeholder"
                    class="img-fluid"
                /></a>
              </div>
              <div class="slider-item">
                <a
                  href="images/slider-3.jpg"
                  data-fancybox="images"
                  data-caption="Caption for this image"
                  ><img
                    src="images/photos_4.jpeg"
                    alt="Image placeholder"
                    class="img-fluid"
                /></a>
              </div>
              <div class="slider-item">
                <a
                  href="images/slider-4.jpg"
                  data-fancybox="images"
                  data-caption="Caption for this image"
                  ><img
                    src="images/slider-4.jpg"
                    alt="Image placeholder"
                    class="img-fluid"
                /></a>
              </div>
              <div class="slider-item">
                <a
                  href="images/slider-5.jpg"
                  data-fancybox="images"
                  data-caption="Caption for this image"
                  ><img
                    src="images/slider-5.jpg"
                    alt="Image placeholder"
                    class="img-fluid"
                /></a>
              </div>
              <div class="slider-item">
                <a
                  href="images/slider-6.jpg"
                  data-fancybox="images"
                  data-caption="Caption for this image"
                  ><img
                    src="images/slider-6.jpg"
                    alt="Image placeholder"
                    class="img-fluid"
                /></a>
              </div>
              <div class="slider-item">
                <a
                  href="images/slider-7.jpg"
                  data-fancybox="images"
                  data-caption="Caption for this image"
                  ><img
                    src="images/photos_6.jpg"
                    alt="Image placeholder"
                    class="img-fluid"
                /></a>
              </div>
            </div>
            <!-- END slider -->
          </div>
        </div>
      </div>
    </section>
    <!-- END section -->

    <section
      class="section bg-image overlay"
      style="background-image: url('images/hero_5.jpg')"
    >
      <div class="container">
        <div class="row justify-content-center text-center mb-5">
          <div class="col-md-9">
            <h2 class="heading text-white" data-aos="fade">
              Our Restaurant Menu
            </h2>
            <p
              class="text-white"
              id="menutext"
              data-aos="fade"
              data-aos-delay="100"
            >
              One of pre-eminent dining destinations, Our Hotel is celebrated as
              much for its exceptional quality food and drink as its beautiful
              private pool villas. From the vibrant, all-day dining restaurant
              and bar of Cascades, which overlooks the lush jungle valley; to
              fine dining at its best with the grand Apéritif restaurant and
              bar, which transports you back to a bygone era through its
              art-deco design. In 2020, Apéritif Restaurant & Bar was awarded
              Best Restaurant at the World Culinary Awards. For late night
              treats or an early morning breakfast, an extensive 24 hours
              in-villa dining menu is also available. Discover our dining
              options below.
            </p>
          </div>
        </div>
        <div class="food-menu-tabs" data-aos="fade">
          <ul class="nav nav-tabs mb-5" id="myTab" role="tablist">
            <li class="nav-item">
              <a
                class="nav-link active letter-spacing-2"
                id="mains-tab"
                data-toggle="tab"
                href="#mains"
                role="tab"
                aria-controls="mains"
                aria-selected="true"
                >Mains</a
              >
            </li>
            <li class="nav-item">
              <a
                class="nav-link letter-spacing-2"
                id="desserts-tab"
                data-toggle="tab"
                href="#desserts"
                role="tab"
                aria-controls="desserts"
                aria-selected="false"
                >Desserts</a
              >
            </li>
            <li class="nav-item">
              <a
                class="nav-link letter-spacing-2"
                id="drinks-tab"
                data-toggle="tab"
                href="#drinks"
                role="tab"
                aria-controls="drinks"
                aria-selected="false"
                >Drinks</a
              >
            </li>
          </ul>
          <div class="tab-content py-5" id="myTabContent">
            <div
              class="tab-pane fade show active text-left"
              id="mains"
              role="tabpanel"
              aria-labelledby="mains-tab"
            >
              <div class="row">
                <div class="col-md-6">
                  <div class="food-menu mb-5">
                    <span class="d-block text-primary h4 mb-3">BDT 1600</span>
                    <h3 class="text-white">
                      <a href="#" class="text-white">Murgh Tikka Masala</a>
                    </h3>
                    <p class="text-white text-opacity-7">
                      Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                      Optio non quis mollitia. Voluptates, saepe quibusdam?
                    </p>
                  </div>
                  <div class="food-menu mb-5">
                    <span class="d-block text-primary h4 mb-3">BDT 2000</span>
                    <h3 class="text-white">
                      <a href="#" class="text-white">Fish Moilee</a>
                    </h3>
                    <p class="text-white text-opacity-7">
                      Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                      Optio non quis mollitia. Voluptates, saepe quibusdam?
                    </p>
                  </div>
                  <div class="food-menu mb-5">
                    <span class="d-block text-primary h4 mb-3">BDT 1200</span>
                    <h3 class="text-white">
                      <a href="#" class="text-white">Safed Gosht</a>
                    </h3>
                    <p class="text-white text-opacity-7">
                      Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                      Optio non quis mollitia. Voluptates, saepe quibusdam?
                    </p>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="food-menu mb-5">
                    <span class="d-block text-primary h4 mb-3">BDT 500</span>
                    <h3 class="text-white">
                      <a href="#" class="text-white">French Toast Combo</a>
                    </h3>
                    <p class="text-white text-opacity-7">
                      Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                      Optio non quis mollitia. Voluptates, saepe quibusdam?
                    </p>
                  </div>
                  <div class="food-menu mb-5">
                    <span class="d-block text-primary h4 mb-3">BDT 350</span>
                    <h3 class="text-white">
                      <a href="#" class="text-white">Vegie Omelet</a>
                    </h3>
                    <p class="text-white text-opacity-7">
                      Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                      Optio non quis mollitia. Voluptates, saepe quibusdam?
                    </p>
                  </div>
                  <div class="food-menu mb-5">
                    <span class="d-block text-primary h4 mb-3">BDT 200</span>
                    <h3 class="text-white">
                      <a href="#" class="text-white"
                        >Chorizo &amp; Egg Omelet</a
                      >
                    </h3>
                    <p class="text-white text-opacity-7">
                      Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                      Optio non quis mollitia. Voluptates, saepe quibusdam?
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <!-- .tab-pane -->

            <div
              class="tab-pane fade text-left"
              id="desserts"
              role="tabpanel"
              aria-labelledby="desserts-tab"
            >
              <div class="row">
                <div class="col-md-6">
                  <div class="food-menu mb-5">
                    <span class="d-block text-primary h4 mb-3">BDT 3000</span>
                    <h3 class="text-white">
                      <a href="#" class="text-white">Apple Strudel</a>
                    </h3>
                    <p class="text-white text-opacity-7">
                      Far far away, behind the word mountains, far from the
                      countries Vokalia and Consonantia, there live the blind
                      texts.
                    </p>
                  </div>
                  <div class="food-menu mb-5">
                    <span class="d-block text-primary h4 mb-3">BDT 2000</span>
                    <h3 class="text-white">
                      <a href="#" class="text-white">Sticky Toffee Pudding</a>
                    </h3>
                    <p class="text-white text-opacity-7">
                      Far far away, behind the word mountains, far from the
                      countries Vokalia and Consonantia, there live the blind
                      texts.
                    </p>
                  </div>
                  <div class="food-menu mb-5">
                    <span class="d-block text-primary h4 mb-3">BDT 1650</span>
                    <h3 class="text-white">
                      <a href="#" class="text-white">Pecan</a>
                    </h3>
                    <p class="text-white text-opacity-7">
                      Far far away, behind the word mountains, far from the
                      countries Vokalia and Consonantia, there live the blind
                      texts.
                    </p>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="food-menu mb-5">
                    <span class="d-block text-primary h4 mb-3">BDT 1000</span>
                    <h3 class="text-white">
                      <a href="#" class="text-white">Ice Cream Sundae</a>
                    </h3>
                    <p class="text-white text-opacity-7">
                      Far far away, behind the word mountains, far from the
                      countries Vokalia and Consonantia, there live the blind
                      texts.
                    </p>
                  </div>
                  <div class="food-menu mb-5">
                    <span class="d-block text-primary h4 mb-3">BDT 460</span>
                    <h3 class="text-white">
                      <a href="#" class="text-white">Pancakes</a>
                    </h3>
                    <p class="text-white text-opacity-7">
                      Far far away, behind the word mountains, far from the
                      countries Vokalia and Consonantia, there live the blind
                      texts.
                    </p>
                  </div>

                  <div class="food-menu mb-5">
                    <span class="d-block text-primary h4 mb-3">BDT 300</span>
                    <h3 class="text-white">
                      <a href="#" class="text-white">Banana Split</a>
                    </h3>
                    <p class="text-white text-opacity-7">
                      Far far away, behind the word mountains, far from the
                      countries Vokalia and Consonantia, there live the blind
                      texts.
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <!-- .tab-pane -->
            <div
              class="tab-pane fade text-left"
              id="drinks"
              role="tabpanel"
              aria-labelledby="drinks-tab"
            >
              <div class="row">
                <div class="col-md-6">
                  <div class="food-menu mb-5">
                    <span class="d-block text-primary h4 mb-3">BDT 6000</span>
                    <h3 class="text-white">
                      <a href="#" class="text-white">Orange Fanta</a>
                    </h3>
                    <p class="text-white text-opacity-7">
                      Far far away, behind the word mountains, far from the
                      countries Vokalia and Consonantia, there live the blind
                      texts.
                    </p>
                  </div>

                  <div class="food-menu mb-5">
                    <span class="d-block text-primary h4 mb-3">BDT 5600</span>
                    <h3 class="text-white">
                      <a href="#" class="text-white"
                        >Lemon, Lime &amp; Bitters</a
                      >
                    </h3>
                    <p class="text-white text-opacity-7">
                      Far far away, behind the word mountains, far from the
                      countries Vokalia and Consonantia, there live the blind
                      texts.
                    </p>
                  </div>
                  <div class="food-menu mb-5">
                    <span class="d-block text-primary h4 mb-3">BDT 2000</span>
                    <h3 class="text-white">
                      <a href="#" class="text-white">Sparkling Mineral Water</a>
                    </h3>
                    <p class="text-white text-opacity-7">
                      Far far away, behind the word mountains, far from the
                      countries Vokalia and Consonantia, there live the blind
                      texts.
                    </p>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="food-menu mb-5">
                    <span class="d-block text-primary h4 mb-3">BDT 1500</span>
                    <h3 class="text-white">
                      <a href="#" class="text-white">Lemonade, Lemon Squash</a>
                    </h3>
                    <p class="text-white text-opacity-7">
                      Far far away, behind the word mountains, far from the
                      countries Vokalia and Consonantia, there live the blind
                      texts.
                    </p>
                  </div>
                  <div class="food-menu mb-5">
                    <span class="d-block text-primary h4 mb-3">BDT 600</span>
                    <h3 class="text-white">
                      <a href="#" class="text-white"
                        >Coke, Diet Coke, Coke Zero</a
                      >
                    </h3>
                    <p class="text-white text-opacity-7">
                      Far far away, behind the word mountains, far from the
                      countries Vokalia and Consonantia, there live the blind
                      texts.
                    </p>
                  </div>
                  <div class="food-menu mb-5">
                    <span class="d-block text-primary h4 mb-3">BDT 450</span>
                    <h3 class="text-white">
                      <a href="#" class="text-white">Spring Water</a>
                    </h3>
                    <p class="text-white text-opacity-7">
                      Far far away, behind the word mountains, far from the
                      countries Vokalia and Consonantia, there live the blind
                      texts.
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <!-- .tab-pane -->
          </div>
        </div>
      </div>
    </section>

    <!-- END section -->
    <section class="section slider-section bg-dark">
      <div class="container">
        <div class="row justify-content-center text-center mb-5">
          <div class="col-md-7">
            <h2 class="heading" data-aos="fade-up">People Says</h2>
          </div>
        </div>
        <div class="row">
          <div
            class="js-carousel-2 owl-carousel mb-5"
            data-aos="fade-up"
            data-aos-delay="200"
          >
            <div class="testimonial text-center slider-item">
              <div class="author-image mb-3">
                <img
                  src="images/customer_1.jfif"
                  alt="Image placeholder"
                  class="rounded-circle mx-auto"
                />
              </div>
              <blockquote>
                <p class="testtext">
                  &ldquo;They were extremely accommodating and allowed us to
                  check in early at like 10am. We got to hotel super early and I
                  didn’t wanna wait. So this was a big plus. The sevice was
                  exceptional as well. Would definitely send a friend
                  there..&rdquo;
                </p>
              </blockquote>
              <p class="customertext"><em>&mdash;Hilary clinton </em></p>
            </div>

            <div class="testimonial text-center slider-item">
              <div class="author-image mb-3">
                <img
                  src="images/customer_3.jpg"
                  alt="Image placeholder"
                  class="rounded-circle mx-auto"
                />
              </div>
              <blockquote>
                <p class="testtext">
                  &ldquo;Even the all-powerful Pointing has no control about the
                  blind texts it is an almost unorthographic life One day
                  however a small line of blind text by the name of Lorem Ipsum
                  decided to leave for the far World of Grammar.&rdquo;
                </p>
              </blockquote>
              <p class="customertext"><em>&mdash;Shafayet Tazoar </em></p>
            </div>

            <div class="testimonial text-center slider-item">
              <div class="author-image mb-3">
                <img
                  src="images/customer_2.png"
                  alt="Image placeholder"
                  class="rounded-circle mx-auto"
                />
              </div>
              <blockquote>
                <p class="testtext">
                  &ldquo;The best hotel I’ve ever been privileged enough to stay
                  at. Gorgeous building, and it only gets more breathtaking when
                  you walk in. High quality rooms (there was even a tv by the
                  shower), and high quality service..&rdquo;
                </p>
              </blockquote>
              <p class="customertext"><em>&mdash;Faisal</em></p>
            </div>

            <div class="testimonial text-center slider-item">
              <div class="author-image mb-3">
                <img
                  src="images/person_1.jfif"
                  alt="Image placeholder"
                  class="rounded-circle mx-auto"
                />
              </div>
              <blockquote>
                <p class="testtext">
                  &ldquo; The rooms were clean, very comfortable, and the staff
                  amazing. They went over and beyond to help make our stay
                  enjoyable. I highly recommend this hotel for anyone For
                  Beverage.&rdquo;
                </p>
              </blockquote>
              <p class="customertext"><em>&mdash; Arnab Saha Swachha</em></p>
            </div>

            <div class="testimonial text-center slider-item">
              <div class="author-image mb-3">
                <img
                  src="images/person_2.jfif"
                  alt="Image placeholder"
                  class="rounded-circle mx-auto"
                />
              </div>
              <blockquote>
                <p class="testtext">
                  &ldquo;I have stayed at dozen of hotels in (L). This was on
                  the top of the list of best stays/experiences ever. Staff was
                  very hospitable and there for every need of mine. Thank you so
                  much..&rdquo;
                </p>
              </blockquote>
              <p class="customertext"><em>&mdash; rafia saad</em></p>
            </div>

            <div class="testimonial text-center slider-item">
              <div class="author-image mb-3">
                <img
                  src="images/person_3.jfif"
                  alt="Image placeholder"
                  class="rounded-circle mx-auto"
                />
              </div>
              <blockquote>
                <p class="testtext">
                  &ldquo;Excellent property and very convenient USC activities.
                  Front desk staff is extremely efficient, pleasant and helpful.
                  Property is clean and has a fantastic old time charm..&rdquo;
                </p>
              </blockquote>
              <p class="customertext"><em>&mdash;farzina Dipto</em></p>
            </div>
          </div>
          <!-- END slider -->
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
