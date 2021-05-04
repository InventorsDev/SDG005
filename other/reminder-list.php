<?php include("conn/style-head.php"); ?>
<?php 
$id = $_SESSION['id'];
$sql = "SELECT * FROM user_details WHERE user_id = '$id' ORDER BY id DESC";
$result = mysqli_query($connection, $sql) or die(mysqli_error($connection));
?>
<?php 
    if(isset($_POST['submit'])){
      $period_id = $_POST['delete'];
      $query2 = "DELETE FROM user_details WHERE id = $period_id ";
      $result2 = mysqli_query($connection,$query2);
      if ($result) {
         $success = "hey";      
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
                        <div class="iq-alert-text"><b>Period Deleted !</b> successfully!</div>
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
                <div class="iq-alert-text">An <b>Error Occurred!</b></div>
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
<div class="container-fluid">
               <div class="row">
                  <div class="col-sm-12">
                     <div class="iq-card">
                        <div class="iq-card-header d-flex justify-content-between">
                           <div class="iq-header-title">
                              <h4 class="card-title">Your Tracked Period - List</h4>
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
                              <p class="mb-0" >User - Id: <?php echo $values['user_id'] ?></p>
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
                           <a href="set-reminder.php" class="btn btn-success">Set-Reminder</a>
                           </div>
                           <form action="#" method="post">
                            <button class="btn btn-danger" name="submit">Delete Record</button>
                            <input type="hidden" name="delete" value="<?php echo $values['id']; ?>">
                          </form>
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