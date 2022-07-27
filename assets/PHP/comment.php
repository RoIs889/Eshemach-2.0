<?php
// if(!isset(session_start()){
// session_start();}
$tarea = '';
$errors = array('tarea' => '','tarea1' => '','tarea2' => '');
if (isset($_POST['post'])) {

    $conn = new mysqli("localhost", "root", "", "my_db");
    // $Rating = $_POST["Rating"];
    if (empty($_POST['body'])) {
        $errors['tarea'] = 'A comment is required';
    }
    if (array_filter($errors)) {
        // echo 'errors in form';
    } else {
        $Body = $_POST['body'];
        $Name = $_SESSION['name'];
        $query = "SELECT * FROM `customer` WHERE `Uname` = '$Name' ";
        $result = mysqli_query($conn, $query);
        $row = mysqli_fetch_array($result);
        $Email = $row['Email'];
        $Time = date('y-m-d');

        $stmt = $conn->prepare("insert into comments(Name,Email,Body,Time) values( ?, ?, ?, ?)");
        $stmt->bind_param("ssss", $Name, $Email, $Body, $Time);
        $stmt->execute();
        echo '<script> alert( "Comment sent successfully ...")</script>';
    }
}
if (isset($_POST['send'])) {

    $conn = new mysqli("localhost", "root", "", "my_db");
    // $Rating = $_POST["Rating"];
    if (empty($_POST['body'])) {
        $errors['tarea1'] = 'A Subject is required';
    }
    if (empty($_POST['body1'])) {
        $errors['tarea2'] = 'A Request is required';
    }
    if (array_filter($errors)) {
        // echo 'errors in form';
    } else {
        $Body = $_POST['body'];
        $Body1 = $_POST['body1'];
        $Name = $_SESSION['name'];
        $Time = date('y-m-d');

        $stmt = $conn->prepare("INSERT INTO `request`(`name`, `request_subject`, `request_text`, `request_status`, `Time`) values( ?, ?, ?, '0', ?)");
        $stmt->bind_param("ssss", $Name, $Body, $Body1, $Time);
        $stmt->execute();
        echo '<script> alert( "Request sent successfully ...")</script>';
    }
}
