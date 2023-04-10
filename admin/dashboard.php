<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if (strlen($_SESSION['etmsaid'] == 0)) {
   header('location:logout.php');
} else {



?>
<!DOCTYPE html>
<html lang="en">

<head>

   <title>Fssai Employee Self Service||Dashboard</title>

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
         <?php include_once('includes/sidebar.php'); ?>
         <!-- end sidebar -->
         <!-- right content -->
         <div id="content">
            <!-- topbar -->
            <?php include_once('includes/header.php'); ?>
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
 <!-----------------------------------------------------TOTAL-DEPARTMENT------------------------------------------------------------------------------------------>                 
                  <div class="row column1">
                     <div class="col-md-6 col-lg-3">
                        <div class="full counter_section margin_bottom_30 yellow_bg">
                           <div class="couter_icon">
                              <div>
                                 <i class="fa fa-files-o white_color"></i>
                              </div>
                           </div>
                           <div class="counter_no">
                              <div>
                                 <?php
   $sql1 = "SELECT * from  tbldepartment";
   $query1 = $dbh->prepare($sql1);
   $query1->execute();
   $results1 = $query1->fetchAll(PDO::FETCH_OBJ);
   $totdept = $query1->rowCount();
                                    ?><a href="manage-dept.php">
                                    <p class="total_no ">
                                       <?php echo htmlentities($totdept); ?>
                                    </p>
                                    <p class="head_couter" style="color:#fff !important">Total Department</p>
                                 </a>
                              </div>
                           </div>
                        </div>
                     </div>
 <!-------------------------------------------------------TOTAL-EMPLOYEE--------------------------------------------------------------------------------------->    

                     <div class="col-md-6 col-lg-3">
                        <div class="full counter_section margin_bottom_30 blue1_bg">
                           <div class="couter_icon">
                              <div>
                                 <i class="fa fa-users white_color"></i>
                              </div>
                           </div>
                           <div class="counter_no">
                              <div>
                                 <?php
   $sql2 = "SELECT * from  tblemployee";
   $query2 = $dbh->prepare($sql2);
   $query2->execute();
   $results2 = $query2->fetchAll(PDO::FETCH_OBJ);
   $totemp = $query2->rowCount();
                                    ?><a href="manage-employee.php">
                                    <p class="total_no">
                                       <?php echo htmlentities($totemp); ?>
                                    </p>
                                    <p class="head_couter" style="color:#fff">Total Employees</p>
                                 </a>
                              </div>
                           </div>
                        </div>
                     </div>

 <!---------------------------------------------------------ASSIGNED-DSC------------------------------------------------------------------------------------->    

                     <div class="col-md-6 col-lg-3">
                        <div class="full counter_section margin_bottom_30 red_bg">
                           <div class="couter_icon">
                              <div>
                                 <i class="fa fa-calculator white_color"></i>
                              </div>
                           </div>
                           <div class="counter_no">
                              <div>
                                 <?php

   $sql3 = "SELECT * from  tbldscno";
   $query3 = $dbh->prepare($sql3);
   $query3->bindParam(':eid', $eid, PDO::PARAM_STR);
   $query3->execute();
   $results3 = $query3->fetchAll(PDO::FETCH_OBJ);
   $inprotask = $query3->rowCount();
                                     ?><a href="manage-dscno.php">
                                    <p class="total_no">
                                       <?php echo htmlentities($inprotask); ?>
                                    </p>
                                    <p class="head_couter" style="color:#fff">Assigned DSC</p>
                                 </a>
                              </div>
                           </div>
                        </div>
                     </div>

 <!--------------------------------------------------------NEW-EMPLOYEE-------------------------------------------------------------------------------------->    

                     <div class="col-md-6 col-lg-3">
                        <div class="full counter_section margin_bottom_30 green_bg">
                           <div class="couter_icon">
                              <div>
                                 <i class="fa fa-users white_color"></i>
                              </div>
                           </div>
                           <div class="counter_no">
                              <div>
                                 <?php
   $sql4 = "SELECT * from  tblemployee ORDER BY ID DESC LIMIT 3"; 
   $query4 = $dbh->prepare($sql4);
   $query4->bindParam(':eid', $eid, PDO::PARAM_STR);
   $query4->execute();
   $results4 = $query4->fetchAll(PDO::FETCH_OBJ);
   $comptask = $query4->rowCount();
                                    ?><a href="manage-employee.php">
                                    <p class="total_no"> 
                                       <?php echo htmlentities($comptask); ?>
                                    </p>
                                    <p class="head_couter" style="color:#fff">New employee</p>
                                 </a>
                              </div>
                           </div>
                        </div>
                     </div>
 <!--------------------------------------------------------ASSIGNED-EMAIL-------------------------------------------------------------------------------------->    

                     <div class="col-md-6 col-lg-3">
                        <div class="full counter_section margin_bottom_30 green_bg">
                           <div class="couter_icon">
                              <div>
                                 <i class="fa fa-envelope white_color"></i>
                              </div>
                           </div>
                           <div class="counter_no">
                              <div>
                                 <?php
   $sql5 = "SELECT * from  tblemail";
   $query5 = $dbh->prepare($sql5);
   $query5->bindParam(':eid', $eid, PDO::PARAM_STR);
   $query5->execute();
   $results5 = $query5->fetchAll(PDO::FETCH_OBJ);
   $comptask = $query5->rowCount();
                                    ?><a href="manage-email.php">
                                    <p class="total_no">
                                       <?php echo htmlentities($comptask); ?>
                                    </p>
                                    <p class="head_couter" style="color:#fff">Assigned E-Mail</p>
                                 </a>
                              </div>
                           </div>
                        </div>
                     </div>
 <!---------------------------------------------------------ASSIGNED-EOFFICE------------------------------------------------------------------------------------->    

                     <div class="col-md-6 col-lg-3">
                        <div class="full counter_section margin_bottom_30 red_bg">
                           <div class="couter_icon">
                              <div>
                                 <i class="fa fa-building white_color"></i>
                              </div>
                           </div>
                           <div class="counter_no">
                              <div>
                                 <?php
   $sql6 = "SELECT * from  tbleoffice";
   $query6 = $dbh->prepare($sql6);
   $query6->bindParam(':eid', $eid, PDO::PARAM_STR);
   $query6->execute();
   $results6 = $query6->fetchAll(PDO::FETCH_OBJ);
   $comptask = $query6->rowCount();
                                    ?><a href="manage-eoffice.php">
                                    <p class="total_no">
                                       <?php echo htmlentities($comptask); ?>
                                    </p>
                                    <p class="head_couter" style="color:#fff">Assigned E-Office</p>
                                 </a>
                              </div>
                           </div>
                        </div>
                     </div>

 <!-----------------------------------------------------------ASSIGNED-SYSTEM---------------------------------------------------------------------------------->    
                     <div class="col-md-6 col-lg-3">
                        <div class="full counter_section margin_bottom_30 yellow_bg">
                           <div class="couter_icon">
                              <div>
                                 <i class="fa fa-desktop white_color"></i>
                              </div>
                           </div>
                           <div class="counter_no">
                              <div>
                                 <?php
   $sql7 = "SELECT * from  tblsystem";
   $query7 = $dbh->prepare($sql7);
   $query7->bindParam(':eid', $eid, PDO::PARAM_STR);
   $query7->execute();
   $results7 = $query7->fetchAll(PDO::FETCH_OBJ);
   $comptask = $query7->rowCount();
                                    ?><a href="manage-system.php">
                                    <p class="total_no">
                                       <?php echo htmlentities($comptask); ?>
                                    </p>
                                    <p class="head_couter" style="color:#fff">Assigned System</p>
                                 </a>
                              </div>
                           </div>
                        </div>
                     </div>

 <!------------------------------------------------------------END---------------------------------------------------------------------------------->    





                  </div>
                </div>
               <!-- footer -->
               <?php include_once('includes/footer.php'); ?>
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

</html>
<?php } ?>