
<?php

    require_once("conn.php");
    $sup_id = $_GET['i'];
    $sql = "SELECT * FROM `suppliers_tbl` WHERE `sup_id` = '".$sup_id."'";
    $result = mysqli_query($con,$sql);

    while($row=mysqli_fetch_assoc($result))
    {
      $sup_id = $row["sup_id"];
      $sup_name = $row["sup_name"];
      $products = $row["products"];
      $location = $row["location"];
      $email = $row["email"];
    }

?>

<!DOCTYPE html>
<html>
   <head>
    <title>Update Supplier</title>
    <link rel="stylesheet" type="text/css" href="mystyle.css" />  
  </head>
<body>
    <center>
		<form action="supplier_update.php?SUP_ID=<?php echo $sup_id ?>" method="post">
    		   
    	   <h2>UPDATE SUPPLIER</h2>
        <fieldset>
                <div>
                      Supplier Name: <input type="text" name="SUP_NAME" value="<?php echo $sup_name ?>" required>
                </div>

                <div>
                      Products: <input type="text" name="PRODUCTS" value="<?php echo $products ?>"required>
                </div>

                <div>
                      Location: <input type="text" name="LOCATION" value="<?php echo $location ?>"required>
                </div>

                <div>
                      E-mail Address: <input type="text" name="EMAIL" value="<?php echo $email ?>" required>
                </div>

              <div>
                      <button name="sup_update">UPDATE</button>
             </div>

        </fieldset>
           
    </form>
    </center>

  </body>
</html>
