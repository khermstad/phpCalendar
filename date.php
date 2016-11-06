<?php

  // Jan Kristian Hermstad -- Web Programming Homework 4


  // variables from Post
  $month1 = $_POST['month1'];
  $date1 = $_POST['date1'];
  $year1 = $_POST['year1'];

  $dateAsString = date("l F jS Y", mktime(0, 0, 0, $month1, $date1, $year1));

  // $starting_day => the first "day" of the month.  ie, October 1, 2016 = Saturday
  $starting_day = date("l", mktime(0, 0, 0, $month1, 1, $year1));

  // $length_of_month => how many days in a given month
  $length_of_month = cal_days_in_month(CAL_GREGORIAN, $month1, $year1);


  // build calendar based on starting_day
      if ($starting_day == "Sunday"){
        $upper = $length_of_month+1;
        $dates[0] = "";

        for ($i = 1; $i < $upper; $i++) {
            $dates[$i] = $i-0;
        }

        echo "<div id='dateHeader'>$dateAsString</div>";
        echo "<table>";
        echo "<th>Sunday</th>";
        echo "<th>Monday</th>";
        echo "<th>Tuesday</th>";
        echo "<th>Wednesday</th>";
        echo "<th>Thursday</th>";
        echo "<th>Friday</th>";
        echo "<th>Saturday</th>";
        $q = 1;
        for ($row=1; $row <= 6; $row++) {
            echo "<tr> \n";

            for ($col=1; $col <=7; $col++) {
              if($dates[$q] <= 0){
                echo "<td></td> \n";
                $q++;
              }
              else{
                echo "<td> $dates[$q] </td> \n";
                $q++;
              }
            }
                echo "</tr>";
            }
            echo "</table>";
      }

    // starting_day == Monday

    if ($starting_day == "Monday"){
      $upper = $length_of_month+2;
      $dates[0] = "";

      for ($i = 1; $i < $upper; $i++) {
          $dates[$i] = $i-1;
      }
      echo "<div id='dateHeader'>$dateAsString</div>";
      echo "<table>";
      echo "<th>Sunday</th>";
      echo "<th>Monday</th>";
      echo "<th>Tuesday</th>";
      echo "<th>Wednesday</th>";
      echo "<th>Thursday</th>";
      echo "<th>Friday</th>";
      echo "<th>Saturday</th>";
      $q = 1;
      for ($row=1; $row <= 6; $row++) {
          echo "<tr> \n";

          for ($col=1; $col <=7; $col++) {
            if($dates[$q] <= 0){
              echo "<td></td> \n";
              $q++;
            }
            else{
              echo "<td> $dates[$q] </td> \n";
              $q++;
            }
          }
              echo "</tr>";
          }
          echo "</table>";
    }


  // starting_day = Tuesday
  if ($starting_day == "Tuesday"){
    $upper = $length_of_month+3;
    $dates[0] = "";

    for ($i = 1; $i < $upper; $i++) {
        $dates[$i] = $i-2;
    }

    echo "<div id='dateHeader'>$dateAsString</div>";
    echo "<table>";
    echo "<th>Sunday</th>";
    echo "<th>Monday</th>";
    echo "<th>Tuesday</th>";
    echo "<th>Wednesday</th>";
    echo "<th>Thursday</th>";
    echo "<th>Friday</th>";
    echo "<th>Saturday</th>";
    $q = 1;
    for ($row=1; $row <= 6; $row++) {
        echo "<tr> \n";

        for ($col=1; $col <=7; $col++) {
          if($dates[$q] <= 0){
            echo "<td></td> \n";
            $q++;
          }
          else{
            echo "<td> $dates[$q] </td> \n";
            $q++;
          }
        }
            echo "</tr>";
        }
        echo "</table>";
  }

  // starting_day = Wednesday
  if ($starting_day == "Wednesday"){
    $upper = $length_of_month+4;
    $dates[0] = "";

    for ($i = 1; $i < $upper; $i++) {
        $dates[$i] = $i-3;
    }

    echo "<div id='dateHeader'>$dateAsString</div>";
    echo "<table>";
    echo "<th>Sunday</th>";
    echo "<th>Monday</th>";
    echo "<th>Tuesday</th>";
    echo "<th>Wednesday</th>";
    echo "<th>Thursday</th>";
    echo "<th>Friday</th>";
    echo "<th>Saturday</th>";
    $q = 1;
    for ($row=1; $row <= 6; $row++) {
        echo "<tr> \n";

        for ($col=1; $col <=7; $col++) {
          if($dates[$q] <= 0){
            echo "<td></td> \n";
            $q++;
          }
          else{
            echo "<td> $dates[$q] </td> \n";
            $q++;
          }
        }
            echo "</tr>";
        }
        echo "</table>";
  }

  // starting_day = Thursday
  if ($starting_day == "Thursday"){
    $upper = $length_of_month+5;
    $dates[0] = "";

    for ($i = 1; $i < $upper; $i++) {
        $dates[$i] = $i-4;
    }

    echo "<div id='dateHeader'>$dateAsString</div>";
    echo "<table>";
    echo "<th>Sunday</th>";
    echo "<th>Monday</th>";
    echo "<th>Tuesday</th>";
    echo "<th>Wednesday</th>";
    echo "<th>Thursday</th>";
    echo "<th>Friday</th>";
    echo "<th>Saturday</th>";
    $q = 1;
    for ($row=1; $row <= 6; $row++) {
        echo "<tr> \n";

        for ($col=1; $col <=7; $col++) {
          if($dates[$q] <= 0){
            echo "<td></td> \n";
            $q++;
          }
          else{
            echo "<td> $dates[$q] </td> \n";
            $q++;
          }
        }
            echo "</tr>";
        }
        echo "</table>";
  }

  // starting_day = Friday
  if ($starting_day == "Friday"){
    $upper = $length_of_month+6;
    $dates[0] = "";

    for ($i = 1; $i < $upper; $i++) {
        $dates[$i] = $i-5;
    }
    echo "<div id='dateHeader'>$dateAsString</div>";
    echo "<table>";
    echo "<th>Sunday</th>";
    echo "<th>Monday</th>";
    echo "<th>Tuesday</th>";
    echo "<th>Wednesday</th>";
    echo "<th>Thursday</th>";
    echo "<th>Friday</th>";
    echo "<th>Saturday</th>";
    $q = 1;
    for ($row=1; $row <= 6; $row++) {
        echo "<tr> \n";

        for ($col=1; $col <=7; $col++) {
          if($dates[$q] <= 0){
            echo "<td></td> \n";
            $q++;
          }
          else{
            echo "<td> $dates[$q] </td> \n";
            $q++;
          }
        }
            echo "</tr>";
        }
        echo "</table>";
  }

  // starting_day = Saturday
  if ($starting_day == "Saturday"){
    $upper = $length_of_month+7;
    $dates[0] = "";

    for ($i = 1; $i < $upper; $i++) {
        $dates[$i] = $i-6;
    }

    echo "<div id='dateHeader'>$dateAsString</div>";
    echo "<table>";
    echo "<th>Sunday</th>";
    echo "<th>Monday</th>";
    echo "<th>Tuesday</th>";
    echo "<th>Wednesday</th>";
    echo "<th>Thursday</th>";
    echo "<th>Friday</th>";
    echo "<th>Saturday</th>";
    $q = 1;
    for ($row=1; $row <= 6; $row++) {
        echo "<tr> \n";

        for ($col=1; $col <=7; $col++) {
          if($dates[$q] <= 0){
            echo "<td></td> \n";
            $q++;
          }
          else{
            echo "<td> $dates[$q] </td> \n";
            $q++;
          }
        }
            echo "</tr>";
        }
        echo "</table>";
  }
?>
