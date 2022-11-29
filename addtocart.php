<?php
    include "connection.php";
   
    session_start();
    $email=$_SESSION["email"] ;
    $sql="SELECT * FROM customers WHERE email='$email';";
    $result=mysqli_query($connection, $sql);
    $row=mysqli_fetch_array($result);
    $customer_id= $row['customer_id'];
    if (isset($_POST['addtocart'])){

        $product_id = $_POST['product_id'];
    //insert the customer_id in the cart table 
      $sql01="INSERT INTO cart (customer_id,product_id,status) VALUES('$customer_id', '$product_id','1');";
      $result01=mysqli_query($connection, $sql01);



     
      echo "<script>alert('Successfully Added to cart');</script>";
      echo "<script>window.location.href='shop.php'</script>";
      
    }
    //display the products in cart
    $sql02="SELECT * FROM products INNER JOIN cart ON products.product_id = cart.product_id INNER JOIN customers ON cart.customer_id = customers.customer_id WHERE status=1";
    $result02=mysqli_query($connection, $sql02);
    
    //for getting the total amount
    $sql03="SELECT FORMAT(SUM(products.price),2) as total FROM products INNER JOIN cart ON products.product_id = cart.product_id INNER JOIN customers ON cart.customer_id = customers.customer_id GROUP BY cart.status HAVING status = 1;";
    $result03=mysqli_query($connection, $sql03);
   
?>
