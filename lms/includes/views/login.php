<?php
if ($_SESSION['user_login'] == "YES") {
    header("Location: ./");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="CSRF-TOKEN" content="<?php echo $_SESSION['csrf_key']; ?>" />
    <title><?php echo $_SESSION['lms_name']; ?></title>
    <link rel="icon" href="./assets/img/64x64.png">
    <link rel="stylesheet" href="./assets/adminlte/css/adminlte.css">
    <link rel="stylesheet" href="./assets/icons/font/bootstrap-icons.min.css">

</head>

<body class="login-page bg-body-secondary">

    <a href="./">Home</a>

    <div class="login-box">
        <div class="card card-outline card-primary">
            <div class="card-header">
                <h2 class="mb-0"> <b><?php echo $_SESSION['lms_name']; ?></b></h2>
            </div>
            <div class="card-body login-card-body">
                <p class="login-box-msg">Sign in to start your session</p>

                <div class="input-group mb-1">
                    <div class="form-floating"> <input id="user_name" type="text" class="form-control" value="" placeholder=""> <label for="user_name">Username</label> </div>
                    <div class="input-group-text"> <span class="bi bi-envelope"></span> </div>
                </div>
                <div class="input-group mb-1">
                    <div class="form-floating"> <input id="user_pass" type="password" class="form-control" placeholder=""> <label for="user_pass">Password</label> </div>
                    <div class="input-group-text"> <span class="bi bi-lock-fill"></span> </div>
                </div>
                <div class="row">
                    <div class="col-8 d-inline-flex align-items-center">
                        <div class="form-check"> <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"> <label class="form-check-label" for="flexCheckDefault">
                                Remember Me
                            </label> </div>
                    </div>
                    <div class="col-4">
                        <div class="d-grid gap-2"> <button class="btn btn-primary" id="btn_login">Sign In</button> </div>
                    </div>
                </div>


            </div>
        </div>
    </div>

    <!-- <script src="./assets/overlayscrollbars/overlayscrollbars.browser.es6.min.js" ></script>     -->
    <script src="./assets/popper/popper.min.js"></script>
    <script src="./assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="./assets/adminlte/js/adminlte.js"></script>
    <script src="./assets/jquery/jquery.min.js"></script>
    <script src="./assets/local/mad.js"></script>
    <script src="./assets/local/login.js"></script>

</body>

</html>