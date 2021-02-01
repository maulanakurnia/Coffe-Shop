<?php
include($_SERVER['DOCUMENT_ROOT']."/new-coffee-shop/app/db_connection.php");

$productName    = $_POST['productName'];
$price          = $_POST['price'];
$stock          = $_POST['stock'];
$productID      = $_POST['productID'];

$update         = dbQuery("UPDATE products 
                            SET productName='$productName',
                                price='$price',
                                stock='$stock' 
                            WHERE productID='$productID'");
if($update){
    header("location:../../products/index.php?msg=SUCCESS");
}else{
    header("location:../../products/index.php?msg=FAILED");
}