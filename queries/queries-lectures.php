<?php 


    // Gets all LECTURES and QUIZ type events
    $query1 = $dbconnect->query("SELECT `date`,`date_name` 
               FROM  `{$dbase}`.`{$t_dates}` 
               WHERE  `date_type` IN ('lecture', 'quiz')
			   ORDER BY `date` ASC;");
    while ($row = $query1->fetch_assoc()){
        $events[] = $row;
    }
    
    // Gets all SUDENTS info
    $query2 = $dbconnect->query("SELECT * FROM  `{$dbase}`.`{$t_students}` 
                              ORDER BY `name` ASC;");
    while ($row = $query2->fetch_assoc()){
        $students[] = $row;
    }
    
    // Gets all LECTURE type records from ATTENDANCE
    $query3 = $dbconnect->query("SELECT `user_id`, `date` 
	           FROM `{$dbase}`.`{$attendance}`
  	           WHERE `type` = 'lecture';");
    while ($row = $query3->fetch_assoc()){
        $records[] = $row;
    }

    $table_name = "Lectures Attendance";
?>

