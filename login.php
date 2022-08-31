<?php
    session_start();
    require 'dbcon.php';
?>
<!DOCTYPE html>
<html>
<head>
<title>Login</title>
<link rel="stylesheet" href="./login.css">
<link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
</head>

<body>
    <div class="logo">
        <img src="resources/logo.png" />
    </div>
    <div class="login-container">
        
            <div class="login-form">
            <?php include('message.php'); ?>
                <span class="login-title">Login</span>

                <form action="code.php" method="POST">
                    <div class="login-input">
                        <input type="text" name="email" id="login-username" placeholder="Enter your username" required>
                        <i class="uil uil-user login-icon"></i>
                    </div>
                    <div class="login-input">
                        <input type="text" name="name" id="login-pass" placeholder="Enter your password" required>
                        <i class="uil uil-lock login-icon"></i>
                        <i class="uil uil-eye-slash login-hideShow" onclick="showHidePass()"></i>
                    </div>

                    <div class="forgot-password">
                        <a href="#" class="login-text">Forgot password ?</a>
                    </div>
                    

                    <div class="login-button">
                        <input type="submit" name="login" value="Login Now" onclick="handleLogin()">
                    </div>

                    <div class="login-signup">
                        <span>New to Matrrix?
                            <a href="#" class="login-text">Sign up!</a>
                        </span>
                    </div>

                </form>
                
            </div>
        </div>
    

    <script src="js/login.js"></script>

</body>
</html>