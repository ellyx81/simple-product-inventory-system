<?php
 session_start();

	 $servername = "localhost";
	 $username_db = "root";
	 $password_db = "";
	 $db_name = "product_db";
	 // Create connection
	 $conn = mysqli_connect("localhost","root","","product_db");
 	 // Check connection

	 if (!$conn) {
	 	die("Connection failed: " . mysqli_connect_error());
	 }
	 
	 if($_SERVER["REQUEST_METHOD"] == "POST"){
	 	$username=mysqli_real_escape_string($conn, $_POST['username']);
		$password=mysqli_real_escape_string($conn, $_POST['password']);
	 	$bool=true;
		$query = mysqli_query($conn,"Select * from users_tbl WHERE username='$username'"); // Query the users table
		$exists = mysqli_num_rows($query); //Checks if username exists
		$table_users = "";
	 	$table_password = "";

		 if($exists > 0) //IF there are no returning rows or no existing username
		 {
			 while($row = mysqli_fetch_assoc($query)) // display all rows from query
		 {

		 $table_users = $row['username']; // the first username row is passedon to $table_users, and so on until the query is finished
		 $table_password = $row['password']; // the first password row ispassed on to $table_password, and so on until the query is finished
		 }
		 if(($username == $table_users) && ($password == $table_password))//checks if there are any matching fields
		 {
		 if($password == $table_password)
		 {
			 $_SESSION['user'] = $username; //set the username in a session.This serves as a global variable
			 header("location: table.php"); // redirects the user to theauthenticated home page
		 }
		 }

		 else
		 {
			 Print '<script>alert("Incorrect Password!");</script>'; // Prompts theuser
			 Print '<script>window.location.assign("login.php");</script>'; //redirects to login.php
		 }
		 }
		 
		 else
		 {
			 Print '<script>alert("Incorrect username!");</script>'; // Prompts theuser
			 Print '<script>window.location.assign("login.php");</script>'; //redirects to login.php
		 }
	 }
?>