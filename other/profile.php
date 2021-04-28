<?php include("conn/style-head.php"); ?>



<?php 
   $id = $_SESSION['id'];
   $sql = "SELECT * FROM users WHERE id = '$id' ";
   $result = mysqli_query($connection, $sql) or die(mysqli_error($connection));
?>
            <!-- TOP Nav Bar END -->
            <div class="container-fluid">
               <div class="row">
                  <div class="col-lg-4">
                     <div class="iq-card">
                        <div class="iq-card-body pl-0 pr-0 pt-0">
                           <div class="doctor-details-block">
                              <div class="doc-profile-bg bg-primary" style="height:150px;">
                              </div>
                              <div class="doctor-profile text-center">
                                 <img src="images/user/11.png" alt="profile-img" class="avatar-130 img-fluid">
                              </div>
                              <div class="text-center mt-3 pl-3 pr-3">
                                 <h4><b style="text-transform: uppercase;"><?php echo $_SESSION['fullname']; ?></b></h4>
                                 <p>Doctor</p>
                              </div>
                              <hr>
                              <ul class="doctoe-sedual d-flex align-items-center justify-content-between p-0 m-0">
                                 <li class="text-center">
                                    <h3 class="counter"><?php echo $_SESSION['id']; ?></h3>
                                  </li>
                                  <li class="text-center">
                                    <h3 class="counter">10</h3>
                                    <span>Sanitary pad Ordered</span>
                                  </li>
                                  <li class="text-center">
                                    <h3 class="counter">100</h3>
                                    <span>Cycle Calculated</span>
                                  </li>  
                              </ul>
                           </div>
                        </div>
                     </div>
                     
                     <div class="iq-card">
                        <div class="iq-card-header d-flex justify-content-between">
                           <div class="iq-header-title">
                              <h4 class="card-title">Personal Information</h4>
                           </div>
                        </div>
                        <?php while($values = mysqli_fetch_array($result)){ ?>
                        <div class="iq-card-body">
                           <div class="about-info m-0 p-0">
                              <div class="row">
                                 <div class="col-4">Full Name:</div>
                                 <div class="col-8"> <?php echo $values['fullname'] ?></div>
                                 <div class="col-4">Age:</div>
                                 <div class="col-8"><?php echo $values['age'] ?></div>
                                 <div class="col-4">Location:</div>
                                 <div class="col-8"><?php echo $values['location'] ?></div>
                                 <div class="col-4">Email:</div>
                                 <div class="col-8"><?php echo $values['email'] ?></div>
                                 <div class="col-4">Phone:</div>
                                 <div class="col-8"><a href="tel:<?php echo $values['phone_number'] ?>"><?php echo $values['phone_number'] ?></a></div>
                              </div>
                           </div>
                        </div>
                        <?php } ?>
                     </div>
                     
                  
                        <div class="col-md-6">
                           <div class="iq-card">
                              <div class="iq-card-header d-flex justify-content-between">
                                 <div class="iq-header-title">
                                    <h4 class="card-title">Notifications</h4>
                                 </div>
                              </div>
                              <div class="iq-card-body">
                                 <ul class="iq-timeline">
                                    <li>
                                       <div class="timeline-dots border-success"></div>
                                       <h6 class="">Date Joined</h6>
                                       <small class="mt-1"><?php echo $_SESSION['date_joined']; ?></small>
                                    </li>
                                    <li>
                                       <div class="timeline-dots border-danger"></div>
                                       <h6 class="">Reminder : Opertion Time!</h6>
                                       <small class="mt-1">20 November 2019</small>
                                    </li>
                                    <li>
                                       <div class="timeline-dots border-primary"></div>
                                       <h6 class="mb-1">Patient Call</h6>
                                       <small class="mt-1">19 November 2019</small>
                                    </li>
                                 </ul>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-12">
                           <div class="iq-card">
                              <div class="iq-card-header d-flex justify-content-between">
                                 <div class="iq-header-title">
                                    <h4 class="card-title">Experience</h4>
                                 </div>
                              </div>
                              <div class="iq-card-body">
                                 <table class="table mb-0 table-borderless">
                                  <thead>
                                      <tr>
                                          <th scope="col">Year</th>
                                          <th scope="col">Department</th>
                                          <th scope="col">Position</th>
                                          <th scope="col">Hospital</th>
                                          <th scope="col">Feedback</th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                      <tr>
                                          <td>2014 - 2018</td>
                                          <td>MBBS, M.D</td>
                                          <td>Senior doctor</td>
                                          <td>Midtown Medical Clinic</td>
                                          <td><span class="badge badge-primary">Good</span></td>
                                      </tr>
                                      <tr>
                                          <td>2018 - 2020</td>
                                          <td>M.D. of Medicine</td>
                                          <td>Associate Prof.</td>
                                          <td>Netherland Medical College</td>
                                          <td><span class="badge badge-success">excellence</span></td>
                                      </tr>
                                  </tbody>
                              </table>
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
      <script data-cfasync="false" src="../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="js/jquery.min.js"></script>
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