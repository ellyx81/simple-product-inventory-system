<?php
  require_once("conn.php");
  if(isset($_POST['sup_update']))
  {
    
    $sup_id = $_GET["SUP_ID"];
    $sup_name = $_POST["SUP_NAME"];
    $products = $_POST["PRODUCTS"];
    $location = $_POST["LOCATION"];
    $email = $_POST["EMAIL"];

    $sql = "UPDATE `suppliers_tbl` SET `sup_name`='".$sup_name."',`products`='".$products."',`location`='".$location."',`email`='".$email."' WHERE `sup_id`='".$sup_id."'";
    $result = mysqli_query($con,$sql);

    if($result)
    {
      echo '<script><alert>"Supplier Updated!"</alert></script>';
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
    header("location:supplier_update.php");
  }

?>
