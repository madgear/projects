<?php
namespace php_sys\system;

if (!isset($RELATIVE_PATH)) {
	$RELATIVE_PATH = "";
	$ROOT_RELATIVE_PATH = ".";
}

// include_once $RELATIVE_PATH . "resources/includes/function.php";
// include_once $RELATIVE_PATH . "resources/includes/database.php";



include_once $RELATIVE_PATH . "includes/config/config.php";
include_once $RELATIVE_PATH . "includes/config/database.php";
include_once $RELATIVE_PATH . "includes/config/functions.php";

?>
