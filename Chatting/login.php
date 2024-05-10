<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Chat</title>
    
    <link rel="shortcut icon" type="png" href="images/icon/favicon.png">
	<title>Login SignUp</title>
	<link rel="stylesheet" type="text/css" href="loginStyle.css">
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
            <div style="font-size:20px;"> Login</div>
     </div>
     <div id="error"></div>
       <form  id="myforml">
    
    <input type="text" name ="email" placeholder ="Email"> <br>
    
    <input type="password" name ="password" placeholder ="Password"> <br>
    
    <input type="button" value= "Login" id ="login_button"> <br>
</form>

    </div> -->

<div class="form-box">
			<div class="button-box">
				<div id="btn"></div>
				<button type="button" class="toggle-btn" id="log" onclick="login()" style="color: #fff;">Log In</button>
				<button type="button" class="toggle-btn" id="reg" onclick="register()">Register</button>
			</div>
			<div class="social-icons">
				<img src="images/icon/fb2.png">
				<img src="images/icon/insta2.png">
				<img src="images/icon/tt2.png">
			</div>
            <form id="myforml" class="input-group">
				<div class="inp">
					<img src="images/icon/user.png"><input type="text" name="email" id="email" class="input-field" placeholder="Username or Phone Number" style="width: 88%; border:none;" required="required">
				</div>
				<div class="inp">
					<img src="images/icon/password.png"><input type="password"  name="password" id="password" class="input-field" placeholder="Password" style="width: 88%; border: none;" required="required">
				</div>
				<input type="checkbox" class="check-box">Remember Password
				<input type="button" value="Login" id="login_button" class="submit-btn">
			</form>


			<div class="other" id="other">
				<div class="instead">
					<h3>or</h3>
				</div>
				<button class="connect" onclick="google()">
					<img src="images/icon/google.png"><span>Sign in with Google</span>
				</button>
			</div>

            <form id="myform" class="input-group">
				<input type="text" class="input-field" name="username" placeholder="Full Name" required="required">
				<input type="email" class="input-field"name="email" placeholder="Email Address" required="required">
				<input type="password" class="input-field" placeholder="Create Password" name="password" required="required">
				<input type="password" class="input-field" placeholder="Confirm Password" name="password2" required="required">
				<input type="checkbox" class="check-box" id="chkAgree" onclick="goFurther()">I agree to the Terms & Conditions
				<input type="button" id="signup_button" value="Register" class="submit-btn reg-btn">
			</form>


			
		</div>
		<script type="text/javascript" src="script.js"></script>

<script type="text/javascript" src="signup.js"></script>
</body>

</html>



<script>

function _(element) {
    return document.getElementById(element);
}

var login_button = _("login_button");
login_button.addEventListener("click", collect_data);

function collect_data(){

      login_button.disabled = true;
        login_button.value = "Loading....Please Wait...";

    var myforml = _("myforml");
    var inputs = myforml.getElementsByTagName("INPUT");
    var data = {};
    for (var i = inputs.length -1; i >= 0; i--){
        var key = inputs[i].name;

        switch(key){

            case "email":
                data.email = inputs[i].value
                break;
            
            case "password":
                data.password = inputs[i].value
                break;
            
                

            }
            
        }
        send_data(data, "login");
        

        // alert(JSON.stringify(data));
}
function send_data(data, type){
    var xml = new XMLHttpRequest();
    xml.onload = function(){

        if(xml.readyState == 4 || xml.status == 200){
            handle_result(xml.responseText);
            login_button.disabled = false;
                login_button.value = "Login";
        }
    }
        data.data_type = type;
        var data_string = JSON.stringify(data);
        xml.open("POST", "api.php", true);
        xml.send(data_string);
    
}
function handle_result(result){
alert(result);
    var data = JSON.parse(result);
    if(data.data_type == "info"){

        window.location = "index.php";
    }else{

        var error = _("error");
        error.innerHTML = data.message;
        error.style.display = "block";
    }
}
</script>
