<?php 
require "connection.php";
session_start();

$_SESSION['status']= 'invalid';
unset($_SESSION["email"]);

mysqli_close($connection);
session_destroy();
header('location: index.php ')


?>