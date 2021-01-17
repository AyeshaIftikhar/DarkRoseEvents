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
       <div class="text-center"><strong>Note:</strong>  Only .jpg, .jpeg and .png files are acceptable!
       </div>
      <div class="card-body">
<form action="#" method="POST" id="Add_work" name="Work Demo" enctype="multipart/form-data">
          <div class="form-group">
                <div class="form-label-group">
                  <input type="text" id="styleName" name="style_name" class="form-control" placeholder="Place Name" required autofocus>
                  <label for="styleName">Work Style Name</label>
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
          
            <div class="form-group">
            <div class="form-row">
            <div class="col-md-6">
              <div class="custom-file">
              <input type="file" class="custom-file-input" id="imgfive" name="image_five">
              <label class="custom-file-label" for="imgfive">
              Select Image</label>
            </div>
            </div>
              <div class="col-md-6">
              <div class="custom-file">
              <input type="file" class="custom-file-input" id="imgsix" name="image_six">
              <label class="custom-file-label" for="imgsix">
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
if(isset($_POST['register'])){
$vname=$row['First_Name']." ".$row['Last_Name'];
$email=$row['Email'];
$style=$_REQUEST['style_name'];
$img1=$_FILES['image_one']['name'];$img2=$_FILES['image_two']['name'];
$img3=$_FILES['image_three']['name'];$img4=$_FILES['image_four']['name'];
$img5=$_FILES['image_five']['name'];$img6=$_FILES['image_six']['name'];

$target_dir="imgs/";
				
$target_one=$target_dir.basename($img1);
$target_two=$target_dir.basename($img2);
$target_three=$target_dir.basename($img3);
$target_four=$target_dir.basename($img4);
$target_five=$target_dir.basename($img5);
$target_six=$target_dir.basename($img6);

if($work_check=="Decor"){
	$query="INSERT INTO decor_demo(vendor_name,vendor_email,style_name,decor_images_front,
	image_two,image_three,image_four,image_five,image_six)
	values('$vname','$email','$style','$img1','$img2','$img3','$img4','$img5','$img6')";
	$result=mysqli_query($con,$query);
	$one=move_uploaded_file($_FILES['image_one']['tmp_name'],$target_one);
	$two=move_uploaded_file($_FILES['image_two']['tmp_name'],$target_two);
	$three=move_uploaded_file($_FILES['image_three']['tmp_name'],$target_three);
	$four=move_uploaded_file($_FILES['image_four']['tmp_name'],$target_four);
	$five=move_uploaded_file($_FILES['image_five']['tmp_name'],$target_five);
	$six=move_uploaded_file($_FILES['image_six']['tmp_name'],$target_six);
	
	if($one && $two && $three){
		echo '<script type="text/javascript">';
		echo ' alert("Data Added Successfully!")'; 
		echo '</script>';
	}
	else{
	echo '<script type="text/javascript">';
	echo ' alert("Something wrong! Try again Later!")'; 
	echo '</script>';
	}	
}
else if($work_check=="Photography"){
	$query="INSERT INTO photography_demo(vendor_name,vendor_email,photoshoot_name,
	front_image,image_two,image_three,image_four,image_five,image_six)
	values('$vname','$email','$style','$img1','$img2','$img3','$img4','$img5','$img6')";
	$result=mysqli_query($con,$query);
	$one=move_uploaded_file($_FILES['image_one']['tmp_name'],$target_one);
	$two=move_uploaded_file($_FILES['image_two']['tmp_name'],$target_two);
	$three=move_uploaded_file($_FILES['image_three']['tmp_name'],$target_three);
	$four=move_uploaded_file($_FILES['image_four']['tmp_name'],$target_four);
	$five=move_uploaded_file($_FILES['image_five']['tmp_name'],$target_five);
	$six=move_uploaded_file($_FILES['image_six']['tmp_name'],$target_six);
	
	if($one && $two && $three){
		echo '<script type="text/javascript">';
		echo ' alert("Data Added Successfully!")'; 
		echo '</script>';
	}
	else{
	echo '<script type="text/javascript">';
	echo ' alert("Something wrong! Try again Later!")'; 
	echo '</script>';
	}	
}
else if($work_check=="Invitation"){
$query="INSERT INTO invitation_demo(vendor_name,vendor_email,invitation_name,
invitation_front_image,image_two,image_three,image_four,image_five,image_six)
values('$vname','$email','$style','$img1','$img2','$img3','$img4','$img5','$img6')";
$result=mysqli_query($con,$query);
$one=move_uploaded_file($_FILES['image_one']['tmp_name'],$target_one);
$two=move_uploaded_file($_FILES['image_two']['tmp_name'],$target_two);
$three=move_uploaded_file($_FILES['image_three']['tmp_name'],$target_three);
$four=move_uploaded_file($_FILES['image_four']['tmp_name'],$target_four);
$five=move_uploaded_file($_FILES['image_five']['tmp_name'],$target_five);
$six=move_uploaded_file($_FILES['image_six']['tmp_name'],$target_six);

if($one && $two && $three){
	echo '<script type="text/javascript">';
	echo ' alert("Data Added Successfully!")'; 
	echo '</script>';
}
else{
echo '<script type="text/javascript">';
echo ' alert("Something wrong! Try again Later!")'; 
echo '</script>';
}	
}


}
?>