<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="signuphwstyle.css">

<title>Welcome!</title>

</head>

<body bgcolor="#66ccff">

<div align="center">

  <br><img src="welcome.gif" alt="welcome gif" style="width:300px;height:175px"><br>

<h1 style="font-family:Lucida Console" align="center">Welcome to the sign up page!</h1>
<p style="font-family:Lucida Console" align="center">Please fill out the page bellow</p>
  
    <form style="font-family:Lucida Console" action="pj1signupactions.php" method="POST">
    <input type="text" name="fname" placeholder="First Name" required><br><br>

    <input type="text" name="lname" placeholder="Last Name" required><br><br>

    <input type="text" name="email" placeholder="Email Address" required><br><br>
        
    <input type="text" name="phone" placeholder="Phone Number" required><br><br>

    <input type="text" name="birthday" placeholder="Birthday" required><br><br>

    <input type="text" name="gender" placeholder="Gender" required><br><br>

    <input type="text" name="password" placeholder="Password" required><br><br>

    <input type="submit" value="Sign Up"/>

  </form>
    <div align="center"><br> 
    <a href="pj1login.php"> Log In </a>
    </div>

</div>

</body>
</html>

