<?php

namespace php_sys\system;

if (isset($_POST['process'])) {
    $process = $_POST['process'];
} else {
    echo _msg(500, "Invalid Arguments!");
    exit;
}

if ($process == "signin") {
    login();
    exit;
} else if ($process == "logout") {
    logout();
} else {
    echo _msg(500, "Invalid Arguments!");
    exit;
}




function login()
{

    if (!isset($_POST["username"]) or !isset($_POST["password"])) {
        echo _msg(500, "Please make sure Username and Password field is not empty, or refresh the web page!");
        exit;
    }


    $uname = $_POST["username"];
    $pass = $_POST["password"];

    //$query = "SELECT * FROM tbl_sysuser WHERE fld_username = '" . $uname . "'";

    $query = "
    SELECT p.*,u.*
    FROM tbl_profile p
    LEFT JOIN tbl_users u ON p.id = u.profile_id
    WHERE p.fld_username ='" . $uname . "'";


    // $query = "
    // SELECT * FROM tbl_profile WHERE fld_username = '" . $uname . "';

    $row = ExecuteRow($query);

    if ($row) {

        if (md5($pass) == $row['fld_password']) {

            $data = [
                "id" => md5($row['id']),
                "fname" => $row['fld_fname'],
                "lname" => $row['fld_lname'],
                "mname" => $row['fld_mname'],
                "email" => $row['fld_email'],
                "image" => $row['fld_image'],                
                "contact" => $row['fld_contact'],
                "facebook" => $row['fld_facebook']
            ];


            $_SESSION['user_login'] = "YES";
            $_SESSION['user_id'] = $row['id'];
            $_SESSION['user_name'] = $row['fld_lname'] . ", " . $row['fld_fname'];
            $_SESSION['firstname'] = $row['fld_fname'];
            $_SESSION['lastname'] = $row['fld_lname'];
            $_SESSION['user_username'] = $row['fld_username'];            
            $_SESSION['contact'] =  $row['fld_contact'];
            $_SESSION['email'] =  $row['fld_email'];
            $_SESSION['avatar'] =  $row['fld_image'];

            setcookie("SYS-CURR-PAGE", "dashboard", time() + 86400, "/");

            // $insert_logs = "INSERT INTO `figba_ematch`.`tbl_logs` (`user_id`, `process` ,`notes`) VALUES ($row[id], 'LOGIN', 'LOGGED IN @" . get_client_ip() . "');";
            // Execute($insert_logs);

            echo _msg(200, $data);


        } else {
            echo _msg(500, "INVALID PASSWORD.");
            exit;
        }
    } else {

        echo _msg(500, "INVALID USERNAME.");
        exit;
    }
}
