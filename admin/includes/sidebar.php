 <nav id="sidebar">
               <div class="sidebar_blog_1">
                  <div class="sidebar-header">
                     <div class="logo_section">
                        <a href="dashboard.php"><img class="logo_icon img-responsive" src="images/layout_img/fssailogo.png" alt="#" /></a>
                     </div>
                  </div>
                  <div class="sidebar_user_info">
                     <div class="icon_setting"></div>
                     <div class="user_profle_side">
                        <div class="user_img"><img class="img-responsive" src="images/user_img.jpg" alt="#" /></div>
                        <div class="user_info">
                           <?php
$aid=$_SESSION['etmsaid'];
$sql="SELECT AdminName,Email from  tbladmin where ID=:aid";
$query = $dbh -> prepare($sql);
$query->bindParam(':aid',$aid,PDO::PARAM_STR);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $row)
{               ?>
                           <h6><?php  echo $row->AdminName;?></h6>
                           <p><span class="online_animation"></span> <?php  echo $row->Email;?></p><?php $cnt=$cnt+1;}} ?>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="sidebar_blog_2">
                  <h4>General</h4>
                  <ul class="list-unstyled components">

<!------------------------------------------------------------DEPARTMENT---------------------------------------------------------------------------------->                                  
                    
                     <li><a href="dashboard.php"><i class="fa fa-dashboard yellow_color"></i> <span>Dashboard</span></a></li>
                     <li class="active">
                        <a href="#dashboard1" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-files-o orange_color"></i> <span>Department</span></a>
                        <ul class="collapse list-unstyled" id="dashboard1">
                           <li>
                              <a href="add-dept.php">> <span>Add</span></a>
                           </li>
                           <li>
                              <a href="manage-dept.php">> <span>Manage</span></a>
                           </li>
                        </ul>
                     </li>

<!---------------------------------------------------------------DESIGNATION------------------------------------------------------------------------------->  

                     <li class="active">
                        <a href="#desig" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-level-up orange_color"></i> <span>Designation</span></a>
                        <ul class="collapse list-unstyled" id="desig">
                           <li>
                              <a href="add-designation.php">> <span>Add</span></a>
                           </li>
                           <li>
                              <a href="manage-designation.php">> <span>Manage</span></a>
                           </li>
                        </ul>
                     </li>

<!----------------------------------------------------------------EMPLOYEE-TYPE------------------------------------------------------------------------------>                       

                     <li class="active">
                        <a href="#emptyp" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-users blue2_color"></i> <span>Employee Type</span></a>
                        <ul class="collapse list-unstyled" id="emptyp">
                           <li>
                              <a href="add-emptype.php">> <span>Add</span></a>
                           </li>
                           <li>
                              <a href="manage-emptype.php">> <span>Manage</span></a>
                           </li>
                        </ul>
                     </li>

<!---------------------------------------------------------------------ADD-EMPLOYEE------------------------------------------------------------------------->                       

                     <li>
                        <a href="#element" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-user-plus yellow_color"></i> <span>Add Employee</span></a>
                        <ul class="collapse list-unstyled" id="element">
                           <li><a href="add-employee.php">> <span>Add Employee</span></a></li>
                           <li><a href="manage-employee.php">> <span>Manage Employee</span></a></li>
                           
                        </ul>
                     </li>
 <!-------------------------------------------------------------------ASSIGN-SYSTEM--------------------------------------------------------------------------->                      

                     <li>
                        <a href="#apps" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-desktop blue2_color"></i> <span>Assign System</span></a>
                        <ul class="collapse list-unstyled" id="apps">
                           <li><a href="add-system.php">> <span>Add System</span></a></li>
                           <li><a href="manage-system.php">> <span>Manage System</span></a></li>
                           <li><a href="search-system.php">> <span>Search System</span></a></li>
                          
                        </ul>
                     </li>
                    
<!---------------------------------------------------------------------ASSIGN-DSC------------------------------------------------------------------------->  

                     <li>
                        <a href="#apps1" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-calculator orange_color"></i> <span>Assign DSC Number</span></a>
                        <ul class="collapse list-unstyled" id="apps1">
                           <li><a href="add-dscno.php">> <span>Add DSC Number</span></a></li>
                           <li><a href="manage-dscno.php">> <span>Manage DSC Number</span></a></li>
                           <li><a href="search-dscno.php">> <span>Search DSC </span></a></li>
                          
                        </ul>
                     </li>
<!------------------------------------------------------------------------ASSIGN-E-OFFICE---------------------------------------------------------------------->  


                     <li>
                        <a href="#apps2" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-building yellow_color"></i> <span>Assign E-OFFICE</span></a>
                        <ul class="collapse list-unstyled" id="apps2">
                           <li><a href="add-eoffice.php">> <span>Add E-OFFICE</span></a></li>
                           <li><a href="manage-eoffice.php">> <span>Manage E-OFFICE</span></a></li>
                           <li><a href="search-eoffice.php">> <span>Search E-Office</span></a></li>
                          
                        </ul>
                     </li>
                    
<!----------------------------------------------------------------------ASSIGN-E-MAIL------------------------------------------------------------------------>  

                     <li>
                        <a href="#apps3" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-envelope blue2_color"></i> <span>Assign E-Mail</span></a>
                        <ul class="collapse list-unstyled" id="apps3">
                           <li><a href="add-email.php">> <span>Add E-Mail</span></a></li>
                           <li><a href="manage-email.php">> <span>Manage E-Mail</span></a></li>
                           <li><a href="search-email.php">> <span>Search E-mail</span></a></li>
                          
                        </ul>
                     </li>

<!---------------------------------------------------------------------PAGES------------------------------------------------------------------------->                      
                    
                     <li class="active">
                        <a href="#additional_page" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-clone yellow_color"></i> <span> Pages</span></a>
                        <ul class="collapse list-unstyled" id="additional_page">
                           <li>
                              <a href="aboutus.php">> <span>User Manual</span></a>
                           </li>
                           <li>
                              <a href="contactus.php">> <span>Contact Us</span></a>
                           </li>
                          
 <!----------------------------------------------------------------SEARCH-EMPLOYEE------------------------------------------------------------------------------>                            
                        </ul>
                     </li>
                     <li><a href="search-employee.php"><i class="fa fa-search purple_color2"></i> <span>Search Employee</span></a></li>


<!----------------------------------------------------------------SEARCH-SYSTEM------------------------------------------------------------------------------>     

                     <li><a href="search-system.php"><i class="fa fa-search yellow_color"></i> <span>Search System</span></a></li>
                     
                    
                  </ul>
               </div>
            </nav>