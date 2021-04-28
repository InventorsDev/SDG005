<?php include("conn/style-head.php"); 
?>
<!-- UPDATE `users` SET `age` = '19' WHERE `users`.`id` = 1; -->
<?php 

  if (isset($_POST['submit'])) {
    $age = $_POST['age'];
    $location = $_POST['location'];
    $mstatus = $_POST['mstatus'];
    $address = $_POST['address'];
    $pnumber = $_POST['pnumber'];

    $id = $_SESSION['id'];
    $query="SELECT * from users ";
    $insert = " UPDATE users set age='{$age}', location='{$location}', marital_status='{$mstatus}', address= '{$address}', phone_number={$pnumber} WHERE id = {$id} ";
    $run = mysqli_query($connection, $insert);
          if($run){
            $success = "ji";
          }else{
            $failed = "ji";
            die(mysqli_error($connection));
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
                        <div class="iq-alert-text"><b>Profile Update !</b> successfull!</div>
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
                  <div class="col-sm-12 col-lg-12">
                     <div class="iq-card">
                        <div class="iq-card-header d-flex justify-content-between">
                           <div class="iq-header-title">
                              <h4 class="card-title">Update Profile!</h4>
                           </div>
                        </div>
                        <div class="iq-card-body">
                           <form class="mt-4" action="#" method="post">
                           <div class="form-group">
                                    <label for="exampleInputEmail1"></label>
                                    <input type="text" disabled="" name="fullname" value = "<?php echo $_SESSION['fullname']; ?>" class="form-control mb-0" id="exampleInputEmail1" placeholder="Your Full Name" required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1"></label>
                                    <input type="email" name="email" disabled=""  class="form-control mb-0" id="exampleInputPassword1" value="<?php echo $_SESSION['email']; ?>" required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail2"></label>
                                    <input type="text" name='age' class="form-control mb-0" id="exampleInputEmail2" placeholder="Enter your Age" required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1"></label>
                                    <input type="text" name="location" class="form-control mb-0" id="exampleInputEmail1" placeholder="Your location" required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1"></label>
                                    <input type="text" name="mstatus" class="form-control mb-0" id="exampleInputEmail1" placeholder="marital status" required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1"></label>
                                    <input type="text" name="address" class="form-control mb-0" id="exampleInputEmail1" placeholder="Your address" required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1"></label>
                                    <input type="text" name="pnumber" class="form-control mb-0" id="exampleInputEmail1" placeholder="Your phone number" required>
                                </div>
                                <div class="d-inline-block w-100">
                                    <div class="custom-control custom-checkbox d-inline-block mt-2 pt-1">
                                    </div>
                                    <button type="submit" name="submit" class="btn btn-primary float-right">Update profile</button>
                                </div>
                                <div class="sign-info">
                                    <span class="dark-color d-inline-block line-height-2">All done✅ ?  <a href="user_dashboard.php">Go back</a></span>
                                    
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