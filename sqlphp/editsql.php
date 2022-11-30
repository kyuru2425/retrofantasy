<?php
    $email=$_SESSION['email'];
    if(isset($_POST['edit'])){
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $region = $_POST['region'];
        $province = $_POST['province'];
        $city = $_POST['city'];
        $address = $_POST['address'];
        $zip = $_POST['zipcode'];


    }elseif(isset($_POST['editinfo'])){
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $phone = $_POST['phone'];
        $region = $_POST['region'];
        $province = $_POST['province'];
        $city = $_POST['city'];
        $address = $_POST['address'];
        $zip = $_POST['zipcode'];
        
        $sql1 = "UPDATE customers SET first_name = '$fname', last_name='$lname',phone_number='$phone',region='$region',city='$city',address='$address',zipcode='$zip' WHERE email='$email'";
        $result = mysqli_query($connection, $sql1);
        echo "<script>window.location.href='account.php'</script>";
    }else{
        echo "<script>window.location.href='account.php'</script>";
    }
?>