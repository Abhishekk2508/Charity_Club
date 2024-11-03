<?php
session_start();
	$a=$_POST['t1'];
	$b=$_POST['t2'];
	$c=$_POST['t3'];
	$d=$_POST['t4'];
	$e=$_POST['t5'];
	$f=$_POST['t6'];
	$con=mysqli_connect("localhost","root","","register");
	if(mysqli_connect_errno()){
		echo mysqli_connect_error();
	}
	$data=mysqli_query($con,"select * from table4 where email='$b'")
	or die (mysqli_error($con));
	if(mysqli_num_rows($data)>0){
		header("location:check.php");
	}
	else
	{
		mysqli_query($con,"insert into table4(name,email,item,address,gndr,mobile) values ('$a','$b','$c','$d','$e','$f')") or die(mysqli_error($con));
		$_SESSION['email']=$b;
		$_SESSION['name']=$a;
		header("location:messege.php");
	}
?>