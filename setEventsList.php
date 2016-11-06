<?php

$month2 = $_POST['month2'];
$date2 = $_POST['date2'];
$year2 = $_POST['year2'];
$username2 = $_POST['username2'];

$mysqli = new mysqli("107.180.4.111","cal_admin00", "password", "khermstad_calendarphp");

$query = "SELECT *
FROM  `events`
WHERE user =  '$username2'";

$result = $mysqli->query($query);

while($row = $result->fetch_array())
{
$rows[] = $row;
}

foreach($rows as $row)
{

echo "Start Time: ".$row['timestamp'];
echo "</br>";

echo "Event Details: ".$row['event'];

echo "</br><button id='delete'>DELETE</button>";

echo "</br></br>";

}

/* free result set */
$result->close();

/* close connection */
$mysqli->close();
?>
