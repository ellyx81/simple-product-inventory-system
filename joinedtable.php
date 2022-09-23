<!DOCTYPE html>
<html>
   <head>
    <title>Product Complete Details</title>
    <link rel="stylesheet" type="text/css" href="mystyle.css" />  
  </head>
<body>


<br>
<?php
require_once("conn.php");

$s=mysqli_query($con, "SELECT product_tbl.product_id, product_tbl.product_name, product_tbl.product_supplier, product_tbl.quantity, product_tbl.price_per_unit, product_tbl.total_amount, suppliers_tbl.sup_name, suppliers_tbl.sup_id, suppliers_tbl.location, suppliers_tbl.email
						FROM product_tbl 
								INNER JOIN
						suppliers_tbl ON product_tbl.product_supplier=suppliers_tbl.sup_name");
?>
<div>
	<h1> PRODUCTS COMPLETE DETAILS </h1>
		<table>
				<tr>
					<th>Product ID</th>
					<th>Product Name</th>
					<th>Quantity</th>
					<th>Price per Unit</th>
					<th>Total Amount</th>
					<th>Supplier</th>
					<th>Supplier ID</th>
					<th>Supplier Location</th>
					<th>Supplier E-mail</th>
					
					

				</tr>
			<?php
			while($r = mysqli_fetch_array($s))
			{
			?>

				<tr style="color:brown">
					<td><?php echo $r['product_id']; ?></td>
					<td><?php echo $r['product_name']; ?></td>
					<td><?php echo $r['quantity']; ?></td>
					<td><?php echo $r['price_per_unit']; ?></td>
					<td><?php echo $r['total_amount']; ?></td>
					<td><?php echo $r['product_supplier']; ?></td>
					<td><?php echo $r['sup_id']; ?></td>
					<td><?php echo $r['location']; ?></td>
					<td><?php echo $r['email']; ?></td>
					
					
				</tr>

			<?php
			}
			?>
		</table>
		<br>
		<center><a href="prod-index.php" class="text">Add New Product</a></center> <br>
		<center><a href="add_supplier.php" class="text">Add New Supplier</a></center> <br>
		<center><a href="table.php" class="text">View Seperate Tables</a></center> <br>
</div>
<br>
<br>
</body>
</html>