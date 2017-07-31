<?php

    include("../../config.php");

    // Connects to the DB
    $connection = mysql_connect($host,$user,$password);

    // Data from QR Code Scanner / iOS Appp
    $id = $_POST['a'];
    $date = $_POST['b'];
    $time = $_POST['c'];
    $name = $_POST['d'];
    $last = $_POST['e'];
    $type = $_POST['f'];

    // Checks connection to mysql 
    if(!$connection)
    {
        echo mysql_error();
        die('Could not connect to the MySQL!');
    }
    
	// Connects to DB
	$dbconnect = mysql_select_db($dbase, $connection);

    // Checks connection to DB
    if (!$dbconnect)
    {
        die('Could not connect to the Database!');
    }
    else
    {
        // Inserts Data in DB
        $query = "INSERT INTO `{$dbase}`.`{$attendance}` (`id`, `user_id`, `name`, `last_name`, `date`, `time`, `type`) VALUES (NULL, '{$id}', '{$name}', '{$last}', '{$date}', '{$time}', '{$type}');";
        mysql_query($query, $connection) or die(mysql_error());
        
        // Console print if data added 
        echo 'Successfully added.';
    }
?>
