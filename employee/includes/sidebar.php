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
                        <div class="user_img"><img class="img-responsive" src="images/layout_img/user_img.jpg" alt="#" /></div>
                        <div class="user_info">
                           <?php
$eid=$_SESSION['etmsempid'];
$sql="SELECT EmpName,EmpEmail from  tblemployee where ID=:eid";
$query = $dbh -> prepare($sql);
$query->bindParam(':eid',$eid,PDO::PARAM_STR);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $row)
{               ?>
                           <h6><?php  echo $row->EmpName;?></h6>
                           <p><span class="online_animation"></span> <?php  echo $row->EmpEmail;?></p><?php $cnt=$cnt+1;}} ?>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="sidebar_blog_2">
                  <h4>General</h4>
                  <ul class="list-unstyled components">
                     
                     <li><a href="dashboard.php"><i class="fa fa-dashboard yellow_color"></i> <span>Dashboard</span></a></li>
                     <li><a href="view-system.php"><i class="fa fa-desktop blue2_color"></i> <span>System</span></a></li>
                     <li><a href="view-dsc.php"><i class="fa fa-calculator orange_color"></i> <span>DSC Number</span></a></li>
                     <li><a href="view-email.php"><i class="fa fa-envelope blue2_color"></i> <span>E-mail</span></a></li>
                     <li><a href="view-eoffice.php"><i class="fa fa-building yellow_color"></i> <span>E-Office</span></a></li>
                     


                          
                        </ul>
                     </li>
                  </ul>
               </div>
            </nav>