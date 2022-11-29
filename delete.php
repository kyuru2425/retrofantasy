<?php
    require "connection.php";

    if(isset($_POST['delete'])){
        $prodid = $_POST['prodid'];
        $sql1 = "DELETE FROM products WHERE product_id='$prodid'";
        $sql2 = "DELETE FROM inventory WHERE product_id='$prodid'";
        $result = mysqli_query($connection, $sql2);
        $result1 = mysqli_query($connection, $sql1);
        

        echo "<script>alert('Successesfully deleted')</script>";
        //echo "<script>window.location.href='register.php'</script>";
        header("location: productlist.php");
    }else{
        header("location: productlist.php");
    }
?>