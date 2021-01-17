<?php 
include 'Session.php';
include 'includes/header.php';
include 'includes/navBars.php';
include 'includes/sidebar.php';
?>
<div id="content-wrapper">
<div class="container-fluid">
<!-- Breadcrumbs-->
<ol class="breadcrumb">
<li class="breadcrumb-item">
<a href="#" style="color:#C03;">Dashboard</a>
</li>
<li class="breadcrumb-item active">Edit Information</li>
</ol>
        
<div class="card mb-3">
<?php
if(isset($_POST['update'])){
	$check_query="SELECT * FROM user_registration";
	$check_result=mysqli_query($con,$check_query);
	
	$id=$row['user_id'];
	$email=$_REQUEST['email'];
	$number=$_REQUEST['phoneNumber'];
	$gender=$_REQUEST['gender'];
	while($check_row=mysqli_fetch_array($check_result)){
		if($email==$check_row['Email']){
			echo '<script type="text/javascript">';
			echo ' alert("Email already exists!")'; 
			echo '</script>';
			break;}
		else if($email!=$check_row['Email']){
			$up_query="UPDATE user_registration SET Email='$email',PhoneNo='$number',
			 		Gender='$gender' WHERE user_id=$id";
			$rs=mysqli_query($con,$up_query);
			if($rs){
				echo '<script type="text/javascript">';
				echo ' alert("Data updated successfully!")'; 
				echo '</script>';
			}
			else{
				echo '<script type="text/javascript">';
				echo ' alert("Something wrong! Try again Later!")'; 
				echo '</script>';
			}
		}
	}
}
?>
<div class="card-header">
<i class="fas fa-table"></i>
<?php echo $row['First_Name']." ".$row['Last_Name'] ;?> 
</div>
<div class="card-body">
<div class="table-responsive">
<table class="table table-bordered" id="dataTable" width="50%"  cellspacing="0" >
<tbody>
<form name='updateUser' id='update' action='#' method='POST'>
<button class="btn btn-primary btn-block" name="update" style="background-color:#C03;border-color:#C03;width:100px;">Update</button>  
<tr rowspan="">
<div class="form-group">
<td>
<div class="col-md-6">
<img src="imgs/<?php echo $row['picture']; ?>" width="150px" height="150px" border='2px'  style="margin-left:18px;margin-right:18px;border-color:#C03;">
<br>
Name:<br/>
<input value="<?php echo $row['First_Name']." ".$row['Last_Name'];?>" class="form-control" style="margin-top:20px;" readonly>
</div>
</td>
</div>                  	
</tr>              	
<tr rowspan="">
<div class="form-group">
<td>
<div class="col-md-6">
Email:<br>
<input value="<?php echo $row['Email'];?>" class="form-control" style="margin-top:20px;"
name="email" id="email" required >
<br>
Phone Number: <br>
<input value="0<?php echo $row['PhoneNo'];?>" class="form-control" style="margin-top:20px;" name='phoneNumber' id='number' required maxlength="11">
Gender: <br>
<input value="<?php echo $row['Gender'];?>" class="form-control" style="margin-top:20px;" 
	name='gender' id='gender' required>
</div>
</td> 
</div>                	
</tr>

</form>
</tbody>
</table>
</div>
</div>
</div> 



</div>
</div>
<?php 
include 'includes/scripts.php';
include 'includes/footer.php';

?>