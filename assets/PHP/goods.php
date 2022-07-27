<?php
$con = new mysqli("localhost", "root", "", "my_db");
foreach ($_POST as $key => $value)
{
    if(preg_match("/[0-9]+_type/",$key)){
        
        $key = strtok($key, '_');
        
        $sql = "UPDATE products SET Type = '$value' WHERE ID = $key;";
        $con->query($sql);
        
    }
    if(preg_match("/[0-9]+_name/",$key)){
        $key = strtok($key, '_');
        // $value = htmlspecialchars($value);
        $sql = "UPDATE products SET `Product_name` = '$value' WHERE ID = '$key';";
        $con->query($sql);
    }
    if(preg_match("/[0-9]+_quan/",$key)){
        $key = strtok($key, '_');
        // $value = htmlspecialchars($value);
        $sql = "UPDATE products SET `Quantity` = $value WHERE ID = $key;";
        $con->query($sql);
    }
    if(preg_match("/[0-9]+_price/",$key)){
        $key = strtok($key, '_');
        // $value = htmlspecialchars($value);
        $sql = "UPDATE products SET Price = $value WHERE ID = $key;";
        $con->query($sql);
    }
    if(preg_match("/[0-9]+_stk/",$key)){
        $key = strtok($key, '_');
        // $value = htmlspecialchars($value);
        $sql = "UPDATE products SET Product_In_Stock = $value WHERE ID = $key;";
        $con->query($sql);
    }}
    echo "<script>alert ('registered!')</script>";
    // echo '<script>alert("Login First!!!")</script>';
    echo '<script>window.location.replace("../../employees/admin/admin.php");</script>';

?>