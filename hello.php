<?php
    include "connection.php";

    if(isset($_POST['createbtn'])){
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $email = $_POST['email'];
        $pass = password_hash($_POST['password'], PASSWORD_DEFAULT);
        $con_pass = $_POST['con_password'];
        $region = $_POST['country'];
        $province = $_POST['state'];
        $city = $_POST['city'];
        $address = $_POST['address'];
        $zipcode = $_POST['zipcode'];
        $number = $_POST['number'];

        $sql2 = "SELECT * FROM customers WHERE email = '$email'";
        $result2 = mysqli_query($connection, $sql2);
        $count = mysqli_num_rows($result2);
        if($count == 0){
            $sql1 = "INSERT INTO customers SET first_name = '$first_name', last_name = '$last_name', email= '$email', password = '$pass', 
                    region = '$region', province = '$province', city = '$city', address='$address', zipcode='$zipcode', phone_number = '$number'";
            $result = mysqli_query($connection, $sql1) OR trigger_error("failed sql". mysqli_error($connection),E_USER_ERROR);
            echo "<script>alert('Successesfully created')</script>";
            echo "<script>window.location.href='login.php'</script>";
        }else{
            echo "<script>alert('Email Already Exist.')</script>";
            echo "<script>window.location.href='signup.php'</script>";
        }


        
        
    }
?>
