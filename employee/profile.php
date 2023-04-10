<?php session_start();
//error_reporting(0);

include('includes/dbconnection.php');

    if(isset($_POST['submit']))
  {
   
   $deptname=$_POST['deptname'];
   $designation=$_POST['designation'];
   $emptype=$_POST['emptype'];
   $empid=$_POST['empid'];
   $empname=$_POST['empname'];
   $empemail=$_POST['empemail'];
   $empcontno=$_POST['empcontno'];
   $empdob=$_POST['empdob'];
   $empadd=$_POST['empadd'];
   $reportingofficername=$_POST['reportingofficername'];
   $dateofretirement=$_POST['dateofretirement'];
   $leaveapproving=$_POST['leaveapproving'];
   $leavecontroling =$_POST['leavecontroling'];
   $leavereporting =$_POST['leavereporting'];
   $empdoj=$_POST['empdoj'];
   $desc=$_POST['desc'];
   
  $sql="update tblemployee set EmpName=:empname,EmpDateofbirth=:empdob,EmpAddress=:empadd,Description=:designation where ID=:eid";
     $query = $dbh->prepare($sql);
$query->bindParam(':empname',$empname,PDO::PARAM_STR);
$query->bindParam(':empdob',$empdob,PDO::PARAM_STR);
$query->bindParam(':empadd',$empadd,PDO::PARAM_STR);
$query->bindParam(':designation',$designation,PDO::PARAM_STR);
$query->bindParam(':eid',$etmseid,PDO::PARAM_STR);
$query-> execute();
    echo '<script>alert("Your profile has been updated")</script>';
    echo "<script>window.location.href ='profile.php'</script>";
  }
  ?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <title> fssai Employee Self Service || Profile</title>
    
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
      <!-- calendar file css -->
      <link rel="stylesheet" href="js/semantic.min.css" />
     
   </head>
   <body class="inner_page general_elements">
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
                              <h2>Employee Profile</h2>
                           </div>
                        </div>
                     </div>
                     <!-- row -->
                     <div class="row column8 graph">
                      
                        <div class="col-md-12">
                           <div class="white_shd full margin_bottom_30">
                              <div class="full graph_head">
                                 <div class="heading1 margin_0">
                                    <h2>Profile</h2>
                                 </div>
                              </div>
                              <div class="full progress_bar_inner">
                                 <div class="row">
                                    <div class="col-md-12">
                                       <div class="full">
                                          <div class="padding_infor_info">
                                             <div class="alert alert-primary" role="alert">
                                                <form method="post">
                        
                            <?php
                            
$etmseid=$_SESSION['etmsempid'];
$sql="SELECT tbldepartment.ID as did, tbldepartment.DepartmentName,tblemployee.ID as eid,tblemployee.DepartmentID,tblemployee.EmpType,tblemployee.EmpName,tblemployee.EmpId,tblemployee.EmpEmail,tblemployee.EmpContactNumber,tblemployee.Designation,tblemployee.ReportingOfficerName,tblemployee.DateOfrRtirement,tblemployee.LeaveApproving,tblemployee.LeaveControling,tblemployee.LeaveReporting,tblemployee.EmpDateofjoining,tblemployee.EmpDateofbirth,tblemployee.EmpAddress,tblemployee.Description,tblemployee.ProfilePic,tblemployee.CreationDate from tblemployee join tbldepartment on tbldepartment.ID=tblemployee.DepartmentID where tblemployee.ID=:eid";
$query = $dbh -> prepare($sql);
$query->bindParam(':eid',$etmseid,PDO::PARAM_STR);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $row)

