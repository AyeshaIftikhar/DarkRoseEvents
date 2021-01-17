<!DOCTYPE html>
<html lang="en">
<?php include '../connection.php'; ?>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>User-Forgot Password</title>
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="css/sb-admin.css" rel="stylesheet">
</head>

<body class="bg-dark">
<div class="container">
    <div class="card card-login mx-auto mt-5">
    	<!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a  href='../MainPage.php' style="color:#C03;">MainPage</a>
          </li>
          <li class="breadcrumb-item ">
          	<a  href='#' style="color:#C03;">User Login</a>
          </li>
          <li class="breadcrumb-item active">Forgot Password</li>
        </ol>
        
        
        
      <div class="card-header">Reset Password</div>
      <div class="card-body">
      		<?php 
				
				if(isset($_POST['reset'])){
					$email=$_REQUEST['email']; //echo $email;
					$email_query="SELECT * FROM user_registration WHERE Email='$email'";
					$qrun=mysqli_query($con,$email_query);
					$count=mysqli_num_rows($qrun);
					if($count==1){
						$row=mysqli_fetch_array($qrun);
						$password=$row['Password'];
						$to=$row['Email'];
						$subject="Your Recovered Password";
						$message="Please use this password to login you account.
									Your password is:".$password;
						$from="darkroseevents@gmail.com";
						$headers="MIME-Version: 1.0" . "\r\n";
						$headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";
						$headers .= "From: $from" . "\r\n";
						if(mail($to,$subject,$message,$headers)){
							echo '<script type="text/javascript">';
							echo ' alert("Password Sent on your email!")'; 
							echo '</script>';
						}
						else{
							echo '<script type="text/javascript">';
							echo ' alert("Something wrong! Try again Later!")'; 
							echo '</script>';
						}
					}
					else{
						echo '<script type="text/javascript">';
						echo ' alert("Sorry,Email doesnot exists in Database!")'; 
						echo '</script>';
					}
				}
				
				?>
			<div class="text-center mb-4">
          <h4>Forgot your password?</h4>
          <p>Enter your email address and we will send you your recent password.</p>
        </div>
        <form action="#" method="post" name="reset_password" id="rest_oass">
          <div class="form-group">
            <div class="form-label-group">
              <input type="email" id="inputEmail" name="email" class="form-control" placeholder="Enter email address" required autofocus>
              <label for="inputEmail">Enter email address</label>
            </div>
          </div>
          <button class="btn btn-primary btn-block" name="reset"
          	style="background-color:#C03;border-color:#C03;"
          >Reset Password</button>
        </form>
        <div class="text-center">
          <a class="d-block small mt-3" href="register.php" style="color:#C03;">Register an Account</a>
          <a class="d-block small" href="user_login.php" style="color:#C03;">Login Page</a>
        </div>
      </div>
    </div>
  </div>
<?php include 'includes/scripts.php'; ?>
</body>
</html>