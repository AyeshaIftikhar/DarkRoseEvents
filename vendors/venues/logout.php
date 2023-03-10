<?php 
session_start();
if(session_destroy()){
	 header("Location:../MainPage.php");	
}

?>