{               ?>
                           <fieldset>
                            
                           <div class="field">
                              <label class="label_field">Department Name</label>
                              <select type="text" name="deptname" value="" class="form-control" readonly='true'>
                                 <option value="<?php echo htmlentities($row->DepartmentID);?>"><?php echo htmlentities($row->DepartmentName);?></option>
                              </select>
                           </div>
                           <br>


                           <div class="field">
                              <label class="label_field">Employee Designation</label>
                              <select type="text" name="designation" value="" class="form-control" readonly='true'>
                                 <option value="<?php echo htmlentities($row->DesignationID);?>"><?php echo htmlentities($row->Designation);?></option>
                              </select>
                           </div>
                           <br>

                           <div class="field">
                              <label class="label_field">Employee Type</label>
                              <select type="text" name="emptype" value="" class="form-control" readonly='true'>
                                 <option value="<?php echo htmlentities($row->EmpType);?>"><?php echo htmlentities($row->EmpType);?></option>
                              </select>
                           </div>
                           <br>


                           <div class="field">
                              <label class="label_field">Employee ID</label>
                              <input type="text" name="empid" value="<?php echo ($row->EmpId);?>" class="form-control" readonly='true'>
                           </div>
                          

                           <br>
                           <div class="field">
                              <label class="label_field">Employee Name</label>
                              <input type="text" name="empname" value="<?php echo htmlentities($row->EmpName);?>" class="form-control" required='true'>
                           </div>
                          

                           <br>
                           <div class="field">
                              <label class="label_field">Employee Email</label>
                              <input type="email" name="empemail" value="<?php echo htmlentities($row->EmpEmail);?>" class="form-control" readonly='true'>
                           </div>
                          

                           <br>
                           <div class="field">
                              <label class="label_field">Employee Contact Number</label>
                              <input type="text" name="empcontno" value="<?php echo htmlentities($row->EmpContactNumber);?>" class="form-control" readonly='true' maxlength="10" pattern="[0-9]+">
                           </div>
                          <br>
                           
                           <div class="field">
                              <label class="label_field">Employee Date of Birth</label>
                              <input type="date" name="empdob" value="<?php echo htmlentities($row->EmpDateofbirth);?>" class="form-control" required='true'>
                           </div>
                          

                           <br>
                           <div class="field">
                              <label class="label_field">Empoyee Address</label>
                              <textarea type="text" name="empadd" class="form-control" required='true'><?php echo htmlentities($row->EmpAddress);?></textarea>
                           </div>
                          

                           <br>
                           <div class="field">
                              <label class="label_field">Empoyee Date of Joining</label>
                              <input type="date" name="empdoj" value="<?php echo htmlentities($row->EmpDateofjoining);?>" class="form-control" readonly='true'>
                           </div>
                           <br>

                           <div class="field">
                              <label class="label_field">Reporting Officer Name</label>
                              <input type="text" name="reportingofficername" value="<?php echo htmlentities($row->ReportingOfficerName);?>" class="form-control" readonly='true'>
                           </div>
                           <br>

                           <div class="field">
                              <label class="label_field">Date Of Retirement / Date Of Deputation Period Ends</label>
                              <input type="text" name="dateofretirement" value="<?php echo htmlentities($row->DateOfrRtirement);?>" class="form-control" readonly='true'>
                           </div>
                           <br>

                           <div class="field">
                              <label class="label_field">Leave Approving Authority </label>
                              <input type="text" name="leaveapproving" value="<?php echo htmlentities($row->LeaveApproving);?>" class="form-control" readonly='true'>
                           </div>
                           <br>

                           <div class="field">
                              <label class="label_field">Leave Controlilng </label>
                              <input type="text" name="leavecontroling" value="<?php echo htmlentities($row->LeaveControling);?>" class="form-control" readonly='true'>
                           </div>
                           <br>

                           <div class="field">
                              <label class="label_field">Leave Reporting Officer Name</label>
                              <input type="text" name="leavereporting" value="<?php echo htmlentities($row->LeaveReporting);?>" class="form-control" readonly='true'>
                           </div>
                           <br>


                           <div class="field">
                              <label class="label_field">Remark(if any)</label>
                              <textarea type="text" name="desc"  class="form-control" required='true'><?php echo htmlentities($row->Description);?></textarea>
                           </div>
                          

                           <br>
                         
                           <div class="field">
                              <label class="label_field">Employee Pic</label>
                              <img src="../admin/images/<?php echo $row->ProfilePic;?>" width="100" height="100" value="<?php  echo $row->ProfilePic;?>"><a href="changeimage.php?editid=<?php echo $row->eid;?>"> &nbsp; Edit Image</a>
                           </div>

                           <br>
                          <?php $cnt=$cnt+1;}}  ?>

                           <br>
                           <div class="field margin_0">
                              <label class="label_field hidden">hidden label</label>
                              <button class="main_bt" type="submit" name="submit" id="submit">Update</button>
                           </div>
                        </fieldset>
                     </form></div>
                                            
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <!-- funcation section -->
                     
                     </div>
                  </div>
                  <!-- footer -->
                 <?php include_once('includes/footer.php');?>
               </div>
               <!-- end dashboard inner -->
            </div>
         </div>
         <!-- model popup -->
    
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
      <!-- calendar file css -->    
      <script src="js/semantic.min.js"></script>
   </body>
</html><?php ?>