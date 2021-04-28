<?php include("conn/style-head.php"); ?>
<?php include("conn/popup.php"); ?>
<?php 
$id = $_SESSION['id'];
$sql = "SELECT * FROM user_details WHERE id = '$id' ";
$result = mysqli_query($connection, $sql) or die(mysqli_error($connection));
?>
         <!-- TOP Nav Bar END -->
            <div class="container-fluid">
               <div class="row">
                  <div class="col-sm-12">
                     <div class="row">
                        <div class="col-md-6 col-lg-3">
                           <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                              <div class="iq-card-body">
                                 <div class="iq-progress-bar progress-bar-vertical iq-bg-primary">
                                       <span class="bg-primary" data-percent="70"></span>
                                   </div>
                                 <span class="line-height-4"><i class="fa fa-asterisk"></i></span>
                                 <h4 class="mb-2 mt-2">Date Joined</h4>
                                 <p class="mb-0 text-secondary line-height"><?php echo $_SESSION['date_joined']; ?></p>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                           <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                              <a href="reminder-list.php">
                              <div class="iq-card-body">
                                 <div class="iq-progress-bar progress-bar-vertical iq-bg-danger">
                                       <span class="bg-danger" data-percent="50"></span>
                                   </div>
                                 <span class="line-height-4"><i class="fa fa-calendar"></i></span>
                                 <h4 class="mb-2 mt-2">Next Cycle</h4>
                                 <p class="mb-0 text-secondary line-height">View your next period!</p>
                              </div>
                              </a>
                           </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                           <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                              <a href="tips.php">
                              <div class="iq-card-body">
                                 <div class="iq-progress-bar progress-bar-vertical iq-bg-warning">
                                       <span class="bg-warning" data-percent="80"></span>
                                   </div>
                                 <span class="line-height-4"><i class="fa fa-commenting"></i></span>
                                 <h4 class="mb-2 mt-2">Menstural Tips / FAQs</h4>
                                 <p class="mb-0 text-secondary line-height">Tips to help with your menstural period</p>
                              </div>
                              </a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-8">
                     <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                        <div class="iq-card-header d-flex justify-content-between">
                           <div class="iq-header-title">
                              <h4 class="card-title">Health Curve</h4>
                           </div>
                        </div>
                        <div class="iq-card-body">
                           <div id="home-chart-06" style="height: 350px;"></div>
                        </div>
                     </div>
                  </div>                  
               </div>
               <div class="row">
                  <div class="col-lg-4">
                     <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                        <div class="iq-card-header d-flex justify-content-between">
                           <div class="iq-header-title">
                              <h4 class="card-title">Nearest Treatment</h4>
                           </div>
                        </div>
                        <div class="iq-card-body smaill-calender-home">
                           <input type="text" class="flatpicker d-none">
                        </div>
                     </div>
                  </div>
                     <?php while($values = mysqli_fetch_array($result)){ ?>                  
                  <div class="col-lg-4">
                     <div class="iq-card iq-card-block iq-card-stretch iq-card-height-half">
                        <div class="iq-card-body">
                           <h6>Cycle - Start</h6>
                           <h3><b><?php echo $values['date_last_seen'] ?> </b></h3>
                        </div>
                        <div id="wave-chart-7"></div>
                     </div>
                     <div class="iq-card iq-card-block iq-card-stretch iq-card-height-half">
                        <div class="iq-card-body">
                           <h6>Cycle - Ends &nbsp   (<?php echo $values['cycle_length'] ?>) days</h6>
                           <h3><b><?php echo $values['predicted_date'] ?> </b></h3>
                        </div>
                        <div id="wave-chart-8"></div>
                     </div>
                  </div>
                  <?php } ?>
                  <div class="col-lg-6">
                     <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                        <div class="iq-card-header d-flex justify-content-between">
                           <div class="iq-header-title">
                              <h4 class="card-title">Patient overview</h4>
                           </div>
                        </div>
                        <div class="iq-card-body pl-0 pr-0">
                           <div id="home-chart-03" style="height: 280px;"></div>
                        </div>
                     </div>
                  </div>
                  </div>
               </div>
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
      <!-- am core JavaScript -->
      <script src="js/core.js"></script>
      <!-- am charts JavaScript -->
      <script src="js/charts.js"></script>
      <!-- am animated JavaScript -->
      <script src="js/animated.js"></script>
      <!-- am kelly JavaScript -->
      <script src="js/kelly.js"></script>
      <!-- Flatpicker Js -->
      <script src="js/flatpickr.js"></script>
      <!-- Chart Custom JavaScript -->
      <script src="js/chart-custom.js"></script>
      <!-- Custom JavaScript -->
      <script src="js/custom.js"></script>
   </body>

</html>
