<?php
include 'vendorSession.php';

$target_dir="imgs/";
$img=$image_one;
$target=$target_dir.basename($img);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target,PATHINFO_EXTENSION));
		
// Check if image file is a actual image or fake image
$check = getimagesize($_FILES["image"]["tmp_name"]);
if($check !== false) {
//echo "File is an image - " . $check["mime"] . ".";
$uploadOk = 1;
} else {
echo '<script type="text/javascript">';
echo ' alert("File is not an image!")'; 
echo '</script>'; 
$uploadOk = 0;
}
		
// Check if file already exists
if (file_exists($target)) {
echo '<script type="text/javascript">';
echo ' alert("File already exists!")'; 
echo '</script>'; 
$uploadOk = 0;
}
// Check file size
if ($_FILES["image"]["size"] > 500000) {
echo '<script type="text/javascript">';
echo ' alert("sorry, file is too large!")'; 
echo '</script>';
$uploadOk = 0;
}
		
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" ) {
echo '<script type="text/javascript">';
echo ' alert("Sorry, Only JPG, JPEG and PNG files are allowed!")'; 
echo '</script>';
$uploadOk = 0;
}
		
if ($uploadOk == 0) {
echo '<script type="text/javascript">';
echo ' alert("Sorry, your file was not uploaded!")'; 
echo '</script>';
// if everything is ok, try to upload file
} else {
$img_query="UPDATE vendors SET vendor_pic='$img' WHERE ID='$id'";
$img_result=mysqli_query($con,$img_query);
//if($img_result){echo 'succeed';}
if (move_uploaded_file($_FILES["image"]["tmp_name"], $target)) {
echo '<script type="text/javascript">';
echo ' alert("File has been uploaded!")'; 
echo '</script>';
}else { 
echo '<script type="text/javascript">';
echo ' alert("Sorry, there is an error in uploading your file!")'; 
echo '</script>';
}
}
?>