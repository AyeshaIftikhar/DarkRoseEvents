<?php 
include 'C:\xampp\htdocs\project\vendors\vendorSession.php';
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
<li class="breadcrumb-item active">Overview</li>
</ol>

<div class="card card-register mx-auto mt-5">
      <div class="card-header">Add your Address</div>
      <div class="text-center">Add your work address here!</div>
      <div class="card-body">
      		<?php
			include '/xampp/htdocs/project/connection.php';
			if(isset($_POST['register'])){
				$vname=$row['First_Name']."".$row['Last_Name'];
				$email=$row['Email'];
				$house=$_REQUEST['house_no'];
				$street=$_REQUEST['street_no'];
				$area=$_REQUEST['area'];
				$city=$_REQUEST['city'];
				$province=$_REQUEST['province'];
				$country=$_REQUEST['country'];
				$postal=$_REQUEST['postal_code'];
				
				$query="INSERT INTO vendors_address
			  (vendor_name,vendor_email,house_no,street_no,area,city,province,country,postal_code)
				values('$vname','$email','$house','$street','$area','$city','$province','$country','$postal')";
				$res=mysqli_query($con,$query);
				if($res){
					echo '<script type="text/javascript">';
					echo ' alert("Address added successfully!")'; 
					echo '</script>';
				}
				else{
					echo '<script type="text/javascript">';
					echo ' alert("Something wrong, try again later!")'; 
					echo '</script>';
				}
			}
		?>
        <br>
        <form action="#" method="POST" id="Add_address" name="VendorAddress">
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <div class="form-label-group">
                  <input type="text" id="houseNo" name="house_no" class="form-control" placeholder="House/Office  Number" required autofocus>
                  <label for="houseNo">House/Office Number</label>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-label-group">
                  <input type="text" id="streetNo" name="street_no" class="form-control" placeholder="Street Number" >
                  <label for="streetNo">Street Number</label>
                </div>
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="form-row">
            <div class="col-md-6">
                <div class="form-label-group">
                    <input type="text" id="area" name="area" class="form-control"
                             placeholder="Area/Localty" required>
                   <label for="area">Area/Localty</label>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-label-group">
                  <input type="text" id="city" name="city" 
                  placeHolder="City" class="form-control"
                   required/>
                  <label for="city">City</label>
                </div>
              </div>
            </div>
          </div>
          
  			<div class="form-group">
             <div class="form-row">
                <div class="col-md-6">
                <div class="form-label-group">
                	<select class="form-control" aria-label="province" name="province" required>
                    	<option value"" selected> Select Province</option>
                    	<option value="Punjab">Punjab</option>
                        <option value="Sindh">Sindh</option>
                        <option value="Balochistan">Balochistan</option>
                        <option value="Gilgat Baltistan ">Gilgat Baltistan</option>
                        <option value="Khayber Pakhtukhan">Khyber Pakhtukhan</option>
                    </select>
                 </div> 
                 </div>
                 <div class="col-md-6">
                <div class="form-label-group">
                	<input type="text" id="country" name="country" 
                  placeHolder="Country" class="form-control"
                   required/>
                  <label for="country">Country</label>
                 </div> 
                 </div>
            </div>
            </div>
          
          <div class="form-group">
          <div class="form-row">
          		<div class="col-md-6">
                <div class="form-label-group">
                	<input type="text" id="postalcode"  name="postal_code" 
                    	class="form-control" placeholder="Postal Code" >
                  <label for="postalcode">Postal Code</label>
                </div>
          </div>
        </div>
        </div> 
         <button class="btn btn-primary btn-block" name="register" 
          	style="background-color:#C03;border-color:#C03;">Add Address</button>
        
        </form>
        </div>
      </div>
</div>

</div>
</div>
<?php 
include 'includes/scripts.php';
include 'includes/footer.php';
?>