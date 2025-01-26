<?php

namespace php_sys\system;

define(__NAMESPACE__ . '\en_lms', __NAMESPACE__ . '\\');
define(en_lms . "DEBUG_ENABLED", FALSE);
if (DEBUG_ENABLED) {
    @ini_set("display_errors", "1");
    error_reporting(E_ALL);
}

$CONNECTIONS["DB"] = array(
    "conn" => NULL,
    "id" => "DB",
    "type" => "MYSQL",
    "host" => "localhost",
    "port" => 3306,
    "user" => "enlms",
    "pass" => "",
    "db" => "en_lmsdb",
    "qs" => "`",
    "qe" => "`"
);


$CONNECTIONS[0] = &$CONNECTIONS["DB"];
$ERROR_FUNC = en_lms . 'ErrorFunc';
define(en_lms . "PROJECT_ENCODING", "UTF-8");
define(en_lms . "IS_MYSQL", TRUE);
define(en_lms . "DB_TIME_ZONE", "");
define(en_lms . "MYSQL_CHARSET", "utf8");
define(en_lms . "SESSION_FAILURE_MESSAGE", en_lms . "");
