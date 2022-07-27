<?php
$conn = new mysqli("localhost", "root", "", "my_db");
$p1 = $e1 = $e2 = $p2 = $ph = $email1 = $title = $date1 = $title2 = $invalid = '';
$stk = $title3 = $quan = $price = $invalid2 = '';
$errors = array('role' => '', 'gen' => '', 'photo' => '', 'avatar' => '', 'email' => '', 'pass' => '', 'phone' => '', 'date' => '', 'pass2' => '', 'name' => '', 'uname' => '', 'invalid' => '');
$errors2 = array('quan' => '', 'name' => '', 'type' => '', 'price' => '', 'stk' => '', 'invalid' => '');


$success = false;
$success2 = false;
if (isset($_POST['add'])) {

    $prodtype = filter_input(INPUT_POST, 'type', FILTER_SANITIZE_STRING);
    $Pname  = $_POST['name1'];
    $Quant  = $_POST['quan'];
    $Price  = $_POST['price'];
    $Stock  = $_POST['stk'];

    // $gen = $_POST['gen'];
    $today = date("Y-m-d");

    if (empty($_POST['name1'])) {
        $errors2['name'] = 'A name is required';
    } else {
        $title3 = $_POST["name1"];
    }
    if (empty($prodtype)) {
        $errors2['type'] = 'Choose a valid type';
    }
    if (empty($_POST['quan'])) {
        $errors2['quan'] = 'A name is required';
    } else {
        $quan = $_POST["quan"];
    }
    if (empty($_POST['price'])) {
        $errors2['price'] = 'A Price is required';
    } else {
        $price = $_POST["price"];
    }
    if (empty($_POST['stk'])) {
        $errors2['stk'] = 'A value is required';
    } else {
        $stk = $_POST["stk"];
    }


    if (array_filter($errors2)) {
        // echo 'errors in form';
    } else {
        $query1 = "SELECT * FROM `products` WHERE  `Product_name` = '$Pname'";
        $result = mysqli_query($conn, $query1);
        $query = "INSERT INTO `products`(`Type`, `Product_name`, `Quantity`, `Price`, `Product_In_Stock`) 
        VALUES ('$prodtype','$Pname','$Quant','$Price','$Stock')";
        if ((mysqli_fetch_array($result)) == true) {
            $errors2['invalid'] = 'Product already available';
        } else {
            $result2 = mysqli_query($conn, $query);
            // ($row2 = mysqli_fetch_array($result2));
            if ($result2) {
                echo "<script>alert ('registered! ')</script>";
                // echo '<script>alert("Login First!!!")</script>';
                // echo '<script>window.location.replace("index.php");</script>';

                // echo $Uname;
            } else {
                $errors2['invalid'] = 'Error!';
            }
        }
    }
}

