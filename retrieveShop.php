<?php 
    require 'connection.php';
    

    // initial values to select all products
    $where="";
    $type =""; 
    $items_per_page= 12; // limit of items viewed 
    $page=1;
    $console='';
  
    if (isset($_GET['where']) && isset($_GET['type']) && isset($_GET["page"])){
        $where = "console_name=".$_GET['where'];
        $type = "product_type_id=".$_GET['type'];
        $page= $_GET["page"];
        $console = str_replace("'", "",$_GET['where']);
        $start_from = ($page-1)*$items_per_page;
        $sql="SELECT * FROM products INNER JOIN consoles ON products.product_console_id = consoles.console_id WHERE $where && $type LIMIT $start_from,$items_per_page;";
        $sqlpage="SELECT * FROM products INNER JOIN consoles ON products.product_console_id = consoles.console_id WHERE $where && $type";
    }elseif(isset($_GET['where']) && isset($_GET['type'])){
        $where = "console_name=".$_GET['where'];
        $type = "product_type_id=".$_GET['type'];
        $start_from = ($page-1)*$items_per_page;
        $console = str_replace("'", "",$_GET['where']);

        $sql="SELECT * FROM products INNER JOIN consoles ON products.product_console_id = consoles.console_id WHERE $where && $type;";
        $sqlpage="SELECT * FROM products INNER JOIN consoles ON products.product_console_id = consoles.console_id WHERE $where && $type";
    }
    elseif(isset($_GET['where']) && isset($_GET["page"])){
        $where = "console_name=".$_GET['where'];
        $page= $_GET["page"];
        $console = str_replace("'", "",$_GET['where']);

        $start_from = ($page-1)*$items_per_page;
        $sql="SELECT * FROM products INNER JOIN consoles ON products.product_console_id = consoles.console_id WHERE $where LIMIT $start_from,$items_per_page;";
        $sqlpage="SELECT * FROM products INNER JOIN consoles ON products.product_console_id = consoles.console_id WHERE $where ";
        
    }elseif (isset($_GET['type']) && isset($_GET["page"])){
        $type = "product_type_id=".$_GET['type'];
        $page= $_GET["page"];
        $start_from = ($page-1)*$items_per_page;
        $sql="SELECT * FROM products INNER JOIN consoles ON products.product_console_id = consoles.console_id WHERE $type LIMIT $start_from,$items_per_page;";
        $sqlpage="SELECT * FROM products INNER JOIN consoles ON products.product_console_id = consoles.console_id WHERE $type ;";

    }
    elseif(isset($_GET['where'])){
        $where = "console_name=".$_GET['where'];
        $start_from = ($page-1)*$items_per_page;
        $console = str_replace("'", "",$_GET['where']);

        $sql="SELECT * FROM products INNER JOIN consoles ON products.product_console_id = consoles.console_id WHERE $where LIMIT $start_from,$items_per_page;";
        $sqlpage="SELECT * FROM products INNER JOIN consoles ON products.product_console_id = consoles.console_id WHERE $where ";
        
    }elseif(isset($_GET['type'])){
        $type = "product_type_id=".$_GET['type'];
        $start_from = ($page-1)*$items_per_page;
        $sql="SELECT * FROM products INNER JOIN consoles ON products.product_console_id = consoles.console_id WHERE $type LIMIT $start_from,$items_per_page;";
        $sqlpage="SELECT * FROM products INNER JOIN consoles ON products.product_console_id = consoles.console_id WHERE $type ;";

    }
    elseif(isset($_GET['page'])){
        $page= $_GET["page"];
        $start_from = ($page-1)*$items_per_page;
        $sql="SELECT * FROM products INNER JOIN consoles ON products.product_console_id = consoles.console_id LIMIT $start_from,$items_per_page ;";
        $sqlpage="SELECT * FROM products INNER JOIN consoles ON products.product_console_id = consoles.console_id ;";

    }
    else{
        $page = 1;
        $start_from = ($page-1)*$items_per_page;
        $sql="SELECT * FROM products INNER JOIN consoles ON products.product_console_id = consoles.console_id LIMIT $start_from,$items_per_page ;";
        $sqlpage="SELECT * FROM products INNER JOIN consoles ON products.product_console_id = consoles.console_id ;";

    }
    
    $result = mysqli_query($connection,$sql) OR trigger_error("failed sql".mysqli_error($connection),E_USER_ERROR);
    $result = mysqli_query($connection,$sql) OR trigger_error("failed sql".mysqli_error($connection),E_USER_ERROR);
    $resultpage = mysqli_query($connection,$sqlpage) OR trigger_error("failed sql".mysqli_error($connection),E_USER_ERROR);
    //$rowpage = mysqli_fetch_array($result);
    $total_records=mysqli_num_rows($resultpage);
    
    $total_pages = ceil($total_records/$items_per_page);
   
   
    
    //sorting by console and  type with pagination
    // $items_per_page= 13;
    // $page= '';
    
    // if(isset($_GET["page"]) && isset($_GET["where"]) )
    // {
    //     $param= $_GET['where'].$_GET['page']; 
    //     $page = $_GET["page"];
    // }else{
    //     $page = 1;
    // }
    // $start_from = ($page-1)*$items_per_page;

   
    // $result = mysqli_query($connection,$sql) OR trigger_error("failed sql".mysqli_error($connection),E_USER_ERROR);
    // $rowpage = mysqli_fetch_array($result);
    // $where='console_name='.$rowpage['console_name'];
    // $type='product_type_id='.$rowpage['product_type_id'];
    // $sqlpage="SELECT * FROM products INNER JOIN consoles ON products.product_console_id = consoles.console_id WHERE $where && $type ;";
    // $resultpage = mysqli_query($connection,$sqlpage) OR trigger_error("failed sql".mysqli_error($connection),E_USER_ERROR);
    // $total_records=mysqli_num_rows($resultpage);
    // $total_pages = ceil($total_records/$items_per_page);
    $previous_page = $page - 1;
    $next_page=$page + 1;
    
    

    
   
        if(isset($_POST['view'])){
        $productName = $_POST['product_name'];
        $sql4="SELECT * FROM product_brands INNER JOIN consoles ON product_brands.brand_id = consoles.product_brand_id INNER JOIN products ON consoles.console_id = products.product_console_id INNER JOIN product_type ON products.product_type_id= product_type.type_id WHERE product_name = '$productName';";
        // $sql4 = "SELECT * FROM products WHERE product_name = '$productName'";
        $result4 = mysqli_query($connection,$sql4);
        $row4 = mysqli_fetch_assoc($result4);
    }
  
   
?>