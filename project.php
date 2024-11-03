<!DOCTYPE html>
 <head>
	 <title>my page</title>
	 <link  rel="stylesheet" type="text/css" href="home.css"/>
	 <style>
	 body{
	 background-image:url(bkg.jpg);
	 background-repeat:no-repeat;
	 background-color:gray;
	 }
	 *{
	margin: 0px;
	padding: 0px;
	}
	p
{
text-style: italic;
}
 h1{
text-align:center;
}
.dropbtn{
  background-color: #3498D8;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
}
.popup{
position: relative;
display:inline-block;

}
.popup-contant{
display: none;
  position: absolute;
  background-color:pink;
  min-width: 160px;
  bottom: 50px;
  }
.popup-contant a{
color:green ;
  padding: 12px 16px;
  text-decoration: none;
  display:block;
  border:0.5px solid black;
text-align:center;
 } 
 .popup-content a:hover{background-color:#ccc}
.popup:hover .popup-contant{
  display:block;
}
.popup:hover .dropbtn{
  background-color: red;
}
	 </style>
 </head>
	 <body>
	 <h1>
	 ChARiTyHuB
	 </h1>
	 <p>
	 </br>
	 this is a platform which helps to many needy people and like some clothes,and books that is not afford by them.</br>
	 </br>
	 </br>
	 <p>
	 this is a platform where doner can donet their clothes and Book and etc. so we collect their clothes and distribute it to needy people.
	 </br></br></br>
	 </p>
	 </p>
	<div class="popup">
	<class="dropbtn">
	<button class="dropbtn">MENU</button>
	<div class="popup-contant">
		<a href= "#">new</a>
		<a href= "form.php">sinup</a>
	<a href= "kuch.html">about</a>
	<a href= "#">contact</a>
	<a href= "lgn.php">login</a>
	</div>
	</div>
	 </body>
 </html>