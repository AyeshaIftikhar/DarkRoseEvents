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
<li class="breadcrumb-item active">Work Demo</li>
</ol>

<div class="card card-register mx-auto mt-5">
      <div class="card-header">Add your Work Demo</div>
      <div class="text-center">Add your work demo here all the fields should b filled and add three pictures alteasts !</div>
       <div class="text-center"><strong>Note:</strong>  Only .jpg, .jpeg and .png files are acceptable!</div>
      <div class="card-body">
      		<?php
			include '/xampp/htdocs/project/connection.php';
			if(isset($_POST['register'])){
				$vname=$row['First_Name']." ".$row['Last_Name'];
				$email=$row['Email']; $car_name=$_REQUEST['car_name']; 
				$modal=$_REQUEST['modal']; $brand=$_REQUEST['brand'];
				$color=$_REQUEST['color']; $number=$_REQUEST['number'];
				$owner_name=$_REQUEST['name']; $owner_contact=$_REQUEST['contact'];
				$img1=$_FILES['image_one']['name'];$img2=$_FILES['image_two']['name'];
				$img3=$_FILES['image_three']['name'];$img4=$_FILES['image_four']['name'];
				
				$target_dir="imgs/";
				
				$target_one=$target_dir.basename($img1);
				$target_two=$target_dir.basename($img2);
				$target_three=$target_dir.basename($img3);
				$target_four=$target_dir.basename($img4);

				$query="INSERT INTO car_rental_demo
					(vendor_name,vendor_email,car_name,car_model_no,
					car_number,car_color,car_brand,
					image_one,image_two,image_three,image_four,
					owner_name,owner_contact_no)
						values('$vname','$email','$car_name','$modal',
					'$number','$color','$brand',
					'$img1','$img2','$img3','$img4',
					'$owner_name','$owner_contact')";
					$result=mysqli_query($con,$query);
					if($result){echo 'okay';}					
					$one=move_uploaded_file($_FILES['image_one']['tmp_name'],$target_one);
					$two=move_uploaded_file($_FILES['image_two']['tmp_name'],$target_two);
					$three=move_uploaded_file($_FILES['image_three']['tmp_name'],$target_three);
					$four=move_uploaded_file($_FILES['image_four']['tmp_name'],$target_four);

					if($one && $two && $three){
						echo '<script type="text/javascript">';
						echo ' alert("Data updated successfully!")'; 
						echo '</script>'; 
					}
					else{
						echo '<script type="text/javascript">';
						echo ' alert("Something wrong,Try again Later!")'; 
						echo '</script>'; 
					}	
			}
		?>
        <br>
        <form action="#" method="POST" id="Add_work" name="Work Demo" enctype="multipart/form-data">
          <div class="form-group">
          <div class="form-row">
            <div class="col-md-6">
                <div class="form-label-group">
                  <input type="text" id="styleName" name="car_name" class="form-control" placeholder="Car Name" required autofocus>
                  <label for="styleName">Car Name</label>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-label-group">
                  <input type="text" id="model" name="modal" class="form-control" placeholder="Car Modal" required >
                  <label for="model">Car Modal</label>
                </div>
              </div>
           </div>
          </div>
          
           <div class="form-group">
          <div class="form-row">
            <div class="col-md-6">
                <div class="form-label-group">
                  <input type="text" id="carNo" name="number" class="form-control" placeholder="Plate Number" required>
                  <label for="carNo">Plate Number</label>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-label-group">
                  <input type="text" id="brand" name="brand" class="form-control" placeholder="Brand Name" required >
                  <label for="brand">Brand Name</label>
                </div>
              </div>
           </div>
          </div>
          
           <div class="form-group">
                <div class="form-label-group">
                  <input type="text" id="color" name="color" class="form-control" placeholder="Color" required >
                  <label for="color">Color</label>
                </div>
              </div>
              
            <div class="form-group">
          <div class="form-row">
            <div class="col-md-6">
                <div class="form-label-group">
                  <input type="text" id="owner" name="name" class="form-control" placeholder="Owner Name">
                  <label for="owner">Owner Name</label>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-label-group">
                  <input type="text" id="contact" name="contact" class="form-control" placeholder="Owner Contact Number">
                  <label for="contact">Owner Contact Number</label>
                </div>
              </div>
           </div>
          </div>
          
          <div class="form-group">
            <div class="form-row">
            <div class="col-md-6">
              <div class="custom-file">
              <input type="file" class="custom-file-input" id="imgOne" name="image_one" required>
              <label class="custom-file-label" for="imgOne">
              Select Image</label>
            </div>
            </div>
              <div class="col-md-6">
              <div class="custom-file">
              <input type="file" class="custom-file-input" id="imgtwo" name="image_two" required>
              <label class="custom-file-label" for="imgtwo">
              Select Image</label>
            </div>
              </div>
            </div>
          </div>
          
  			<div class="form-group">
            <div class="form-row">
            <div class="col-md-6">
              <div class="custom-file">
              <input type="file" class="custom-file-input" id="imgthree" name="image_three" required>
              <label class="custom-file-label" for="imgthree">
              Select Image</label>
            </div>
            </div>
              <div class="col-md-6">
              <div class="custom-file">
              <input type="file" class="custom-file-input" id="imgfour" name="image_four">
              <label class="custom-file-label" for="imgfour">
              Select Image</label>
            </div>
              </div>
            </div>
          </div>
         <button class="btn btn-primary btn-block" name="register" 
          	style="background-color:#C03;border-color:#C03;">Add Work Demo</button>
        
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