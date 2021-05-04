<?php include("conn/style-head.php"); ?>
<?php 
     if (isset($_POST['submit'])) {
      $user_id =  $_SESSION['id'];
      $monthly_flow = $_POST['monthly_flow'];
      $last_seen = date('Y-m-d', strtotime($_POST['last_seen']));
      $duration = $_POST['duration'];
      $cycle_length = $_POST['cycle_length'];
      $experience = $_POST['experience'];

      //module to calculate the next date 
      $pre_date = $last_seen;
      $add_days = $cycle_length;
      $pre_date = date('Y-m-d', strtotime($pre_date) + (24*3600* $add_days));
      $predicted_date = $pre_date;
      

    $sql = "INSERT INTO user_details (user_id, cycle_weight, date_last_seen, duration, cycle_length, cycle_problems, predicted_date ) 
    	    VALUES('{$user_id}', '{$monthly_flow}', '{$last_seen}', '{$duration}','{$cycle_length}', '{$experience}', '{$predicted_date}'  )";
    $result = mysqli_query($connection,$sql);
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
                        <div class="iq-alert-text"><b>Period Calculted !</b> successfully!</div>
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
            <!-- TOP Nav Bar END -->
            <div class="container-fluid">
               <div class="row">
                  <div class="col-sm-12 col-lg-12">
                     <div class="iq-card">
                        <div class="iq-card-header d-flex justify-content-between">
                           <div class="iq-header-title">
                              <h4 class="card-title">Track Period - Set Reminder!</h4>
                           </div>
                        </div>
                        <div class="iq-card-body">
                           <form id="form-wizard1" action="#" method="POST">
                           <div class="form-group">
                                 <label for="exampleFormControlSelect1">How's your monthly flow?</label>
                                 <select class="form-control" name="monthly_flow" id="exampleFormControlSelect1">
                                    <option selected="" disabled="">Monthly flow</option>
                                    <option value="light">Light</option>
                                    <option value="heavy">Heavy</option>
                                 </select>
                              </div>
                              <div class="form-group">
                                 <label for="exampleInputdate">When last did you see your period?</label>
                                 <input type="date" name="last_seen" class="form-control" id="exampleInputdate" >
                              </div>
                              <div class="form-group">
                                    <label for="exampleInputEmail2">Period Duration</label>
                                    <select class="form-control" name="duration" id="exampleFormControlSelect1">
                                    <option selected="" disabled="">Period Duration</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                 </select>
                                </div>
                              <div class="form-group">
                                 <label for="exampleInputdate">How long is your cycle?</label>
                                 <input type="text" name="cycle_length" class="form-control" id="exampleInputdate" >
                              </div>
                                <div class="form-group">
                                 <label for="exampleFormControlSelect1">Do you experience any of this?</label>
                                 <select class="form-control" name="experience" id="exampleFormControlSelect1">
                                    <option selected="" disabled="">Do you experience any of this?</option>
                                    <option value="Acne">Acne</option>
                                    <option value="liMenstrual Crampsght">Menstrual Cramps</option>
                                    <option value="Mood Changes">Mood Changes</option>
                                    <option value="Pains in lower abdomen">Pains in lower abdomen</option>
                                    <option value="Tiredness">Tiredness</option>
                                    <option value="Bloating/Swelling">Bloating/Swelling</option>
                                    <option value="Mood changes">Mood changes</option>
                                 </select>
                              </div>
                                <div class="d-inline-block w-100">
                                    <div class="custom-control custom-checkbox d-inline-block mt-2 pt-1">
                                    </div>
                                    <button type="submit" name="submit" class="btn btn-success float-right">Track Period!</button>
                                </div>
                           </form>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <!-- Footer -->
            
            <!-- Footer END -->
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

</html>