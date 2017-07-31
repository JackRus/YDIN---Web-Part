<?php
    include("connection.php");

   // Gets Students Info By Session_ID
    $result = $dbconnect->query("SELECT * FROM  `{$dbase}`.`{$t_students}` WHERE `id` = '1';");
    if (!$result) die($dbconnect->error);

    // Extracts student info
    $record = $result->fetch_assoc();
    // Student to be passed to JS function
    $student = $record['name'] . ',' . $record['last'];
    $st_id = $record['id'];
?>

<!DOCTYPE html>
<html>
    <head>
	    <meta charset='utf-8'>
        <meta http-equiv='X-UA-Compatible' content='IE=edge'>
        <meta name='viewport' content='width=device-width, initial-scale=1'>
        <link href='css/bootstrap.min.css' rel='stylesheet'>
        <link href='css/styles.css' rel='stylesheet'>
        <title>QR CODE</title>
        <script src='https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js'></script>
        <script src='js/bootstrap.min.js'></script>
        <script type='text/javascript' src='js/jquery.qrcode.js'></script>
        <script type='text/javascript' src='js/qrcode.js'></script>
    </head>

    <body>
        <div id='qrdiv' class='container qrcode-margin'>

            <!-- EVENT Type Selector -->
            <select id='selector' class='btn btn-default' onchange='report(this.value)'>
                <option value=''>Select event TYPE</option>
                <option value='lecture'>Lecture/Quiz</option>
                <option value='section9_11'>Section 9:00-11:00</option>
                <option value='section12_14'>Section 12:00-2:00</option>
                <option value='coding'>Coding Hours</option>
                <option value='special'>Special Event</option>
                <option value='track'>Track</option>
            </select>

            <!-- QR Code Container -->
            <div id='qrcode'></div>

            <!-- QR CODE Script -->
	        <script>
                /* global $ */
                function report(answer)
                {
                 	if (answer == '') return;

                   	/* Current time and date */
                    var currentdate = new Date();
                    var datetime = currentdate.getFullYear() +
                    '-' + monthFormated() +
                    '-' + dateFormated() +
                    ',' + currentdate.getHours() +
                    ':' + minutesFormated() +
                    ':' + currentdate.getSeconds();

                   	/* Returns month in MM format */
                    function monthFormated() {
                        month = currentdate.getMonth();
                        return month < 10 ? '0' + (month+1) : month+1;
                    }

                    /* Returns minutes in mm format */
                    function minutesFormated() {
                        minutes = currentdate.getMinutes();
                        return minutes < 10 ? '0' + (minutes) : minutes;
                    }

                    /* Returns date in DD format */
                    function dateFormated() {
                        date = currentdate.getDate();
                        return date < 10 ? '0' + (date) : date;
                    }

                    /* Creates QR code */
                    $('#qrcode').qrcode({
                        render : 'table',
                        text   : 'CS5OxMiami'+ ',<?= $st_id ?>,' + datetime + ',<?= $student ?>,' + answer
                   });

                   	/* Hides Selector */
                    $('#selector').hide();

                   	/* Shows Reset Button */
                    $('#reset').removeClass('hidden');
                };
	        </script>
            <!-- END of QR CODE Script -->

            <!-- RESET BUTTON -->
	        <div id='reset' class='form-group hidden'>
                <button id='qr-btn' class='btn btn-default' onclick='clearBox()'>RESET</button>
            </div>

            <!-- HOME BUTTON :) -->
	        <div id='reset' class='form-group'>
                <a href='lectures.php'>
                  <button class='btn btn-default' style='background-color: #337ab7; color: #fff;'>HOME PAGE</button>
                </a>
            </div>

            <!-- Hides QR Code -->
            <script>
                function clearBox()
                {
                    /* global $ */
                    $('#qrcode').html('');
                    $('#selector').show();
                    $('#reset').addClass('hidden');
                }
            </script>
        </div>
    </body>
</html>
