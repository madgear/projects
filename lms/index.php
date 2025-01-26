<?php

namespace php_sys\system;

session_start();

include_once "includes/config/autoload.php";
include_once "includes/config/sessions.php";

$route = get_route("/lms");

if ($route == '/api' || preg_match('/api\//i', $route)) {
    include_once "includes/controller/api.php";
    exit;
} else if ($route == '/forms' || preg_match('/forms\//i', $route)) {
    include_once "includes/controller/forms.php";
} else if ($route == '/events' || preg_match('/events\//i', $route)) {
    include_once "includes/controller/events.php";
    exit;
} else if ($route == '/page' || preg_match('/page\//i', $route)) {
    include_once "includes/views/page_loader.php";
    exit;
} else if ($route == '/home' || preg_match('/home\//i', $route)) {
    include_once "includes/views/home.php";
    exit;
} else if ($route == '/features' || preg_match('/home\//i', $route)) {
    include_once "includes/views/features.php";
    exit;
} else if ($route == '/login' || preg_match('/login\//i', $route)) {

    if (isset($_POST['process'])) {
        include_once "includes/controller/process.php";
        exit;
    }

    include_once "includes/views/login.php";
    exit;
} else if ($route == "/") {

    if (isset($_COOKIE["SYS-CURR-PAGE"])) {

        if ($_COOKIE["SYS-CURR-PAGE"] == "home") {

            include_once "includes/views/home.php";
            exit;
        } else {

            include_once "includes/views/dashboard.php";
        }
    } else {
        include_once "includes/views/home.php";
        exit;
    }
} else {
    include_once "includes/views/404.php";
    exit;
}
