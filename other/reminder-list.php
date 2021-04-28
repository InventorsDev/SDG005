<?php include("conn/style-head.php"); ?>
<?php 
$id = $_SESSION['id'];
$sql = "SELECT * FROM user_details WHERE id = '$id' ";
$result = mysqli_query($connection, $sql) or die(mysqli_error($connection));
?>
<div class="container-fluid">
               <div class="row">
                  <div class="col-sm-12">
                     <div class="iq-card">
                        <div class="iq-card-header d-flex justify-content-between">
                           <div class="iq-header-title">
                              <h4 class="card-title">Your Period - List</h4>
                           </div>
                        </div>
                     </div>
                  </div>
                  <?php while($values = mysqli_fetch_array($result)){ ?>
                  <div class="col-sm-6 col-md-3">
                     <div class="iq-card">
                        <div class="iq-card-body text-center">
                           <div class="doc-profile">
                              <img class="rounded-circle img-fluid avatar-80" src="images/user/13.jpg" alt="profile">
                           </div>
                           <div class="iq-doc-info mt-3">
                              <h4> <?php echo $_SESSION['fullname']; ?></h4>
                              <p class="mb-0" >User - Id: <?php echo $values['id'] ?></p>
                              <!-- <a href="javascript:void();">www.demo.com</a> -->
                           </div>
                           <div class="iq-doc-description mt-2">
                              <p class="mb-0">
                              <!-- style= "color:red;" -->
                                 <ol>
                                    <li>Your monthly flow: <span style="color:red; text-transform: uppercase;"><?php echo $values['cycle_weight'] ?> </span></li>  
                                    <li>Last time you saw your period: <span style="color:red; text-transform: uppercase;"> <?php echo $values['date_last_seen'] ?> </span></li>
                                    <li>Period Duration?: <span style="color:red; text-transform: uppercase;"> <?php echo $values['duration'] ?> </span></li>
                                    <li>Your cycle length: <span style="color:red; text-transform: uppercase;"> <?php echo $values['cycle_length'] ?> </span></li>
                                    <li>Period Difficulties: <span style="color:red; text-transform: uppercase;"> <?php echo $values['cycle_problems'] ?> </span></li>
                                    <li>Predicted date: <span style="color:red; text-transform: uppercase;"> <?php echo $values['predicted_date'] ?> </span></li>
                                 </ol>
                              </p>
                           </div>
                           <div class="iq-doc-social-info mt-3 mb-3">
                              <ul class="m-0 p-0 list-inline">
                                 <li><a href="#"><i class="ri-facebook-fill"></i></a></li>
                                 <li><a href="#"><i class="ri-twitter-fill"></i></a> </li>
                                 <li><a href="#"><i class="ri-google-fill"></i></a></li>
                              </ul>
                           </div>
                           <a href="profile.html" class="btn btn-danger">Delete Record!</a>
                        </div>
                     </div>
                  </div>
                  <?php } ?>
               </div>
            </div>
         </div>
      </div>            
      <!-- Wrapper END -->
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
      <!-- lottie JavaScript -->
      <script src="js/lottie.js"></script>
      <!-- Chart Custom JavaScript -->
      <script src="js/chart-custom.js"></script>
      <!-- Custom JavaScript -->
      <script src="js/custom.js"></script>
   </body>

<!-- Mirrored from iqonic.design/themes/xray/html/doctor-list.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 09 Apr 2021 00:46:19 GMT -->
</html>