<?php
    ini_set('display_errors', 1);
    error_reporting(E_ALL);

    include("../config.php");

    $dbconnect = new mysqli($host,$user,$password,$dbase);
    if ($dbconnect->connect_errno)
        die("Failed to connect to the DataBase: (" . $dbconnect->connect_errno . ") " . $dbconnect->connect_error);
?>
