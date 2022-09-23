
<?php

    require_once("conn.php");
    $product_id = $_GET['i'];
    $sql = "SELECT * FROM `product_tbl` WHERE `product_id` = '".$product_id."'";
    $result = mysqli_query($con,$sql);

    while($row=mysqli_fetch_assoc($result))
    {
      $product_id = $row["product_id"];
      $product_name = $row["product_name"];
      $product_supplier = $row["product_supplier"];
      $quantity = $row["quantity"];
      $price_per_unit = $row["price_per_unit"];
    }

?>

<!DOCTYPE html>
<html>
   <head>
    <title>Update Product</title>
    <link rel="stylesheet" type="text/css" href="mystyle.css" />  
  </head>
<body>
    <center>
		<form action="update.php?PRODUCT_ID=<?php echo $product_id ?>" method="post">
    		   
    	   <h2>UPDATE A PRODUCT</h2>
        <fieldset>
                <div>
                      Product Name: <input type="text" name="PRODUCT_NAME" value="<?php echo $product_name ?>" required>
                </div>

                <div>
                      Product Supplier: <input type="text" name="PRODUCT_SUPPLIER" value="<?php echo $product_supplier ?>" required>
                </div>

                <div>
                      Quantity: <input type="text" name="QUANTITY" value="<?php echo $quantity ?>" required>
                </div>

                <div>
                      Price Per Unit: <input type="text" name="PRICE_PER_UNIT" value="<?php echo $price_per_unit ?>" required>
                </div>

              <div>
                      <button name="update" >UPDATE</button>
             </div>

        </fieldset>
    </form>
    </center>
  </body>
</html>
