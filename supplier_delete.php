<?php
require_once("conn.php");

//getting i variable Value Using GET method 
$sup_id = $_GET['i'];
mysqli_query($con, "delete from suppliers_tbl where sup_id='$sup_id'");


header("location:table.php");
?>