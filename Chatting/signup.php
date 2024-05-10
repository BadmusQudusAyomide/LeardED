<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
   	<link rel="shortcut icon" type="png" href="images/icon/favicon.png">
	<title>Login SignUp</title>
	<link rel="stylesheet" type="text/css" href="signup.css">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

  <!-- It will redirect to the Home Page after submitting the form -->
  <script>
  $(document).ready(function(){
    $("form").submit(function(){
      alert("Great Job !");
    });
  });
  </script>
    
</head>

<body>
    <!-- <div id="wrapper">
        <div id="header"> My Chat
            <div style="font-size:20px;"> Signup</div>
     </div>
     <div id="error"></div>
       <form  id="myform">
    <input type="text" name ="username" placeholder ="Username"> <br>
    <input type="text" name ="email" placeholder ="Email"> <br>
    <div style="padding:10px;">
    <br> Gender: <br>
    <input type="radio" value="Male" name="gender" > Male <br>
    <input type="radio" value="Female" name="gender" > Female <br>
</div>
    <input type="password" name ="password" placeholder ="Password"> <br>
    <input type="password" name ="password2" placeholder ="Retype Password"> <br>
    <input type="button" value= "Sign Up" id ="signup_button"> <br>
</form>

    </div> -->
<div class="form-box">
			<div class="button-box">
				
			</div>
			<div class="social-icons">
				<img src="images/icon/fb2.png">
				<img src="images/icon/insta2.png">
				<img src="images/icon/tt2.png">
			</div>

			
			<!-- Registration Form -->
			<form id="register" class="input-group">
				<input type="text" class="input-field" placeholder="Full Name" required="required">
				<input type="email" class="input-field" placeholder="Email Address" required="required">
				<input type="password" class="input-field" placeholder="Create Password" name="psame" required="required">
				<input type="password" class="input-field" placeholder="Confirm Password" name="psame" required="required">
				<input type="checkbox" class="check-box" id="chkAgree" onclick="goFurther()">I agree to the Terms & Conditions
				<button type="submit" id="btnSubmit" class="submit-btn reg-btn">Register</button>
			</form>
		</div>


</body>

</html>

