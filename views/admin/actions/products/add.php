<?php
include($_SERVER['DOCUMENT_ROOT']."/new-coffee-shop/app/db_connection.php");

$productName    = $_POST['productName'];
$price          = $_POST['price'];
$stock          = $_POST['stock'];

$insert = dbQuery("INSERT INTO products 
                   VALUES(DEFAULT,'$productName','$price','$stock')");

if($insert){
    header("location:../../products/index.php?msg=SUCCESS");
}else{
    header("location:../../products/index.php?msg=FAILED");
}