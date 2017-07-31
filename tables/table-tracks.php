<div>
    <!-- TABLE NAME -->
    <div class='table-name'>
        <H3>Tracks Attendance</h3>
    </div>

    <script>
        $(function() {
            var header_height = 0;
            $('table th span').each(function() {
                if ($(this).outerWidth() > header_height) header_height = $(this).outerWidth();
            });
            $('table th').height(header_height);
        });
    </script>

    <!-- TABLE -->
    <table class='table table-striped table-hover text-center'>

        <!-- TABLE HEADER -->
        <thead>
            <tr>
                <th width='2%'>#</th>
                <th width='15%'>Student Name</th>
                <th width='3%'>ID</th>
            <?php  
                $count = 0;
                foreach ($events as $lecture)
                {
                    if ($lecture['date_name'] == "")
                    {
                        echo "<th style='word-break:normal;'><span>". $lecture['date'] . "</span></th>";
                    }
                    else
                    {
                        echo "<th style='word-break:normal;'><span>".$lecture['date_name'] . ",<br>" . $lecture['date'] . "</span></th>";
                    }
                }
            ?>
                <th class='cell-white stat-head' width='2%'><span>RATE</span></th>
                <th class='cell-white stat-head' width='2%'><span>Total</span></th>
                </tr>
        </thead>

                    <!-- TABLE BODY -->
        <tbody>
                <tr><td class='track' colspan='100'>C#</td></tr>
        <?php
            foreach ($students_csharp as $student)
            {
                $yes = 0;
                $total = 0;
                $count++;
                echo "<tr id='signals'>
                    <td class='cell-white' width='2%'>". $count . "</td>
                    <td class='cell-white' width='15%'>". $student['name'] . " " . $student['last']. "</td>
                    <td class='cell-white' width='3%'>". $student['id'] . "</td>";
                    foreach ($events as $lecture)
                    {
                            foreach ($records as $record)
                            {
                                if (($record["date"] == $lecture["date"]) && ($student["id"] == $record["user_id"]))
                                {
                                    $attended = " + ";
                                    $style = "green";
                                    $yes++;
                                    break;
                                }
                                else
                                {
                                    $attended = " - ";
                                    $style = "red";
                                }
                            }
                            $total++;
                    echo "<td class='cell-white ". $style ."'>" . $attended . "</td>";
                    }
                    $percent = number_format($yes/$total * 100);
                    echo "<td class='cell-white stat' width='2%'>".$percent ."%</td>
                    <td class='cell-white stat' width='2%'>".$yes."/". $total ."</td>
                    </tr>";
            }
        ?>
        </tbody>
        <tbody>
            <tr><td class='track' colspan='100'>JavaScript</td></tr>
        <?php  
            $count = 0;     
            foreach ($students_js as $student)
            {
                $yes = 0;
                $total = 0;
                $count++;
                echo "<tr id='signals'>
                    <td class='cell-white' width='2%'>". $count . "</td>
                    <td class='cell-white' width='15%'>". $student['name'] . " " . $student['last']. "</td>
                    <td class='cell-white' width='3%'>". $student['id'] . "</td>";
                    foreach ($events as $lecture)
                    {
                            foreach ($records as $record)
                            {
                                if (($record["date"] == $lecture["date"]) && ($student["id"] == $record["user_id"]))
                                {
                                    $attended = " + ";
                                    $style = "green";
                                    $yes++;
                                    break;
                                }
                                else
                                {
                                    $attended = " - ";
                                    $style = "red";
                                }
                            }
                            $total++;
                    echo "<td class='cell-white ". $style ."'>" . $attended . "</td>";
                    }
                    $percent = number_format($yes/$total * 100);
                    echo "<td class='cell-white stat' width='2%'>".$percent ."%</td>
                    <td class='cell-white stat' width='2%'>".$yes."/". $total ."</td>
                    </tr>";
            }?>
        </tbody>
        <tbody>
            <tr><td class='track' colspan='100'>Swift/iOS</td></tr>
        <?php
            $count = 0;
            foreach ($students_ios as $student)
            {
                $yes = 0;
                $total = 0;
                $count++;
                echo "<tr id='signals'>
                    <td class='cell-white' width='2%'>". $count . "</td>
                    <td class='cell-white' width='15%'>". $student['name'] . " " . $student['last']. "</td>
                    <td class='cell-white' width='3%'>". $student['id'] . "</td>";
                    foreach ($events as $lecture)
                    {
                        foreach ($records as $record)
                        {
                            if (($record["date"] == $lecture["date"]) && ($student["id"] == $record["user_id"]))
                            {
                                $attended = " + ";
                                $style = "green";
                                $yes++;
                                break;
                            }
                            else
                            {
                                $attended = " - ";
                                $style = "red";
                            }
                        }
                        $total++;
                        echo "<td class='cell-white ". $style ."'>" . $attended . "</td>";
                    }
                    $percent = number_format($yes/$total * 100);
                    echo "<td class='cell-white stat' width='2%'>".$percent ."%</td>
                <td class='cell-white stat' width='2%'>".$yes."/". $total ."</td>
                </tr>";
            } ?>
        </tbody>
        <tbody>
            <tr><td style='padding-top: 50px; background-color: #FFF' colspan='100'></td></tr>
            <tr><td class='track' colspan='100'>NO TRACK ASSIGNED!</td></tr>
        <?php
            $count = 0;
            foreach ($students_n as $student)
            {
                $yes = 0;
                $total = 0;
                $count++;
            echo "<tr id='signals'>
                    <td class='cell-white' width='2%'>". $count . "</td>
                    <td class='cell-white' width='15%'>". $student['name'] . " " . $student['last']. "</td>
                    <td class='cell-white' width='3%'>". $student['id'] . "</td>";
                    foreach ($events as $lecture)
                    {
                        foreach ($records as $record)
                        {
                            if (($record["date"] == $lecture["date"]) && ($student["id"] == $record["user_id"]))
                            {
                                $attended = " + ";
                                $style = "green";
                                $yes++;
                                break;
                            }
                            else
                            {
                                $attended = " - ";
                                $style = "red";
                            }
                        }
                        $total++;
                        echo "<td class='cell-white ". $style ."'>" . $attended . "</td>";
                    }
                    $percent = number_format($yes/$total * 100);
                    echo "<td class='cell-white stat' width='2%'>".$percent ."%</td>
                <td class='cell-white stat' width='2%'>".$yes."/". $total ."</td>
                </tr>";
            }?>
        </tbody>
    </table>
</div>
