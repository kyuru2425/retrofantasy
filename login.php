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

</head>
<body>
<form action="login_action.php" method="post" id="formLogin">
			<div class="login-form-container">

				<div class="form-head">Login Page</div>

                <div class="field-column">
					<div>
						<label for="email">Email</label>
						<span id="user_info" class="error-info"></span>
					</div>
					<div>
						<input name="email" id="email" type="email" class="demo-input-box" placeholder="Enter Email">
					</div>
				</div>
				<div class="field-column">
					<div>
						<label for="password">Password</label><span id="password_info"
							class="error-info"></span>
					</div>
					<div>
						<input name="password" id="password" type="password"
							class="demo-input-box" placeholder="Enter Password">
					</div>
				</div>
				<div class=field-column>
					<div>
						<br><input type="submit" name="login" value="Login" class="btn btn-primary">
					</div>
				</div>
				<div class="form-nav-row">
					<a href="#" class="form-link">Forgot password?</a>
				</div>
				<div class="login-row form-nav-row">
					<p>New user?</p>
					<a href="/signup.php" class="btn form-link">Signup Now</a>
				</div>
				<!-- <div class="login-row form-nav-row">
					<p>May also signup with</p>
					<a href="#"><i class="bi bi-twitter"></i></a>
                    <a href="#"><i class="bi bi-linkedin"></i>
				</div> -->
			</div>
		</form>

    <?php

    ?>

<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html> 