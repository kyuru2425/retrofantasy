<?php
    require "connection.php";
    

    // $sqlb = "SELECT * FROM product_type";
    // $resultb = mysqli_query($connection, $sql2) OR trigger_error("failed sql". mysqli_error($connection),E_USER_ERROR);
    // $rowb =mysqli_fetch_array($result2);

    if(isset($_POST['addprod'])){
        $prodname = $_POST['prodname'];
        $console = $_POST['console'];
        $type = $_POST['type'];
        $price = $_POST['price'];
        $discount = 1;
        $dir="ProductImages/";
        $target_file = $dir.basename($_FILES['image']['name']);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        $check = getimagesize($_FILES["image"]["tmp_name"]);
        if($check !== false) {
            echo "File is an image - " . $check["mime"] . ".";
            $uploadOk = 1;
        } else {
            echo "File is not an image.";
            $uploadOk = 0;
        }
        // Check if file already exists
        if (file_exists($target_file)) {
            echo "Sorry, file already exists.";
            $uploadOk = 0;
        }
        // Check file size
        if ($_FILES["image"]["size"] > 2500000) {
            echo "Sorry, your file is too large.";
            $uploadOk = 0;
        }
        // Allow certain file formats
        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif" ) {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
        }
        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
            echo "Sorry, your file was not uploaded.";
        // if everything is ok, try to upload file
        } else {
            if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
            echo "The file ". htmlspecialchars( basename( $_FILES["image"]["name"])). " has been uploaded.";
            } else {
            echo "Sorry, there was an error uploading your file.";
            }
        }

        // inerting
        $sql1 = "INSERT INTO products SET product_name='$prodname', product_console_id='$console', product_type_id='$type', price='$price', discount_id='$discount', image='$target_file'";
        $result = mysqli_query($connection, $sql1)OR trigger_error("failed sql". mysqli_error($connection),E_USER_ERROR);
        $id = $connection->insert_id;
        $qty=0;
        $sql2 = "INSERT INTO inventory SET product_id='$id', quantity='$qty'";
        $result2=mysqli_query($connection,$sql2);

        echo "<script>alert('Successesfully created $target_file')</script>";
        echo "<script>window.location.href='productlist.php'</script>";
        
    }else{
        echo "<script>window.location.href='register.php'</script>";
    }
?>