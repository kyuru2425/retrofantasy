<?php
    include "connection.php";

    if(isset($_POST['login'])){
        if(empty($_POST['email'])){
            echo "Email is Required";   
        }else if(empty($_POST['password'])){
            echo "Password is Required";
        }else{
            $email = $_POST['email'];
            $pass = $_POST['password'];

            $email = stripcslashes($email);
            $pass = stripcslashes($pass);
            $email = mysqli_real_escape_string($connection, $email);
            $pass = mysqli_real_escape_string($connection, $pass);

            $sql1 = "SELECT * FROM customers WHERE email = '$email'";
            $result = mysqli_query($connection, $sql1) OR trigger_error("failed sql". mysqli_error($connection),E_USER_ERROR);
            $row = mysqli_fetch_array($result);
            $count = mysqli_num_rows($result);
            if($count >0){
                $hashpass = $row['password'];
            }
            

            if($count >0 && password_verify($pass, $hashpass)){
                echo "<script>window.location.href='temp.php'</script>";
            }else{
                echo "<script>alert('User not Found')</script>";
                echo "<script>window.location.href='login.php'</script>";
            }
        }
    }
?>