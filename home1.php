<?php
session_start();
if (!(isset($_SESSION['email']))){
	header("location:project325.php");
}

?>
 
