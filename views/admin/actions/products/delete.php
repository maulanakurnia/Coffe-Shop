<?php
include($_SERVER['DOCUMENT_ROOT']."/new-coffee-shop/app/db_connection.php");

$productID     = $_GET['productID'];

$delete     = dbQuery("DELETE FROM products WHERE productID='$productID'");

if($delete){
    header("location:../../products/index.php?msg=SUCCESS");
}else{
    header("location:../../products/index.php?msg=FAILED");
}