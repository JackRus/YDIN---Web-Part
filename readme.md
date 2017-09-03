# YDIN (Yellow Duck In)
Attendance Management System for CS50xMiami, which includes an [iOS App](https://github.com/JackRus/YDIN-iOS-App) as a QR code scanner and web app for administrators to manage the data and see attendance statistics.


## Config.php 

    // MyPhpAdmin Host Name
    $host = 'localhost';
    
    // MyPhpAdmin Username
    $user = 'your_username';    // !!!
    
    // MyPhpAdmin Password
    $password = 'your_password';   // !!!
    
    // DB Name
    $dbase = 'ydin';
    
    // Table Name - for attendance records (by cohorts)
    $attendance =  'attendance';
    
    // Table Name - for all students (by cohorts)
    $t_students = 'students'; 
    
    // Table Name - for all events (by cohorts)
    $t_dates = 'dates'; 
