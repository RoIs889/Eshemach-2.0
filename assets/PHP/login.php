<?php
$conn = new mysqli("localhost", "root", "", "my_db");
$pass = $title = $invalid = '';
$errors = array('pass' => '', 'name' => '', 'invalid' => '');


$success = false;

if (isset($_POST['login'])) {

    // $_SESSION['post-data'] = $_POST;
    $name = $_POST["username"];
    $password = $_POST["password"];
    $query = "SELECT * FROM `customer` WHERE `Uname` = '$name' AND `password` = '$password' AND `usertype` = 'customer' AND `Verified` = '1' ";
    $result = mysqli_query($conn, $query);
    if (empty($name)) {
        $errors['name'] = 'A name is required';
    } else {
        $title = $_POST["username"];
        if (!preg_match('/^[0-9a-zA-Z\s]+$/', $title)) {
            $errors['name'] = 'Name must be letters, numbers and spaces only';
        }
    }

    if (empty($_POST['password'])) {
        $errors['pass'] = 'A password is required';
    }

    if (array_filter($errors)) {
        // echo 'errors in form';
    } else {
        while ($row = mysqli_fetch_array($result)) {
            $success = true;
            $user_id = $row['password'];
            // $name = $row['name'];
            $role = $row['usertype'];
        }
        if ($success == true) {
            session_start();
            $_SESSION['name'] = $_POST['username'];
            $_SESSION['csid'] = session_id();
            $_SESSION['user_id'] = $user_id;
            $_SESSION['role'] = $role;
            // $_SESSION['name'] = $name;
            header("Location: cust.php");
        } else {
            $query2 = "SELECT * FROM `customer` WHERE `Uname` = '$name' AND `password` = '$password' AND `usertype` = 'customer' AND `Verified` = '0' ";
            $result2 = mysqli_query($conn, $query2);
            $row2 = mysqli_fetch_array($result2);
            if (!empty($row2)) {
                $errors['invalid'] = 'Account not activated yet. Please wait.';
            } else {
                $errors['invalid'] = 'Wrong username or password';
            }
        }
    }
}
        //  if (mysqli_num_rows($result) == 0) {
        //         $msg = "Incorrect username or password!";
        //     }
        //  else if (mysqli_num_rows($result) !== 0) {
        //         header("Location: cust.php");
        //     }
        //  else
        //     $msg = "sth is wrong!";
        // }
