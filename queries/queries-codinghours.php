<?php 

    // Gets all CODING HOURS type events
    $query1 = $dbconnect->query("SELECT `date`,`date_name` 
               FROM  `{$dbase}`.`{$t_dates}` 
               WHERE  `date_type` = 'coding'
			   ORDER BY `date` ASC;");
    while ($row = $query1->fetch_assoc()){
        $events[] = $row;  // JSON
    }
    
    // Gets all SUDENTS info
    $query2 = $dbconnect->query("SELECT * FROM  `{$dbase}`.`{$t_students}`;");
    while ($row = $query2->fetch_assoc()){
        $students[] = $row; //JSON
    }
    
    // Gets all CODING HOURS type records from ATTENDANCE
    $query3 = $dbconnect->query("SELECT `user_id`, `date` 
	           FROM `{$dbase}`.`{$attendance}`
  	           WHERE `type` = 'coding';");
    while ($row = $query3->fetch_assoc()){
        $records[] = $row;
    }

    $table_name = "Coding Hours Attendance";
?>
