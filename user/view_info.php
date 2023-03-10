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
<li class="breadcrumb-item active">View Information</li>
</ol>
        
<div class="card mb-3">
<br>
<div class="card-header">
<div style="float:left;">
<i class="fas fa-table"></i>
<?php echo $row['First_Name']." ".$row['Last_Name'] ;?> 
</div>
<div style="float:right;">
<a class="" href="edit_info.php" style="color:#000">Edit</a>
</div>
</div>
<div class="card-body">
<div class="table-responsive">
<table class="table table-bordered" id="dataTable" width="50%"  cellspacing="0" >
<tbody>
<form>
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
<input value="<?php echo $row['Email'];?>" class="form-control" style="margin-top:20px;" readonly>
<br>
Phone Number: <br>
<input value="0<?php echo $row['PhoneNo'];?>" class="form-control" style="margin-top:20px;" readonly>
Gender: <br>
<input value="<?php echo $row['Gender'];?>" class="form-control" style="margin-top:20px;" readonly>
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