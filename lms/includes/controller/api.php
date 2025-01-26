<?php

namespace php_sys\system;

header('Access-Control-Allow-Origin: *');
header('Content-Type: text/html;charset=utf-8');

if (!isset($_POST['option'])) {
    echo _msg(500, "Server Error 500!");
    exit;
}

$opt = $_POST['option'];

if ($opt == "load-active-task") {
    $query = "SELECT 
    task_id,
    task_type.task_type,
    IFNULL(CONCAT(a.fld_firstname,SPACE(1),a.fld_lastname),'') AS oname,
    IFNULL(tt.operator_total_time,0) AS otime,
    IFNULL(CONCAT(b.fld_firstname,SPACE(1),b.fld_lastname),'') AS cname,
    IFNULL(tt.checker_total_time,0) AS ctime,
    task_status
    FROM task_tracker tt
    LEFT JOIN task_type ON tt.task_type = task_type.id
    LEFT JOIN tbl_users a ON tt.operator = a.id 
    LEFT JOIN tbl_users b ON tt.checker = b.id 
    WHERE NOW() BETWEEN tt.request_date AND tt.deadline
    ORDER BY tt.id DESC;";
} else if ($opt == "save-new-member-entry") {
    save_new_member_entry();
} else if ($opt == "load-members-list") {
    load_members_list();
} else if ($opt == "update-member-data") {
    update_member_data();

    //delete-schedule    
} else if ($opt == "delete-schedule") {
    delete_schedule();
} else if ($opt == "logout") {
    logout();
} else {
}

function delete_schedule()
{

    $sid = $_POST["sid"];
    $delete = "DELETE FROM `en_lmsdb`.`tbl_schedule` WHERE  `id`=" . $sid . ";";
    $res = Execute($delete);
    echo $res;
    
}

function update_member_data()
{

    $d = json_decode($_POST["data"], true);

    $update = "UPDATE `figba_ematch`.`tbl_members` SET 
`fld_firstname`='" . $d[1] . "', 
`fld_lastname`='" . $d[2] . "', 
`fld_middlename`='" . $d[3] . "', 
`fld_address`='" . $d[5] . "', 
`fld_contact`='" . $d[6] . "', 
`fld_email`='" . $d[7] . "', 
`fld_facebook`='" . $d[8] . "', 
`fld_farm`='" . $d[9] . "', 
`fld_position`= " . $d[4] . " 
 WHERE  MD5(`id`)= '" . $d[0] . "';";

    Execute($update);
    echo _msg(200, "Record Updated!");
}

function logout()
{
    setcookie("SYS-CURR-PAGE", "", time() - 3600, "/");

    if (!isset($_COOKIE["SYS-CURR-PAGE"])) {
    } else {
        setcookie("SYS-CURR-PAGE", "", time() - 3600, "/");
    }
    session_destroy();
    echo _msg(200, "LOGOUT");
}


function load_members_list()
{

    $query = "SELECT
MD5(m.id) AS userid, 
ifnull(m.member_id,'') AS mem_id,
CONCAT(m.fld_lastname,SPACE(1),m.fld_firstname,SPACE(1), m.fld_middlename ) AS fullname,
IFNULL(m.fld_contact,'') AS mcontact,
IFNULL(m.fld_email,'') AS memail,
m.date_added,
m.fld_status,
a.fld_abbr AS assoc 
              FROM 
              tbl_members m
              LEFT JOIN tbl_association a ON m.fld_assoc = a.id
              WHERE m.fld_assoc = " . $_SESSION['association'];


    $rows = ExecuteRows($query);

    if ($rows) {
        echo _msg(200, json_encode($rows));
    } else {
        echo _msg(400, $query);
    }
}


function save_new_member_entry()
{
    $u = $_SESSION['user_id'];
    $g = $_SESSION['association'];
    $d = json_decode($_POST["data"], true);
    $insert = "
    INSERT INTO 
    `figba_ematch`.`tbl_members` 
    (`fld_firstname`, `fld_lastname`, `fld_middlename`, `fld_address`, `fld_contact`, `fld_email`, `fld_facebook`, `fld_farm`, `fld_assoc`, `added_by`) 
    VALUES 
    ('" . $d[0] . "', '" . $d[1] . "', '" . $d[2] . "', '" . $d[3] . "', '" . $d[4] . "', '" . $d[5] . "', '" . $d[6] . "', '" . $d[7] . "', " . $g . ", " . $u . ");";

    $res = Execute($insert);
    echo _msg(200, $res);
}
