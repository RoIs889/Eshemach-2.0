<?php include '../assets/PHP/signup.php'; ?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />
    <!-- <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/css/materialize.min.css"> -->
    <!-- <link href="../assets/materialize/css/materialize.min.css" type="text/css" rel="stylesheet"> -->
    <!-- <link href="../assets/materialize/css/materialize.css" type="text/css" rel="stylesheet"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css" integrity="sha512-UJfAaOlIRtdR+0P6C3KUoTDAxVTuy3lnSXLyLKlHYJlcSU8Juge/mjeaxDNMlw9LgeIotgz5FP8eUQPhX1q10A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../assets/Fonts/css/all.css">
    <!-- <link rel="stylesheet" href="../assets/css/comm.css"> -->
</head>

<body class="grey lighten-2">
    <center>
        <a href="index.html"><img class="responsive-img" style="width: 300px;" src="../assets/images/E-Shemach-logo-black (1).png" /></a>
    </center>
    <main>
        <div class="title">
            <!-- <h3 class="center-align grey-text">Welcome!</h3> -->
        </div>
        <div class="row">
            <div class="container col s10 m10 l8 offset-s1 offset-m1 offset-l2 ">
                <div class="card grey lighten-3" style="padding: 5px 0px 0px 5px; border: 1px solid #EEE;">
                    <!-- <div class="z-depth-1 grey lighten-4 row" style="display: block; padding: 2px 5px 0px 5px; border: 1px solid #EEE;"> -->
                    <div class="card-content">
                        <h5 class="card-title center-align">Signup</h5>
                        <form action="signup.php" method="post" class="signup-form" id="form" autocomplete="off" enctype="multipart/form-data">
                            <div class="red-text center-align"><?php echo $errors['invalid']; ?></div>
                            <!-- <h6 class="center-align blue-text">Make sure to fill all necessary fields!</h6> -->
                            <div class="row">
                                <div class="col s12">
                                    <ul class="tabs">
                                        <li class="tab col s4" id="t1"><a href="#info">Info</a></li>
                                        <li class="tab col s4" id="t2"><a href="#pers">Personal</a></li>
                                        <li class="tab col s4" id="t3"><a href="#prof">Other</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div id="info">
                                <div class="row">
                                    <div class="input-field col s12">
                                        <!-- <i class="material-icons prefix">email</i> -->
                                        <span class="material-symbols-outlined prefix">account_circle</span>
                                        <input name="username" type="text" id="username" value="<?php echo htmlspecialchars($title) ?>" />
                                        <label for="username">User name *</label>
                                        <div class="red-text right-align"><?php echo $errors['uname']; ?></div>
                                    </div>
                                    <!-- </div>
                                <div class="row"> -->
                                    <div class="input-field col s12 m6">
                                        <span class="material-symbols-outlined prefix">password</span>
                                        <input name="password" type="password" id="password" value="<?php echo htmlspecialchars($p1) ?>" />
                                        <label for="password">Password *</label>
                                        <div class="red-text right-align"><?php echo $errors['pass']; ?></div>

                                    </div>


                                    <div class="input-field col s12 m6">
                                        <span class="material-symbols-outlined prefix">password</span>
                                        <input name="cpassword" type="password" id="cpassword" value="<?php echo htmlspecialchars($p2) ?>" />
                                        <label for="cpassword">Confirm Password *</label>
                                        <div class="red-text right-align"><?php echo $errors['pass2']; ?></div>

                                    </div>

                                </div>
                            </div>
                            <div id="pers">
                                <div class="row">
                                    <div class="input-field col s12">
                                        <span class="material-symbols-outlined prefix">person</span>
                                        <input name="name" type="text" id="name" value="<?php echo htmlspecialchars($title2) ?>" />
                                        <label for="name">Legal name *</label>
                                        <div class="red-text right-align"><?php echo $errors['name']; ?></div>
                                    </div>
                                    <div class="input-field col s12 m6">
                                        <span class="material-symbols-outlined prefix">call</span>
                                        <input name="phone" type="text" id="phone" value="<?php echo htmlspecialchars($ph) ?>" />
                                        <label for="phone">Phone *</label>
                                        <div class="red-text right-align"><?php echo $errors['phone']; ?></div>

                                    </div>


                                    <div class="input-field col s12 m6">
                                        <span class="material-symbols-outlined prefix">alternate_email</span>
                                        <input name="email" type="text" id="email" value="<?php echo htmlspecialchars($email1) ?>" />
                                        <label for="email">Email</label>
                                        <div class="red-text right-align"><?php echo $errors['email']; ?></div>
                                    </div>
                                </div>
                            </div>
                            <div id="prof">
                                <div class="row">
                                    <div class="input-field col s12 m6">
                                        <!-- <i class="material-icons prefix">email</i> -->
                                        <span class="material-symbols-outlined prefix">edit_calendar</span>
                                        <input name="date" type="text" class="datepicker" id="date" value="<?php echo htmlspecialchars($date1) ?>">
                                        <label for="date">Birthdate *</label>
                                        <div class="red-text right-align"><?php echo $errors['date']; ?></div>
                                    </div>
                                    <div class="input-field col s12 m6">
                                        <i class="material-symbols-outlined prefix">wc</i>
                                        <select class="" name="gen" id="gen">
                                            <option value="" disabled selected>Choose your option</option>
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>
                                        </select>
                                        <label for="gen">Gender</label>
                                        <div class="red-text right-align"><?php echo $errors['gen']; ?></div>
                                    </div>
                                </div>
                                <div class="file-field input-field col s12">
                                    <div class="btn">
                                        <span>Profile Picture</span>
                                        <input type="file" name="photo" id="photo" value="<?php echo htmlspecialchars($e21) ?>">
                                    </div>
                                    <div class="file-path-wrapper">
                                        <input class="file-path validate" placeholder="Upload your photo here" type="text" value="<?php echo htmlspecialchars($e2) ?>">
                                    </div>
                                    <div class="red-text right-align"><?php echo $errors['photo']; ?></div>
                                </div>
                                <div class="file-field input-field col s12">
                                    <div class="btn">
                                        <span>Kebelle ID *</span>
                                        <input type="file" id="ID" name="ID" value="<?php echo htmlspecialchars($e11) ?>">

                                    </div>
                                    <div class="file-path-wrapper">
                                        <input class="file-path validate" type="text" placeholder="Upload your ID here" value="<?php echo htmlspecialchars($e1) ?>">
                                    </div>
                                    <div class="red-text right-align"><?php echo $errors['avatar']; ?></div>

                                </div>
                                <div class="row center-align">
                                    <button class="btn blue darken-2 waves-effect waves" type="submit" name="signup">Signup
                                        <i class="material-symbols-outlined"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                        <p>-All fields with * are mandatory. Make sure to fill all tabs before proceeding.</p>
                    </div>
                </div>
                <p class="margin center medium-small sign-up">Already a customer? <a href="Login.php">Login</a></p>
            </div>
        </div>
    </main>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.js"></script>
    <script type="text/javascript" src="../assets/js/signup.js"></script>


    <script>
        $(document).ready(function() {

            $('.sidenav').sidenav();
            $('.carousel.carousel-slider').carousel({
                fullWidth: true
            });
            autoplay();

            function autoplay() {
                $('.carousel').carousel('next');
                setTimeout(autoplay, 4500);
            }
            $('select').formSelect();
            $('.materialboxed').materialbox();
            $('.parallax').parallax();
            $('.tabs').tabs();
            $('.datepicker').datepicker({
                yearRange: 1
            });
            $('.tooltipped').tooltip();
            $('.scrollspy').scrollSpy();

        });
    </script>

</body>

</html>