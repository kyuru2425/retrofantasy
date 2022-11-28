<?php
    include "connection.php";

    include "./sqlphp/sql.php";
    $prodid = $_POST['prodid'];
    if(isset($_POST['edit'])){
        $prodid = $_POST['prodid'];
        $sql4 = "SELECT * FROM products p INNER JOIN inventory i ON p.product_id=i.product_id INNER JOIN discounts d ON p.discount_id=d.discount_id WHERE p.product_id ='$prodid'";
        $result4 = mysqli_query($connection, $sql4);
        $row4 = mysqli_fetch_assoc($result4);
    }else if(isset($_POST['update'])){
        //$prodid = $_POST['prodid'];
        $prodname = $_POST['prodname'];
        $console = $_POST['console'];
        $type = $_POST['type'];
        $price = $_POST['price'];
        $qty=$_POST['inventory'];
        
        $sql5 = "UPDATE products p INNER JOIN inventory i ON p.product_id = i.product_id SET p.product_name='$prodname', p.product_console_id='$console', p.product_type_id='$type', p.price='$price', i.quantity='$qty'
                    WHERE p.product_id='$prodid'";

        $result5 =mysqli_query($connection,$sql5);

        
        echo "<script>window.location.href='productlist.php'</script>";
    }else{
        echo "<script>window.location.href='productlist.php'</script>";
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <div class="container">
            <h2>Edit Product</h2>
            <form action="update.php" method="post">
                <input type='hidden' name='prodid' value="<?php echo $row4['product_id'] ?>">
                <div class="form-group">
                    <label for="prodname">Product Name</label>
                    <input type="text" name="prodname" id="prodname" value="<?php echo $row4['product_name'] ?>">
                </div>
                <br>
                <div class="form-group">
                    <label for="console">Console Type</label>
                    <select name="console" id="console" class="form-control" required>
                        <option value="" selected disabled hidden>Select Console Type</option>
                        <option value="<?php echo $row['console_id'] ?>" <?php echo $row['console_id']== $row4['product_console_id']? 'selected':'' ?>><?php echo $row['console_name'] ?></option>
                        <?php
                            while($row = mysqli_fetch_array($result)){?>
                                <option value="<?php echo $row['console_id'] ?>" <?php echo $row['console_id']== $row4['product_console_id']? 'selected':'' ?>><?php echo $row['console_name'] ?></option>
                        <?php }
                            
                        ?>
                    </select>
                </div>
                <br>
                <div class="form-group">
                    <label for="type">Product Type</label>
                    <select name="type" id="type" class="form-control" required>
                        <option value="" selected disabled hidden>Select Product Type</option>
                        <option value="<?php echo $row2['type_id'] ?>" <?php echo $row2['type_id']== $row4['product_type_id']? 'selected':'' ?>><?php echo $row2['type_name'] ?></option>
                        <?php
                            while($row2 = mysqli_fetch_array($result2)){?>
                                <option value="<?php echo $row2['type_id'] ?>" <?php echo $row2['type_id']== $row4['product_type_id']? 'selected':'' ?>><?php echo $row2['type_name'] ?></option>
                        <?php }
                            
                        ?>
                    </select>
                </div>
                <br>
                <div class="form-group">
                    <label for="price">Product Price</label>
                    <input type="text" name="price" id="price" value="<?php echo $row4['price'] ?>">
                </div>
                <br>
                <div class="form-group">
                    <label for="discount">Discount Type</label>
                    <input type="number" name="discount" id="discount" value="<?php echo $row4['discount_id'] ?>">
                </div>
                <br>
                <div class="form-group">
                    <label for="active">Discount Active?</label>
                    <select name="active" id="active">
                        <option value="0">Inactive</option>
                        <option value="1">Active</option>
                    </select>
                </div>
                <br>
                <div class="form-group">
                    <label for="inventory">In Inventory</label>
                    <input type="number" name="inventory" id="inventory" value="<?php echo $row4['quantity'] ?>">
                </div>
                <br>
                <input type="submit" name="update" id="update" class="btn btn-primary">
            </form>
        </div>
    </body>
</html>