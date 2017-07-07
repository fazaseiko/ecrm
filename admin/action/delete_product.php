<?php
$product = $_GET['ref'];
include '../../config/db_config.php';

$sql = "DELETE FROM products WHERE product_id='$product'";

if ($conn->query($sql) === TRUE) {
   header("location:../list_stock.php");
} else {
    header("location:../list_stock.php");
}

$conn->close();

?>