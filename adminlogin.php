<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Hello Admin</title>
    </head>
    <body>
        <form action="admin_action.php" method="post">
            <div class="form-group">
                <label for="aemail">Admin Email</label>
                <input type="email" name="aemail" id="aemail">
            </div>
            <div class="form-group">
                <label for="apass">Admin Password</label>
                <input type="password" name="apass" id="apass">
            </div>
            <input type="submit" name="login" id="login" class="btn btn-primary" value="Login">
        </form>
    </body>
</html>