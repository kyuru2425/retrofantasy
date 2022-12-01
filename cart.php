

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
	<?php include "header.php";
    // session_start();
    
     include 'addtocart2.php';
    
    
    if ($_SESSION['status'] == 'invalid'){
        echo "<script>alert('Log in account first');</script>";
        echo "<script>window.location.href='login.php'</script>";
    }

    if(isset($_POST['deleteitem'])){
        $price=$_POST['price'];
        $detail_id = $_POST['detail_id'];
        $sqldelete = "DELETE FROM cart_details WHERE detail_id =$detail_id;";
        $resultdelete = mysqli_query($connection,$sqldelete);

        $sqlafterdelete ="SELECT * FROM cart WHERE customer_email= '$emailforcart' AND status=1;";
        $resultafterdelete =mysqli_query($connection,$sqlafterdelete);
        $rowafterdelete = mysqli_fetch_array($resultafterdelete);
        $total=$rowafterdelete['total'];

        $newtotal=$total-$price;
        $sqlupdatedafterdel= "UPDATE cart SET total = '$newtotal' WHERE customer_email= '$emailforcart' AND status=1;";
        $resultupdateafterdel= mysqli_query($connection,$sqlupdatedafterdel);
        echo "<script>window.location.href='cart.php'</script>";
        
    }

?>
    <div class="cart-container">
    <div class="cart-innercontainer">
        <h2 class="text-center font-weight-bold text-warning" >CART</h2>
        <table class="table">
            <thead>
                <tr>
                    <td>Product Name</td>
                    <td></td>
                    <td>Price</td>
                    <td>Quantity</td>
                    <td style="text-align:right">Total</td>
                    <td></td>

                </tr>
            </thead>
            <tbody class="cart-table">
                <?php 
                while($row02=mysqli_fetch_array($result02)){?>
                    <tr style="height:80px">
                        <td class="align-middle" ><img src="<?php echo $row02['image']?>" style='width:60px'></td>
                        <td class="align-middle"><?php echo $row02['product_name']?></td>
                        <td class="align-middle " ><?php echo $row02['price']?></td>
                        <td class="align-middle " ><?php echo $row02['quantity']?></td>
                        <td class="align-middle " style="text-align:right">&#8369;<?php echo ($row02['price']*$row02['quantity']) ;?>.00</td>
                        <td class="align-middle "  style="text-align:right">
                            <form action="/cart.php" method='POST'>
                            <button onclick="return confirm('Are you sure you want to remove this item?')" class="btn"type="submit" name='deleteitem'><i class="bi bi-trash3"></i></button>
                            <input type="hidden" name='detail_id' id="detail_id" value="<?php echo $row02['detail_id']?>">
                            <input type="hidden" name='price' value="<?php echo $row02['price']?>"/>
                            </form>
                        </td>

                    </tr>

                <?php } ?>
            </tbody>
            <tfoot>
                <tr>
                <td></td>
                <td></td>
                <td></td>
                <td>TOTAL</td>
                <td class="text-warning"><h3 style="text-align:right"  class="text-danger">&#8369;<?php while($row03=mysqli_fetch_array($result03)){
                        echo $row03['total'];
                     } ?>.00</h3></td> 
            </tr>
            </tfoot>
        </table>
                    <div class="checkout">
                        <?php include 'checkout.php';?>
                        <form action="/cart.php" method="POST">
                            <input class="btn btn-warning" type="submit" name='checkout' value='CHECKOUT'>
                            <input type="hidden" name='emailCO' value="<?php echo $emailcheckout ?>">
                            
                        </form>
                    </div> 
    </div>
    </div>

	<?php include "footer.php"; ?>

<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

</body>
</html> 