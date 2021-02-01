<?php
include($_SERVER['DOCUMENT_ROOT']."/new-coffee-shop/app/db_connection.php");
$productID  = $_GET['productID'];

$select     = fetchDataObject("SELECT * FROM order_details WHERE productID='$productID'");
$products   = fetchDataObject("SELECT * FROM products WHERE productID='$productID'");

$delete     = dbQuery("DELETE order_details FROM orders 
                        INNER JOIN order_details
                            ON orders.orderID = order_details.orderID 
                        WHERE order_details.productID='$productID'");

if($delete){
    $stock      = (int) $products[0]->stock + (int) $select[0]->quantity;
    $addStock   = dbQuery("UPDATE products SET stock = '$stock'");
}

if($addStock){
    header("location:../../order/Cart.php?msg=SUCCESS");
}else{
    header("location:../../order/Cart.php?msg=FAILED");
}