<?php

namespace php_sys\system;

if (isset($_COOKIE["SYS-CURR-PAGE"])) {    

    $cpage = strtolower($_COOKIE["SYS-CURR-PAGE"]);

    if ($cpage == "dashboard") {
        include_once "main.php";            
    } elseif ($cpage == "schedule") {
        include_once "schedule.php";
    } elseif ($cpage == "teachers") {
        include_once "teachers.php";
    } elseif ($cpage == "courses") {
        include_once "courses.php";        
    } elseif ($cpage == "lessons") {
        include_once "lessons.php";         
    } elseif ($cpage == "reports") {
        include_once "reports.php";         
    } else {
        include_once "404.php";
    }
} else {
    echo _msg(500, "invalid arguments!");
}


