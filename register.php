<?php
// Logic

session_start();
$showError = false;

if (isset($_POST['register_submit'])) {
    include 'components/_dbconnect.php';
    $username = $_POST["uname"];
    $email = $_POST["email"];
    $password = $_POST["pass"];
    $cpassword = $_POST["cpass"];

    if (empty($username) || empty($email) || empty($password) || empty($cpassword)) {
        $showError = "Empty Field!!";
    } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $showError = "Not a valid email address!!";
    } else if (!preg_match("/^[a-zA-Z0-9]*$/", $username)) {
        $showError = "Not a valid Username!!";
    } else if (($password !== $cpassword)) {
        $showError = "Passwords did not match";
    } else {
        $sql = ("SELECT uid FROM users WHERE username=?");
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            $showError = "Something went Wrong!! 1 ";
        } else {
            mysqli_stmt_bind_param($stmt, "s", $username);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt);
            $result = mysqli_stmt_num_rows($stmt);
            if ($result > 0) {
                $showError = "Username Already taken!!";
            } else {
                $sql = ("INSERT INTO users (username,email,pass_hash) VALUES (?,?,?)");
                $stmt = mysqli_stmt_init($conn);
                if (!mysqli_stmt_prepare($stmt, $sql)) {
                    $showError = "Something went Wrong!!";
                } else {
                    $hpass = password_hash($password, PASSWORD_DEFAULT);
                    mysqli_stmt_bind_param($stmt, "sss", $username, $email, $hpass);
                    mysqli_stmt_execute($stmt);
                    $showError = "Registered Successfully";


                    header("location: login.php");
                    exit();
                }
            }
        }
    }
}

?>


<!DOCTYPE html>
<html data-bs-theme="light" lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Sign Up</title>
    <link rel="icon" type="image/x-icon" href="assets/img/logo/swisslogo.png">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i,600,600i&amp;display=swap">
    <script src="https://kit.fontawesome.com/8ab5402ffb.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="assets/fonts/simple-line-icons.min.css">
    <link rel="stylesheet" href="assets/css/baguetteBox.min.css">
    <link rel="stylesheet" href="assets/css/vanilla-zoom.min.css">
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.14.0/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://code.jquery.com/ui/1.14.0/jquery-ui.js"></script>
</head>

<body>
    <!-- Header -->
    <?php require 'components/_nav.php' ?>

    <div class="main-content" id="itinerary_search">
        <div class="container-fluid" style="position: relative; padding-top: 110px; z-index: 9;">
            <div class="mt-5 container">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start d-flex d-sm-flex d-md-flex justify-content-center align-items-center justify-content-md-center align-items-md-center justify-content-lg-center justify-content-xl-center mt-5 mx-auto">
                        <div class="card d-sm-flex flex-grow-1">
                            <div class="card-body text-center d-flex flex-column align-items-center" style="border-radius: 10px;border-top: 4px solid rgb(204, 0, 0);border-bottom: 4px solid rgb(204, 0, 0);">
                                <div style="max-width: 450px;height: 30.6px; color:rgb(204, 0, 0);">
                                    <p class="fw-bold" style="max-width: 450px; font-size: 30px;">Sign Up</p>
                                </div>
                                <div class="bs-icon-lg bs-icon-circle bs-icon-primary bs-icon my-3">
                                </div>
                                <form method="post">

                                    <!-- Username -->
                                    <div id="username" class="mb-3">
                                        <p class="d-flex" style="margin-bottom: 5px;">Username</p><input class="form-control" type="text" name="uname" id="uname" placeholder="Username" required>
                                    </div>

                                    <!-- Email -->
                                    <div class="mb-3">
                                        <p class="text-start px-1" style="margin-bottom: 6px;">Email</p>
                                        <input class="form-control" type="email" name="email" id="email" placeholder="Email" autocomplete="off" required>
                                    </div>

                                    <!-- Password -->
                                    <div id="password" class="mb-3">
                                        <p class="d-flex" style="margin-bottom: 4px;">Password</p><input class="form-control" type="password" name="pass" id="pass" placeholder="Password" required>
                                    </div>

                                    <!-- C-Password -->
                                    <div id="cpassword" class="mb-3">
                                        <p class="d-flex" style="margin-bottom: 4px;">Confirm Password</p><input class="form-control" type="password" name="cpass" id="cpass" placeholder="Password" required>
                                    </div>

                                    <!-- Register button -->
                                    <div class="mb-3">
                                        <button class="btn btn-primary shadow d-block w-100" type="submit" name="register_submit">Sign Up</button>
                                    </div>

                                    <!-- Display Error  -->
                                    <?php
                                    if ($showError) {
                                        echo '<p class="error-message" style="color: red; font-size: 14px;">' . $showError . '</p>';
                                    }
                                    ?>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php
    require 'components/_footer.php'
    ?>

    <script>
        function send_recover() {
            var email = jQuery('#email').val();
            jQuery.ajax({
                url: 'pass_recover.php',
                type: 'post',
                data: 'email=' + email,
                success: function(result) {
                    if (result == 'yes') {
                        jQuery('#mail_succ').html('Mail sent! You can close this window.');
                        console.log("mailsent");
                    }
                    if (result == 'not_exist') {
                        jQuery('#email_error').html('Please enter valid email');
                        console.log("mailNOTsent");
                    }
                }
            });
        }
    </script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/baguetteBox.min.js"></script>
    <script src="assets/js/vanilla-zoom.js"></script>
    <script src="assets/js/theme.js"></script>
</body>

</html>