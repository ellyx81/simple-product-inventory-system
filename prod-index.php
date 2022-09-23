<!DOCTYPE html>
<html>
	 <head>
	 	<title>Add Products</title>
	 	<link rel="stylesheet" type="text/css" href="mystyle.css" /> 	
 	</head>
<body>
<br>

<!----------ADD FORM---------------->
	<div>

			        <form action="" method="post">
	         		<h3 align="center"> Add New Product </h3>
			         	<fieldset>
			         		<div>
			         			<input type="text" name="prname" value="" placeholder="Enter Product Name" required>
			         		</div>

			         		<div>
			         			<input type="text" name="prspplr" value="" placeholder="Enter Product Supplier" required>
			         		</div>

			         		<div>
			         			<input type="text" name="prqntty" value="" placeholder="Enter Quantity" required>
			         		</div>

			         		<div>
			         			<input type="text" name="prcpu" value="" placeholder="Enter Price Per Unit" required>
			         		</div>

			         		<div>
			         			<input type="submit" name="ins" value="ADD PRODUCT">
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
			         		$p = $_POST['prname'];
			         		$sp = $_POST['prspplr'];
			         		$qn = $_POST['prqntty'];
			         		$pr = $_POST['prcpu'];
			         		$ta = $qn * $pr;

			         		//INSERT a data here
			         		mysqli_query($con, "insert into product_tbl(product_name, product_supplier, quantity, price_per_unit, total_amount) values('$p', '$sp', '$qn', '$pr', '$ta')");

			         		//id not apply because its autoincrement
			         		 echo '<script>alert("New record is inserted sucessfully")</script>';
              				header("Refresh:0; table.php");

			         	}
			         ?>
	</div>
	<br><br>

<center><a href="table.php" class="text">View Table</center><br>




</body>
</html>