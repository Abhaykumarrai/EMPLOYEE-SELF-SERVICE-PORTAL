<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');

if (isset($_POST['login'])) {
   $empemail = $_POST['empemail'];
   $password = md5($_POST['password']);
   $sql = "SELECT ID,EmpEmail FROM tblemployee WHERE EmpEmail=:empemail and Password=:password";
   $query = $dbh->prepare($sql);
   $query->bindParam(':empemail', $empemail, PDO::PARAM_STR);
   $query->bindParam(':password', $password, PDO::PARAM_STR);
   $query->execute();
   $results = $query->fetchAll(PDO::FETCH_OBJ);
   if ($query->rowCount() > 0) {
      foreach ($results as $result) {
         $_SESSION['etmsempid'] = $result->ID;
         $_SESSION['empemail'] = $result->EmpEmail;

      }


      $_SESSION['login'] = $_POST['empemail'];
      echo "<script type='text/javascript'> document.location ='dashboard.php'; </script>";
   } else {
      echo "<script>alert('Invalid Details');</script>";
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
                     <h3> fssai ess Employee login </h3>
                  </div>
               </div>
               <div class="login_form">
                  <form method="post" name="login">
                     <fieldset>
                        <div class="field">
                           <label class="label_field">EmpEmail</label>
                           <input type="text" class="form-control" placeholder="enter your email" required="true"
                              name="empemail">
                        </div>
                        <div class="field">
                           <label class="label_field">Password</label>
                           <input type="password" class="form-control" placeholder="enter your password" name="password"
                              required="true">
                        </div>
                        <a class="forgot" href="forgot-password.php">Forgotten Password?</a>
                        <div class="field margin_0">
                           <label class="label_field hidden">hidden label</label>
                           <button class="main_bt" name="login" type="submit">Login</button>
                        </div>
                     </fieldset>
                     <a class="forgot" href="employee-form.php">Register</a>
                     <a style="color:red;" href="../index.php">Home</a>
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