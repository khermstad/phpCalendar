<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Registration</title>
<!-- <link rel="stylesheet" href="css/style.css" /> -->
</head>
<body>
<div class="form">
<h1>Kris Hermstad's Calendar Registration</h1>
Create a New Account:<br><br>
<form name="registration" action="auth_register.php" method="post">
	Username:
<input type="text" name="username" placeholder="Username" required />
	Password:
<input type="password" name="password" placeholder="Password" required />
<input type="submit" name="submit" value="Register" />
</form>
</div>
<br>
Already have an account?  <a href="login.php">Login here</a>
</body>
</html>
