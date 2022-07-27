<?php
$conn = new mysqli("localhost", "root", "", "my_db");
$quant = $title = $prod = $invalid = '';
$errors = array('quant' => '', 'prod' => '', 'cust' => '', 'invalid' => '');



if (isset($_POST['sell'])) {

    // $_SESSION['post-data'] = $_POST;
    // session_start();

    $clerk = $_SESSION['name'];
    $today = date('y-m-d');
    $good = filter_input(INPUT_POST, 'good', FILTER_SANITIZE_STRING);
    $cust = filter_input(INPUT_POST, 'cust', FILTER_SANITIZE_STRING);
    $quan = filter_input(INPUT_POST, 'quan', FILTER_SANITIZE_NUMBER_INT);
    // $goods = $_POST["goods"];
    // $price  = $_POST['price'];
    // $quantity  = $_POST['quantity'];
    // $cust_name = $_POST['cust_name'];
    if (empty($good)) {
        $errors['prod'] = 'Choose a valid Product';
    }
    if (empty($cust)) {
        $errors['cust'] = 'Choose a valid Customer';
    }
    if (empty($quan)) {
        $errors['quant'] = 'Choose a valid Quantity';
    }
    if (array_filter($errors)) {
        // echo 'errors in form';
    } else {
        $query1 = "SELECT * FROM `products` WHERE `product_name` = '$good'";
        $result = mysqli_query($conn, $query1);
        while ($row = mysqli_fetch_array($result)) {
            if($row['Product_In_Stock']<='0'){
                $errors['invalid'] = 'Stock is insufficient to process request';
            }else{
            $type = $row['Type'];
            $price = $row['Price'] * $quan;
            $query = "INSERT INTO `purchase`(`Type`, `Good`, `Price`, `Quantity`, `Customer`, `Clerk`, `Time`)
     VALUES ('$type','$good','$price','$quan','$cust','$clerk','$today')";
            $result2 = mysqli_query($conn, $query);
            if ($result) {
                $query2 = "UPDATE `products` SET `Product_In_Stock`=`Product_In_Stock`+'-$quan' WHERE `Product_name` = '$good'";
                $result3 = mysqli_query($conn, $query2);
                if ($result3) {
                    
            echo '<script>alert("Welcome!!!")</script>';
    
            }

        }
    }}}
}
