<?php

    // Gets all TRACK type events
    $query1 = $dbconnect->query("SELECT `date`,`date_name`
               FROM  `{$dbase}`.`{$t_dates}`
               WHERE  `date_type` = 'track'
			   ORDER BY `date` ASC;");
    while ($row = $query1->fetch_assoc()){
        $events[] = $row;
    }

    // Gets all SUDENTS --C#-- info
    $query2csharp = $dbconnect->query("SELECT * FROM  `{$dbase}`.`{$t_students}` WHERE `track` = 'c#';");
    while ($row = $query2csharp->fetch_assoc()){
        $students_csharp[] = $row;
    }

    // Gets all SUDENTS --JS-- info
    $query2js = $dbconnect->query("SELECT * FROM  `{$dbase}`.`{$t_students}` WHERE `track` = 'js';");
    while ($row = $query2js->fetch_assoc()){
        $students_js[] = $row;
    }

    // Gets all SUDENTS --iOS-- info
    $query2ios = $dbconnect->query("SELECT * FROM  `{$dbase}`.`{$t_students}`
               WHERE `track` = 'ios';");
    while ($row = $query2ios->fetch_assoc()){
        $students_ios[] = $row;
    }

    // Gets all SUDENTS --iOS-- info
    $query2none = $dbconnect->query("SELECT * FROM `{$dbase}`.`{$t_students}`
               WHERE (`track` != 'ios' AND `track` != 'js' AND `track` != 'c#') OR `track` is null;");
    while ($row = $query2none->fetch_assoc()){
        $students_n[] = $row;
    }

    // Gets all TRACK type records from ATTENDANCE
    $query3 = $dbconnect->query("SELECT `user_id`, `date`
	           FROM `{$dbase}`.`{$attendance}`
  	           WHERE `type` = 'track';");
    while ($row = $query3->fetch_assoc()){
        $records[] = $row;
    }
?>
