<?php
   include '../connection.php';
   session_start();
   
    $user_check = $_SESSION['user_name'];
	$user_email_check=$_SESSION['user_email'];
   $s_query="select * from user_registration 
   		where First_Name = '$user_check' AND Email='$user_email_check' ";
   $ses_sql = mysqli_query($con,$s_query);
   
   $row = mysqli_fetch_array($ses_sql);
   	
   if(!isset($_SESSION['user_name'])){
      header("location:user_login.php");
      die();
   }
?>