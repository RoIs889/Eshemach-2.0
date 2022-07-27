<?php require 'header.php'; ?>

<?php require '../../assets/PHP/addcust.php'; ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../newclerk.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <link rel="icon" type="image/x-icon" href="../favicon.ico">
    <title>Register</title>
</head>

<body>
    <main>
        <div class="row">
            <div class="container col s10 m10 l8 offset-s1 offset-m1 offset-l2 ">
                <div class="card grey lighten-3" style="padding: 5px 0px 0px 5px; border: 1px solid #EEE;">
                    <div class="card-content">
                        <h5 class="card-title center-align">Register</h5>
                        <form action="register.php" method="post" class="Register-form" id="form" autocomplete="off" enctype="multipart/form-data">
                            <div class="red-text center-align"><?php echo $errors['invalid']; ?></div>
                            <div id="info">
                                <div class="row">
                                    <div class="input-field col s12">
                                        <span class="material-symbols-outlined prefix">account_circle</span>
                                        <input name="username" type="text" id="username" value="<?php echo htmlspecialchars($title) ?>" />
                                        <label for="username">User name *</label>
                                        <div class="red-text right-align"><?php echo $errors['uname']; ?></div>
                                    </div>
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
                                    <button class="btn blue darken-2 waves-effect waves" type="submit" name="signup">Register
                                        <i class="material-symbols-outlined"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                        <p>-All fields with * are mandatory. Make sure to fill all tabs before proceeding.</p>
                    </div>
                </div>
            </div>
        </div>
        <?php require 'footer.php'; ?>
