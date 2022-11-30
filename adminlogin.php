<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Hello Admin</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" 
rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="home.css" />
    <style>
        form{
            justify-content: center;
            align-items: center;
        }

    </style>
    </head>
    <body>
        <div class="container d-flex p-3" id="back">
            <form action="admin_action.php" method="post">
                <div class="form-group">
                    <label for="aemail" class="form-label">Admin Email</label>
                    <input type="email" name="aemail" id="aemail" class="form-control">
                </div>
                <br>
                <div class="form-group">
                    <label for="apass" class="form-label">Admin Password</label>
                    <input type="password" name="apass" id="apass" class="form-control">
                </div>
                <br>
                <input type="submit" name="login" id="login" class="btn btn-primary" value="Login">
            </form>
        </div>
        <div class="text-center hehe">
            <a href="/index.php"><img src="/images/retro-fantasy-logo2.png" alt=""></a>
        </div>
        

        <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    </body>
</html>