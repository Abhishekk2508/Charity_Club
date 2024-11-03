<?php
session_start();
    $b=$_POST['t2'];
	$c=$_POST['t3'];
	$con=mysqli_connect("localhost","root","","register");
	if(mysqli_connect_errno()){
		echo mysqli_connect_error();
	}
	$data=mysqli_query($con,"select * from table1 where email='$b'")
	or die (mysqli_error($con));
	if(mysqli_num_rows($data)>0){
		mysqli_query($con,"update into table1(pswd) values ('$c')") or die(mysqli_error($con));
		$_SESSION['email']=$b;
		$_SESSION['name']=$a;
		header("location:home1.php");
	}
?>
