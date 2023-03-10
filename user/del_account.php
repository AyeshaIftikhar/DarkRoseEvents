<?php 
include '../connection.php';
$id=$_REQUEST['delid'];
//echo $id;

$dquery="DELETE FROM user_registration WHERE user_id='$id'";
$result=mysqli_query($con,$dquery);
if($result){
header('Location:../index.php');	

}
?>
