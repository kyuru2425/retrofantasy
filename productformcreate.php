<?php
    require "connection.php";

    if(isset($_POST['addprod'])){
        $prodname = $_POST['prodname'];
        $console = $_POST['console'];
        $type = $_POST['type'];
        $price = $_POST['price'];
        $discount = 1;
        // echo "Product Name: $prodname";
        // echo "Console ID: $console";
        // echo "Type ID: $type";
        $sql1 = "INSERT INTO products SET product_name='$prodname', product_console_id='$console', product_type_id='$type', price='$price', discount_id='$discount'";
        $result = mysqli_query($connection, $sql1)OR trigger_error("failed sql". mysqli_error($connection),E_USER_ERROR);
        $id = $connection->insert_id;
        $qty=0;
        $sql2 = "INSERT INTO inventory SET product_id='$id', quantity='$qty'";
        $result2=mysqli_query($connection,$sql2);

        echo "<script>alert('Successesfully created $id')</script>";
        echo "<script>window.location.href='productlist.php'</script>";
        
    }else{
        echo "<script>window.location.href='register.php'</script>";
    }
?>