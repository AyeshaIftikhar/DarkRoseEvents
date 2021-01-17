<?php 
include '../connection.php';
session_start();
?>
<!DOCTYPE HTML>
<html>
<head>
	<title>Admin Login</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">
  
</head>
<body class="bg-dark">
<div class="container">
    <div class="card card-login mx-auto mt-5">
    <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a  href='../index.php' style="color:#C03;">MainPage</a>
          </li>
          <li class="breadcrumb-item active"></li>
        </ol>

      <div class="card-header">Login</div>
      <div class="card-body">
<?php
if(isset($_POST['login'])){
		$check_query="SELECT * FROM admin";
		$check_result=mysqli_query($con,$check_query);
		
		$email=$_REQUEST['Email'];
		$password=$_REQUEST['password'];
		if($email=="" && $password==""){
			echo '<script type="text/javascript">';
			echo ' alert("Please Fill the Form!")'; 
			echo '</script>'; 
		}
		else if($email==""){
			echo '<script type="text/javascript">';
			echo ' alert("Please enter a valid email!")'; 
			echo '</script>'; 
		}
		else if($password==""){
			echo '<script type="text/javascript">';
			echo ' alert("Password cannot be null!")'; 
			echo '</script>'; 
		}
		else{
			while($check_row=mysqli_fetch_array($check_result)){
				if($email==$check_row['Email'] && $password==$check_row['Password'] ){
					$qry="SELECT First_Name,Email FROM admin 
						WHERE Email='$email' AND Password='$password' ";
					$result=mysqli_query($con,$qry);
					$row=mysqli_fetch_array($result);
					$user= $row['First_Name'];
					$email=$row['Email'];
					$count=mysqli_num_rows($result);
					if($count== 1){
						$_SESSION['user_name']=$user;
						$_SESSION['admin_email']=$email;
						header('Location:index_page.php');
					}
					else{
						echo '<script type="text/javascript">';
						echo ' alert("Sorry! You are not a registered user!")'; 
						echo '</script>'; 
					}
				}
			}
		}
}	
?>
        <form action="#" method="POST" id="admin_login" name="AdminLogin">
          <div class="form-group">
            <div class="form-label-group">
              <input type="email" id="inputEmail" name="Email" class="form-control" placeholder="Email address" required autofocus >
              <label for="inputEmail">Email address</label>
            </div>
          </div>
          <div class="form-group">
            <div class="form-label-group">
              <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password" maxLength="10" required>
              <label for="inputPassword">Password</label>
            </div>
          </div>
          <button class="btn btn-primary btn-block" name="login"  style="background-color:#C03;border-color:#C03;" >Login</button>
        </form>
        <div class="text-center"> 
          <a class="d-block small" href="forgot_password.php" 
          	style="color:#C03;">Forgot Password?</a>
        </div>
      </div>
    </div>
  </div>


<?php
include 'includes/scripts.php';
?>
</body>
</html>
