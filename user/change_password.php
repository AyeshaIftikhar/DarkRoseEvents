<?php 
include 'Session.php';
include 'includes/header.php';
include 'includes/navBars.php';
include 'includes/sidebar.php';
?>

<div class="container">
    <div class="card card-login mx-auto mt-5">
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a  href='../MainPage.php' style="color:#C03;">Dashboard</a>
          </li>
          <li class="breadcrumb-item active">Change Password</li>
        </ol>
		<?php
			if(isset($_POST['change'])){
				$id=$row['user_id']; 
				$old=$_REQUEST['old_pass']; 
				$new=$_REQUEST['password']; 
				$update="UPDATE user_registration SET Password='$new' 
					WHERE user_id='$id' AND Password='$old'" ;
				$update_run=mysqli_query($con,$update);
				if($update_run){
					echo '<script type="text/javascript">';
					echo ' alert("Password has been changed successfully!")'; 
					echo '</script>';
				}
				else{
					echo '<script type="text/javascript">';
					echo ' alert("Something wrong! Try again Later!")'; 
					echo '</script>';
				}
			}
		?>
      <div class="card-header">Add New Password</div>
      <div class="card-body">
        <form action="#" method="POST" id="new_password" name="Add_Password">
          <div class="form-group">
            <div class="form-label-group">
              <input type="password" id="inputpass" name="old_pass" 
              	class="form-control" placeholder="Old Password" 
                maxlength="10" required autofocus >
              <label for="inputpass">Enter Old Password</label>
            </div>
          </div>
          <div class="form-group">
            <div class="form-label-group">
              <input type="password" id="inputPassword" name="password" 
              	class="form-control" placeholder="New Password" 
                maxlength="10" required>
              <label for="inputPassword">Enter New Password</label>
            </div>
          </div>
          <button class="btn btn-primary btn-block" name="change"  
          	style="background-color:#C03;border-color:#C03;" >change</button>
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
include 'includes/footer.php';
?>
