<?php
$id = "";
$conn = new mysqli("localhost", "root", "", "my_db");

if (isset($_POST['submit'])) {
    $conn = new mysqli("localhost", "root", "", "my_db");
    $id = $_POST["name"];
}
/*
$x = $_SESSION['name'];

$query1 = "SELECT * FROM `purchase` WHERE `Customer` = '$x' ";
$result1 = mysqli_query($conn, $query1);

*/
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="../favicon.ico">
    <link rel="stylesheet" href="../newclerk.css <?php echo time(); ?>">
    <title>Search cust history</title>
</head>

<body>
    <?php require 'header.php'; ?>


    <div class="area">


        <div class="row">
            <div class="container col s12 m8 offset-m2">
                <div class="card grey lighten-3" style="padding: 5px 0px 0px 5px; border: 1px solid #EEE;">
                    <!-- <div class="z-depth-1 grey lighten-4 row" style="display: block; padding: 2px 5px 0px 5px; border: 1px solid #EEE;"> -->
                    <div class="card-content">
                        <h5 class="card-title center-align">Purchase and Transactions</h5>
                        <form action="viewhisofcust.php" method="post" class="purchase-form" id="form" autocomplete="off">
                            <div>
                                <table id="Table" class="highlight centered responsive-table">
                                    <thead>
                                        <tr>
                                            <th data-field="name">Customer</th>
                                            <th data-field="name">Quantity</th>
                                            <th data-field="name">Good</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $conn = new mysqli("localhost", "root", "", "my_db");
                                        $result = mysqli_query($conn, "SELECT * FROM purchase");
                                        while ($row = mysqli_fetch_array($result)) {
                                            echo '<tr><td>' . $row["Customer"] . '</td>';
                                            echo '<td>' . $row["Quantity"] . '</td>';
                                            echo '<td>' . $row["Good"] . '</td>';
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>



</html>