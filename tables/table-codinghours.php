<?php
echo "      <div>

                <!-- TABLE NAME -->
                <div class='table-name'>
		            <H3>" . $table_name . "</h3>
		        </div>";

//include("tables/table-export.php");	

// Number in the table
$count = 0;

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

    		    <table id='table-lectures' class='table table-hover table-striped text-center'>
                    <thead>
                        <tr>
                            <th width='2%'> # </th>
                            <th width='15%'>Student Name</th>
                            <th width='3%'>ID</th>";
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
echo "                      <th class='cell-white stat-head' width='2%'><span>RATE</span></th>
                            <th class='cell-white stat-head' width='2%'><span>Total</span></th>
                    </tr>
                    </thead>

                    <tbody>";
                        foreach ($students as $student)
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
                          echo "<td class='cell-white stat' width='2%'>".$percent ."%</td><td class='cell-white stat' width='2%'>".$yes."/". $total ."</td></tr>";
                        }
echo "              </tbody>
                </table>
            </div>";       // TABLE CONTAINER + HEADER + EXPORT MENU
?>
