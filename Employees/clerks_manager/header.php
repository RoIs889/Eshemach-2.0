<?php
$conn = new mysqli("localhost", "root", "", "my_db");
$msg = "";
session_start();

if (!isset($_SESSION['name'])) {
    echo '<script>alert("Login First!!!")</script>';
    echo '<script>window.location.replace("../login.php");</script>';
}



?>
<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../../assets/css/comm.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/css/materialize.min.css">
    <link href="../../assets/materialize/css/materialize.min.css" type="text/css" rel="stylesheet">
    <link href="../../assets/materialize/css/materialize.css" type="text/css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css" integrity="sha512-UJfAaOlIRtdR+0P6C3KUoTDAxVTuy3lnSXLyLKlHYJlcSU8Juge/mjeaxDNMlw9LgeIotgz5FP8eUQPhX1q10A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../../assets/Fonts/css/all.css">
</head>

<body class="grey lighten-2">
    <main>
        <header>
            <nav class="transparentBG">
                <div class="nav-wrapper">
                    <a href="clerks_manager.php" class="brand-logo"><img class="responsive-img" style="width: 200px;" src="../../assets/images/E-Shemach-logo-white (2).png" /></a>
                    <a href="#" class="sidenav-trigger" data-target="mobile-nav">
                        <i class="material-icons">menu</i>
                    </a>

                    <ul class="right hide-on-med-and-down left">
                        <li><a href="register.php"><span class="fa-solid fa-envelope"></span>Customer Register</a></li>
                        <li><a href="request.php"><span class="fa-solid fa-envelope"></span>Request</a></li>
                        <li><a href="profile.php"><span class="fa-solid fa-envelope"></span> Profile</a></li>
                        <li><a href="logout.php"><span class="fa-solid fa-arrow-right-to-bracket"></span> Logout</a></li>
                       
                    </ul>
                </div>
            </nav>

            <ul class="sidenav grey lighten-2 white-text" id="mobile-nav">
                        <li><a href="register.php"><span class="fa-solid fa-envelope"></span>Customer Register</a></li>
                        <li><a href="profile.php"><span class="fa-solid fa-envelope"></span> Profile</a></li>
                        <li><a href="logout.php"><span class="fa-solid fa-arrow-right-to-bracket"></span> Logout</a></li>
                        <li><a href="request.php"><span class="fa-solid fa-envelope"></span>Request</a></li>

            </ul>
        </header>

            </ul>
        </header>