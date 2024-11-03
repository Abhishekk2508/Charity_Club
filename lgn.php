<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Charity club </title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="proj1.css">
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
<style type= "text/css">
 /* body{
	 background-image: url();
	 background-repeat:repeat;
	 background-size:cover;
	 background-color:;
	 } */
	 a {
  text-align: center;
  cursor: pointer;

}

a:hover {
  background-color: red;
}
a.active, a:hover{
	background-color:red;
	transition:0.5s;
}
	 .aa{
	background-color:black;	
	 width:300px;
	 height:300px;
	 margin-top:100px;
	padding:20px;
	color:white;
	 margin-left:36%;
	 border-radius:10px;
	 }
.aa input[type="email"]{
   width:160px;
   height:20px;
   border-radius:6px;
   padding:5px;
   margin-left:50px;
	border:0px;
	 }
.aa input[type="password"]{
  width:160px;
  height:20px;
  border-radius:6px; 
  padding:5px;
  margin-left:50px;
  border:0px;
  }
   .aa input[type="submit"]{
   width:100px;
   height:20px;
   border-radius:6px;
   background-color:red;
   margin-left:75px;
   border:0px;
   font-weight:bold;
   cursor:pointer;
  }
  .aa input[type="submit"]:hover{
	  background-color:#2c3e50;
  }
	 </style>
	 </head>
<body>
<nav style="margin:0px;">
<input type="checkbox" id="check">
<label for="check" class="checkbtn">
<i class="fas fa-bars"></i>
</label>
<label class="logo"><span style="color:white; font-family:Cursive; ">ChARiTY</span><span style="color:red; font-family:Cursive; padding: 1.5px;" >cLuB</span>
</label>
<ul>
<li><a href="index.php">HOME</a></li>
<li><a href="aboutf.php">ABOUT</a></li>
<li><a href="index.php">LOG OUT</a></li>
<li><a class="active" href="lgn.php">LOGIN</a></li>
<li><a href="donate1.php">DONATE</a></li>
</ul>
</nav>
</br></br></br></br>
	 <div class= "">
	 <form  action="verify.php" class="aa" method="post">
	 <div style="background-color:#2c3e50; width: 300px; height:30px;  border-radius:8px; margin-left:-20px;">
    <h2 style="text-align:center;">LOGIN </h2></br></br>
</div>
</br>
	 
	 <input type= "email" placeholder="enter user name" name="t2" required></br></br>
	 <input type="password" placeholder= "enter your password" name="t3" required></br></br>
	 <input type="submit" value= "login" name="t6"></br> </br>
	 <a href="forgot1.php" ><h3 style="text-align:left; color:blue;">Forgot Password ?</h3></a></br>
	 <h3>Don't have account? <a href="form.php">SIGN UP</a></h3>
	 
	 
	 </form>
	 </div>
</br></br></br>
  <!-- Footer start -->
  <footer>
		    <div style="display:flex; width:100%; background-color:#2c3e50;">
			<div class="column" style="background-color:; width:33%; margin-left:100px; height:250px; "><h5 style=" margin:20px; color:black; font-size: 23px;">Site links </h5>
				


				<ul style="list-style-type:disc; color:black;" >
					<li ><a href="project325.php" style="color:black; margin:20px; font-size: 20px;">Home</a></li>
					<li ><a href="aboutf.php"  style="color:black; font-size: 20px;  margin:20px;">About</a></li>
					<li ><a href="form.php"  style="color:black; font-size: 20px;  margin:20px;">Sign Up</a></li>
					<li ><a href="lgn.php"  style="color:black; font-size: 20px;  margin:20px;">Login</a></li>
					<li ><a href="donate1.php"  style="color:black; font-size: 20px;  margin:20px;">Donate</a></li>
				</ul>
	
			</div>
			 
			
			<div class="column" style="background-color:; width:33%; height:250px;"><h5 style=" margin:20px; color:black; font-size: 23px;"> Contact Us </h5>

				<ul style="margin-left:20px;">
					<li style="color:black; font-size: 20px;">anand@gmail.com </li>
					<li style="color:black; font-size: 20px;">7310106061</li>
					<li  style="color:black; font-size:20px;">abhishek@gmail.com</li>
					<li style="color:black; font-size: 20px;">7480860225</li>
					
				</ul>
		
		
</div>
<div style="display:inline; width:34%;  height:250px; "> <h5 style=" margin:20px; margin:20px; margin-left:0px; color:black; font-size: 23px;"> Follow Us </h5>
<div>
		
		<a href="www.facebook.com" style="cursor:pointer;"><img src="fl.png" style="width:30px; height:20px;"></a>
		</div>
		
<div>
		
		<a href="www.instagram.com" style="cursor:pointer;"><img src="il.jpg" style="width:30px; height:20px;" ><a>
		</div>
		

<div>
		
		<a href="www.linkedin.com" style="cursor:pointer;"><img src="ll.png" style="width:30px; height:20px;" ></a>
		</div>
		

<div>
		
		<a href="www.twiter.com" style="cursor:pointer; hover:red;"><img src="tl1.png" style="width:30px; height:20px;" ></a>
		</div>
	
		 
		
</div>
</div>
		</footer>
		<div class="footer" style="text-align:center; background-color:#2c3e50;">  
           <p style="font-size:20px;">@Copyright <span style="color:white;">ChARiTY</span><span style="color:red;" >cLuB</span>  2022- All Right Reserved.</p>
</div>
	 </body>
 </html>