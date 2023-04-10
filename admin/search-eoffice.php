<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if (strlen($_SESSION['etmsaid']==0)) {
  header('location:logout.php');
  } else{

// Code for deletion
if(isset($_GET['delid']))
{
$rid=intval($_GET['delid']);
$sql="delete from tbleoffice where ID=:rid";
$query=$dbh->prepare($sql);
$query->bindParam(':rid',$rid,PDO::PARAM_STR);
$query->execute();
 echo "<script>alert('E-Office Deleted');</script>"; 
  echo "<script>window.location.href = 'manage-eoffice.php'</script>";     


}

  ?>
<!DOCTYPE html>
<html lang="en">
   <head>
      
      <title>Fssai Employee self service|| Manage E-office</title>
   
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
      <!-- fancy box js -->
      <link rel="stylesheet" href="css/jquery.fancybox.css" />
      
   </head>
   <body class="inner_page tables_page">
      <div class="full_container">
         <div class="inner_container">
            <!-- Sidebar  -->
          <?php include_once('includes/sidebar.php');?>
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
                              <h2>Manage E-Office</h2>
                           </div>
                        </div>
                     </div>
                     <!-- row -->
                     <div class="row">
                     
                      
                        <div class="col-md-12">
                           <div class="white_shd full margin_bottom_30">
                              <div class="full graph_head">
                                 <div class="heading1 margin_0">
                                    <h2>Search Assigned E-Office By Employee Name</h2>
                                 </div>
                              </div>
                              
                              <div class="table_section padding_infor_info">
                                 <h4>Search Assigned E-Office By Employee Name. </h4>
                 <br>
               <form id="basic-form" method="post">
                                <div class="form-group">
                                   
                                    <input id="searchdata" type="text" name="searchdata" required="true" class="form-control" placeholder="Enter Employee Name"></div>
                                
                              
                                <button type="submit" class="btn btn-primary" name="search" id="submit">Search</button>
                            </form>
                                 <div class="table-responsive-sm">
                                    <?php
if(isset($_POST['search']))
{ 

$sdata=$_POST['searchdata'];
  ?>
  <h4 align="center">Result against "<?php echo $sdata;?>" keyword </h4>
                                    <table class="table table-bordered">
                                       <thead>
                                          <tr>
                                          <th>S.No</th>
                                             <th>Department Name</th>
                                             <th>Employee Name</th>
                                             <th>E-Office</th>
                                             <th>Start Date</th>
                                             <th>End Date</th>
                                          </tr>
                                       </thead>
                                       <tbody>
                                       <?php
$sql=$sql="SELECT tbleoffice.ID as tid,tbleoffice.DeptID,tbleoffice.Assignto,tbleoffice.E_Office,tbleoffice.StartDate,tbleoffice.EndDate,tbldepartment.DepartmentName,tbldepartment.ID as did,tblemployee.EmpName,tblemployee.EmpId from tbleoffice join tbldepartment on tbldepartment.ID=tbleoffice.DeptID join tblemployee on tblemployee.ID=tbleoffice.Assignto  where tblemployee.EmpName like '%$sdata%'";
$query = $dbh -> prepare($sql);
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);

$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $row)
{               ?> 
                                          <tr>
                                          <tr>
                                              
                                             <td><?php echo htmlentities($cnt);?></td>
                                             <td><?php  echo htmlentities($row->DepartmentName);?></td>
                                             <td><?php  echo htmlentities($row->EmpName);?>(<?php  echo htmlentities($row->EmpId);?>)</td>
                                             <td style="color:red ;"><?php  echo htmlentities($row->E_Office);?></td>
                                             <td><?php  echo htmlentities($row->StartDate);?></td>
                                             <td><?php  echo htmlentities($row->EndDate);?></td>
                                             <td>
                                                <a href="manage-eoffice.php?delid=<?php echo ($row->tid);?>" onclick="return confirm('Do you really want to Delete ?');" class="btn btn-danger">Delete</a></td>
                                          </tr>
                                          <?php 
$cnt=$cnt+1;
} } else { ?>
  <tr>
    <td colspan="8"> No record found against this search</td>

  </tr>
  <?php } }?>

                                         
                                       </tbody>
                                    </table>
                                 </div>
                              </div>
                           </div>
                        </div>
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
      <!-- fancy box js -->
      <script src="js/jquery-3.3.1.min.js"></script>
      <script src="js/jquery.fancybox.min.js"></script>
      <!-- custom js -->
      <script src="js/custom.js"></script>
      <!-- calendar file css -->    
      <script src="js/semantic.min.js"></script>
   </body>
</html><?php } ?>