<?php
if(isset($_POST['submit']))

$empid=$_POST['empid'];
$empname=$_POST['empname'];
$empemail=$_POST['empemail'];
$password=md5($_POST['password']);

$to='';
$subject='You Have Succesfully Register on Fssai Ess Portal';
$message="Employee ID: ".$empid."\n"."Employee Nmae: ".$empname."\n"."Employee Email: ".$empemail."\n"."Password: ".$password."\n";

$message2="Click here to update your profile Or to visit on employee dashboard :-"
?>