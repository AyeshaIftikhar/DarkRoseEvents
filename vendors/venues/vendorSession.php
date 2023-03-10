<?php
   include '\xampp\htdocs\project\connection.php';
   session_start();
   
    $user_check = $_SESSION['user_name'];
	$work_check=$_SESSION['work_type'];
   $sqry="select * from vendors
   	 where First_Name = '$user_check' AND Work_Type='$work_check' ";
   $ses_sql = mysqli_query($con,$sqry);
   
   $row = mysqli_fetch_array($ses_sql);
   
   if(!isset($_SESSION['user_name'])){
      header("location:vendor_login.php");
      die();
   }
?>