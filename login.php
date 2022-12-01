<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Samples</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" 
rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="home.css" />

<style>
	
form {
	text-align: center;
	background-color: black;
	margin: 0px;
	margin-right: 30%;
	margin-left: 30%;
	border-radius: 1rem;
	box-shadow: 0 0 10px white;
	
}


#email, #password {
border-radius: 0.5rem;
text-align: center;
padding: 0;
margin-top: 0%;
height: 40px;
border-bottom: 4px solid #f0ad4e ;

}
#hide a{
	color: black;
}


</style>


</head>
<body>
	<?php include "header.php"; ?>
	<div class="container" style="height:90vh;display:flex;justify-content:center;align-items:center" >
<form style="height:60%; width:40%; min-height:500px; " action="login_action.php" method="post" id="formLogin">
			<div class="login-form-container">
				<br><h1 style="color:#f0ad4e">Login Page</h1><br>
				<div class="field-column">
					<div>
						<label for="email" style="color:#f0ad4e">Email</label>
						<span id="user_info" class="error-info"></span>
					</div>
					<div>
						<input style="font-family:Verdana, Geneva, Tahoma, sans-serif" name="email" id="email" type="email" class="demo-input-box login" placeholder="Enter Email">
					</div>
				</div>
				<div class="field-column">
					<div>
						<br><label style="color:#f0ad4e" for="password">Password</label><span id="password_info"
							class="error-info"></span>
					</div>
					<div>
						<input style="font-family:Verdana, Geneva, Tahoma, sans-serif" name="password" id="password" type="password" class="demo-input-box login" placeholder="Enter Password">
					</div>
				</div>
				<div class=field-column>
					<div>
						<br><input type="submit" name="login" value="Login" class="btn btn-warning">
					</div>
				</div>
				<div class="form-nav-row">
				<br><a href="#" class="form-link text-warning" style="cursor:default">Forgot password?</a>
				</div>
				<div class="login-row form-nav-row">
					<p>New user?</p>
					<a href="/signup.php" class="btn form-link text-dark"><u class="text-warning">Signup Here</u></a>
				</div>
				<!-- <div class="login-row form-nav-row">
					<p>May also signup with</p>
					<a href="#"><i class="bi bi-twitter"></i></a>
                    <a href="#"><i class="bi bi-linkedin"></i>
				</div> -->
			</div>
</form>
</div>
<div id="hide"><a href="adminlogin.php" class="btn">a</a></div>
		<?php include "footer.php"; ?>

<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html> 