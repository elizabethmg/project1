<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="signuphwstyle.css">
	<title>Login</title>
</head>

<body>
 <h1 align="center">Welcome to the sign up page!</h1>

<p align="center">Please fill out the page bellow</p>

Use your email to log in <?php echo $_POST["email"]; ?><br>

<div align="center">

    <form action="pj1sql.php" method="POST">
	Email: <input type="text" name="email" required><br>
	Password: <input type="text" name="password" required><br>
	<input type="submit">
</form>
</div> 
</body>

</html>
