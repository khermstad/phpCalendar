<html>
<head></head>
<body><?php
    require('db.php');
    session_start();

    // get values from register.php
    $username = $_POST['username'];
    $password = $_POST['password'];

    // clean inputs
    $username = stripslashes($username);
    $username = mysqli_real_escape_string($con, $username);
    $password = stripslashes($password);
    $password = mysqli_real_escape_string($con, $password);


    $check1 = "SELECT * FROM `users` WHERE username='$username'";

    $result1 = mysqli_query($con, $check1) or die(mysql_error());

    $rows1 = mysqli_num_rows($result1);
      if($rows1==1){
        echo "<script>alert('Username already exists. Try a different username.')</script>";
        echo "<script type='text/javascript'> document.location = 'register.php';</script>";
      }

    $query = "INSERT into `users` (username, password) VALUES ('$username', '".md5($password)."')";
    $result = mysqli_query($con, $query);

    if($result){
      echo "<script type='text/javascript'> alert('Account Created! Proceed to Login.'); </script>";
      echo "<script type='text/javascript'> document.location = 'login.php';</script>";
    }
    else{

    }


 ?></body>
</html>
