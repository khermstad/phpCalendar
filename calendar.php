<!-- Jan Kristian Hermstad: Web Programming -> Homework 4 - Due Friday 10/28/2016 -->
<html>
    <head>
      <title>PHP/AJAX Calendar by Kris Hermstad</title>
      <link rel="stylesheet" type="text/css" href="style.css">
      <script type="text/javascript" src="https://code.jquery.com/jquery-3.1.1.js"></script>

    </head>

    <body>

      <!-- set timezone -->
      <?php
      date_default_timezone_set('UTC')
      ?>

      <!-- dynamically set current month -->
      <script>
      $(document).ready(function() {
          var x = document.getElementById("currentMonth").value;
          document.getElementById('monthDrop').value=x;
      });
      </script>

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


      <!-- calendar body inserted here -->
      <div id="calendarBody">
      </div>

      <!-- hidden text field holding current month -->
      <input type="text" name="date" id="currentMonth" value="<?php echo date("m")?>" hidden></input>
    </body>

</html>
