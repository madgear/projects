<?php
namespace php_sys\system;

$_SESSION['csrf_key'] = random_string(40);

$settings = "select * from tbl_settings limit 1;";

$set = ExecuteRow($settings);

if($set){
$_SESSION['lms_name'] = $set["system_name"];
}



// if (!array_key_exists('lms_name', $_SESSION)) {
//     $_SESSION['lms_name'] = "EigoNeko";
// }

if (!array_key_exists('user_login', $_SESSION)) {
    $_SESSION['user_login'] = "";
}

if (!array_key_exists('user_id', $_SESSION)) {
    $_SESSION['user_id'] = "";
}

if (!array_key_exists('firstname', $_SESSION)) {
    $_SESSION['firstname'] = "";
}

if (!array_key_exists('lastname', $_SESSION)) {
    $_SESSION['lastname'] = "";
}

if (!array_key_exists('user_name', $_SESSION)) {
    $_SESSION['user_name'] = "";
}
if (!array_key_exists('user_username', $_SESSION)) {
    $_SESSION['user_username'] = "";
}

if (!array_key_exists('position', $_SESSION)) {
    $_SESSION['position'] = "";
}

if (!array_key_exists('avatar', $_SESSION)) {
    $_SESSION['avatar'] = "";
}

if (!array_key_exists('contact', $_SESSION)) {
    $_SESSION['contact'] = "";
}

if (!array_key_exists('site_error_msg', $_SESSION)) {
    $_SESSION['site_error_msg'] = "";
}
if (!array_key_exists('site_success_msg', $_SESSION)) {
    $_SESSION['site_success_msg'] = "";
}
if (!array_key_exists('site_info_msg', $_SESSION)) {
    $_SESSION['site_info_msg'] = "";
}

if (!array_key_exists('CURRENT_PAGE', $_SESSION)) {
    $_SESSION['CURRENT_PAGE'] = "";
}

