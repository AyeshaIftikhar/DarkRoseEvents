<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Register User</title>
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="css/sb-admin.css" rel="stylesheet">
</head>

<body class="bg-dark">
<div class="container">
    <div class="card card-register mx-auto mt-5">
    <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a  href='../MainPage.php' style="color:#C03;">MainPage</a>
          </li>
          <li class="breadcrumb-item active">Register</li>
        </ol>
        
      <div class="card-header">Register an Account</div>
      <div class="card-body">
      		<?php
			include '../connection.php';
		
			if(isset($_POST['register'])){
				$check_query="SELECT * FROM user_registration";
				$check_result=mysqli_query($con,$check_query);
				
				$fname=$_REQUEST['first_name'];
				$lname=$_REQUEST['last_name'];
				$email=$_REQUEST['email'];
				$number=$_REQUEST['PhoneNum'];
				$pwd=$_REQUEST['password'];
				$gender=$_REQUEST['gender'];
				$uploadOk=1;
				while($check_row=mysqli_fetch_array($check_result)){
					if($email==$check_row['Email']){
						$uploadOk=0;
						echo '<script type="text/javascript">';
						echo ' alert("Email already exits!")'; 
						echo '</script>'; 
						break;
					}
					
			   }
			   if($uploadOk==1){
				   $query="INSERT INTO user_registration
					(First_Name,Last_Name,Email,PhoneNo,Password,Gender)
					values('$fname','$lname','$email','$number','$pwd','$gender')";
				   $res=mysqli_query($con,$query);
					if($res){header("Location:user_login.php");}
					else{
						echo '<script type="text/javascript">';
						echo ' alert("Something wrong! Try again Later!")'; 
						echo '</script>';
					}
			   }
			}
		?>
        <br>
        <form action="#" method="POST" id="Add_User" name="addUser">
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <div class="form-label-group">
                  <input type="text" id="firstName" name="first_name" class="form-control" placeholder="First name" required autofocus>
                  <label for="firstName">First name</label>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-label-group">
                  <input type="text" id="lastName" name="last_name" class="form-control" placeholder="Last name" required>
                  <label for="lastName">Last name</label>
                </div>
              </div>
            </div>
          </div>
          
          <div class="form-group">
            <div class="form-row">
            <div class="col-md-6">
                <div class="form-label-group">
                    <input type="email" id="inputEmail" name="email" class="form-control"
                             placeholder="Email address" required>
                   <label for="inputEmail">Email address</label>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-label-group">
                  <input type="tel" id="phNum" name="PhoneNum" 
                  placeHolder="Phone Number" class="form-control"
                  pattern="[0]{1}[3]{1}[0-9]{2}[0-9]{7}" maxlength="11" />
                  <label for="phNum">Phone No i.e. 03XXXXXXXXX</label>
                </div>
              </div>
            </div>
          </div>
          
          <div class="form-group">
                <div class="form-label-group">
                	<input type="password" id="inputPassword"  name="password" 
                    	class="form-control" placeholder="Password"
                        maxlength="10" required>
                  <label for="inputPassword">Password</label>
                </div>
          </div>
          
          
          <div class="form-group">
                <div class="form-label-group">
                	<span><b>Gender:</b></span><br>
                    <div class="col-md-3">
                		<input type="radio" id="female" name="gender" value="Female"
                    	class="" > Female
                    </div>
                    <div class="col-md-3">
                    	<input type="radio" id="Male" name="gender" value="Male"
                    	class="" > Male
                    </div>
                    <div class="col-md-6">
                    	<input type="radio" id="not_say" name="gender" value="Hidden"
                    	class="" > Prefer Not to say
                    </div> 
                </div>
            </div>
          <button class="btn btn-primary btn-block" name="register" 
          	style="background-color:#C03;border-color:#C03;">Register</button>
        </form>
        <div class="text-center" >
          <a class="d-block small mt-3" href="user_login.php" style="color:#C03;">Login Page</a>
          <a class="d-block small" href="forget_password.php" 
          	style="color:#C03;">Forgot Password?</a>
        </div>
      </div>
    </div>
  </div>


<?php include 'includes/scripts.php';?>
</body>
</html>