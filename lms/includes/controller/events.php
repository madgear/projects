<?php

namespace php_sys\system;

//include "db.php";

$uid = 1;

$requestType = $_SERVER['REQUEST_METHOD'];

function get_events()
{
    $sql = "SELECT * FROM tbl_schedule;";

    $rows = ExecuteRows($sql);

    if (is_array($rows)) {

        $events = array();

        foreach ($rows as $row) {

            $back_color = random_background_color();
            $event = array();
            $event['id'] = $row['id'];
            $event['title'] = $row['sched_title'];
            $event['desc'] = $row['sched_desc'];
            $event['start'] = $row['start_time'];
            $event['end'] = $row['end_time'];
            $event['room_id'] = $row['room_id'];
            $event['intpr_id'] = $row['interpreter_id'];
            $event['status'] = $row['sched_status'];
            if ($row["all_day"] == 0) {
                $event['allDay'] = false;
            } else {
                $event['allDay'] = true;
            }
            $event['borderColor'] = "yellow";
            $event['backgroundColor'] = $back_color;
            // $event['textColor'] = $text_color;
            $event['classNames'] = ["custom-event-class"];
            $events[] = $event;
        }
        echo json_encode($events);
    }
}


switch ($requestType) {

    case 'GET':
        get_events();
        break;

    case 'POST':

        $option = $_POST['option'];

        if ($option == "new_schedule_dd") {

            $title = $_POST['title'];
            $start = $_POST['start'];
            $allday = $_POST['allday'];

            if ($allday == "false") {
                $date_start =  format_fcdate($start);
                $new_time = date('Y-m-d H:i:s', strtotime($date_start . ' +1 hour'));
                $date_end = $new_time;
                $day = 0;
            } else {

                $date_start =  format_fcdate($start);
                $date_end = $date_start;
                $day = 1;
            }

            $date_day = date('Y-m-d', strtotime($date_start));

            $d = [
                'title' => $title,
                'datestart' => $date_start,
                'dateend' => $date_start,
                'ddate' => $date_day,
                'allday' => $day,
                'tcolor' => $_POST['tcolor'],
                'cname' => $_POST['cname'],
                'bcolor' => $_POST['bcolor'],
            ];

            // $insert = "INSERT INTO `sie_schedule_project`.`tbl_schedule` (`sched_title`, `sched_date`, `start_time`, `end_time`, `all_day`) 
            // VALUES (:title, :ddate, :datestart, :dateend, :allday);";

            // $insert = "INSERT INTO `en_lmsdb`.`tbl_schedule` 
            // (`sched_title`, `sched_date`, `start_time`, `end_time`, `all_day`, `created_by`,`cname`, `tcolor`, `bcolor`) 
            // VALUES (:title, :ddate, :datestart, :dateend, :allday, '" . $uid . "', :cname, :tcolor, :bcolor );";
            // Execute($insert, $d);


            $insert = "INSERT INTO `en_lmsdb`.`tbl_schedule` 
            (`sched_title`, `sched_date`, `start_time`, `end_time`, `all_day`, `created_by`,`cname`, `tcolor`, `bcolor`) 
            VALUES ('" . $title . "', '" . $date_day . "', '" . $date_start . "', '" . $date_start . "', " . $day . ", '" . $uid . "', '" . $_POST['cname'] . "', '" . $_POST['tcolor'] . "', '" . $_POST['bcolor'] . "' );";

            // Execute($insert);

            $res = Execute($insert);
            echo $res;



            // asdadasd
        } else if ($option == "new_schedule") {
        } else if ($option == "get_rooms") {

            $query = "select * from tbl_rooms;";
            ExecuteJSON($query);
        } else if ($option == "get_interpreters") {

            $query = "select * from tbl_user_profile where user_type=2;";
            ExecuteJSON($query);
        } else if ($option == "get_schedule") {

            $d = ["sid" => $_POST['sid']];
            $q = "SELECT * from tbl_schedule where id=" . $_POST['sid'];
            echo ExecuteJSON($q);

            // $s_id = $_POST['sid'];
            // $query = "SELECT * from tbl_schedule where id=" . $s_id;
            // $row = ExecuteRow($query);
            // if ($row) {
            //     echo json_encode($row);
            // } else {
            //     _msg(500, "RECORD NOT FOUND!");
            // }
        } else if ($option == "update_schedule_dd") {

            $sid = $_POST['sid'];
            $start = $_POST['start'];
            $end = $_POST['end'];
            $allday = $_POST['allday'];

            $date1 = date_create(substr($start, 4, 20));
            $date_start =  date_format($date1, "Y-m-d H:i:s");

            $date2 = date_create(substr($end, 4, 20));
            $date_end =  date_format($date2, "Y-m-d H:i:s");

            if ($allday == "true") {
                $a_day = 1;
            } else {
                $a_day = 0;
            }

            $d = [
                'starttime' => $date_start,
                'endtime' => $date_end,
                'allday' => $a_day,
                'sid' => $sid
            ];

            $update = "UPDATE `en_lmsdb`.`tbl_schedule` SET 
            `start_time`= '" . $date_start . "', 
            `end_time`= '" . $date_end . "', 
            `all_day`= " . $a_day . "
             WHERE `id`=" . $sid;

            Execute($update);
        } else if ($option == "update_schedule") {
            // var data =[sid,title,desc,room,interpreter,start,end];
            $data = $_POST['data'];
            $d = [
                'sid' => $data[0],
                'title' => $data[1],
                'desc' => $data[2],
                'room' => $data[3],
                'interpreter' => $data[4],
                'start' => $data[5],
                'end' => $data[6],
                'allday' => $data[7]
            ];

            $q = "UPDATE `sie_schedule_project`.`tbl_schedule` SET 
            `room_id`= :room, 
            `interpreter_id`= :interpreter, 
            `sched_title`= :title, 
            `sched_desc`= :desc, 
            `start_time`= :start, 
            `end_time`= :end, 
            `all_day`= :allday, 
            `updated_by`='" . $uid . "', 
            `date_updated`=NOW() 
            WHERE  `id`=:sid;";

            Execute($q, $d);
        } else if ($option == "get_schedby_id") {
            $sid = $_POST['sid'];

            $q = "select * from tbl_schedule where id =" . $sid;
            $row = ExecuteRow($q);

            if ($row) {
                $event = array();
                $event['id'] = $row['id'];
                $event['title'] = $row['sched_title'];
                $event['desc'] = $row['sched_desc'];
                $event['start'] = $row['start_time'];
                $event['end'] = $row['end_time'];
                $event['room_id'] = $row['room_id'];
                $event['intpr_id'] = $row['interpreter_id'];
                $event['status'] = $row['sched_status'];
                if ($row["all_day"] == 0) {
                    $event['allDay'] = false;
                } else {
                    $event['allDay'] = true;
                }

                $event['borderColor'] = "green";
                $event['backgroundColor'] = "yellow";
                $event['textColor'] = "red";
                // $event['classNames'] = ['bg-success', 'text-white', 'border', 'border-dark'];
                echo json_encode($event);
            }
        } else {
            _msg(500, "INVALID OPTION!");
        }

        break;
}

function random_background_color()
{
    $color = '#' . substr(md5(rand()), 0, 6);
    return $color;
}

function format_fcdate($dte)
{
    $date = date_create(substr($dte, 4, 20));
    $date_ret =  date_format($date, "Y-m-d H:i:s");
    return $date_ret;
}
