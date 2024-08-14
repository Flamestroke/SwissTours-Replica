<?php
// Logic

$showError = false;

if (isset($_POST['login_submit'])) {
    include 'components/_dbconnect.php';
    $username = $_POST["uname"];
    $password = $_POST["password"];

    if (empty($username)) {
        $showError = "Empty Field!!";
    } else {
        $sql = ("SELECT * FROM users WHERE username=?");
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            $showError = "Something went Wrong!! ";
        } else {
            mysqli_stmt_bind_param($stmt, "s", $username);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);
            if ($row = mysqli_fetch_assoc($result)) {
                $pwdCheck = password_verify($password, $row['pass_hash']);
                if ($pwdCheck == false) {
                    $showError = "Password Incorrect!! 1" . $pwdCheck;
                } else if ($pwdCheck == true) {
                    session_start();
                    $_SESSION['userId'] = $row['uid'];
                    $_SESSION['username'] = $row['username'];
                    header("location: index.php");
                    exit();
                } else {
                    $showError = "Password Incorrect!!";
                }
            } else {
                $showError = "User doesn't Exists!!";
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
    <title>Login</title>
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
                                    <p class="fw-bold" style="max-width: 450px; font-size: 30px;">Login</p>
                                </div>
                                <div class="bs-icon-lg bs-icon-circle bs-icon-primary bs-icon my-3">
                                </div>
                                <form method="post">

                                    <!-- Username -->
                                    <div class="mb-3">
                                        <p class="text-start px-1" style="margin-bottom: 6px;">Username</p>
                                        <input class="form-control" type="username" name="uname" id="uname" placeholder="Username" autocomplete="off">
                                    </div>

                                    <!-- Password -->
                                    <div class="mb-3">
                                        <p class="text-start px-1" style="margin-bottom: 6px;">Password</p><input class="form-control" type="password" name="password" id="password" placeholder="Password">
                                    </div>

                                    <!-- Login button -->
                                    <div class="mb-3">
                                        <button class="btn btn-primary shadow d-block w-100" type="submit" name="login_submit">Log in</button>
                                    </div>

                                    <!-- Display Error  -->
                                    <?php
                                    if ($showError) {
                                        echo '<p class="error-message" style="color: red; font-size: 14px;">' . $showError . '</p>';
                                    }
                                    ?>
                                </form>
                                <!-- Register Link -->
                                <p class="text-muted">Don't have an account?&nbsp;<a href="register.php">Sign up</a></p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <?php require 'components/_footer.php' ?>

    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/baguetteBox.min.js"></script>
    <script src="assets/js/vanilla-zoom.js"></script>
    <script src="assets/js/theme.js"></script>
</body>

</html>