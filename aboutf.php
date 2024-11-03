<!DOCTYPE html>
<html>
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
body {
  font-family: Cursive;
  margin: 0px;
}

h1 {
  font-family: cursive;
 text-align:center;
 
}

p {
  font-family: italic;
  margin-left: 60px;
}

html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}

.column {
  float: left;
  width: 40.3%;
   margin-bottom: 16px;
   margin-left: 76px; 
  padding: 0 39px;
  font-family: italic;
  
}

.card {
  box-shadow: 0 15px 16px 0 rgba(0, 0, 0, 0.2);
  margin: 8px;
}

.about-section {
  padding: 100px;
  text-align: center;
  background-color: #474e5d;
  color: white;
  height:220px;
}

.container {
  padding: 0 16px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: green;
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  border-radius:8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width:100%;
  margin:0;
}

.button:hover {
  background-color: red;
}

@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}
</style>
</head>
<body>
<nav>
<input type="checkbox" id="check">
<label for="check" class="checkbtn">
<i class="fas fa-bars"></i>
</label>
<label class="logo"><span style="color:white; font-family:Cursive; ">ChARiTY</span><span style="color:red; font-family:Cursive; padding: 1.5px;" >cLuB</span>
</label>
<ul>
<li><a href="index.php">HOME</a></li>
<li><a class="active" href="aboutf.php">ABOUT</a></li>
<li><a href="form.php">SIGN UP</a></li>
<li><a href="lgn.php">LOGIN</a></li>
<li><a href="donate1.php">DONATE</a></li>
</ul>
</nav>
<div class="about-section">
  <h1>About Us Page</h1>
  <h2>ChARiTYcLuB</h2>
  <h3>WELCOME.</h3>
</div>

<div> </br>
<h1>The Concept of Charity</h1> </br>
<p>Charity is the act of extending love and kindness to others unconditionally, which is a conscious act but the decision is made by the heart.</p> </br>
<p>without expecting a reward. When Charity is carried out selflessly, it is a one-way act where a person gives but asks for nothing in return.</p> </br>
<p>It is this act of nature that makes it precious and soulful.<p></br>
 <p>There are people who believe charity should begin at home but others believe it should originate from the heart.</p> </br>
 <p>However, charity originates from the heart as you feel the urge of giving, begins from home, ultimately extending to others in the society.</p> </br>
<p>Charity begins with the inward recognition of a need to show compassion to others whether consciously or unconsciously.</p> </br>
<p> Everyone has problems, troubles, and griefs of some sort in life but charity starts with those who learn to downplay their own problems, kindness, and love to help others.</p> </br>
<p> Hence some people set aside their own pains to relieve the pain of others.</p>


</div>

<h2 style="text-align:center">Our Team</h2>
<div class="row">
  <div class="column">
    <div class="card">
      <img src="abhi.jpeg" alt="Jane" style="width:100%">
      <div class="container">
        <h2>ABHISHEK KUMAR</h2>
        <p class="title">Website Designer</p>
        <p>My name is ABHISHEK KUMAR from Muzaffarpur(BIHAR). </p>
		   <p> And still a college student, pursuing Diploma from SLIET. </p>
		    <p>And My Aim is to become a software engineering. </p>
           <p> I’m skilled with HTML,CSS,JAVASCRIPT PHP and mysql. </p>
		   <p> And I am trying to learn other programming languages. </p>
		</p>
        <p>abhishek890.kr@gmail.com</p></br>
        <p><button class="button">Contact : 7480860225</button></p></br>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="contact.jpeg" alt="Mike" style="width:100%">
      <div class="container">
        <h2>ANAND KUMAR </h2>
        <p class="title">Website Designer</p>
         <p>My name is ANAND KUMAR from Varanasi(UTTARPRADESH). </p>
		   <p> And still a college student, pursuing Diploma from SLIET. </p>
		    <p>And My Aim is to become a software engineering. </p>
           <p> I’m skilled with HTML,CSS,JAVASCRIPT PHP and mysql. </p>
		   <p> And I am trying to learn other programming languages.</p>
		</p>
        <p>anandmodanval7310@gmail.com</p></br>
        <p><button class="button">Contact : 7310106061</button></p></br>
      </div>
    </div>
  </div>


  </div>
</div>
        <!-- Footer start -->
<footer>
		    <div style="display:flex; width:100%; background-color:#2c3e50;">
			<div class="column" style="background-color:; width:33%;  margin-left:100px;height:250px; "><h5 style=" margin:20px; color:black; font-size: 23px;">Site links </h5>
				


				<ul style="list-style-type:disc; color:black;" >
					<li ><a href="project325.php" style="color:black; margin:20px; font-size: 20px;">Home</a></li>
					<li ><a href="aboutf.php"  style="color:black; font-size: 20px;  margin:20px;">About</a></li>
					<li ><a href="form.php"  style="color:black; font-size: 20px;  margin:20px;">Sign Up</a></li>
					<li ><a href="lgn.php"  style="color:black; font-size: 20px;  margin:20px;">Login</a></li>
					<li ><a href="donate1.php"  style="color:black; font-size: 20px;  margin:20px;">Donate</a></li>
				</ul>
	
			</div>
			 
			
			<div class="column" style="background-color:; width:33%;  margin-left:0px; height:250px;"><h5 style=" margin:20px; color:black; font-size: 23px;"> Contact Us </h5>

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