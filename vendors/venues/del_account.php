<?php 
include '/xampp/htdocs/project/connection.php';
$id=$_REQUEST['delid'];
//echo $id;

$dquery="DELETE FROM vendors WHERE ID='$id'";
$result=mysqli_query($con,$dquery);
if($result){
header('Location:../MainPage.php');	

}
?>
