<?php
    $sql1 = "SELECT * FROM consoles";
    $result = mysqli_query($connection, $sql1) OR trigger_error("failed sql". mysqli_error($connection),E_USER_ERROR);
    $row = mysqli_fetch_array($result);

    $sql2 = "SELECT * FROM product_type";
    $result2 = mysqli_query($connection, $sql2) OR trigger_error("failed sql". mysqli_error($connection),E_USER_ERROR);
    //$row2 =mysqli_fetch_array($result2);

    $sql3 = "SELECT * FROM products p INNER JOIN consoles c ON p.product_console_id = c.console_id INNER JOIN product_type pt ON
                p.product_type_id = pt.type_id INNER JOIN inventory i ON p.product_id = i.product_id INNER JOIN discounts d ON p.discount_id=d.discount_id";
    $result3 = mysqli_query($connection, $sql3) OR trigger_error("failed sql". mysqli_error($connection),E_USER_ERROR);
    $row3 =mysqli_fetch_array($result3);
    $count = mysqli_num_rows($result);


?>