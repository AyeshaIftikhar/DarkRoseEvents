<?php
   include '../connection.php';
   //if($con){echo "done";}
   session_start();
   
   $user_check = $_SESSION['user_name'];
   $sqry="select * from admin where First_Name = '$user_check' ";
   $ses_sql = mysqli_query($con,$sqry);
   $row = mysqli_fetch_array($ses_sql);
   $login_session = $row['First_Name'];
   
   if(!isset($_SESSION['user_name'])){
      header("location:admin_login.php");
      die();
   }
?>