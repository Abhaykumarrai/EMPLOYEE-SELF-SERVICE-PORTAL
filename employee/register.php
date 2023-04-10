<?php
session_start();
//error_reporting(0);
include('includes/dbconnection.php');

if (isset($_POST['submit'])) {
   $empname = $_POST['empname'];
   $empemail = $_POST['empemail'];
   $password = md5($_POST['password']);


   $sql = "SELECT ID FROM tblemployee WHERE  EmpEmail=:empemail";
   $query = $dbh->prepare($sql);
   $query->bindParam(':empemail', $empemail, PDO::PARAM_STR);
   $query->execute();
   $results = $query->fetchAll(PDO::FETCH_OBJ);
   if ($query->rowCount() > 0) {    //check --> employee email already exist or not
      echo "<script>alert(' Email  already registered with another employee');</script>";

   } else {
         $sql = "insert into tblemployee(EmpName,EmpEmail,Password)values(:empname,:empemail,:password)";
         $query = $dbh->prepare($sql);
         $query->bindParam(':empname', $empname, PDO::PARAM_STR);
         $query->bindParam(':empemail', $empemail, PDO::PARAM_STR);
         $query->bindParam(':password', $password, PDO::PARAM_STR);
         $query->execute();

         $LastInsertId = $dbh->lastInsertId();
         if ($LastInsertId > 0) {
            echo '<script>alert("Employee detail has been added.")</script>';
            echo "<script>window.location.href ='employee-form.php'</script>";
         } else {
            echo '<script>alert("Something Went Wrong. Please try again")</script>';
         }


      }
   }


?>
<!DOCTYPE html>
<html lang="en">

<head>

   <title> fssai Employee self service || Login Page</title>

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

<body class="inner_page login">
   <div class="full_container">
      <div class="container">
         <div class="center verticle_center full_height">
            <div class="login_section">
               <div class="logo_fssai">
               <img src="images/layout_img/fssailogo.png" alt="logo">
                  <div class="center">
                     <h3> fssai ess Employee Register </h3>
                  </div>
               </div>
               <div class="login_form">
                  <form method="POST" action="">
                     <fieldset>
                        <div class="field">
                           <label class="label_field">EmpNmae</label>
                           <input type="text" class="form-control" placeholder="enter your full name" required="true"
                              name="empname">
                        </div>
                        <div class="field">
                           <label class="label_field">Email</label>
                           <input type="text" class="form-control" placeholder="enter your email" required="true"
                              name="empemail">
                        </div>
                        <div class="field">
                           <label class="label_field">Password</label>
                           <input type="password" class="form-control" placeholder="enter password" name="password"
                              required="true">
                        </div>
                        <div class="field margin_0">
                           <label class="label_field hidden">hidden label</label>
                           <button class="main_bt" name="submit" type="submit">Register</button>
                        </div>
                        <a class="forgot" href="login.php">Login</a>
                        <a style="color:red;" href="../index.php">Home</a>
                     </fieldset>

                  </form>
               </div>
            </div>
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
   <!-- nice scrollbar -->
   <script src="js/perfect-scrollbar.min.js"></script>
   <script>
      var ps = new PerfectScrollbar('#sidebar');
   </script>
   <!-- custom js -->
   <script src="js/custom.js"></script>
</body>

</html>