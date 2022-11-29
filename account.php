<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <link rel="stylesheet" href="home.css" />
        <style>
            #cont{
                height: 90vh;
                /* background-color: beige; */
                padding: 20px;
            }
            .thick{
                font-size: 25px;
                font-weight: bold;
            }

            #two{
                background-color: red;
                height: 90vh;
            }
        </style>
    </head>
    <body>
        <?php include "header.php" ?>
        <div class="container" id="cont">
            <h2>Hello User!</h2>
            <div class="card bg-secondary">
                <h5 class="card-header">Personal Information</h5>
                <div class="card-body">
                    <h3>Dummy Dummy</h3>
                    <p>example@mail.com</p>
                    <p>09123546789</p>
                    <div>
                        <h3>Shipping Address: </h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. In, laboriosam? </p>
                    </div>
                    <form method="post" action="">
                        <input type="hidden" name="fname" id="fname" value="">
                        <input type="hidden" name="lname" id="lname" value="">
                        <input type="hidden" name="email" id="email" value="">
                        <input type="hidden" name="phone" id="phone" value="">
                        <input type="hidden" name="address" id="address" value="">
                        <input type="submit" name="edit" id="edit" value="Edit" class="btn btn-primary">
                    </form>
                </div>
            </div>
            <br>
            <div>
                <h4>Order History</h4>
                <table class="table">
                    <thead>
                        <tr>
                            <th>Cart ID</th>
                            <th>Date Transacted</th>
                            <th>Product</th>
                            <th>Total</th>
                        </tr>
                    </thead>
                    <tbody>

                    </tbody>
                </table>
            </div>


        </div>
        <?php include "footer.php" ?>
        <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    </body>
</html>