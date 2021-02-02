<?php
session_start();
include($_SERVER['DOCUMENT_ROOT']."/new-coffee-shop/app/db_connection.php");

$orderID        = $_POST['orderID'];
$total          = $_POST['total'];
$price          = $_POST['price'];
$seatNumber     = $_POST['seatNumber'];
$paymentMethod  = $_POST['paymentMethod'];

$pay = dbQuery("UPDATE orders 
                    SET seatNumber = '$seatNumber',
                        paymentMethod = '$paymentMethod',
                        total         = '$total',
                        status        = 'WAS PAID'
                    WHERE orderID = '$orderID'
                  ");
if($pay){
    $_SESSION["orderID"] = NULL;
    header("location:../../order/Cart.php?msg=SUCCESS");
}else{
    header("location:../../order/Cart.php?msg=FAILED");
}