<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="signuphwstyle.css">

<title>Welcome!</title>

</head>

<body bgcolor="#cc99ff">
  
<h1 align="center">Welcome to the sign up page!</h1>

<p align="center">Please fill out the page bellow</p>

<div align="center">
    <form action="pj1login.php" method="POST"><br>
    <form action="pj1sql.php" method="POST">
    <input type="text" name="fname" placeholder="First Name" required><br><br>

    <input type="text" name="lname" placeholder="Last Name" required><br><br>

    <input type="text" name="email" placeholder="Email Address" required><br><br>
        
    <input type="text" name="phone" placeholder="Phone Number" required><br><br>

    <input type="text" name="birthday" placeholder="Birthday" required><br><br>

    <input type="text" name="gender" placeholder="Gender" required><br><br>

    <a href="pj1login.php"><input type="submit" value="Sign Up"/></a>

  </form>
    
</div>

</body>
</html>
