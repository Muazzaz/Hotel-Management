<?php include('../config/connectiondb.php');
    include('./login-check.php'); ?>

    


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
            <a href="../index.html">R Hotel</a>
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
          
          <div class="col-2 col-lg-2 mb-3  text-white ">
           <h4> <a href="../admin/logout.php" class="text-white"> Logout </a></h4> 
          
        </div>
      </div>
    </header>
    

    <section
      class="site-hero inner-page overlay"
      style="background-image: url(../images/hero_4.jpg)"
      data-stellar-background-ratio="0.5"
    >
      <div class="container">
        <div
          class="row site-hero-inner justify-content-center align-items-center"
        >
          <div class="col-md-10 text-center" data-aos="fade">
            <h1 class="heading mb-3">Admin</h1>
            <ul class="custom-breadcrumbs mb-4">
              <li><a href="../index.html">Home</a></li>
              <li>&bullet;</li>
              <li>admin</li>
            </ul>
          </div>
        </div>
      </div>

     
    </section>
    

    <section class="section contact-section" data-aos="fade-up" data-aos-delay="100" id="next">
      <div class="container-fluid">
          <div class="row">
              <div class="col-md-12">
                 <h1 class="text-center">Admin List</h1> 
                 <br>
                 
                
              </div>

              

          </div>
              <?php
                  if (isset($_SESSION['add'])){
                   echo $_SESSION['add'];
                  unset($_SESSION['add']); 
                  }   
                  
                  
                  if (isset($_SESSION['delete']))
                  {
                    echo $_SESSION['delete'];
                    unset($_SESSION['delete']);
                  }  

                  if (isset($_SESSION['update']))
                  {
                    echo $_SESSION['update'];
                    unset($_SESSION['update']);
                  }  
                  if (isset($_SESSION['success_password']))
                  {
                    echo $_SESSION['success_password'];
                    unset($_SESSION['success_password']);
                  } 
                  if (isset($_SESSION['confirm_password']))
                  {
                    echo $_SESSION['confirm_password'];
                    unset($_SESSION['confirm_password']);
                  } 
                  if (isset($_SESSION['change_password']))
                  {
                    echo $_SESSION['change_password'];
                    unset($_SESSION['change_password']);
                  } 
                  if (isset($_SESSION['current_password']))
                  {
                    echo $_SESSION['current_password'];
                    unset($_SESSION['current_password']);
                  } 

                  
                  if (isset($_SESSION['add']))
                  {
                    echo $_SESSION['add'];
                    unset($_SESSION['add']);
                  }

                  if (isset($_SESSION['login']))
                  {
                    echo $_SESSION['login'];
                    unset($_SESSION['login']);
                  } 
                  

              ?>      
              <br>

          <div class="row">
              <div class="col-md-12 text-center " data-aos="fade-up" data-aos-delay="300">
              <a href="./signup.php" class="btnup">Add Admin</a> 
                 <br>
                 <br>
                
              </div>

              

          </div>
          
        <div class="row justify-content-center">
          <div class="col-md-12" data-aos="fade-up" data-aos-delay="100">
           
          <table class="table  table-dark table-bordered table-hover" id="resultsTable">
                <thead>
                  <tr class="table-info text-center text-black">
                    <th scope="col">#Sn</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Mobile No</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>

                <?php 
                      $sql= "SELECT * from admin;";
                      
                      $res= mysqli_query($con,$sql);


                      if ($res==TRUE)
                      {
                          $count= mysqli_num_rows($res);

                          if ($count>0)
                          {
                              while($rows=mysqli_fetch_assoc($res))
                              {
                                $id= $rows['id'];
                                $Full_Name= $rows['name'];
                                $Gmail= $rows['gmail'];
                                $Mobile= $rows['mobile'];
                                


                                ?>
                                  <tr >
                                    <th scope="row"><?php echo $id ?></th>
                                    <td><?php echo $Full_Name ?></td>
                                    <td><?php echo $Gmail ?></td>
                                    <td><?php echo $Mobile ?></td>
                                    <td class="d-flex justify-content-around">
                                        <a href="<?php echo url;?>admin/update-admin.php?id=<?php echo $id ?>" class="btnup1">Update Admin</a>
                                        <a href="<?php echo url;?>admin/delete-admin.php?id=<?php echo $id ?>" class="btnup2">Delete Admin</a>  
                                        <a href="<?php echo url;?>admin/change-password.php?id=<?php echo $id ?>" class="btnup1">Change Password</a>
                                    </td>
                                  </tr>

                                <?php 
                                
                                
                                
                                

                              }
                          }
                         
                      }
                      
                
                ?>



                  
                </tbody>
          </table>
          
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
