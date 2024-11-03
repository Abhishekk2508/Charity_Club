<!DOCTYPE html>
<html>
<head>
<head>
<meta charset="utf-8">
<title>Charity club </title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="proj1.css">
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
<style type= "text/css">
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

 a:hover {
  background-color: red;
} 

		.aa{
	background-color:black;
	 width:350px;
	 height:380px;
	 margin-top:50px;
	padding:20px;
	color:white;
	 margin-left:35%;
	 border-radius:10px;
	 }
.aa input[type="text"]{
width:160px;
height:20px;
margin-left:35px;
   border-radius:6px;
padding:5px;
	border:0px;
	 }
	 .aa input[type="textarea"]{
width:160px;
height:20px;
margin-left:8px;
   border-radius:6px;
padding:5px;
	border:0px;
	 }
	 .aa input[type="attribute"]{
width:160px;
height:20px;
margin-left:22px;
   border-radius:6px;
padding:5px;
	border:0px;
	 }
	  
	 .aa input[type="email"]{
width:160px;
height:20px;
   border-radius:6px;
padding:5px;
margin-left:30px;
	border:0px;
	 }
	 .aa input[type="number"]{
width:160px;
height:20px;
   border-radius:6px;
padding:5px;
margin-left:10px;
	border:0px;
	 }
   .aa input[type="submit"]{
width:100px;
height:30px;
   border-radius:6px;
   background-color:red ;
   margin-left:100px;
   border:10px;
   font-weight:bold;
   cursor:pointer;
   }
   .aa input[type="submit"]:hover{
	   background-color:#2c3e50;
   }
   select{
width:160px;
height:20px;
   border-radius:6px;
padding:3px;
	border:0px;
	margin-left:30px;
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
<li><a href="form.php">SIGN UP</a></li>
<li><a href="index.php">LOG OUT</a></li>
<li><a  class="active" href="donate1.php">DONATE</a></li>
</ul>
</nav>
</br></br>
<div style="background-color:#2c3e50; width: 100%; height:50px;  border-radius:8px; margin-top:46px;">
    <h2 style="text-align:center; margin-top:10px; color:white; padding:4px;"> You Can Donate Here </h2></div></br></br>
	<form action="donate.php" method="post" class="aa">
<div style="background-color:#2c3e50; width: 350px; height:30px; border-radius:8px; margin-left:-20px;">
    <h2 style="text-align:center;">DONATION FORM</h2>
</div></br>
	Name
	<input type= "text" name="t1" placeholder="Doner name" required />
	<br/><br/>
	E-mail  
	<input type= "email" name="t2" placeholder="Enter Email"required />
	<br/><br/>
     Item name
	<input type= "textarea" name="t3" placeholder="Enter Item Detail" required />
	<br/><br/>
	Address
	<input type= "attribute"  name="t4" placeholder="Enter Address" required />
	<br/><br/>
	Gender
	<select  name="t5">
		<option   value="Male" required />Male</option>
	<option value="Female" required />Female</option>
	<option  value="Female" required />Other</option>
	</select>
	<br/><br/>
	Mobile No 
	<input type="number" name="t6" placeholder="Enter Mobile No" required /></br>
	<br/><br/>
	<input type="submit" value="donate"></br></br></br>
	 
</form>
</br> 
 <!-- Footer start -->
<footer>
		    <div style="display:flex; width:100%; background-color:#2c3e50;">
			<div class="column" style="background-color:; width:33%;  margin-left:100px; height:250px; "><h5 style=" margin:20px; color:black; font-size: 23px;">Site links </h5>
				


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
<div style="display:inline; width:34%; height:250px; "> <h5 style=" margin:20px; margin:20px; margin-left:0px; color:black; font-size: 23px;"> Follow Us </h5>
<div>
		
		<a href="www.facebook.com" style="cursor:pointer;"><img src="fl.png" style="width:30px; height:20px;"></a>
		</div>
		
<div>
		
		<a href="www.twiter.com" style="cursor:pointer;"><img src="il.jpg" style="width:30px; height:20px;" ><a>
		</div>
		

<div>
		
		<a href="www.linkedin.com" style="cursor:pointer;"><img src="ll.png" style="width:30px; height:20px;" ></a>
		</div>
		

<div>
		
		<a href=""www.twiter.com"" style="cursor:pointer; hover:red;"><img src="tl1.png" style="width:30px; height:20px;" ></a>
		</div>
	
		 
		
</div>
</div>
		</footer>
		<div class="footer" style="text-align:center; background-color:#2c3e50;">  
           <p style="font-size:20px;">@Copyright <span style="color:white;">ChARiTY</span><span style="color:red;" >cLuB</span>  2022- All Right Reserved.</p>
</div>
</body>
</html>