<?php 
include '../connection.php';
$id=$_REQUEST['delid'];
//echo $id;

$dquery="DELETE FROM admin WHERE ID='$id'";
$result=mysqli_query($con,$dquery);
if($result){
header('Location:../index.php');	

}
?>
