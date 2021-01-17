<?php 
include 'AdminSession.php';
include 'includes/header.php';
include 'includes/navBars.php';
include 'includes/sidebar.php';
?>
<div class="container">
    <div class="card card-register mx-auto mt-5">
    <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a  href='#' style="color:#C03;">DashBoard</a>
          </li>
          <li class="breadcrumb-item active"></li>
        </ol>
        
      <div class="card-header">Register an Account</div>
<?php
     
if(isset($_POST['register'])){
	$user_check="SELECT * FROM admin";
	$user_result=mysqli_query($con,$user_check);
	
	$fname=$_REQUEST['first_name'];
	$lname=$_REQUEST['last_name'];
	$email=$_REQUEST['email'];
	$pwd=$_REQUEST['password'];
	$uploadOk=1;
	while($check_row=mysqli_fetch_array($user_result)){
		if($email==$check_row['Email']){
			$uploadOk=0;
			echo '<script type="text/javascript">';
			echo ' alert("Email already exits!")'; 
			echo '</script>'; 
			}
		}
		
	if($uploadOk==1){
		$query="INSERT INTO admin(First_Name,Last_Name,Email,Password)
				values('$fname','$lname','$email','$pwd')";
			$res=mysqli_query($con,$query);
			if($res){
				echo '<script type="text/javascript">';
				echo ' alert("Admin Added Successfully!")'; 
				echo '</script>'; 
			}
			else{
				echo '<script type="text/javascript">';
				echo ' alert("Something Wrong,Try Again Later!")'; 
				echo '</script>'; 
			}
	}
}
?>
      <div class="card-body">
      	
        <form action="#" method="POST" id="Add_Admin" name="addAdmin">
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
            <div class="form-label-group">
              <input type="email" id="inputEmail" name="email" class="form-control" placeholder="Email address" required>
              <label for="inputEmail">Email address</label>
            </div>
          </div>
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <div class="form-label-group">
                  <input type="password" id="inputPassword"  name="password" class="form-control" placeholder="Password" maxLength="10" required>
                  <label for="inputPassword">Password</label>
                </div>
              </div>
              
            </div>
          </div>
          <button class="btn btn-primary btn-block" name="register" 
          	style="background-color:#C03;border-color:#C03;" onclick="getConfirmation();">Register</button>
        </form>
        </div>
      </div>
    </div>
  </div>


<?php
include 'includes/scripts.php';
include 'includes/footer.php';
?>