<?php 
    require 'connection.php';
    
    // $modalName = '';    
    // $modalPrice='';
    // if(isset($_POST['$modalName'])){
    //     $modalName = $_POST['$modalName'];    
       
    // };
    // $sql2="SELECT * from products WHERE product_name='$modalName'";
    // $result2 = mysqli_query($connection,$sql2) OR trigger_error("failed sql".mysqli_error($connection),E_USER_ERROR);
    // $row3 = mysqli_fetch_assoc($result2);

    $where ='product_id > 0';
   
    $type ='product_type_id > 0';
    $column ="product_name";
    if (isset($_GET['where']) AND isset($_GET['type']))
    {
        $where = $_GET['where'];
        $type = $_GET['type'];
        // $sort = $sort == 'ASC' ? 'DESC' : 'ASC';

    }elseif(isset($_GET['where'])){
        $where = $_GET['where'];
    };
    
    $items_per_page= 12;
    $page= '';
    if(isset($_GET["page"]))
    {
        $page = $_GET["page"];
        
    }else{
        $page = 1;
    }
    $start_from = ($page-1)*$items_per_page;

    $page_query= "SELECT * FROM products";
    $page_result= mysqli_query($connection,$page_query);
    $total_records=mysqli_num_rows($page_result);
    $total_pages = ceil($total_records/$items_per_page);
    $previous_page = $page - 1;
    $next_page=$page + 1;
    $sql="SELECT * FROM products INNER JOIN consoles ON products.product_console_id = consoles.console_id WHERE $where && $type LIMIT $start_from,$items_per_page;";
    // $sql= "SELECT * FROM products WHERE product_console_id=$consoleName LIMIT $start_from,$items_per_page";
   
    $result = mysqli_query($connection,$sql) OR trigger_error("failed sql".mysqli_error($connection),E_USER_ERROR);
    

    
   
        if(isset($_POST['view'])){
        $productName = $_POST['product_name'];
//$sql4="SELECT * FROM (SELECT * FROM products INNER JOIN product_type ON products.product_type_id = product_type.type_id )AS newproducts INNER JOIN consoles ON newproducts.product_console_id = consoles.console_id INNER JOIN product_brands ON consoles.console_id = product_brands.brand_id WHERE product_name = '$productName'";
        $sql4="SELECT * FROM product_brands INNER JOIN consoles ON product_brands.brand_id = consoles.product_brand_id INNER JOIN products ON consoles.console_id = products.product_console_id INNER JOIN product_type ON products.product_type_id= product_type.type_id WHERE product_name = '$productName';";
        // $sql4 = "SELECT * FROM products WHERE product_name = '$productName'";
        $result4 = mysqli_query($connection,$sql4);
        $row4 = mysqli_fetch_assoc($result4);
    }
  
   
?>