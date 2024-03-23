<?php include('../config/connectiondb.php');

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

    <link rel="stylesheet" href="../css/bootstrap.min.css" />
    <link rel="stylesheet" href="../css/animate.css" />
    <link rel="stylesheet" href="../css/owl.carousel.min.css" />
    <link rel="stylesheet" href="../css/aos.css" />
    <link rel="stylesheet" href="../css/bootstrap-datepicker.css" />
    <link rel="stylesheet" href="../css/jquery.timepicker.css" />
    <link rel="stylesheet" href="../css/fancybox.min.css" />

    <link rel="stylesheet" href="fonts/ionicons/css/ionicons.min.css" />
    <link rel="stylesheet" href="fonts/fontawesome/css/font-awesome.min.css" />

    
    <link rel="stylesheet" href="../css/manage_admin.css" />
  </head>
  <body>
    <header class="site-header js-site-header">
      <div class="container-fluid">
        <div class="row align-items-center">
          <div class="col-6 col-lg-4 site-logo" data-aos="fade">
            <a href="../index.html">Hotel</a>
          </div>
          <div class="col-6 col-lg-8">
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
                      <li class="active"><a href="../index.html">admin</a></li>
                        <li><a href="../rooms.html">order</a></li>
                        <li><a href="../rooms.html">food</a></li>                       
                        <li >
                          <a href="../contact.html">room</a>
                        </li>
                        <li><a href="../reservation.html">offer</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </header>
    

   
    

    <section class="section site-hero inner-page overlay" data-aos="fade-up" data-aos-delay="100" id="next" 
    style="background-image: url(../images/hero_4.jpg)"  data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-6 " data-aos="fade-up" data-aos-delay="500">
            <form
              action="#"
              method="post"
              class="p-md-5 p-4 mb-5 mt-5 login_form"
            >
          
              
              <div class="row">
                <div class="col-md-12 text-center " data-aos="fade-up" data-aos-delay="300">
                <h1 class="heading mb-3 text-login font-weight-bold">Log in</h1>
                  <br>
                  <br>
                  
                </div>
              </div>
<?php
              if (isset($_SESSION['login_user_not']))
                  {
                    echo $_SESSION['login_user_not'];
                    unset($_SESSION['login_user_not']);
                  } 

                  if (isset($_SESSION['invalid access']))
                  {
                    echo $_SESSION['invalid access'];
                    unset($_SESSION['invalid access']);
                  } 


    ?>         
              

              <div class="row" data-aos="fade-up" data-aos-delay="100">
                <div class="col-md-12 form-group">
                  <label class="text-login font-weight-bold" for="email"
                    >Username Or Email</label>
                  
                  <input type="text" id="email" name="username" class="form-control text-white bg-dark" placeholder="Enter your Username Or Email" />
                </div>
              </div>

              <div class="row" data-aos="fade-up" data-aos-delay="100">
              <div class="col-md-12 form-group">
              <label class="text-login font-weight-bold" for="Password"
                    >Password</label>
              <input
                    type="password"
                    name="password"
                    class="form-control border-none text-white bg-dark"
                    placeholder="Password"
                    
                     required
                  />
                  </div>
              </div>
              
              

              

             
               <br>
               
              
              
               <div class="row" data-aos="fade-up" data-aos-delay="100">
                <div class="col-md-6 form-group">
                  <input
                    type="submit" value="Sign in" name="submit" class="btnup4 text-black py-3 px-5 font-weight-bold"
                  />
                </div>
                <div class="row align-items-end">
              <div class="col-md-12 " data-aos="fade-up" data-aos-delay="300">
              <a href="#" class="btnup_already text-login ">Forgot your Password?</a> 
              
                 
                 
              </div>
              </div>
              
              </div>
              <br>
              <div class="row">
              <div class="col-md-12  d-flex justify-content-end " data-aos="fade-up" data-aos-delay="300">
              <a href="./signup-user.php" class="btnup_already text-login ">New user?</a> 
              
                 
                 
              </div>
              </div>
            </form>
          </div>
      </div>
     </div>
    </section>

    

    

    <footer class="section slider-section bg-dark">
      <div class="container">
        <div class="row mb-4">
          <div class="col-md-6 mb-5">
            <ul class="list-unstyled link">
              <li class="my-3"><a href="about.html">About Us</a></li>
              <li class="my-3"><a href="rooms.html">The Rooms &amp; Suites</a></li>
              <li class="my-3"><a href="contact.html">Contact Us</a></li>
              <li class="my-3"><a href="reservation.html">Reservation</a></li>
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
      
    </footer>

    <script src="../js/jquery-3.3.1.min.js"></script>
    <script src="../js/jquery-migrate-3.0.1.min.js"></script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/owl.carousel.min.js"></script>
    <script src="../js/jquery.stellar.min.js"></script>
    <script src="../js/jquery.fancybox.min.js"></script>

    <script src="../js/aos.js"></script>

    <script src="../js/bootstrap-datepicker.js"></script>
    <script src="../js/jquery.timepicker.min.js"></script>

    <script src="../js/main.js"></script>
  </body>
</html>

<?php 

      if(isset($_POST['submit']))
      {
        echo $username = $_POST['username'];
       echo  $pass= md5($_POST['password']);

        echo $sql="SELECT * FROM user WHERE email='$username' or name='$username';"; //;AND admin.password='$pass';"

        $res= mysqli_query($con,$sql) or die('Error: ' . mysqli_error($con));

        if($res==TRUE)
        {
          $count = mysqli_num_rows($res);

          if($count==1)
          {
              $rows=mysqli_fetch_assoc($res);
              
              if($pass==$rows['pass'])
              {
                $_SESSION['login_user_success']= '<h5 class="text-success text-center">Welcome </h5><br>';
                header('location:'.url.'index.php');
                $_SESSION['username_user']=$username;
               
              }
              else{
                $_SESSION['login_user_not']= '<h5 class="text-danger text-center">Username or Password Incorrect</h5><br>';
                header('location:'.url.'user/login-user.php');
              }
                
          }
          else{
            $_SESSION['login_user_not']= '<h5 class="text-danger text-center">User Not Found</h5><br>';
            header('location:'.url.'user/login-user.php');
          }
        }

      }
     
?>