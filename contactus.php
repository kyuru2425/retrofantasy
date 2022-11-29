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
</head>
<body>
	<?php include "header.php"; ?>

<div class="container h-100">
    <div class="row h-100 justify-content-center align-items-center">
        <div class="col-10 col-md-8 col-lg-6">

            <!-- Form -->

            <div style="text-align:center">
                <h2>Contact Us</h2>
                <p> Email or send us a message and our retrofantasy <br> representative will connect to you shortly.  
                </p><br>
            </div>
            <form class="form-example" action="" method="post" style="text-align:center">
                <label for="fname">First Name</label>
                <input type="text" id="fname" name="firstname" placeholder="Your name.."><br><br>
                <label for="lname">Last Name</label>
                <input type="text" id="lname" name="lastname" placeholder="Your last name.."><br><br>
                <label for="lname">Email Address</label>
                <input type="email" id="email" name="email" placeholder="Your email address.." ><br><br>
                <label for="Comment or Message">Comment or Message</label><br>
                <textarea id="subject" name="subject" placeholder="Write something.." cols="30" rows="8"></textarea><br><br>
                <input type="submit" value="Submit" class="btn btn-primary">
            </form>
            <!-- Form end -->
            
        </div>
    </div>
</div>
		<?php include "footer.php"; ?>

<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html> 