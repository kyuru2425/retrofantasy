<?php 
    include 'addtocart.php';
?>
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
    <link rel="stylesheet" href="cart.css">
</head>
<body>
	<?php include "header.php"; ?>
    <div class="cart-container">
    <div class="cart-innercontainer">
        <h2 class="text-center font-weight-bold" >CART</h2>
        <table class="table">
            <thead>
                <tr>
                    <td>Product Name</td>
                    <td></td>
                    <td>Price</td>
                    <td>Quantity</td>
                    <td>Total</td>

                </tr>
            </thead>
            <tbody class="cart-table">
                <?php 
                while($row02=mysqli_fetch_array($result02)){?>
                    <tr>
                        <td class="align-middle"><img src="./ProductImages/Nintendo/Game_Images/3DS/mariokart7.jpg" style='width:60px'></td>
                        <td class="align-middle"><?php echo $row02['product_name']?></td>
                        <td class="align-middle"><?php echo $row02['price']?></td>
                        <td class="align-middle">2</td>
                        <td class="align-middle"><?php echo ($row02['price']*2) ;?></td>

                    </tr>

                <?php } ?>
            </tbody>
            <tfoot>
                <tr>
                <td></td>
                <td></td>
                <td></td>
                <td>TOTAL</td>
                <td><?php while($row03=mysqli_fetch_array($result03)){
                        echo $row03['total'];
                     } ?></td>
            </tr>
            </tfoot>
        </table>
                    <div class="checkout"><button class="btn btn-primary" type="Submit">CHECKOUT</button></div> 
    </div>
    </div>

	<?php include "footer.php"; ?>

<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

</body>
</html> 