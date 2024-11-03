<html>
<head>
</head>
<body>
<main>
<h1> verification code sent</h1>
<section id="otpForm">
<div class="otpFields">
<input type="text" id="name" name="name"/>
</div>
<div class="otpFields">
<input type="email" id="name" name="email"/>
</div>
<div class="otpFields">
<button id="submit" onclick="getOTPNumber(_);"/>submit</button>
</div>
</section>

<section id="otpVerificationField">
<div class="otpVerify">
<input type="number" id="otpVerify" name="otpVerify"/>
</div>
<div class="otpVerify">
<button id="submitOTP" onclick="validateOTP(_);"/>verify otp</button>
</div>
</section>

</main>
</body>
<script type="text/javascript" src"https://code.jquery.com/jquery-3.6.0.min.js" ></script>
<script type="text/javascript">
  
  var getOTPNumber = '';
  
  function getOTPNumber(){
  var email =jQuery('#email').val();
  var name =jQuery('#name').val();
  
  var data = {'name': name, 'email': email};
  $.ajax({
      type:'POST',
	  url:'mail.php',
	  data: data,
	  dataType: 'JSON',
	  success : function(_data){
	  console.log(data);
	   
	   getOTPCode = data;
	   
	   alert('please check email');

       }
  });
}
  
function validateOTP(){
 
 var otpVerify = jQuery('#otpVerify').val();
  lert(
if(otpVerify != getOTPCode){
 a'please check your entered email address and enter again verify otp');
 return false;
}else{'otp is correct, please wait for login");
jquery('#submitotp').html('please wait,login window will come');
setTimeout(function(){
 window.location.href = ''
 }, 2500};
 }
)
  

</script>
</html>