if (isset($_POST['addE'])) {

    $uname  = $_POST['username'];
    $name  = $_POST['name'];
    $password = $_POST["password"];
    $cpassword = $_POST["cpassword"];
    $phone  = $_POST['phone'];
    $email  = $_POST['email'];
    // $date  = $_POST['date'];
    $gen = filter_input(INPUT_POST, 'gen', FILTER_SANITIZE_STRING);
    $role = filter_input(INPUT_POST, 'role', FILTER_SANITIZE_STRING);
    // $gen = $_POST['gen'];
    $date = date('Y-m-d', strtotime($_POST['date']));
    $today = date("Y-m-d");
    $diff = date_diff(date_create($date), date_create($today));
    $age = $diff->format('%y');

    $photo  = $_FILES['photo']["name"];
    $Kebelle_ID  = $_FILES['ID']["name"];

    // $query = "INSERT INTO `customer`(`Name`, `Fname`, `Gname`, `Age`, `House_No`, `Phone`, `image_url`, `Kebelle_Id`,`password`,`usertype`)
    //  VALUES ('$name','$Fname','$Gname','$age','$house_no','$phone
    // ','$photo','$Kebelle_ID','$password','$type')";


    // $house_no  = $_POST['h_no'];

    if (!empty($email)) {
        $email1 = $email;
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errors['email'] = "Invalid email format";
        }
    } else {
        $email = 'N/A';
    }
    if (empty(($_FILES["photo"]["name"]))) {
        $errors['photo'] = 'Please upload a photo';
    } else {
        $e2 = ($_FILES["photo"]["name"]);
        $e21 = basename($_FILES["photo"]["name"]);
        $check = getimagesize($_FILES["photo"]["tmp_name"]);
        if ($check === false) {
            $errors['photo'] = "Sorry, only Image allowed.";
        }
    }
    if (empty(($_FILES["ID"]["name"]))) {
        $errors['avatar'] = 'Please upload a valid ID';
    } else {
        $e1 = ($_FILES["ID"]["name"]);
        $e11 = basename($_FILES["photo"]["name"]);
        $check = getimagesize($_FILES["ID"]["tmp_name"]);
        if ($check === false) {
            $errors['avatar'] = "Sorry, only Image allowed.";
        }
    }
    if (empty($uname)) {
        $errors['uname'] = 'A name is required';
    } else {
        $title = $_POST["username"];
        if (!preg_match('/^[0-9a-zA-Z_\s]+$/', $title)) {
            $errors['uname'] = 'User Name must be letters, underscore, numbers and spaces only';
        }
    }
    if (empty($gen)) {
        $errors['gen'] = 'Choose a valid gender';
    }
    if (empty($role)) {
        $errors['role'] = 'Choose a valid role';
    }
    if (empty($name)) {
        $errors['name'] = 'A name is required';
    } else {
        $title2 = $_POST["name"];
        if (!preg_match('/^[a-zA-Z\s]+$/', $title2)) {
            $errors['name'] = 'Name must be letters and spaces only';
        }
    }
    if (empty($_POST['password'])) {
        $errors['pass'] = 'A password is required';
    } else {
        $p1 = $_POST["password"];
    }
    if (empty($_POST['phone'])) {
        $errors['phone'] = 'Phone can not be empty';
    } else {
        $ph = $_POST["phone"];
    }
    if (empty($_POST['date'])) {
        $errors['date'] = 'Date can not be empty';
    } else {
        $date1 = $_POST["date"];
    }

    if (empty($_POST['cpassword'])) {
        $errors['pass2'] = 'Confirm password!';
    } else {
        $p2 = $_POST["cpassword"];
        if ($_POST["password"] != $_POST["cpassword"]) {
            $errors['pass2'] = 'Passwords not similar';
        }
    }

    if (array_filter($errors)) {
        // echo 'errors in form';
    } else {
        $query1 = "SELECT * FROM `Employee` WHERE `Uname` = '$uname'";
        $query = "INSERT INTO `Employee`(`usertype`, `Uname`, `password`, `Name`, `Phone`, `Email`, `Age`, `Birthdate`,`Gender`, `photo`, `Kebelle_Id`,`Verified`,`Time`)
     VALUES ('$role','$uname','$password','$name','$phone','$email','$age','$date','$gen','$photo','$Kebelle_ID','1','$today')";
        $result = mysqli_query($conn, $query1);
        if ((mysqli_fetch_array($result)) == true) {
            $errors['invalid'] = 'Username already taken';
        } else {
            $result2 = mysqli_query($conn, $query);
            // ($row2 = mysqli_fetch_array($result2));
            if ($result2) {
                $dir = "uploads/";
                $target = $dir . basename($_FILES["photo"]["name"]);
                $target2 = $dir . basename($_FILES["ID"]["name"]);
                move_uploaded_file($_FILES["photo"]["tmp_name"], $target);
                move_uploaded_file($_FILES["ID"]["tmp_name"], $target2);
                echo "<script>alert ('success!')</script>";
                // echo '<script>alert("Login First!!!")</script>';
                // echo '<script>window.location.replace("index.php");</script>';

                // echo $Uname;
            } else {
                $errors['invalid'] = 'Error!';
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
