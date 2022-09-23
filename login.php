<!DOCTYPE html>
<html>
 <head>
 <title>Login</title>
 <link rel="stylesheet" type="text/css"  href="mystyle.css" />
 </head>
	 <body>
		 <h2>Log in your account</h2>
		 <a href="index.php" class="back">back</a><br/><br/>
		 <form action="checklogin.php" method="POST">
		 Enter Username: <input type="text" name="username" 
		required="required" /> <br><br>
		 Enter password: <input type="password" name="password" 
		required="required" /> <br><br>
		 <center><input type="submit" value="LOGIN" /></center>
	 </form>
 </body>
</html>
