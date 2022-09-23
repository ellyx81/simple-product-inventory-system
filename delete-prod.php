<?php
require_once("conn.php");

//getting i variable Value Using GET method 
$product_id = $_GET['i'];
mysqli_query($con, "delete from product_tbl where product_id='$product_id'");


header("location:table.php");
?>