<?php

/********************/
/*  LECTURES TABLE  */
/********************/
$events = $date_lecture;
echo "      <div>
                <div>

                </div>

                <!-- TABLE NAME -->
                <div class='table-name'>
		            <H3> Lectures </h3>
		        </div>";

                //include("tables/table-export.php");

echo "          <script>
                $(function() {
                    var header_height = 0;
                    $('table th span').each(function() {
                        if ($(this).outerWidth() > header_height)
                		header_height = $(this).outerWidth();
                    });

                    $('table th').height(header_height);
                });
                </script>

    		    <table id='table-lectures' class='table text-center'>
                    <thead>
                        <tr>
                            <th width='15%'>PARAMETER</th>";
                            foreach ($events as $lecture)
                            {
                                echo "<th style='word-break:normal;'><span>". $lecture['date'] . "</span></th>";
                            }
echo "                      <th class='cell-white stat-head' width='2%'><span>AVARAGE</span></th></tr>
                    </thead>

                    <!-- TABLE BODY -->
                    <tbody>
                        <tr><td class='stat-space' colspan='100'></td></tr>
                        <tr>
                            <td width='15%'>Attendance (# / <span class='redstar'>". $count_stud ."</span>)</td>";
                            $avarage = 0;
                            $av_count = 0;
                            foreach ($events as $lecture)
                            {
                                echo "<td class='digits-color cell-white'>" . $lecture['attendance'] . "</td>";
                                $avarage += $lecture['attendance'];
                                $av_count++;
                            }
                            $average = round(($avarage / $av_count), 0, PHP_ROUND_HALF_UP);
                        echo "<td class='cell-av' width='2%'>".$average."</td>
                        </tr>
                        <tr><td class='stat-space' colspan='100'></td></tr>
                        <tr>
                            <td width='15%'>Attendance, %</td>";
                            $avarage = 0;
                            $av_count = 0;
                            foreach ($events as $lecture)
                            {
                                $i = color($lecture['att%']);
                                echo "<td class='digits-color cell-white' style='background-color:".$i.";'>".$lecture['att%']."</td>";
                                $avarage += $lecture['att%'];
                                $av_count++;
                            }
                            $average = round(($avarage / $av_count), 0, PHP_ROUND_HALF_UP);
                   echo "<td class='cell-av' width='2%'>".$average."%</td></tr>
                        <tr><td class='stat-space' colspan='100'></td></tr>
                        <tr>
                            <td width='15%'>Scanned on time, %</td>";
                            $avarage = 0;
                            $av_count = 0;
                            foreach ($events as $lecture)
                            {
                                $i = color($lecture['intime']);
                                echo "<td class='digits-color cell-white' style='background-color:".$i.";'>".$lecture['intime']."</td>";
                                $avarage += $lecture['intime'];
                                $av_count++;
                            }
                            $average = round(($avarage / $av_count), 0, PHP_ROUND_HALF_UP);
                   echo "<td class='cell-av' width='2%'>".$average."%</td></tr>
                        <tr><td class='stat-space' colspan='100'></td></tr>
                        <tr>
                            <td width='15%'>Scanned after 18:00, %</td>";
                            $avarage = 0;
                            $av_count = 0;
                            foreach ($events as $lecture)
                            {
                                $i = color($lecture['notintime']);
                                echo "<td class='digits-color cell-white' style='background-color:".$i.";'>".$lecture['notintime']."</td>";
                                $avarage += $lecture['notintime'];
                                $av_count++;
                            }
                            $average = round(($avarage / $av_count), 0, PHP_ROUND_HALF_UP);
                   echo "<td class='cell-av' width='2%'>".$average."%</td></tr>
                        <tr><td class='stat-space' colspan='100'></td></tr>
                        <tr>
                            <td width='15%'>Added by Admin/TF, %</td>";
                            $avarage = 0;
                            $av_count = 0;
                            foreach ($events as $lecture)
                            {
                                $i = color($lecture['noscan']);
                                echo "<td class='digits-color cell-white' style='background-color:".$i.";'>".$lecture['noscan']."</td>";
                                $avarage += $lecture['noscan'];
                                $av_count++;
                            }
                            $average = round(($avarage / $av_count), 0, PHP_ROUND_HALF_UP);
                   echo "<td class='cell-av' width='2%'>".$average."%</td></tr>
                        <tr><td class='stat-space' colspan='100'></td></tr>
                    </tbody>
                </table>
            </div>";       // TABLE CONTAINER + HEADER

/***************************/
/*  END OF LECTURES TABLE  */
/***************************/

/********************/
/*  SECTIONS TABLE  */
/********************/
$events = $date_section;
echo "      <div>
                <div>

                </div>

                <!-- TABLE NAME -->
                <div class='table-name'>
		            <H3> Sections </h3>
		        </div>";

                //include("tables/table-export.php");

echo "          <script>
                $(function() {
                    var header_height = 0;
                    $('table th span').each(function() {
                        if ($(this).outerWidth() > header_height)
                		header_height = $(this).outerWidth();
                    });

                    $('table th').height(header_height);
                });
                </script>

    		    <table id='table-lectures' class='table text-center'>
                    <thead>
                        <tr>
                            <th width='15%'>PARAMETER</th>";
                            foreach ($events as $lecture)
                            {
                                echo "<th style='word-break:normal;'><span>". $lecture['date'] . "</span></th>";
                            }
echo "                      <th class='cell-white stat-head' width='2%'><span>AVARAGE</span></th></tr>
                    </thead>

                    <!-- TABLE BODY -->
                    <tbody>
                        <tr><td class='stat-space' colspan='100'></td></tr>
                        <tr>
                            <td width='15%'>Attendance (# / <span class='redstar'>". $count_stud ."</span>)</td>";
                            $avarage = 0;
                            $av_count = 0;
                            foreach ($events as $lecture)
                            {
                                echo "<td class='digits-color cell-white'>" . $lecture['attendance'] . "</td>";
                                $avarage += $lecture['attendance'];
                                $av_count++;
                            }
                            $average = round(($avarage / $av_count), 0, PHP_ROUND_HALF_UP);
                        echo "<td class='cell-av' width='2%'>".$average."</td>
                        </tr>
                        <tr><td class='stat-space' colspan='100'></td></tr>
                        <tr>
                            <td width='15%'>Attendance, %</td>";
                            $avarage = 0;
                            $av_count = 0;
                            foreach ($events as $lecture)
                            {
                                $i = color($lecture['att%']);
                                echo "<td class='digits-color cell-white' style='background-color:".$i.";'>".$lecture['att%']."</td>";
                                $avarage += $lecture['att%'];
                                $av_count++;
                            }
                            $average = round(($avarage / $av_count), 0, PHP_ROUND_HALF_UP);
                   echo "<td class='cell-av' width='2%'>".$average."%</td></tr>
                        <tr><td class='stat-space' colspan='100'></td></tr>
                        <tr>
                            <td width='15%'>Scanned on time, %</td>";
                            $avarage = 0;
                            $av_count = 0;
                            foreach ($events as $lecture)
                            {
                                $i = color($lecture['intime']);
                                echo "<td class='digits-color cell-white' style='background-color:".$i.";'>".$lecture['intime']."</td>";
                                $avarage += $lecture['intime'];
                                $av_count++;
                            }
                            $average = round(($avarage / $av_count), 0, PHP_ROUND_HALF_UP);
                   echo "<td class='cell-av' width='2%'>".$average."%</td></tr>
                        <tr><td class='stat-space' colspan='100'></td></tr>
                        <tr>
                            <td width='15%'>Scanned after 12:00, %</td>";
                            $avarage = 0;
                            $av_count = 0;
                            foreach ($events as $lecture)
                            {
                                $i = color($lecture['notintime']);
                                echo "<td class='digits-color cell-white' style='background-color:".$i.";'>".$lecture['notintime']."</td>";
                                $avarage += $lecture['notintime'];
                                $av_count++;
                            }
                            $average = round(($avarage / $av_count), 0, PHP_ROUND_HALF_UP);
                   echo "<td class='cell-av' width='2%'>".$average."%</td></tr>
                        <tr><td class='stat-space' colspan='100'></td></tr>
                        <tr>
                            <td width='15%'>Added by Admin/TF, %</td>";
                            $avarage = 0;
                            $av_count = 0;
                            foreach ($events as $lecture)
                            {
                                $i = color($lecture['noscan']);
                                echo "<td class='digits-color cell-white' style='background-color:".$i.";'>".$lecture['noscan']."</td>";
                                $avarage += $lecture['noscan'];
                                $av_count++;
                            }
                            $average = round(($avarage / $av_count), 0, PHP_ROUND_HALF_UP);
                   echo "<td class='cell-av' width='2%'>".$average."%</td></tr>
                        <tr><td class='stat-space' colspan='100'></td></tr>
                    </tbody>
                </table>
            </div>";       // TABLE CONTAINER + HEADER

/***************************/
/*  END OF SECTIONS TABLE  */
/***************************/

/************************/
/*  CODING HOURS TABLE  */
/************************/

$events = $date_coding;
echo "      <div>
                <div>

                </div>

                <!-- TABLE NAME -->
                <div class='table-name'>
		            <H3> Coding Hours </h3>
		        </div>";

                //include("tables/table-export.php");

echo "          <script>
                $(function() {
                    var header_height = 0;
                    $('table th span').each(function() {
                        if ($(this).outerWidth() > header_height)
                		header_height = $(this).outerWidth();
                    });

                    $('table th').height(header_height);
                });
                </script>

    		    <table id='table-lectures' class='table text-center'>
                    <thead>
                        <tr>
                            <th width='15%'>PARAMETER</th>";
                            foreach ($events as $lecture)
                            {
                                echo "<th style='word-break:normal;'><span>". $lecture['date'] . "</span></th>";
                            }
echo "                      <th class='cell-white stat-head' width='2%'><span>AVARAGE</span></th></tr>
                    </thead>

                    <!-- TABLE BODY -->
                    <tbody>
                        <tr><td class='stat-space' colspan='100'></td></tr>
                        <tr>
                            <td width='15%'>Attendance (# / <span class='redstar'>". $count_stud ."</span>)</td>";
                            $avarage = 0;
                            $av_count = 0;
                            foreach ($events as $lecture)
                            {
                                echo "<td class='digits-color cell-white'>" . $lecture['attendance'] . "</td>";
                                $avarage += $lecture['attendance'];
                                $av_count++;
                            }
                            $average = round(($avarage / $av_count), 0, PHP_ROUND_HALF_UP);
                        echo "<td class='cell-av' width='2%'>".$average."</td>
                        </tr>
                        <tr><td class='stat-space' colspan='100'></td></tr>
                        <tr>
                            <td width='15%'>Attendance, %</td>";
                            $avarage = 0;
                            $av_count = 0;
                            foreach ($events as $lecture)
                            {
                                $i = color($lecture['att%']);
                                echo "<td class='digits-color cell-white' style='background-color:".$i.";'>".$lecture['att%']."</td>";
                                $avarage += $lecture['att%'];
                                $av_count++;
                            }
                            $average = round(($avarage / $av_count), 0, PHP_ROUND_HALF_UP);
                   echo "<td class='cell-av' width='2%'>".$average."%</td></tr>
                        <tr><td class='stat-space' colspan='100'></td></tr>
                        <tr>
                            <td width='15%'>Scanned on time, %</td>";
                            $avarage = 0;
                            $av_count = 0;
                            foreach ($events as $lecture)
                            {
                                $i = color($lecture['intime']);
                                echo "<td class='digits-color cell-white' style='background-color:".$i.";'>".$lecture['intime']."</td>";
                                $avarage += $lecture['intime'];
                                $av_count++;
                            }
                            $average = round(($avarage / $av_count), 0, PHP_ROUND_HALF_UP);
                   echo "<td class='cell-av' width='2%'>".$average."%</td></tr>
                        <tr><td class='stat-space' colspan='100'></td></tr>
                        <tr>
                            <td width='15%'>Scanned after 12:00, %</td>";
                            $avarage = 0;
                            $av_count = 0;
                            foreach ($events as $lecture)
                            {
                                $i = color($lecture['notintime']);
                                echo "<td class='digits-color cell-white' style='background-color:".$i.";'>".$lecture['notintime']."</td>";
                                $avarage += $lecture['notintime'];
                                $av_count++;
                            }
                            $average = round(($avarage / $av_count), 0, PHP_ROUND_HALF_UP);
                   echo "<td class='cell-av' width='2%'>".$average."%</td></tr>
                        <tr><td class='stat-space' colspan='100'></td></tr>
                        <tr>
                            <td width='15%'>Added by Admin/TF, %</td>";
                            $avarage = 0;
                            $av_count = 0;
                            foreach ($events as $lecture)
                            {
                                $i = color($lecture['noscan']);
                                echo "<td class='digits-color cell-white' style='background-color:".$i.";'>".$lecture['noscan']."</td>";
                                $avarage += $lecture['noscan'];
                                $av_count++;
                            }
                            $average = round(($avarage / $av_count), 0, PHP_ROUND_HALF_UP);
                   echo "<td class='cell-av' width='2%'>".$average."%</td></tr>
                        <tr><td class='stat-space' colspan='100'></td></tr>
                    </tbody>
                </table>
            </div>";       // TABLE CONTAINER + HEADER

/*******************************/
/*  END OF CODING HOURS TABLE  */
/*******************************/

/********************/
/*  TRACKS TABLE    */
/********************/

$events = $date_track;
echo "      <div>
                <div>

                </div>

                <!-- TABLE NAME -->
                <div class='table-name'>
		            <H3> Tracks </h3>
		        </div>";

                //include("tables/table-export.php");

echo "          <script>
                $(function() {
                    var header_height = 0;
                    $('table th span').each(function() {
                        if ($(this).outerWidth() > header_height)
                		header_height = $(this).outerWidth();
                    });

                    $('table th').height(header_height);
                });
                </script>

    		    <table id='table-lectures' class='table text-center'>
                    <thead>
                        <tr>
                            <th width='15%'>PARAMETER</th>";
                            foreach ($events as $lecture)
                            {
                                echo "<th style='word-break:normal;'><span>". $lecture['date'] . "</span></th>";
                            }
echo "                      <th class='cell-white stat-head' width='2%'><span>AVARAGE</span></th></tr>
                    </thead>

                    <!-- TABLE BODY -->
                    <tbody>
                        <tr><td class='stat-space' colspan='100'></td></tr>
                        <tr>
                            <td width='15%'>Attendance (# / <span class='redstar'>". $count_stud ."</span>)</td>";
                            $avarage = 0;
                            $av_count = 0;
                            foreach ($events as $lecture)
                            {
                                echo "<td class='digits-color cell-white'>" . $lecture['attendance'] . "</td>";
                                $avarage += $lecture['attendance'];
                                $av_count++;
                            }
                            $average = round(($avarage / $av_count), 0, PHP_ROUND_HALF_UP);
                        echo "<td class='cell-av' width='2%'>".$average."</td>
                        </tr>
                        <tr><td class='stat-space' colspan='100'></td></tr>
                        <tr>
                            <td width='15%'>Attendance, %</td>";
                            $avarage = 0;
                            $av_count = 0;
                            foreach ($events as $lecture)
                            {
                                $i = color($lecture['att%']);
                                echo "<td class='digits-color cell-white' style='background-color:".$i.";'>".$lecture['att%']."</td>";
                                $avarage += $lecture['att%'];
                                $av_count++;
                            }
                            $average = round(($avarage / $av_count), 0, PHP_ROUND_HALF_UP);
                   echo "<td class='cell-av' width='2%'>".$average."%</td></tr>
                        <tr><td class='stat-space' colspan='100'></td></tr>
                        <tr>
                            <td width='15%'>Scanned on time, %</td>";
                            $avarage = 0;
                            $av_count = 0;
                            foreach ($events as $lecture)
                            {
                                $i = color($lecture['intime']);
                                echo "<td class='digits-color cell-white' style='background-color:".$i.";'>".$lecture['intime']."</td>";
                                $avarage += $lecture['intime'];
                                $av_count++;
                            }
                            $average = round(($avarage / $av_count), 0, PHP_ROUND_HALF_UP);
                   echo "<td class='cell-av' width='2%'>".$average."%</td></tr>
                        <tr><td class='stat-space' colspan='100'></td></tr>
                        <tr>
                            <td width='15%'>Scanned after 18:00, %</td>";
                            $avarage = 0;
                            $av_count = 0;
                            foreach ($events as $lecture)
                            {
                                $i = color($lecture['notintime']);
                                echo "<td class='digits-color cell-white' style='background-color:".$i.";'>".$lecture['notintime']."</td>";
                                $avarage += $lecture['notintime'];
                                $av_count++;
                            }
                            $average = round(($avarage / $av_count), 0, PHP_ROUND_HALF_UP);
                   echo "<td class='cell-av' width='2%'>".$average."%</td></tr>
                        <tr><td class='stat-space' colspan='100'></td></tr>
                        <tr>
                            <td width='15%'>Added by Admin/TF, %</td>";
                            $avarage = 0;
                            $av_count = 0;
                            foreach ($events as $lecture)
                            {
                                $i = color($lecture['noscan']);
                                echo "<td class='digits-color cell-white' style='background-color:".$i.";'>".$lecture['noscan']."</td>";
                                $avarage += $lecture['noscan'];
                                $av_count++;
                            }
                            $average = round(($avarage / $av_count), 0, PHP_ROUND_HALF_UP);
                   echo "<td class='cell-av' width='2%'>".$average."%</td></tr>
                        <tr><td class='stat-space' colspan='100'></td></tr>
                    </tbody>
                </table>
            </div>";       // TABLE CONTAINER + HEADER


/***************************/
/*  END OF TRACKS TABLE    */
/***************************/

?>
