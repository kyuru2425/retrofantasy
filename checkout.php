<?php

    include 'connection.php';

    if(!session_id()) session_start();

    $emailcheckout = $_SESSION['email'];

    $sqlcheckstatus="SELECT * FROM cart WHERE customer_email = '$emailcheckout' AND status = 1";
    $resultcheckstatus = mysqli_query($connection,$sqlcheckstatus);
    $rowcheckstatus=mysqli_fetch_array($resultcheckstatus);
    $count=mysqli_num_rows($resultcheckstatus);
$rowstatus=0;
    if($count > 0){
    $rowstatus=$rowcheckstatus['status'];
    }

    if(isset($_POST['checkout'])){
        if($rowstatus == 1){



              
            // $sqlinventory= "SELECT * FROM inventory INNER JOIN products ON inventory.product_id=products.product_id INNER JOIN cart_details ON products.product_id = cart_details.product_id INNER JOIN cart ON cart_details.cart_id = cart.cart_id WHERE customer_email ='$emailcheckout' AND status=1;" ;
            // $resultinventory=mysqli_query($connection,$sqlinventory);
            // while($rowinvetory=mysqli_fetch_array($resultinventory)){
               
            //     $qty =$rowinvetory['inventory.quantity'];
            //     $qty2=$rowinvetory['cart_details.quantity'];
            //     $product_id=$rowinvetory['cart_details.product_id'];
                
            //     $newqty =$qty -$qty2;
            //     $sqlnewinventory ="UPDATE inventory SET quantity = 'newqty' WHERE product_id='$product_id' ;";
            //     $resultnewinventory = mysqli_query($connection,$sqlnewinventory);

            // }
            $sqlinventory = "SELECT c.customer_email, c.status, i.quantity AS inqty, cd.quantity AS cdqty, p.product_id FROM cart c INNER JOIN cart_details cd ON c.cart_id = cd.cart_id 
            INNER JOIN products p ON cd.product_id = p.product_id
            INNER JOIN inventory i ON p.product_id = i.product_id
            WHERE c.customer_email='$emailcheckout' AND c.status=1";
            $resultinventory=mysqli_query($connection,$sqlinventory);
            while($rowinventory = mysqli_fetch_array($resultinventory)){
                $qty = $rowinventory['inqty'];
                $qty2 = $rowinventory['cdqty'];
                $prodid = $rowinventory['product_id'];
                $newqty = $qty-$qty2;
                $sqlnewinventory = "UPDATE inventory SET quantity = $newqty WHERE product_id =$prodid ";
                $resultnewinventory = mysqli_query($connection, $sqlnewinventory);
            }
            

            $sqlcheckout= "UPDATE cart SET status =0 WHERE customer_email= '$emailcheckout';";
            $resultcheckout =mysqli_query($connection,$sqlcheckout);
        

          

           
        

            
            echo "<script>swal('Successfully Checked out');</script>";
            echo "<script>window.location.href='cart.php'</script>";
        }
        
     
        

        

    }




?>