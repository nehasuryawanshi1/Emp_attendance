

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>Swapra Technologies </title>

    <link rel="shortcut icon" href="assets/img/logo.jpg">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,500;0,600;0,700;1,400&amp;display=swap">

    <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">

    <link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">
<link rel="icon" type="image/png" href="assets/img/logo.jpg">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <div class="main-wrapper login-body">
        <div class="login-wrapper">
            <div class="container">
                <div class="loginbox">
                    <div class="login-left bg-white">
                        <img class="img-fluid" src="assets/img/logo.jpg" alt="Logo">
                    </div>
                    <div class="login-right">
                        <div class="login-right-wrap">
                            <h1>Login</h1>
                            <p class="account-subtitle"></p>
                            <form action="loginuser.php" method="POST">
                                <div class="form-group">
                                    <input class="form-control" type="text" name="email" placeholder="Email" required>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" type="password" name="password" placeholder="Password" required>
                                </div>
                                <div class="form-group">
                                    <button class="btn btn-primary btn-block" name="login" type="submit">Login</button>
                                </div>
                            </form>
                            <div class="text-center forgotpass"><a href="forgot-password.php">Forgot Password?</a></div>
                            <div class="login-or">
                                <span class="or-line"></span>
                                <span class="span-or"></span>
                            </div>
                            <!--   <div class="social-login">
                                <span>Login with</span>
                                <a href="#" class="facebook"><i class="fab fa-facebook-f"></i></a><a href="#" class="google"><i class="fab fa-google"></i></a>
                            </div> -->
                            <!--  <div class="text-center dont-have">Don’t have an account? <a href="register.php">Register</a></div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="assets/js/jquery-3.5.1.min.js"></script>

    <script src="assets/js/popper.min.js"></script>
    <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>

    <script src="assets/js/script.js"></script>
</body>


</html>