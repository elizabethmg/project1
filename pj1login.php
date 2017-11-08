<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="signuphwstyle.css">
	<title>Login</title>
</head>

<body>
 <h1 align="center">Welcome to the sign up page!</h1>

<p align="center">Please fill out the page bellow</p>

<div align="center">
    <form action="pj1sql.php" method="POST"><br>
    <p>Your username is the email used from the sign up page.</p>
    <input type="text" name="email" placeholder="Username" required><br><br>

    <input type="text" name="password" placeholder="Password" required><br><br>
    <input type="submit" value="Log In"/></a>

</div> 
</body>

</html>
<?php require 'pj1sql.php'; ?>
