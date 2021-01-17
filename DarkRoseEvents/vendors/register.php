<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Vendor Registration</title>
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="css/sb-admin.css" rel="stylesheet">
</head>

<body class="bg-dark">
<div class="container">
    <div class="card card-register mx-auto mt-5">
    <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a  href='../index.php' style="color:#C03;">MainPage</a>
          </li>
          <li class="breadcrumb-item active">Register</li>
        </ol>
        
      <div class="card-header">Register an Account</div>
      <div class="card-body">
      		<?php
			include '../connection.php';
			if(isset($_POST['register'])){
				$user_check="SELECT * FROM vendors";
				$user_result=mysqli_query($con,$user_check);
				
				$fname=$_REQUEST['first_name'];
				$lname=$_REQUEST['last_name'];
				$email=$_REQUEST['email'];
				$number=$_REQUEST['PhoneNum'];
				$wtype=$_REQUEST['work'];
				$pwd=$_REQUEST['password'];
				$uploadOk=1;
				
				while($user_row=mysqli_fetch_array($user_result)){
					if($email==$user_row['Email']){
						$uploadOk=0;
						echo '<script type="text/javascript">';
						echo ' alert("Email already exists!")'; 
						echo '</script>'; 
					} 
				}
				if($uploadOk==1){
						$query="INSERT INTO vendors
						(First_Name,Last_Name,Email,PhoneNo,Work_Type,Password)
						values('$fname','$lname','$email','$number','$wtype','$pwd')";
						$res=mysqli_query($con,$query);
						if($res){header("Location:vendor_login.php");}
						else{
							echo '<script type="text/javascript">';
							echo ' alert("Something wrong,Try again Later!")'; 
							echo '</script>'; 
						}
					}
			}
		?>
        <br>
        <form action="#" method="POST" id="Add_vendor" name="addVendor">
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
                  pattern="[0]{1}[3]{1}[0-9]{2}[0-9]{7}" maxlength="11"/>
                  <label for="phNum">Phone No i.e. 03XX XXXXXXX</label>
                </div>
              </div>
            </div>
          </div>
          
  			<div class="form-group">
                <div class="col-md-6">
                	<select class="form-control" aria-label="work_type" name="work">
                    	<option value"" selected> Select Your Work</option>
                    	<option value="Decor">Decore</option>
                        <option value="Car Rental">Car Rental</option>
                        <option value="Venues Arrangement">Venues Arrangment</option>
                        <option value="Photography">Photography</option>
                        <option value="Invitation">Invitation</option>
                    </select> 
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
          
         <button class="btn btn-primary btn-block" name="register" 
          	style="background-color:#C03;border-color:#C03;">Register</button>
        </form>
        <div class="text-center" >
          <a class="d-block small mt-3" href="vendor_login.php" style="color:#C03;">Login Page</a>
          <a class="d-block small" href="forget_password.php" 
          	style="color:#C03;">Forgot Password?</a>
        </div>
      </div>
    </div>
  </div>


<?php include 'includes/scripts.php';?>
</body>
</html>