<!-- Jan Kristian Hermstad: Web Programming -> Homework 4 - Due Friday 10/28/2016 -->
<html>
    <head>
      <title>PHP/AJAX Calendar by Kris Hermstad</title>
      <link rel="stylesheet" type="text/css" href="style.css">
      <script type="text/javascript" src="https://code.jquery.com/jquery-3.1.1.js"></script>

    </head>

    <body>

      <?php
          $username = $_GET['username'];
          echo "<h1 id='userName'>$username"."'s Calendar</h1>";
       ?>

       <input type="text" name="date" id="currentUser" value="<?php echo $username?>" hidden></input>
      <!-- set timezone -->
      <?php
      date_default_timezone_set('EST')
      ?>

      <!-- dynamically set current month -->
      <script>
      $(document).ready(function() {
          var x = document.getElementById("currentMonth").value;
          document.getElementById('monthDrop').value=x;
      });
      </script>
    </br>
      <!-- drop down for Month -->
      Month:
      <select name="monthDrop" id="monthDrop">
        <option value="1">January</option>
        <option value="2">February</option>
        <option value="3">March</option>
        <option value="4">April</option>
        <option value="5">May</option>
        <option value="6">June</option>
        <option value="7">July</option>
        <option value="8">August</option>
        <option value="9">September</option>
        <option value="10">October</option>
        <option value="11">November</option>
        <option value="12">December</option>
      </select>

      <!-- inputs for date and year. dynamically created via php -->
      Date:<input type="text" name="date" id="currentDate" value="<?php echo date("d")?>"></input>
      Year:<input type="text" name="year" id="currentYear" value="<?php echo date("Y")?>"></input>
      <button id="go">GO</button>
      <br>
      <br>

      <!-- ajax call to get new calendar upon pressing GO -->
      <script>
      $( "#go" ).click(function() {
        var month = $('#monthDrop').val();
        var date = $('#currentDate').val();
        var year = $('#currentYear').val();

        $.ajax({
          type: 'POST',
          url: 'date.php',
          data: { month1: month, date1: date, year1: year },
          success: function(response) {
            $('#calendarBody').html(response);
          }
        });
        });
      </script>




      <!-- onload: ajax call to build calendar -->
      <script>
        $( document ).ready(function() {
          var month = $('#currentMonth').val();
          var date = $('#currentDate').val();
          var year = $('#currentYear').val();
          var username = $('#currentUser').val();

          $.ajax({
            type: 'POST',
            url: 'date.php',
            data: { month1: month, date1: date, year1: year },
            success: function(response) {
              $('#calendarBody').html(response);
            }
          });



        });
      </script>

      <!-- onload: ajax call to build events list -->
      <script>
      $( document ).ready(function() {
        var month = $('#monthDrop').val();
        var date = $('#currentDate').val();
        var year = $('#currentYear').val();
        var username = $('#currentUser').val();
        $.ajax({
          type: 'POST',
          url: 'setEventsList.php',
          data: { month2: month, date2: date, year2: year, username2: username },
          success: function(response) {
            $('#eventsBody').html(response);
          }
        });
        });
      </script>


      <!-- calendar body inserted here -->
      <div id="calendarBody">
      </div>


      <h2>EVENTS for Current Date:</h2>
      <br/>
        <div id="eventsBody">
        </div>

      <div id="recentEvents">
      </div>
    </br>
      Add New Event:
      </br>


      Start-time:<input type="text" id="ts">
      </br>
      Body:<textarea id="addEventBody"></textarea>
      </br>
      <button id='addEvent'>ADD EVENT</button>

      <!-- ajax call to add new event -->
      <script>
      $( "#addEvent" ).click(function() {
        var month = $('#monthDrop').val();
        var date = $('#currentDate').val();
        var year = $('#currentYear').val();
        var username = $('#currentUser').val();
        var timeStamp = $('#ts').val();
        var eventBody = $('#addEventBody').val();

        $.ajax({
          type: 'POST',
          url: 'events.php',
          data: { month2: month, date2: date, year2: year, username2: username, timeStamp2: timeStamp, eventBody2: eventBody },
          success: function(response) {
            $('#recentEvents').append(response);
          }
        });
        });
      </script>

      <!-- ajax call to add new event -->
      <script>
      $( "#delete" ).click(function() {

        $.ajax({
          type: 'POST',
          url: 'removeEvent.php',
          data: { },
          success: function(response) {

          }
        });
        });
      </script>




      </br></br></br>

      <a href="/calendar/login.php">Logout</a>
      <!-- hidden text field holding current month -->
      <input type="text" name="date" id="currentMonth" value="<?php echo date("m")?>" hidden></input>
    </body>

</html>
