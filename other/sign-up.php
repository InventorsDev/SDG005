<?php include("conn/session.php"); ?>
<?php include("conn/db.php"); ?>
<?php 
  if (isset($_POST['submit'])) {
      $fullmame = $_POST['fullname'];
      $email = $_POST['email'];
      $password = $_POST['password'];
      

    $sql = "INSERT INTO users (fullname, email, password ) VALUES('{$fullmame}', '{$email}', '{$password}')";
    $result = mysqli_query($connection,$sql);
    if ($result) {
        $success = "hey";
        //  header('location: user_dashboard.php');
      
    }else{
        $failed = "hey";
    }
    }
 ?>
<?php   if (isset($success)) { ?>
    <div class="container"><br>
        <div class="col-sm-12 col-lg-6">
            <div class="iq-card">
                <div class="alert text-white bg-success" role="alert">
                        <div class="iq-alert-icon">
                            <i class="ri-alert-fill"></i>
                        </div>
                        <div class="iq-alert-text"><b>Registration Successful !</b> Proceed to Sign-in</div>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <i class="ri-close-line"></i>
                    </button>
                </div>
            </div>
        </div>
    </div><!-- <script type="text/javascript">
        alert("user inserted successfull...You can proceed to Login")
    </script> -->
<?php } ?>
<?php   if (isset($failed)) { ?>
<div class="container"><br>
    <div class="col-sm-12 col-lg-6">
        <div class="iq-card">
            <div class="alert text-white bg-danger" role="alert">
                <div class="iq-alert-icon">
                    <i class="ri-information-line"></i>
                </div>
                <div class="iq-alert-text">A simple <b>danger</b> alert—check it out!</div>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <i class="ri-close-line"></i>
                </button>
            </div>
        </div>
    </div>
</div><!-- <script type="text/javascript">
        alert("user inserted successfull...You can proceed to Login")
    </script> -->
<?php } ?>
<!doctype html>
<html lang="en">
   

<head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>Monthlies - Sign-up</title>
      <!-- Favicon -->
      <link rel="shortcut icon" href="images/favicon.ico" />
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <!-- Typography CSS -->
      <link rel="stylesheet" href="css/typography.css">
      <!-- Style CSS -->
      <link rel="stylesheet" href="css/style.css">
      <!-- Responsive CSS -->
      <link rel="stylesheet" href="css/responsive.css">
   </head>
   <body>
        <!-- Sign in Start -->
        <section class="sign-in-page">
            <div class="container sign-in-page-bg mt-5 p-0">
                <div class="row no-gutters">
                    <div class="col-md-6 text-center">
                        <div class="sign-in-detail text-white">
                            <a class="sign-in-logo mb-5" href="#"><img src="images/logo.png" class="img-fluid" alt="logo"></a>
                            <div class="owl-carousel" data-autoplay="true" data-loop="true" data-nav="false" data-dots="true" data-items="1" data-items-laptop="1" data-items-tab="1" data-items-mobile="1" data-items-mobile-sm="1" data-margin="0">
                                <div class="item">
                                    <img src="images/login/2.png" class="img-fluid mb-4" alt="logo">
                                    <h4 class="mb-1 text-white">Calculate your cycle</h4>
                                    <p>Calculate the date - day your next cycle falls with monthlies app</p>
                                </div>
                                <div class="item">
                                    <img src="images/login/1.png" class="img-fluid mb-4" alt="logo">
                                    <h4 class="mb-1 text-white">Set Reminder</h4>
                                    <p>Easily set reminders to receive notifications when next you will see your menstural cycle</p>
                                </div>
                                <div class="item">
                                    <img src="images/login/3.png" class="img-fluid mb-4" alt="logo">
                                    <h4 class="mb-1 text-white">Order Sanitary pad</h4>
                                    <p>Order your sanitary pad with ease on the monthlies App.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 position-relative">
                        <div class="sign-in-from">
                            <h1 class="mb-0">Sign Up</h1>
                            <form class="mt-4" action="#" method="post">
                                <div class="form-group">
                                    <label for="exampleInputEmail1"></label>
                                    <input type="text" name="fullname" class="form-control mb-0" id="exampleInputEmail1" placeholder="Your Full Name" required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail2"></label>
                                    <input type="email" name='email' class="form-control mb-0" id="exampleInputEmail2" placeholder="Enter email" required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1"></label>
                                    <input type="password" name="password"  class="form-control mb-0" id="exampleInputPassword1" placeholder="Password" required>
                                </div>
                                <div class="d-inline-block w-100">
                                    <div class="custom-control custom-checkbox d-inline-block mt-2 pt-1">
                                        <input type="checkbox" class="custom-control-input" id="customCheck1">
                                        <label class="custom-control-label" for="customCheck1"> <a href="#">I accept Terms and Conditions</a></label>
                                    </div>
                                    <button type="submit" name="submit" class="btn btn-primary float-right">Sign Up</button>
                                </div>
                                <div class="sign-info">
                                    <span class="dark-color d-inline-block line-height-2">Already Have Account ? <a href="sign-in.php">Sign In</a></span>
                                    <ul class="iq-social-media">
                                        <li><a href="#"><i class="ri-facebook-box-line"></i></a></li>
                                        <li><a href="#"><i class="ri-twitter-line"></i></a></li>
                                        <li><a href="#"><i class="ri-instagram-line"></i></a></li>
                                    </ul>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Sign in END -->
      <!-- Optional JavaScript -->
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.min.js"></script>
      <!-- Appear JavaScript -->
      <script src="js/jquery.appear.js"></script>
      <!-- Countdown JavaScript -->
      <script src="js/countdown.min.js"></script>
      <!-- Counterup JavaScript -->
      <script src="js/waypoints.min.js"></script>
      <script src="js/jquery.counterup.min.js"></script>
      <!-- Wow JavaScript -->
      <script src="js/wow.min.js"></script>
      <!-- Apexcharts JavaScript -->
      <script src="js/apexcharts.js"></script>
      <!-- Slick JavaScript -->
      <script src="js/slick.min.js"></script>
      <!-- Select2 JavaScript -->
      <script src="js/select2.min.js"></script>
      <!-- Owl Carousel JavaScript -->
      <script src="js/owl.carousel.min.js"></script>
      <!-- Magnific Popup JavaScript -->
      <script src="js/jquery.magnific-popup.min.js"></script>
      <!-- Smooth Scrollbar JavaScript -->
      <script src="js/smooth-scrollbar.js"></script>
      <!-- Chart Custom JavaScript -->
      <script src="js/chart-custom.js"></script>
      <!-- Custom JavaScript -->
      <script src="js/custom.js"></script>
   </body>
</html>