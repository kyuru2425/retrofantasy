<?php
    include "connection.php";

    include "./sqlphp/sql.php";
    
    
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>List Of Products</title>
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <link rel="stylesheet" href="home.css" />
    </head>
    <body>
        <?php include "header.php" ?>
        <div class="container">
            <div>
                <form action="/productformcreate.php" method="post" enctype="multipart/form-data">
                    <input type="text" name="prodname" id="prodname" placeholder="Product Name" class="form-control" required><br>
                    <select name="console" id="console" class="form-control" required>
                        <option value="" selected disabled hidden>Select Console Type</option>
                        <option value="<?php echo $row['console_id'] ?>"><?php echo $row['console_name'] ?></option>
                        <?php
                            while($row = mysqli_fetch_array($result)){?>
                                <option value="<?php echo $row['console_id'] ?>"><?php echo $row['console_name'] ?></option>
                        <?php }
                            
                        ?>
                    </select><br>
                    <select name="type" id="type" class="form-control" required>
                        <option value="" selected disabled hidden>Select Product Type</option>
                        <option value="<?php echo $row2['type_id'] ?>"><?php echo $row2['type_name'] ?></option>
                        <?php
                            while($row2 = mysqli_fetch_array($result2)){?>
                                <option value="<?php echo $row2['type_id'] ?>"><?php echo $row2['type_name'] ?></option>
                        <?php }
                            
                        ?>
                    </select><br>
                    <input type="number" name="price" id="price" class="form-control" placeholder="Product Price" required>
                    <br>    
                    <input type="file" name="image" id="image" class="form-control" required>
                    <br>
                    <input type="submit" name="addprod" id="addprod" class="btn btn-primary">
                </form>
            </div>
            <br>
            <div>
                <table class="table table-dark">
                    <thead>
                        <tr>
                            <td>ID</td>
                            <td>Product Name</td>
                            <td>Product Image</td>
                            <td>Console Type</td>
                            <td>Product Type</td>
                            <td>Price</td>
                            <td>Inventory</td>
                            <td>Discount Type</td>
                            <td colspan="2" class="text-center">Action</td>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- for some reason it doesnt display the first row-->
                                <tr>
                                    <td><?php echo $row3['product_id'] ?></td>
                                    <td><?php echo $row3['product_name'] ?></td>
                                    <td><img src="<?php echo $row3['image'] ?>" alt="" style="width:50px;height:50px;"></td>
                                    <td><?php echo $row3['console_name'] ?></td>
                                    <td><?php echo $row3['type_name'] ?></td>
                                    <td><?php echo $row3['price'] ?></td>
                                    <td><?php echo $row3['quantity'] ?></td>
                                    <td><?php echo $row3['discount_name'] ?></td>
                                    <td>
                                        <form action='update.php' method='post'> 
                                            <input type='submit' value='Edit' name='edit' class='btn btn-secondary'>
                                            <input type='hidden' name='prodid' value="<?php echo $row3['product_id'] ?>">
                                        </form> 
                                    </td>
                                    <td>
                                        <form action='update.php' method='post'> 
                                            <input type='submit' value='Delete' name='delete' class='btn btn-danger'>
                                            <input type='hidden' name='prodid' value="<?php echo $row3['product_id'] ?>">
                                        </form> 
                                    </td>
                                </tr>
                        <?php
                            while($row3 = mysqli_fetch_array($result3)){?>
                                <tr>
                                    <td><?php echo $row3['product_id'] ?></td>
                                    <td><?php echo $row3['product_name'] ?></td>
                                    <td><img src="<?php echo $row3['image'] ?>" alt="" style="width:50px;height:50px;"></td>
                                    <td><?php echo $row3['console_name'] ?></td>
                                    <td><?php echo $row3['type_name'] ?></td>
                                    <td><?php echo $row3['price'] ?></td>
                                    <td><?php echo $row3['quantity'] ?></td>
                                    <td><?php echo $row3['discount_name'] ?></td>
                                    <td>
                                        <form action='update.php' method='post'> 
                                            <input type='submit' value='Edit' name='edit' class='btn btn-secondary'>
                                            <input type='hidden' name='prodid' value="<?php echo $row3['product_id'] ?>">
                                        </form> 
                                    </td>
                                    <td>
                                        <form action='delete.php' method='post'> 
                                            <input type='submit' value='Delete' name='delete' class='btn btn-danger'>
                                            <input type='hidden' name='prodid' value="<?php echo $row3['product_id'] ?>">
                                        </form> 
                                    </td>
                                </tr>
                            
                        <?php    }?>
                    </tbody>
                </table>
            </div>
            
        </div>




        <?php include "footer.php"; ?>
        <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    </body>
</html>