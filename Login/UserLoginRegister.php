<!DOCTYPE html>
<html>
	
<head>
	<title>Event Advisor Admin Panel</title>
	<script src="/scripts/jquery-2.1.3.min.js"></script>
	<script type="text/javascript" src="/scripts/application.js"></script>
		<meta charset="utf-8">
		<link href="/css/style.css" rel='stylesheet' type='text/css' />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } 
		</script>
		<!--webfonts-->
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:600italic,400,300,600,700' rel='stylesheet' type='text/css'>
		<!--//webfonts-->
</head>
<body>
	
				 <!-----start-main---->
				<div id="login_form" class="login-form">
					<div class="head">
						<img src="/images/rsz_admin.jpg" alt=""/>
						
					</div>
				<form action="ValidateLogin.php" method="post">
					<li>
						<input type="text" class="text" name="username" id="username" placeholder="Enter Username" required ><a href="#" class=" icon user"></a>
					</li>
					<li>
						<input type="password" name="password" id="Password" placeholder="Enter password" required><a href="#" class=" icon lock"></a>
					</li>
					<div class="p-container">
						<div>
								<label class="checkbox" style="width:100%"><input type="checkbox" name="checkbox" checked><i></i>Remember Me</label><br>
							</div>
								<div id="buttons" style="display:inline">
								<input type="submit" onclick="myFunction()" value="Login" >
								<input type="button" id="register_toggle" name="register_toggle" value="Register" style="margin-right: 16%">
							</div>
							<div class="clear"> </div>
					</div>
				</form>
			</div>
			<!--//End-login-form-->


				 <!-----start-main---->
				<div name="register_form" id="register_form" class="login-form" name="login-form" style="display:none">
					<div class="head">
						<img src="/images/mem2.jpg" alt=""/>
						<!-- <label class="login_toggle" style="width:100%"><input class="login_toggle" type="button" id="login_toggle" value="Login" style="margin-right: 20%; width:40% "><i></i>wanna go back</label><br> -->
					</div>
					<p id="login_toggle" style="padding: 5% 5% 0% 5%;" >Wanna go back...</p>
				<form action="register.php" method="post" style="padding: 10% 2.5em 12% 2.5em;">
					<div style="display:flex">
					<li style="width:20%; margin-right:2px">
						<!-- <input type="Gender" class="text" name="username" id="username" placeholder="Enter Username" required > -->
						<select class="gender" name="gender" id="gender" style="width:100%;   padding: 0.7em 0em 0.7em 0em;">
							<option value="male">Mr</option>
							<option value="female_single">Ms</option>
							<option value="female_married">Mrs</option>
						</select>
					</li>
					<li>
						<input type="text" class="text" name="username" id="username" placeholder="User Name" required >
					</li>
				</div>	
					<li>
						<input type="password" class="text" name="password" id="password" placeholder="Password" required >
					</li>
					<!-- <li>
						<input type="text" class="text" name="lastname" id="lastname" placeholder="Last Name" required >
					</li> -->
					<li>
						<input type="email" class="text" name="Email" id="email" placeholder="Email" required>
					</li>
					<li>
						<input type="text" class="text" name="phonenumber" id="phonenumber" maxlength="11" placeholder="PhoneNumber" required >
					</li>
					
					<!-- <li>
						<input type="date" class="text" name="dob" id="dob" placeholder="Date Of Birth" >
					</li> -->
					<!-- <li>
						<input type="text" class="text" name="city" id="city" placeholder="City" >
					</li> -->
					<!-- <li>
						<input type="text" class="text" name="location" id="location" placeholder="Location" >
					</li> -->
					<div class="p-container">
								<!-- <label class="checkbox"><input type="checkbox" name="checkbox" checked><i></i>Remember Me</label> -->
								<input type="submit" onclick="myFunction()" value="Register" >
							<div class="clear"> </div>
					</div>
				</form>
			</div>
			<!--//End-login-form-->
			<div style="display:none">
		  <!-----start-copyright---->
   					<div class="copy-right">
						<p>Template by <a href="http://w3layouts.com">w3layouts</a></p> 
					</div>
				<!-----//end-copyright---->
				</div>
<?php echo file_get_contents("../footer.php") ?>
</body>
</html>