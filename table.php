<!DOCTYPE html>
<html>
	 <head>
	 	<title>Products</title>
	 	<link rel="stylesheet" type="text/css" href="mystyle.css" /> 	
 	</head>
<body>
<br>
<?php
require_once("conn.php");

$s=mysqli_query($con, "select * from product_tbl");
$s1=mysqli_query($con, "select * from suppliers_tbl");
?>
<div>
	<h1> PRODUCTS </h1>
		<table>
				<tr>
					<th>PRODUCT ID</th>
					<th>PRODUCT NAME</th>
					<th>PRODUCT SUPPLIER</th>
					<th>QUANTITY</th>
					<th>PRICE PER UNIT</th>
					<th>TOTAL AMOUNT</th>
					<th>UPDATE</th>
					<th>DELETE</th>

				</tr>
			<?php
			while($r = mysqli_fetch_array($s))
			{
			?>

				<tr>
					<td><?php echo $r['product_id']; ?></td>
					<td><?php echo $r['product_name']; ?></td>
					<td><?php echo $r['product_supplier']; ?></td>
					<td><?php echo $r['quantity']; ?></td>
					<td><?php echo $r['price_per_unit']; ?></td>
					<td><?php echo $r['total_amount']; ?></td>
					<td><a href="edit.php?i=<?php echo $r['product_id']; ?>">EDIT</a></td>
					<td><a href="delete-prod.php?i=<?php echo $r['product_id']; ?>">REMOVE</a></td>
				</tr>

			<?php
			}
			?>
		</table>
		<br>
		<center><a href="prod-index.php" class="text">Add New Product</a></center> <br>
</div>



<div>


	<h1> SUPPLIERS </h1>
		<table>
				<tr>
					<th>SUPPLIER ID</th>
					<th>SUPPLIER NAME</th>
					<th>PRODUCTS</th>
					<th>LOCATION</th>
					<th>EMAIL</th>
					<th>UPDATE</th>
					<th>DELETE</th>

				</tr>
			<?php
			while($r1 = mysqli_fetch_array($s1))
			{
			?>

				<tr style="color:brown">
					<td><?php echo $r1['sup_id']; ?></td>
					<td><?php echo $r1['sup_name']; ?></td>
					<td><?php echo $r1['products']; ?></td>
					<td><?php echo $r1['location']; ?></td>
					<td><?php echo $r1['email']; ?></td>
					<td><a href="supplier_edit.php?i=<?php echo $r1['sup_id']; ?>">EDIT</a></td>
					<td><a href="supplier_delete.php?i=<?php echo $r1['sup_id']; ?>">REMOVE</a></td>
				</tr>

			<?php
			}
			?>
		</table>



		<br>
		<center><a href="add_supplier.php" class="text">Add New Supplier</a></center> 
</div>
<br>
<div>
	<center><a href="joinedtable.php" class="text">View Complete Details</a></center> 
	
	<div class="logout">
	<br>
		<a href="logout.php" class="logout">LOGOUT</a> 
	<br>
	</div>
</div>
<br>
</body>
</html>