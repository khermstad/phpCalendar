<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Login</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<body>

<div class="form">
<h1>Kris Hermstad's Calendar Log In</h1>
<form action="authorize.php" method="post" name="login">
	Username:
<input type="text" id="username" name="username" placeholder="Username" required />
Password:
<input type="password" id="password" name="password" placeholder="Password" required />
<input name="submit" id="submit" type="submit" value="Login" />
</form>
<p>Not registered yet? <a href='register.php'>Register Here</a></p>
</div>


</body>
</html>
