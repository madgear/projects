<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="CSRF-TOKEN" content="<?php echo $_SESSION['csrf_key']; ?>" />    
    <title><?php echo $_SESSION['lms_name']; ?></title>
    <link rel="stylesheet" href="./assets/overlayscrollbars/overlayscrollbars.min.css">
    <link rel="stylesheet" href="./assets/icons/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="./assets/adminlte/css/adminlte.css">
    <!-- <link rel="stylesheet" href="./assets/fc/main.css"> -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./assets/css/dashboard.css">
</head>

<body class="layout-fixed-complete sidebar-expand-lg bg-body-tertiary control-sidebar-slide-open layout-footer-fixed layout-navbar-fixed">
    <div class="app-wrapper">
        <aside class="app-sidebar bg-body-secondary shadow" data-bs-theme="dark">
            <div class="sidebar-brand">

                <!-- <a href="#/" class="brand-link">
                    <img src="../../../dist/assets/img/AdminLTELogo.png" alt="" class="brand-image opacity-75 shadow">
                    <span class="brand-text fw-light">Saikuru</span>
                </a> -->

                <a href="#/" class="brand-link">
                    <img src="assets/images/icons/book.png" alt="" class="brand-image img-circle elevation-3"
                        style="opacity: .8">
                    <span class="brand-text font-weight-light"><?php echo $_SESSION['lms_name']; ?></span>
                </a>

            </div>

            <div class="sidebar-wrapper">
                <?php include_once "left_menu.php"; ?>
            </div>

        </aside>
        <div class="app-main-wrapper">
            <nav class="app-header navbar navbar-expand bg-body">
                <div class="container-fluid">
                    <ul class="navbar-nav">
                        <li class="nav-item"> <a class="nav-link" data-lte-toggle="sidebar" href="#" role="button"> <i class="bi bi-list"></i> </a> </li>
                        <!-- <li class="nav-item d-none d-md-block"> <a href="#" class="nav-link">Home</a> </li>                         -->
                    </ul>
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item"> <a class="nav-link" href="#" data-lte-toggle="fullscreen"> <i data-lte-icon="maximize" class="bi bi-arrows-fullscreen"></i> <i data-lte-icon="minimize" class="bi bi-fullscreen-exit" style="display: none;"></i> </a> </li>
                        <li class="nav-item dropdown user-menu"> <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"> <i class="bi bi-person-square me-2"></i><span class="d-none d-md-inline"><?php echo $_SESSION['user_name']; ?></span> </a>
                            <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-end"> <!--begin::User Image-->
                                <li class="user-header text-bg-primary"> <img src="<?php echo $_SESSION['avatar']; ?>" class="rounded-circle shadow" alt="User Image">
                                    <p>
                                        <?php echo $_SESSION['user_name']; ?>
                                        <small><?php echo $_SESSION['position'] . "<br>" . $_SESSION['email']; ?></small>
                                    </p>
                                </li>
                                <li class="user-footer"> <a href="#" class="btn btn-default btn-flat" id="user-profile-btn">Profile</a> <a href="#" class="btn btn-default btn-flat float-end" id="logout-user-btn">Sign out</a> </li> <!--end::Menu Footer-->
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
            <main class="app-main">
                <div class="app-content-header">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-8">
                                <!-- <h3 class="mb-0">Dashboard</h3> -->
                            </div>
                            <div class="col-sm-4">
                                <ol class="breadcrumb float-sm-end">
                                    <!-- <li class="breadcrumb-item"><a href="#">Home</a></li> -->
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="app-content">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12">
                                <div class="page-loader">
                                    <?php
                                    include_once "page_loader.php";
                                    //include_once "eMatch/page";
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>

            <footer class="app-footer">
                <div class="float-end d-none d-sm-inline">madgear</div><strong>
                    Copyright &copy; 2024&nbsp;
                    <a href="#" class="text-decoration-none"><?php echo $_SESSION['lms_name']; ?></a>.
                </strong>
            </footer>
        </div>
    </div>

    <script src="./assets/jquery/jquery.js"></script>
    <script src="./assets/local/mad.js"></script>
    <script src="./assets/overlayscrollbars/overlayscrollbars.browser.es5.min.js"></script>
    <script src="./assets/popper/popper.min.js"></script>
    <script src="./assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="./assets/adminlte/js/adminlte.min.js"></script>
    <!-- <script src="./assets/fc/main.js"></script> -->
    <script src="./assets/fullcalendar/index.global.js"></script>
    <!-- <script src="./assets/fullcal/index.global.js"></script> -->
    <script src="./assets/js/luxon.js"></script>
    <script src="./assets/local/functions.js"></script>
    <script src="./assets/local/global.js"></script>

</body>



</html>