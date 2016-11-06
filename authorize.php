<html>
<head></head>
<body><?php
    require('db.php');
    session_start();

    // get values from login.php
    $username = $_POST['username'];
    $password = $_POST['password'];

    // clean inputs
    $username = stripslashes($username);
    $username = mysqli_real_escape_string($con, $username);
    $password = stripslashes($password);
    $password = mysqli_real_escape_string($con, $password);

    $query = "SELECT * FROM `users` WHERE username='$username' AND password='".md5($password)."'";
    $result = mysqli_query($con, $query) or die(mysql_error());

    $rows = mysqli_num_rows($result);
      if($rows==1){
        $_SESSION['username'] = $username;
        echo "<script type='text/javascript'> document.location = 'calendar.php?username=$username';</script>";
      }
      else{
        echo "<h3>Username or Password Not Found</h3>";
        echo "<br><a href='login.php'>BACK to Login.</a>";
      }
 ?></body>
</html>
