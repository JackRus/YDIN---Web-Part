<?php

    // Gets all all-type events
    $result = $dbconnect->query("SELECT * FROM  `{$dbase}`.`{$t_dates}` ORDER BY `date` ASC;");
    if (!$result) die("SQL ERROR ==> 2" . $dbconnect->error);

    $count_l = 0;
    $count_s = 0;
    $count_c = 0;
    $count_t = 0;

    while ($row = $result->fetch_assoc())
    {
        if (($row['date_type'] == 'lecture') || ($row['date_type'] == 'quiz'))
        {
            $date_lecture[] = $row;
            $count_l++;
        }
        elseif (($row['date_type'] == 'section9_11') || ($row['date_type'] == 'section12_14'))
        {
            $date_section[] = $row;
            $count_s++;
        }
        elseif ($row['date_type'] == 'coding')
        {
            $date_coding[] = $row;
            $count_c++;
        }
        elseif ($row['date_type'] == 'track')
        {
            $date_track[] = $row;
            $count_t++;
        }
    }

    // Gets all records from Attendance table
    $result = $dbconnect->query("SELECT *,  TIME(`server_dt`) AS timer FROM  `{$dbase}`.`{$attendance}` ORDER BY `date` ASC;");
    if (!$result)
        die("SQL ERROR ==> 2" . $dbconnect->error);

    while ($row = $result->fetch_assoc())
        $all_attendance[] = $row;

    // Gets all students info
    $result = $dbconnect->query("SELECT * FROM  `{$dbase}`.`{$t_students}`;"); 
    if (!$result)
        die("SQL ERROR ==> 3" . $dbconnect->error);
    
    while ($row = $result->fetch_assoc())
        $all_students[] = $row;

    // NUMBER OF ALL STUDENTS
    $count_stud = count($all_students);

    // Average variables
    $i = 0;

    // LECTURES ATTENDANCE BY DATES
    foreach ($date_lecture as $date)
    {
        $count = 0;
        $count_intime = 0;
        $count_noscan = 0;
        foreach ($all_attendance as $att)
        {
            if ((($att['type'] == 'lecture') || ($att['type'] == 'quiz')) && ($date['date'] == $att['date']))
            {
                // Arrived and Scanned in Time
                $count++;
                if (($att['timer'] <= '18:00:00') && ($att['timer'] >= '17:00:00'))
                {
                    $count_intime++;
                }

                // Didn't scan. Added by Admin '19:19:19 - specific time for admins'
                if ($att['time'] == '19:19:19')
                {
                    $count_noscan++;
                }
            }
        }
        $date_lecture[$i]['attendance'] = $count;
        $date_lecture[$i]['att%'] = (int)($count / $count_stud * 100);
        $date_lecture[$i]['intime'] = $count != 0 ? (int)($count_intime / $count * 100) : 0;
        $date_lecture[$i]['noscan'] = $count != 0 ? (int)($count_noscan / $count * 100) : 0;
        $count == 0 ? ($date_lecture[$i]['notintime'] = 0) : ($date_lecture[$i]['notintime'] = 100 - (int)($count_intime / $count * 100));
        $i++;

    }

    //SECTIONS ATTENDANCE BY DATES
    $i = 0;
    foreach ($date_section as $date)
    {
        $count = 0;
        $count_intime = 0;
        $count_noscan = 0;
        foreach ($all_attendance as $att)
        {
            if (($date['date_type'] == $att['type']) && ($date['date'] == $att['date']))
            {
                // Arrived and Scanned in Time
                $count++;
                if ($date['date_type'] == 'section9_11')
                    if (($att['timer'] <= '09:00:00') && ($att['timer'] >= '08:00:00'))
                        $count_intime++;
                else
                    if (($att['timer'] <= '12:00:00') && ($att['timer'] >= '11:00:00'))
                        $count_intime++;

                // Didn't scan. Added by Admin '19:19:19 - specific time for admins'
                if (($att['time'] == '09:09:09') || ($att['time'] == '13:13:13'))
                    $count_noscan++;
            }
        }
        $date_section[$i]['attendance'] = $count;
        $date_section[$i]['att%'] = (int)($count / $count_stud * 100);
        $date_section[$i]['intime'] = $count != 0 ? (int)($count_intime / $count * 100) : 0;
        $date_section[$i]['noscan'] = $count != 0 ? (int)($count_noscan / $count * 100) : 0;
        $count == 0 ? ($date_section[$i]['notintime'] = 0) : ($date_section[$i]['notintime'] = 100 - (int)($date_section[$i]['intime']));
        $i++;
    }

    // CODING ATTENDANCE BY DATES
    $i = 0;
    foreach ($date_coding as $date)
    {
        $count = 0;
        $count_intime = 0;
        $count_noscan = 0;
        foreach ($all_attendance as $att)
        {
            if (($date['date_type'] == $att['type']) && ($date['date'] == $att['date']))
            {
                // Arrived and Scanned in Time
                $count++;
                if (($att['timer'] <= '12:00:00') && ($att['timer'] >= '11:00:00'))
                    $count_intime++;

                // Didn't scan. Added by Admin '19:19:19 - specific time for admins'
                if ($att['time'] == '12:12:12')
                    $count_noscan++;
            }
        }
        $date_coding[$i]['attendance'] = $count;
        $date_coding[$i]['att%'] = (int)($count / $count_stud * 100);
        $date_coding[$i]['intime'] = $count != 0 ? (int)($count_intime / $count * 100) : 0;
        $date_coding[$i]['noscan'] = $count != 0 ? (int)($count_noscan / $count * 100) : 0;
        $count == 0 ? ($date_coding[$i]['notintime'] = 0) : ($date_coding[$i]['notintime'] = 100 - (int)($count_intime / $count * 100));
        $i++;
    }

    // CODING ATTENDANCE BY DATES
    $i = 0;
    foreach ($date_track as $date)
    {
        $count = 0;
        $count_intime = 0;
        $count_noscan = 0;
        foreach ($all_attendance as $att)
        {
            if (($date['date_type'] == $att['type']) && ($date['date'] == $att['date']))
            {
                // Arrived and Scanned in Time
                $count++;
                if (($att['timer'] <= '18:00:00') && ($att['timer'] >= '17:00:00'))
                    $count_intime++;

                // Didn't scan. Added by Admin '19:19:19 - specific time for admins'
                if ($att['time'] == '18:18:18')
                    $count_noscan++;
            }
        }
        $date_track[$i]['attendance'] = $count;
        $date_track[$i]['att%'] = (int)($count / $count_stud * 100);
        $date_track[$i]['intime'] = (int)($count_intime / $count * 100);
        $date_track[$i]['noscan'] = (int)($count_noscan / $count * 100);
        $count == 0 ? ($date_track[$i]['notintime'] = 0) : ($date_track[$i]['notintime'] = 100 - (int)($count_intime / $count * 100));
        $i++;
    }

function color($value)
{
    $color = 65 * (100 - $value)/100 + 35;
    return "hsl(176, 100%, " . $color . "%)";
}

?>