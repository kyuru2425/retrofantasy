<?php
    include "connection.php";
   
    session_start();
    $emailforcart=$_SESSION["email"] ;
//check if may cart na si user
$sqluser="SELECT * FROM cart WHERE customer_email='$emailforcart';";
$resultuser=mysqli_query($connection, $sqluser);
$rowuser =mysqli_num_rows($resultuser);


  
    
    
    if (isset($_POST['addtocart'])){
        $product_id = $_POST['product_id'];
        $qty=$_POST['qty'];
        
        if($rowuser == 0){

          $sql01="INSERT INTO cart (customer_email,status,total) VALUES('$emailforcart',1,0);";
          $result01=mysqli_query($connection, $sql01);
          $sql="SELECT * FROM cart WHERE customer_email='$emailforcart' AND status=1;";
          $result=mysqli_query($connection, $sql);
          $row01= mysqli_fetch_array($result);
          $cart_id=$row01['cart_id'];
          $sqladd="INSERT INTO cart_details (product_id,cart_id,quantity) VALUES($product_id,$cart_id,$qty)";
          $resultadd=$result01=mysqli_query($connection, $sqladd);
          
          
        }else{
          
          $sql="SELECT * FROM cart WHERE customer_email='$emailforcart' AND status=1;";
          $result=mysqli_query($connection, $sql);
          $row =mysqli_fetch_array($result);
          $cart_id=$row['cart_id'];
          $sqladd="INSERT INTO cart_details (product_id,cart_id,quantity) VALUES($product_id,$cart_id,$qty)";
          $resultadd=mysqli_query($connection, $sqladd);

        }
  // get the total price from cart  
        $sqlgetprice="SELECT p.product_id,p.price FROM cart_details AS cd INNER JOIN products AS p ON cd.product_id = p.product_id WHERE p.product_id = $product_id ;";
        $resultgetprice = mysqli_query($connection,$sqlgetprice);
        $rowgetprice = mysqli_fetch_array($resultgetprice);
        //multiply the price to qty
        $price=$rowgetprice['price']*$qty;
        //add the price to the total
        $total=$row['total'];
        $newtotal=$total + $price;
        $sqlupdate= "UPDATE cart SET total ='$newtotal' WHERE customer_email= '$emailforcart' AND status=1;";
        $resultupdate=mysqli_query($connection,$sqlupdate);

        echo "<script>alert('Successfully Added to cart');</script>";
        echo "<script>window.location.href='shop.php'</script>";


      }



     
      
      //for getting the total amount
    $sql03="SELECT total FROM cart WHERE customer_email='$emailforcart' AND status=1";
    $result03=mysqli_query($connection, $sql03);
    
    //display the products in cart
    $sql02="SELECT * FROM products INNER JOIN cart_details ON products.product_id = cart_details.product_id INNER JOIN cart ON cart_details.cart_id = cart.cart_id WHERE customer_email='$emailforcart' AND status=1";
    $result02=mysqli_query($connection, $sql02);
    
    
   
?>
