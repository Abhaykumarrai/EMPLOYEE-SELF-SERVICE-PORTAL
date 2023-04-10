<?php
session_start();
error_reporting(0);

include('includes/dbconnection.php');
?>
<!DOCTYPE html>
<html>

<head>
    <title>Fssai Employee self service||Home Page</title>
    <link rel="stylesheet" href="style1.css">


</head>

<body>

    <div class="wrapper">
        <div class="center">
            <div class="logo-fssai">
                <img src="images/fssailogo.png" alt="logo">
            </div>
            <h1>WELCOME TO FSSAI ESS PORTAL</h1>
            <h2>PLEASE SELECT USER TYPE</h2>
            <div class="buttons">
                <a href="admin/login.php">
                    <button>ADMIN</button></a>
                <a href="employee/login.php">
                    <button class="btn">EMPLOYEE</button>

            </div>

        </div>

    </div>


</body>

</html>