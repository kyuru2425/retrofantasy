<?php 

    require 'connection.php'; 
    require 'retrieveShop.php';
   
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css"
    />
    <link rel="stylesheet" href="home.css" />
    <link rel="stylesheet" href="viewItem.css">
</head>
<body>
<?php include "header.php" ?>
<div class="viewItem-container">
    <h1>Item Details</h1>
    <div class='viewItem-innercontainer'>
        <div class='viewItem-innercontainer-left'>
            <img src="./ProductImages/Nintendo/Game_Images/3DS/mariokart7.jpg" style='width:100%'>
        </div>
        <div class='viewItem-innercontainer-right' style="max-width: 50%;">
           
            <h2><?php echo $row4['product_name'] ?></h2>
            <h3>&#8369;<?php echo $row4['price'] ?>.00</h3>
            <h5 class='ms-5'>Brand: <?php echo $row4['brand_name'] ?></h5>
            <h5 class='ms-5'>Console: <?php echo $row4['console_name'] ?></h5>
            <h5 class='ms-5'>Type: <?php echo $row4['type_name'] ?></h4>
            
            <h3>Stocks available:<span id='stock'>5</span></h3>
            <h3>Quantity:<button id='qtyUp' type="button"><i class="bi bi-caret-up-fill"></i></button><div id='qty' style="display:inline-block;width:50px;text-align:center">1</div> <button id="qtyDown" type="button"><i class="bi bi-caret-down-fill"></i></button></h3>
           
            <form action="addtocart.php" method='post'>
                <input type="hidden" name='product_id' value='<?php echo $row4['product_id'] ?>'>
                <button class='btn btn-primary' type='submit' name='addtocart'>Add to Cart</button>
            </form>
           
        </div>    
    
    </div>
</div>

   
       
       
<?php include "footer.php" ?>
<!--//////////////////////////Javascript///////////////////////////////////////////////-->
    
    <script>
        const qtyUp=document.getElementById('qtyUp');
        const qty = document.getElementById('qty');
        const qtyDown =document.getElementById('qtyDown');
        const stock =document.getElementById('stock');
        
        let maxPurchase = parseInt(stock.textContent);

        let varQty = 1;
        qty.innerHTML = varQty;

        qtyUp.addEventListener('click',()=>{
           if( varQty < maxPurchase){
            varQty += 1;
                qty.innerHTML = varQty;
           }
               
        });
        qtyDown.addEventListener('click',()=>{
            if( varQty >1){
                varQty -= 1;
            qty.innerHTML = varQty;
           }
            
        })

        
    </script>  
</body>
</html>