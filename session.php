<?php
session_start();
if($_SESSION['status'] == 'invalid' || empty($_SESSION["status"])){
    $_SESSION['status'] = 'invalid';
    unset($_SESSION['email']);
    unset($_SESSION['customer_id']);
    echo '<script>window.location.href = "index.php"</script>';
}
?>