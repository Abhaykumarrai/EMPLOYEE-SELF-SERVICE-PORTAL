<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if (strlen($_SESSION['etmsempid']==0)) {
  header('location:logout.php');
  } else{



  ?>
<!DOCTYPE html>
<html lang="en">
   <head>
      
      <title>fssai Employee seif service||Dashboard</title>
      
      <link rel="stylesheet" href="css/bootstrap.min.css" />
      <!-- site css -->
      <link rel="stylesheet" href="style.css" />
      <!-- responsive css -->
      <link rel="stylesheet" href="css/responsive.css" />
      <!-- color css -->
      <link rel="stylesheet" href="css/colors.css" />
      <!-- select bootstrap -->
      <link rel="stylesheet" href="css/bootstrap-select.css" />
      <!-- scrollbar css -->
      <link rel="stylesheet" href="css/perfect-scrollbar.css" />
      <!-- custom css -->
      <link rel="stylesheet" href="css/custom.css" />
      
   </head>
   <body class="dashboard dashboard_1">
      <div class="full_container">
         <div class="inner_container">
            <!-- Sidebar  -->
          <?php include_once('includes/sidebar.php');?>
            <!-- end sidebar -->
            <!-- right content -->
            <div id="content">
               <!-- topbar -->
             <?php include_once('includes/header.php');?>
               <!-- end topbar -->
               <!-- dashboard inner -->
               <div class="midde_cont">
                  <div class="container-fluid">
                     <div class="row column_title">
                        <div class="col-md-12">
                           <div class="page_title">
                              <h2>Dashboard</h2>
                           </div>
                        </div>
                     </div>

 <!------------------------------------------------------------MY-PROFILE------------------------------------------------------------------------------------------>                    
                     <div class="row column1">
                        <div class="col-md-6 col-lg-3">
                           <div class="full counter_section margin_bottom_30 red_bg">
                              <div class="couter_icon">
                                 <div> 
                                    <i class="fa fa-users white_color"></i>
                                 </div>
                              </div>
                              <div class="counter_no">
                                 <div>
                                    <a href="profile.php">
                                    <p class="head_couter" style="color:#fff !important" >My Profile</p>
                                 </a>
                                 </div>
                              </div>
                           </div>
                        </div>
                        
<!-------------------------------------------------------------SYSTEM-ASSIGNED--------------------------------------------------------------------------------------------->
                        <div class="col-md-6 col-lg-3">
                           <div class="full counter_section margin_bottom_30 green_bg">
                              <div class="couter_icon">
                                 <div> 
                                    <i class="fa fa-desktop white_color"></i>
                                 </div>
                              </div>
                              <div class="counter_no">                                
                                 <div><a href="view-system.php">
                                    <p class="head_couter" style="color:#fff !important">System Assigned</p>
                                 </a>
                                 </div>
                              </div>
                           </div>
                        </div>

<!-------------------------------------------------------------EMAIL-ASSIGNED------------------------------------------------------------------------------------------------->

                        <div class="col-md-6 col-lg-3">
                           <div class="full counter_section margin_bottom_30 blue1_bg">
                              <div class="couter_icon">
                                 <div> 
                                    <i class="fa fa-envelope white_color"></i>
                                 </div>
                              </div>
                              <div class="counter_no">
                                 <div><a href="view-email.php">
                                    <p class="head_couter" style="color:#fff !important">Email Assigned</p>
                                 </a>
                                 </div>
                              </div>
                           </div>
                        </div>

<!--------------------------------------------------------------DSC-NUMBER----------------------------------------------------------------------------------------------------->
                        <div class="col-md-6 col-lg-3">
                           <div class="full counter_section margin_bottom_30 yellow_bg">
                              <div class="couter_icon">
                                 <div> 
                                    <i class="fa fa-calculator white_color"></i>
                                 </div>
                              </div>
                              <div class="counter_no">
                                 <div><a href="view-dsc.php">
                                    <p class="head_couter" style="color:#fff !important">Assigned DSC Number</p>
                                 </a>
                                 </div>
                              </div>
                           </div>
                        </div>

<!-------------------------------------------------------------E-OFFICE--------------------------------------------------------------------------------------------------------------->                        

                        <div class="col-md-6 col-lg-3">
                           <div class="full counter_section margin_bottom_30 orange_bg">
                              <div class="couter_icon">
                                 <div> 
                                    <i class="fa fa-building white_color"></i>
                                 </div>
                              </div>
                              <div class="counter_no">
                                 <div><a href="view-eoffice.php">
                                    <p class="head_couter" style="color:#fff !important">Assigned E-Office</p>
                                 </a>
                                 </div>
                              </div>
                           </div>
                        </div>

<!----------------------------------------------------------------END------------------------------------------------------------------------------------------------------------->




                        
                  <!-- footer -->
                  <?php include_once('includes/footer.php');?>
               </div>
               <!-- end dashboard inner -->
            </div>
         </div>
      </div>
      <!-- jQuery -->
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.min.js"></script>
      <!-- wow animation -->
      <script src="js/animate.js"></script>
      <!-- select country -->
      <script src="js/bootstrap-select.js"></script>
      <!-- owl carousel -->
      <script src="js/owl.carousel.js"></script> 
      <!-- chart js -->
      <script src="js/Chart.min.js"></script>
      <script src="js/Chart.bundle.min.js"></script>
      <script src="js/utils.js"></script>
      <script src="js/analyser.js"></script>
      <!-- nice scrollbar -->
      <script src="js/perfect-scrollbar.min.js"></script>
      <script>
         var ps = new PerfectScrollbar('#sidebar');
      </script>
      <!-- custom js -->
      <script src="js/custom.js"></script>
      <script src="js/chart_custom_style1.js"></script>
   </body>
</html><?php } ?>