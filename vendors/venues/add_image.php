<?php 
include 'C:\xampp\htdocs\project\vendors\vendorSession.php';
include 'includes/header.php';
include 'includes/navBars.php';
include 'includes/sidebar.php';

?>
<div class="container">
    <div class="card card-login mx-auto mt-5">
        <ol class="breadcrumb">
              <li class="breadcrumb-item">
                <a href="#" style="color:#C03;">Dashboard</a>
              </li>
              <li class="breadcrumb-item active">Add Picture</li>
        </ol>
      <div class="card-header">Add Image</div>
      <div class="card-body">
        <div class="text-center mb-4">
          <h4>Add Your Profile Picture</h4>
        </div>
        <form action="#" name="uploadImage" id="upload_img" method="Post" enctype="multipart/form-data">
          <div class="form-group">
            <div class="custom-file">
              <input type="file" class="custom-file-input" id="img" name="image">
              <label class="custom-file-label" for="img">
             Select Image</label>
            </div>
          </div>
          <button class="btn btn-primary btn-block" name="upload"
          	style="background-color:#C03;border-color:#C03;"
          >Upload</button>
           <p><strong>Note:</strong> Only .jpg, .jpeg,.png formats allowed to a max size of 500KB.</p>
        </form>
      </div>
<?php
      if(isset($_POST['upload'])){
		$target_dir="imgs/";
		$img=$_FILES['image']['name'];
		$id=$row['ID']; 
		$target=$target_dir.basename($img);
		$uploadOk = 1;
		
		$imageFileType = strtolower(pathinfo($target,PATHINFO_EXTENSION));
		
		// Check if image file is a actual image or fake image
		 $check = getimagesize($_FILES["image"]["tmp_name"]);
		if($check !== false) {
			//echo "File is an image - " . $check["mime"] . ".";
			$uploadOk = 1;
		} else {
		  echo "File is not an image.";
		  $uploadOk = 0;
		}
		
		// Check if file already exists
		if (file_exists($target)) {
			echo "Sorry, file already exists.";
			$uploadOk = 0;
		}
		
		// Check file size
		if ($_FILES["image"]["size"] > 500000) {
			echo "Sorry, your file is too large.";
			$uploadOk = 0;
		}
		
		// Allow certain file formats
		if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" ) {
			echo "Sorry, only JPG, JPEG & PNG  files are allowed.";
			$uploadOk = 0;
		}
		
		if ($uploadOk == 0) {
			echo "Sorry, your file was not uploaded.";
		// if everything is ok, try to upload file
		} else {
			$img_query="UPDATE vendors SET vendor_pic='$img' WHERE ID='$id'";
			$img_result=mysqli_query($con,$img_query);
			//if($img_result){echo 'succeed';}
			if (move_uploaded_file($_FILES["image"]["tmp_name"], $target)) {
				echo "The file has been uploaded";
			} else { echo "Sorry, there was an error uploading your file."; }
			}
		}
?>
    </div>
  </div>
<?php 
include 'includes/scripts.php';
include 'includes/footer.php';

?>