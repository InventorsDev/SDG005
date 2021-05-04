<?php include("conn/style-head.php"); ?>
<?php 
   $id = $_SESSION['id'];
   $sql = "SELECT * FROM users WHERE id = '$id' ";
   $result = mysqli_query($connection, $sql) or die(mysqli_error($connection));
?>

<?php 
    $id = $_SESSION['id'];
    $sqli = "SELECT * FROM user_details WHERE user_id = '$id' ORDER BY id DESC LIMIT 1";
    $result2 = mysqli_query($connection, $sqli) or die(mysqli_error($connection));
?>

<div class="container-fluid">
               <div class="row">
                  <div class="col-sm-12 col-lg-12">
                     <div class="iq-card">
                        <div class="iq-card-header d-flex justify-content-between">
                           <div class="iq-header-title">
                              <h4 class="card-title">Send a Reminder</h4>
                           </div>
                        </div>
                        <div class="iq-card-body">
                           <form id="form-wizard1" action="#" method="POST">
                           <div class="form-group">
                           <?php while($values = mysqli_fetch_array($result)){ ?>
                                 <label for="exampleInputdate">Phone number</label>
                                 <input type="text" name="cycle_length" value="+<?php echo $values['phone_number'] ?>" class="form-control" id="exampleInputdate" >
                              </div>
                        <?php } ?>
                        <?php while($values = mysqli_fetch_array($result2)){ ?>
                              <div class="form-group">
                                 <label for="exampleInputdate">Reminder Message</label>
                                 <input type="text" name="cycle_length" value="Hello <?php echo $_SESSION['fullname']; ?>,  your next period is on <?php echo $values['predicted_date'] ?>. Please make sure you get your sanitary pad prepared for your monthly period. Thanks!" class="form-control" id="exampleInputdate" >
                              </div>
                        <?php } ?>
                                <div class="d-inline-block w-100">
                                    <div class="custom-control custom-checkbox d-inline-block mt-2 pt-1"></div>
                                    <button type="submit" name="submit" class="btn btn-success float-right">Send</button>
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