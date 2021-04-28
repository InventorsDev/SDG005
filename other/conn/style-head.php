<?php include("conn/session.php"); ?>
<?php include("conn/db.php"); ?>
<!doctype html>
<html lang="en">

<head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>Monthlies - Female Menstural App</title>
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
       <!-- Full calendar -->
      <link href='fullcalendar/core/main.css' rel='stylesheet' />
      <link href='fullcalendar/daygrid/main.css' rel='stylesheet' />
      <link href='fullcalendar/timegrid/main.css' rel='stylesheet' />
      <link href='fullcalendar/list/main.css' rel='stylesheet' />

      <link rel="stylesheet" href="css/flatpickr.min.css">


   </head>
   <body class="sidebar-main-menu">
      <!-- loader Start -->
      
      <!-- loader END -->
      <!-- Wrapper Start -->
      <div class="wrapper">
         <!-- Sidebar  -->
         <div class="iq-sidebar">
            <div class="iq-sidebar-logo d-flex justify-content-between">
               <a href="user_dashboard.php">
               <img src="images/logo.png" class="img-fluid" alt="">
               </a>
               <div class="iq-menu-bt-sidebar">
                     <div class="iq-menu-bt align-self-center">
                        <div class="wrapper-menu">
                           <div class="main-circle"><i class="ri-more-fill"></i></div>
                           <div class="hover-circle"><i class="ri-more-2-fill"></i></div>
                        </div>
                     </div>
                  </div>
            </div>
            <div id="sidebar-scrollbar">
               <nav class="iq-sidebar-menu">
                  <ul id="iq-sidebar-toggle" class="iq-menu">
                     <li class="iq-menu-title"><i class="ri-subtract-line"></i><span>Dashboard</span></li>
                     <li class="active">
                        <a href="user_dashboard.php" class="iq-waves-effect"><i class="ri-hospital-fill"></i><span>User Dashboard</span></a>
                     </li>
                     <li>
                        <a href="maintenance.php" class="iq-waves-effect"><i class="lab la-mendeley"></i><span>Order Sanitary Pad</span><span class="badge badge-danger">New</span></a>
                     </li>
                     <li class="iq-menu-title"><i class="ri-subtract-line"></i><span>Tools</span></li>
                                         
                     <li>
                        <a href="#doctor-info" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i class="ri-user-3-fill"></i><span>Period Tracker</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                        <ul id="doctor-info" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                           <li><a href="reminder-list.php"><i class="ri-file-list-fill"></i>All Reminders</a></li>
                           <li><a href="add-reminder.php"><i class="ri-user-add-fill"></i> Add Reminder</a></li>
                        </ul>
                     </li>
                     <li><a href="tips.php" class="iq-waves-effect"><i class="fa fa-address-book"></i></i><span>Tips</span></a></li>
                     <li><a href="calendar.php" class="iq-waves-effect"><i class="ri-calendar-event-fill"></i><span>Calendar</span></a></li>
                    
                     <!-- <li class="iq-menu-title"><i class="ri-subtract-line"></i><span>Components</span></li> -->
                     <!-- <li>
                        <a href="#ui-elements" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i class="ri-apps-fill"></i><span>UI Elements</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                        <ul id="ui-elements" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                           <li><a href="ui-colors.html"><i class="ri-font-color"></i>colors</a></li>
                           <li><a href="ui-typography.html"><i class="ri-text"></i>Typography</a></li>
                           <li><a href="ui-alerts.html"><i class="ri-alert-fill"></i>Alerts</a></li>
                           <li><a href="ui-badges.html"><i class="ri-building-3-fill"></i>Badges</a></li>
                           <li><a href="ui-breadcrumb.html"><i class="ri-guide-fill"></i>Breadcrumb</a></li>
                           <li><a href="ui-buttons.html"><i class="ri-checkbox-blank-fill"></i>Buttons</a></li>
                           <li><a href="ui-cards.html"><i class="ri-bank-card-fill"></i>Cards</a></li>
                           <li><a href="ui-carousel.html"><i class="ri-slideshow-4-fill"></i>Carousel</a></li>
                           <li><a href="ui-embed-video.html"><i class="ri-movie-fill"></i>Video</a></li>
                           <li><a href="ui-grid.html"><i class="ri-grid-fill"></i>Grid</a></li>
                           <li><a href="ui-images.html"><i class="ri-image-fill"></i>Images</a></li>
                           <li><a href="ui-list-group.html"><i class="ri-file-list-fill"></i>list Group</a></li>
                           <li><a href="ui-media-object.html"><i class="ri-camera-fill"></i>Media</a></li>
                           <li><a href="ui-modal.html"><i class="ri-checkbox-blank-fill"></i>Modal</a></li>
                           <li><a href="ui-notifications.html"><i class="ri-notification-3-fill"></i>Notifications</a></li>
                           <li><a href="ui-pagination.html"><i class="ri-more-fill"></i>Pagination</a></li>
                           <li><a href="ui-popovers.html"><i class="ri-folder-shield-fill"></i>Popovers</a></li>
                           <li><a href="ui-progressbars.html"><i class="ri-battery-low-fill"></i>Progressbars</a></li>
                           <li><a href="ui-tabs.html"><i class="ri-database-fill"></i>Tabs</a></li>
                           <li><a href="ui-tooltips.html"><i class="ri-record-mail-fill"></i>Tooltips</a></li>
                        </ul>
                     </li> -->
                     <!-- <li>
                        <a href="#forms" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i class="ri-device-fill"></i><span>Forms</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                        <ul id="forms" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                           <li><a href="form-layout.html"><i class="ri-tablet-fill"></i>Form Elements</a></li>
                           <li><a href="form-validation.html"><i class="ri-device-fill"></i>Form Validation</a></li>
                           <li><a href="form-switch.html"><i class="ri-toggle-fill"></i>Form Switch</a></li>
                           <li><a href="form-chechbox.html"><i class="ri-chat-check-fill"></i>Form Checkbox</a></li>
                           <li><a href="form-radio.html"><i class="ri-radio-button-fill"></i>Form Radio</a></li>
                        </ul>
                     </li> -->
                     <!-- <li>
                        <a href="#forms-wizard" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i class="ri-file-word-fill"></i><span>Forms Wizard</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                        <ul id="forms-wizard" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                           <li><a href="form-wizard.html"><i class="ri-anticlockwise-fill"></i>Simple Wizard</a></li>
                           <li><a href="form-wizard-validate.html"><i class="ri-anticlockwise-2-fill"></i>Validate Wizard</a></li>
                           <li><a href="form-wizard-vertical.html"><i class="ri-clockwise-fill"></i>Vertical Wizard</a></li>
                        </ul>
                     </li> -->
                     <!-- <li>
                        <a href="#tables" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i class="ri-table-fill"></i><span>Table</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                        <ul id="tables" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                           <li><a href="tables-basic.html"><i class="ri-table-fill"></i>Basic Tables</a></li>
                           <li><a href="data-table.html"><i class="ri-table-2"></i>Data Table</a></li>
                           <li><a href="table-editable.html"><i class="ri-archive-drawer-fill"></i>Editable Table</a></li>
                        </ul>
                     </li> -->
                     <!-- <li>
                        <a href="#charts" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i class="ri-bar-chart-2-fill"></i><span>Charts</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                        <ul id="charts" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                           <li><a href="chart-morris.html"><i class="ri-file-chart-fill"></i>Morris Chart</a></li>
                           <li><a href="chart-high.html"><i class="ri-bar-chart-fill"></i>High Charts</a></li>
                           <li><a href="chart-am.html"><i class="ri-bar-chart-box-fill"></i>Am Charts</a></li>
                           <li><a href="chart-apex.html"><i class="ri-pie-chart-box-fill"></i>Apex Chart</a></li>
                        </ul>
                     </li>                      -->
                  </ul>
               </nav>
               <div class="p-3"></div>
            </div>
         </div>
         
         <!-- Page Content  -->
         <div id="content-page" class="content-page">
            <!-- TOP Nav Bar -->
         <div class="iq-top-navbar header-top-sticky">
            <div class="iq-navbar-custom">
               <div class="iq-sidebar-logo">
                  <div class="top-logo">
                     <a href="index.html" class="logo">
                     <img src="images/logo.png" class="img-fluid" alt="">
                     <span>XRay</span>
                     </a>
                  </div>
               </div>
               <nav class="navbar navbar-expand-lg navbar-light p-0">
                  <div class="iq-search-bar">
                     <form action="#" class="searchbox">
                        <input type="text" class="text search-input" placeholder="Type here to search...">
                        <a class="search-link" href="#"><i class="ri-search-line"></i></a>
                     </form>
                  </div>
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <i class="ri-menu-3-line"></i>
                  </button>
                  <div class="iq-menu-bt align-self-center">
                     <div class="wrapper-menu">
                        <div class="main-circle"><i class="ri-more-fill"></i></div>
                           <div class="hover-circle"><i class="ri-more-2-fill"></i></div>
                     </div>
                  </div>
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                     <ul class="navbar-nav ml-auto navbar-list">
                        <li class="nav-item">
                           <a class="search-toggle iq-waves-effect language-title" href="#"><img src="images/small/flag-01.png" alt="img-flaf" class="img-fluid mr-1" style="height: 16px; width: 16px;" /> English <i class="ri-arrow-down-s-line"></i></a>
                           <div class="iq-sub-dropdown">
                              <a class="iq-sub-card" href="#"><img src="images/small/flag-02.png" alt="img-flaf" class="img-fluid mr-2" />French</a>
                              <a class="iq-sub-card" href="#"><img src="images/small/flag-03.png" alt="img-flaf" class="img-fluid mr-2" />Spanish</a>
                              <a class="iq-sub-card" href="#"><img src="images/small/flag-04.png" alt="img-flaf" class="img-fluid mr-2" />Italian</a>
                              <a class="iq-sub-card" href="#"><img src="images/small/flag-05.png" alt="img-flaf" class="img-fluid mr-2" />German</a>
                              <a class="iq-sub-card" href="#"><img src="images/small/flag-06.png" alt="img-flaf" class="img-fluid mr-2" />Japanese</a>

                           </div>
                        </li>
                        <li class="nav-item iq-full-screen">
                           <a href="#" class="iq-waves-effect" id="btnFullscreen"><i class="ri-fullscreen-line"></i></a>
                        </li>
                        <li class="nav-item">
                           <a href="#" class="search-toggle iq-waves-effect">
                                 <i class="ri-notification-3-fill"></i>
                                 <span class="bg-danger dots"></span>
                              </a>
                           <div class="iq-sub-dropdown">
                              <div class="iq-card shadow-none m-0">
                                 <div class="iq-card-body p-0 ">
                                    <div class="bg-primary p-3">
                                       <h5 class="mb-0 text-white">All Notifications<small class="badge  badge-light float-right pt-1">1</small></h5>
                                    </div>

                                    <a href="#" class="iq-sub-card" >
                                       <div class="media align-items-center">
                                          <div class="">
                                             <img class="avatar-40 rounded" src="images/user/02.jpg" alt="">
                                          </div>
                                          <div class="media-body ml-3">
                                             <h6 class="mb-0 ">Welcome <?php echo $_SESSION['fullname']; ?></h6>
                                             <small class="float-right font-size-12">Just Now</small>
                                             <p class="mb-0">Thanks for Joining Monthlies</p>
                                          </div>
                                       </div>
                                    </a>
                                 </div>
                              </div>
                           </div>
                        </li>
                     </ul>
                  </div>
                  <ul class="navbar-list">
                     <li>
                        <a href="#" class="search-toggle iq-waves-effect d-flex align-items-center">
                           <img src="images/user/1.jpg" class="img-fluid rounded mr-3" alt="user">
                           <div class="caption">
                              <h6 class="mb-0 line-height" style="text-transform: uppercase;"><?php echo $_SESSION['fullname']; ?></h6>
                              <span class="font-size-12">Online</span>
                           </div>
                        </a>
                        <div class="iq-sub-dropdown iq-user-dropdown">
                           <div class="iq-card shadow-none m-0">
                              <div class="iq-card-body p-0 ">
                                 <div class="bg-primary p-3">
                                    <h5 class="mb-0 text-white line-height">Hello <?php echo $_SESSION['fullname']; ?></h5>
                                    <span class="text-white font-size-12">Available</span>
                                 </div>
                                 <a href="profile.php" class="iq-sub-card iq-bg-primary-hover">
                                    <div class="media align-items-center">
                                       <div class="rounded iq-card-icon iq-bg-primary">
                                          <i class="ri-file-user-line"></i>
                                       </div>
                                       <div class="media-body ml-3">
                                          <h6 class="mb-0 ">My Profile</h6>
                                          <p class="mb-0 font-size-12">View personal profile details.</p>
                                       </div>
                                    </div>
                                 </a>
                                 <a href="profile-update.php" class="iq-sub-card iq-bg-primary-hover">
                                    <div class="media align-items-center">
                                       <div class="rounded iq-card-icon iq-bg-primary">
                                          <i class="ri-profile-line"></i>
                                       </div>
                                       <div class="media-body ml-3">
                                          <h6 class="mb-0 ">Update Profile</h6>
                                          <p class="mb-0 font-size-12">Modify your personal details.</p>
                                       </div>
                                    </div>
                                 </a>
                                 <a href="privacy-setting.php" class="iq-sub-card iq-bg-primary-hover">
                                    <div class="media align-items-center">
                                       <div class="rounded iq-card-icon iq-bg-primary">
                                          <i class="ri-lock-line"></i>
                                       </div>
                                       <div class="media-body ml-3">
                                          <h6 class="mb-0 ">Privacy Settings</h6>
                                          <p class="mb-0 font-size-12">Control your privacy parameters.</p>
                                       </div>
                                    </div>
                                 </a>
                                 <div class="d-inline-block w-100 text-center p-3">
                                    <a class="bg-primary iq-sign-btn" href="user_logout.php" role="button">Sign out<i class="ri-login-box-line ml-2"></i></a>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </li>
                  </ul>
               </nav>

            </div>
         </div>