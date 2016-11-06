<?php

  $connection = mysqli_connect("107.180.4.111","cal_admin00", "password", "khermstad_calendarphp");

  $month2 = $_POST['month2'];
  $date2 = $_POST['date2'];
  $year2 = $_POST['year2'];

  $userName2 = $_POST['username2'];
  $timeStamp2 = $_POST['timeStamp2'];
  $eventBody2 = $_POST['eventBody2'];

  echo "Start-Time: $timeStamp2 </br>".'Event Details: '.$eventBody2."</br>";

  $insertQuery = "INSERT INTO `events` (`user`, `month`, `day`, `year`, `timestamp`, `event`) VALUES ('$userName2', '$month2', '$date2', '$year2', '$timeStamp2', '$eventBody2');";

  $result = mysqli_query($connection, $insertQuery);


 ?>
 <!--
 month2: month, date2: date, year2: year, username2: username, timeStamp2: timeStamp, eventBody2: eventBody }, -->
