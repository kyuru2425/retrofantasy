<?php
    require "connection.php";
    require "adminsession.php";

    if(isset($_POST['login'])){
        if(empty($_POST['aemail'])){
            echo "Email is Required";
        }else if(empty($_POST['apass'])){
            echo "Password is Required";
        }else{
            $aemail = $_POST['aemail'];
            $apass = $_POST['apass'];

            $aemail = stripcslashes($aemail);
            $apass = stripcslashes($apass);
            $aemail = mysqli_real_escape_string($connection, $aemail);
            $apass = mysqli_real_escape_string($connection, $apass);

            $sql1 = "SELECT * FROM admin WHERE admin_email = '$aemail'";
            $result1 = mysqli_query($connection, $sql1) OR trigger_error("failed sql". mysqli_error($connection),E_USER_ERROR);
            $row = mysqli_fetch_array($result1);
            $count = mysqli_num_rows($result1);
            
            if($count >0){
                $_SESSION["status"] = "valid";
                $_SESSION["email"] = $aemail;
                echo "<script>window.location.href='productlist.php'</script>";
            }else{
                $_SESSION["status"] = "invalid";
                echo "invalid credential";
                echo "<script>alert('Wrong Email or password')</script>";
                echo "<script>window.location.href='adminlogin.php'</script>";
            }
        }
    }

?>