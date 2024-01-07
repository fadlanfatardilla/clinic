<?php
require_once "./config/db.php";

?>


<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Login - Klinik</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?= base_url("/css/bootstrap-min.css"); ?>" rel="stylesheet">
    </link>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

</head>

<body class="d-flex justify-content-center align-items-center" style="height: 100vh;">


    <?php

    if (isset($_POST['login'])) {
        $user = trim(mysqli_real_escape_string($conn, $_POST['user']));
        $pass = sha1(mysqli_real_escape_string($conn, $_POST['pass']));
        $sql_login = mysqli_query($conn, "SELECT * FROM tb_user WHERE username = '$user' AND password = '$pass'") or die(mysqli_error($conn));

        // Inside the existing login validation block

        if (mysqli_num_rows($sql_login) > 0) {
            $user_data = mysqli_fetch_assoc($sql_login);
            $_SESSION['user'] = $user_data['username'];
            $_SESSION['role'] = $user_data['user_role']; // Store the user role in the session

            // Redirect users based on their roles
            if ($_SESSION['role'] === 'admin') {
                echo "<script>window.location='" . base_url() . "';</script>";
                exit();
            } elseif ($_SESSION['role'] === 'user') {
                header("Location: ./buat_jadwal/data.php"); // Redirect manager to manager dashboard
                exit();
            } else {
                header("Location: login.php"); // Redirect other users to user dashboard
                exit();
            }
        } else {
            // Handle incorrect credentials
        }

    ?>
    <div class="row">
        <div class="col-lg-6 col=lg-offset-3">
            <div class="alert alert-danger alert-dismissable" role="alert">
                <a href="" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
                <strong>Login Gagal!</strong> Username / password salah
            </div>

        </div>
    </div>
    <?php
    }

    ?>
    <form action="" method="post" class="form-signin">
        <p class="text-center mb-4">
            <img src="logo_klinik.jpg" class="rounded-circle" />
            <style>
            img.rounded-circle {
                border-radius: 50%;
                overflow: hidden;
                width: 200px;
                height: 200px;
                object-fit: cover;
                margin-bottom: 20px;
            }

            .input-group-login {
                margin-bottom: 15px;
            }

            .input-group-prepend-login {
                background-color: #f0f0f0;
                border: none;
                border-radius: 5px 0 0 5px;
            }

            .input-group-text {
                background-color: transparent;
                border: none;
                color: #000;
            }

            .form-control-login {
                border-radius: 0 5px 5px 0;
                border-color: #ccc;
            }

            .sombreado-input {
                box-shadow: 0px 0px 5px 0px rgba(0, 0, 0, 0.1);
            }

            .btn-primary {
                background-color: #007bff;
                color: #fff;
                padding: 10px 20px;
                border: none;
                border-radius: 5px;
                transition: background-color 0.3s ease;
            }

            .btn-primary:hover {
                background-color: #0056b3;
            }
            </style>
        </p>
        <div class="input-group-login sombreado-input">
            <div class="input-group-prepend-login">
                <span class="input-group-text fondo-icon">
                    <i class="fas fa-user"></i>
                </span>
            </div>
            <input type="text" class="border-0-login form-control-login input-border-none" name="user"
                placeholder="Username" />
        </div>

        <br />
        <div class="input-group-login sombreado-input">
            <div class="input-group-prepend-login">
                <span class="input-group-text fondo-icon">
                    <i class="fas fa-lock"></i>
                </span>
            </div>
            <input type="password" class="border-0-login form-control-login input-border-none" name="pass"
                placeholder="Password" aria-label="Username" />
        </div>

        <br>
        <p class="text-center">

            <input type="submit" name="login" class="btn btn-primary" value="Login">
        </p>
        <div class="icons-position">

        </div>

    </form>


    <script src="<? base_url('assets/js/jquery.js') ?>"></script>
    <script src="<? base_url('assets/js/bootstrap.min.js') ?>"></script>

</body>

</html>
<?php

?>