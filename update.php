<?php
  require_once("conn.php");
  if(isset($_POST['update']))
  {
    
    $product_id = $_GET["PRODUCT_ID"];
    $product_name = $_POST["PRODUCT_NAME"];
    $product_supplier = $_POST["PRODUCT_SUPPLIER"];
    $quantity = $_POST["QUANTITY"];
    $price_per_unit = $_POST["PRICE_PER_UNIT"];
    $total_amount = $quantity * $price_per_unit;

    $sql = "UPDATE `product_tbl` SET `product_name`='".$product_name."',`product_supplier`='".$product_supplier."',`quantity`='".$quantity."',`price_per_unit`='".$price_per_unit."',`total_amount`='".$total_amount."' WHERE `product_id`='".$product_id."'";
    $result = mysqli_query($con,$sql);

    if($result)
    {
      echo '<script><alert>"file updated"</alert></script>';
      header("location: table.php");
      //echo '<script><alert>"file updated"</alert></script>';
    }
    else
    {
      echo 'please check query';
    }
  }
  else
  {
    header("location:update.php");
  }

?>
