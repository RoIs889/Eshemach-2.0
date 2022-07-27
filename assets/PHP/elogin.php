<?php
$conn = new mysqli("localhost", "root", "", "my_db");
$pass = $title = $rerr = $invalid = '';
$errors = array('pass' => '', 'role' => '', 'name' => '', 'invalid' => '');


$success = false;

if (isset($_POST['login'])) {

    // $_SESSION['post-data'] = $_POST;
    $name = $_POST["username"];
    $password = $_POST["password"];
    $role = filter_input(INPUT_POST, 'usertype', FILTER_SANITIZE_STRING);

    if (empty($name)) {
        $errors['name'] = 'A name is required';
    } else {
        $title = $_POST["username"];
        if (!preg_match('/^[0-9a-zA-Z_\s]+$/', $title)) {
            $errors['name'] = 'Name must be letters, numbers, underscore and/or spaces only';
        }
    }

    if (empty($_POST['password'])) {
        $errors['pass'] = 'A password is required';
    }

    if (array_filter($errors)) {
        // echo 'errors in form';
    } else {
        $query = "SELECT * FROM `employee` WHERE `Uname` = '$name' AND `Password` = '$password' AND `usertype` = 'Admin' ";
        $result = mysqli_query($conn, $query);
        while ($row = mysqli_fetch_array($result)) {
            $success = true;
            // $user_id = $row['password'];
            // $name = $row['name'];
            // $role = $row['usertype'];
        }
        if ($success == true) {
            session_start();
            $_SESSION['name'] = $_POST['username'];
            $_SESSION['csid'] = session_id();
            // $_SESSION['user_id'] = $user_id;
            // $_SESSION['role'] = $role;
            // $_SESSION['name'] = $name;
            echo '<script>alert("Welcome!!!")</script>';
            echo '<script>window.location.replace("admin/admin.php");</script>';

            // header("Location: admin/index.html");
        } else {
            //     $errors['invalid'] = 'Wrong username or password';
            // }
            $query = "SELECT * FROM `employee` WHERE `Uname` = '$name' AND `Password` = '$password' AND `usertype` = 'Clerks manager'";
            $result = mysqli_query($conn, $query);
            while ($row = mysqli_fetch_array($result)) {
                $success = true;
                // $user_id = $row['password'];
                // $name = $row['name'];
                $role = $row['usertype'];
            }
            if ($success == true) {
                session_start();
                $_SESSION['name'] = $_POST['username'];
                $_SESSION['csid'] = session_id();
                // $_SESSION['user_id'] = $user_id;
                // $_SESSION['role'] = $role;
                // $_SESSION['name'] = $name;
                echo '<script>alert("Welcome!!!")</script>';
                echo '<script>window.location.replace("clerks_manager/clerks_manager.php");</script>';
                // // 
                //                             header("Location: clerks_manager/clerk's_manager.php");
            } else {

                $query = "SELECT * FROM `employee` WHERE `Uname` = '$name' AND `Password` = '$password' AND `usertype` = 'Clerk'";
                $result = mysqli_query($conn, $query);
                while ($row = mysqli_fetch_array($result)) {
                    $success = true;
                    // $user_id = $row['password'];
                    // $name = $row['name'];
                    // $role = $row['usertype'];
                }
                if ($success == true) {
                    session_start();
                    $_SESSION['name'] = $_POST['username'];
                    $_SESSION['csid'] = session_id();
                    // $_SESSION['user_id'] = $user_id;
                    // $_SESSION['role'] = $role;
                    // $_SESSION['name'] = $name;
                    echo '<script>alert("Welcome!!!")</script>';
                    echo '<script>window.location.replace("clerk/clerk.php");</script>';

                    // header("Location: clerk/clerk.php");
                } else {
                    $errors['invalid'] = 'Wrong username or password';
                }
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
