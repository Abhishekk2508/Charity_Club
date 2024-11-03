<?php
session_start();
$a=$_POST['t2'];
$b=$_POST['t3'];
$con=mysqli_connect("localhost","root","","register");
if (mysqli_connect_errno()){
	echo mysqli_connect_error();
}
$data= mysqli_query($con,"select * from table1 where email='$a' and pswd='$b'")
or die(mysqli_error($con));
if (mysqli_num_rows($data)>0){
	if ($s=mysqli_fetch_array($data)){
		$_SESSION['email']= $a;
		$_SESSION['name']= $s['username'];
		header ("location:donate1.php");
	}
}
else {
	header ("location:invalid.php");
	}

?>