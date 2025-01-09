<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap">
    <style>
        body {
            background: linear-gradient(to right, #6a11cb, #2575fc);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            font-family: 'Roboto', sans-serif;
        }
        .login-box {
            width: 400px;
            padding: 30px;
            background-color: #fff;
            border-radius: 15px;
            box-shadow: 0px 10px 30px rgba(0, 0, 0, 0.3);
            text-align: center;
        }
        .login-logo b {
            color: #2575fc;
        }
        .login-box-body {
            margin-top: 20px;
        }
        .form-group input {
            border-radius: 25px;
        }
        .btn {
            border-radius: 25px;
            transition: 0.3s;
        }
        .btn:hover {
            background-color: #0056b3;
        }
        .login-box a {
            color: #2575fc;
            font-weight: 500;
            transition: 0.3s;
        }
        .login-box a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="login-box">
        <div class="login-logo">
            <b>Admin</b>LTE
        </div>
        <div class="login-box-body">
            <p class="login-box-msg">Sign in to start your session</p>
            <!-- Form login -->
            <form action="proses_login.php" method="post">
                <!-- Input username -->
                <div class="form-group has-feedback">
                    <input type="text" name="username" class="form-control" placeholder="Username" required>
                    <span class="glyphicon glyphicon-user form-control-feedback"></span>
                </div>
                <!-- Input password -->
                <div class="form-group has-feedback">
                    <input type="password" name="password" class="form-control" placeholder="Password" required>
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                </div>
                <!-- Tombol login -->
                <div class="row">
                    <div class="col-xs-12">
                        <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
                    </div>
                </div>
            </form>
            <!-- Link ke halaman registrasi -->
            <a href="register.php" class="text-center" style="display: block; margin-top: 15px;">Register a new membership</a>
        </div>
    </div>
    <script src="bower_components/jquery/dist/jquery.min.js"></script>
    <script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
</body>
</html>
