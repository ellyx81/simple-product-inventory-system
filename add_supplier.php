<!DOCTYPE html>
<html>
	 <head>
	 	<title>Add Supplier</title>
	 	<link rel="stylesheet" type="text/css" href="mystyle.css" /> 	
 	</head>

<body>
<br>

<!----------ADD FORM---------------->
	<div>

			        <form action="" method="post">
	         		<h3 align="center"> Add New Supplier </h3>
			         	<fieldset>
			         		<div>
			         			<input type="text" name="spname" value="" placeholder="Enter Supplier Name" required>
			         		</div>

			         		<div>
			         			<input type="text" name="spprods" value="" placeholder="Enter Products" required>
			         		</div>

			         		<div>
			         			<input type="text" name="sploc" value="" placeholder="Enter Supplier Location" required>
			         		</div>

			         		<div>
			         			<input type="text" name="spemail" value="" placeholder="Enter Supplier E-mail Address" required>
			         		</div>

			         		<div>
			         			<input type="submit" name="ins" value="ADD SUPPLIER">
			         		</div>

			         	</fieldset>
			         	
			         </form>

			         <?php
			         	if(isset($_POST['ins']))
			         	{
			         		//connection
			         		require_once("conn.php");
			         		
			         		//variable and value passing here
			         		//$i = $_POST['id'];
			         		$n = $_POST['spname'];
			         		$pr = $_POST['spprods'];
			         		$lo = $_POST['sploc'];
			         		$em = $_POST['spemail'];
			         		

			         		//INSERT a data here
			         		mysqli_query($con, "insert into suppliers_tbl(sup_name, products, location, email) values('$n', '$pr', '$lo', '$em')");

			         		//id not apply because its autoincrement
			         		 echo '<script>alert("New data is inserted sucessfully")</script>';
              				header("Refresh:0; table.php");

			         	}
			         ?>
	</div>
	<br><br>

<center><a href="table.php" class="text">View Table</center><br>



</body>
</html>