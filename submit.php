<?php

    include("connection.php");

    // ADD EVENT
    if (!empty($_POST['date-date']))
    {
        $date = $_POST['date-date'];
        $name = "";

        if (!empty($_POST['date-name']))
        {
            $name = $_POST['date-name'];
        }

        $type = $_POST['date-type'];

        $time_in = "";
        $time_out = "";

        if ($type == "lecture" || $type == "quiz")
        {
            $time_in = "18:00:00" ;
            $time_out = "20:30:00";
        }
        elseif ($type == "coding")
        {
            $time_in = "12:00:00" ;
            $time_out = "17:00:00";
        }
        elseif ($type ==  "section9_11")
        {
            $time_in = "09:00:00" ;
            $time_out = "11:00:00";
        }
        elseif ($type == "section12_14")
        {
            $time_in = "12:00:00" ;
            $time_out = "14:00:00";
        }
        elseif ($type == "track")
        {
            $time_in = "18:00:00" ;
            $time_out = "21:30:00";
        }
        elseif ($type == "special")
        {
            $time_in = "18:00:00" ;
            $time_out = "21:30:00";
        }

        // Inserts Data in DB
        if(!$dbconnect->query("INSERT INTO `{$dbase}`.`{$t_dates}` (`id`, `date_type`, `date`, `date_name`, `time_start`, `time_end`)VALUES (NULL, '{$type}', '{$date}', '{$name}', '{$time_in}', '{$time_out}');")) die($dbconnect->error);

        die('Event successfully added.');
    }

    // ADD ATTENDANCE RECORD
    elseif (!empty($_POST['st-id']) || !empty($_POST['st-email']))
    {
        if  (!empty($_POST['st-id']))
        {
            $st_id = $_POST['st-id'];
            $query = "SELECT * FROM `{$dbase}`.`{$t_students}` WHERE `id` = '{$st_id}';";
        }
        else
        {
            $st_email = $_POST['st-email'];
            $query = "SELECT * FROM `{$dbase}`.`{$t_students}` WHERE `email` = '{$st_email}';";
        }

        $result = $dbconnect->query($query);
        if(!$result) die($dbconnect->error);
        elseif ($dbconnect->affected_rows == 0)        
            die('Attendance record for this student cann\'t be added. Student wasn\'t found or doesn\'t exist. Please check DATA in the form!');
        
        // extracts student info
        $student = $result->fetch_assoc();

        $id = $student['id'];
        $name = $student['name'];
        $last = $student['last'];
        $date = $_POST['st-date'];
        $type = $_POST['st-type'];
        $time = "";

        // Time depends on the event-type
        if ($type == "lecture") {$time = "19:19:19";}
        else if ($type == "coding") {$time = "12:12:12";}
        else if ($type == "section9_11") {$time = "09:09:09";}
        else if ($type == "section12_14") {$time = "13:13:13";}
        else if ($type == "track") {$time = "18:18:18";}
        else if ($type == "special") {$time = "15:15:15";}

        // Inserts Data in DB
        if(!$dbconnect->query("INSERT INTO `{$dbase}`.`{$attendance}` (`id`, `user_id`, `name`, `last_name`, `date`, `time`, `type`) VALUES (NULL, '{$id}', '{$name}', '{$last}', '{$date}', '{$time}', '{$type}');"))
            die($dbconnect->error);

        die('Attendance record successfully added.');
    }

    // DELETE EVENT
    elseif (!empty($_POST['del-date']))
    {

        $type = $_POST['del-type'];
        $date = $_POST['del-date'];

        if(!$dbconnect->query("DELETE FROM `{$dbase}`.`{$t_dates}` WHERE `date_type` = '{$type}' AND `date` = '{$date}';"))
            die($dbconnect->error);
        elseif ($dbconnect->affected_rows == 0)
            die('Event DOESN\'T exist in the database.');

        die('Event successfully DELETED.');
    }

    // DELETE ATTENDANCE RECORD
    elseif (!empty($_POST['del-id']) || !empty($_POST['del-email']))
    {
        $date = $_POST['del-st-date'];
        $type = $_POST['del-st-type'];
        if  (!empty($_POST['del-id']))
        {
            $st_id = $_POST['del-id'];
            $query = "DELETE FROM `{$dbase}`.`{$attendance}`
                        WHERE `user_id` = '{$st_id}' AND `date` = '{$date}' AND `type` = '{$type}';";
        }
        else
        {
            $st_email = $_POST['del-email'];
            $query = "DELETE FROM `{$dbase}`.`{$attendance}`
                        WHERE `email` = '{$st_email}' AND `date` = '{$date}' AND `type` = '{$type}';";
        }
        
        if(!$dbconnect->query($query)) die($dbconnect->error);
        elseif ($dbconnect->affected_rows == 0)
        {
            die('Record is NOT found or DOESN\'T exist. Please check DATA in the form!');
        }
        die('Record successfully DELETED.');
    }

    // ADD STUDENT
    elseif (!empty($_POST['us-name']) && !empty($_POST['us-last']))
    {
        $name = $_POST['us-name'];
        $last = $_POST['us-last'];
        $email = $_POST['us-email'];
        $track = $_POST['us-track'];
        $tf = $_POST['us-tf'];

        // Inserts Data in DB
        if(!$dbconnect->query("INSERT INTO `{$dbase}`.`{$t_students}` (`id`, `name`, `last`, `email`, `track`, `tf_name`) VALUES (NULL,'{$name}', '{$last}', '{$email}', '{$track}', '{$tf}');"))
            die($dbconnect->error);
        
        die('STUDENT successfully added.');
    }

    // REMOVE STUDENT
    elseif (!empty($_POST['del-us-name']) && !empty($_POST['del-us-last']) && !empty($_POST['del-us-id']))
    {
        $name = $_POST['del-us-name'];
        $last = $_POST['del-us-last'];
        $email = $_POST['del-us-email'];
        $id = $_POST['del-us-id'];
        $files = $_POST['del-us-files'];

        // Delere only 1 record from table STUDENTS
        if(!$dbconnect->query("DELETE FROM `{$dbase}`.`{$t_students}` WHERE `id` = '{$id}' AND `name` = '{$name}' AND `last` = '{$last}' AND `email` = '{$email}';"))
            die($dbconnect->error);
        elseif ($dbconnect->affected_rows == 0)
            die('STUDENT not found or doesn\'t EXIST. Please check DATA in the form!');

        // Delere all records for THIS STUDENT in all tables
        if ($files == 'all')
        {
            if(!$dbconnect->query("DELETE FROM `{$dbase}`.`{$attendance}` WHERE `user_id` = '{$id}' AND `name` = '{$name}' AND `last_name` = '{$last}';"))
                die($dbconnect->error);
            elseif ($dbconnect->affected_rows == 0)
                die('Student is DELETED from database. Attendance records for this student DIDN\'T exist.');

            die('ALL records successfully DELETED.');
        }
        die('STUDENT was successfully DELETED.');
    }

    else
    {
        // Console print if data added
        die('Please subbmit the form with all required information.');
    }
?>
