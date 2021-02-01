<?php
session_start();
include($_SERVER['DOCUMENT_ROOT']."/new-coffee-shop/app/db_connection.php");
$productID  = $_POST['productID'];
$quantity   = $_POST['totalProduct'];
$userID     = $_SESSION['userID'];

if($_SESSION['orderID'] == NULL){
    $orders     = fetchDataObject("SELECT max(orderID) as orderID FROM orders");
    if(count($orders) <= 1) {
        $noUrut     = (int) substr("PMSN-001", 5);
    }else{
        $noUrut     = (int) substr($orders->orderID, 5);
    }
    $noUrut++;
    $char       = "PMSN-";
    $orderID    = $char . sprintf("%03s", $noUrut);
    $_SESSION['orderID'] = $orderID;

    $insert_orders      = dbQuery("INSERT INTO orders 
                                    (orderID,userID,timeOrder,status) 
                                    VALUES
                                    ('$orderID','$userID',NOW(),'WAITING FOR PAYMENT')");

    $insert_detail      = dbQuery("INSERT INTO order_details VALUES(DEFAULT,'$orderID','$productID','$quantity')");

    if($insert_detail) {
        $products       = fetchDataObject("SELECT * FROM products WHERE productID='$productID'");
        $stock          = (int) $products[0]->stock - (int) $quantity; 

        dbQuery("UPDATE products 
                 SET stock = '$stock'
                 WHERE productID = '$productID'");
    }

    $order_details      = fetchData("SELECT * FROM order_details a 
                                    INNER JOIN products b 
                                        ON a.productID=b.productID 
                                    WHERE orderID = '$orderID'");

}else {
    $orderID            = $_SESSION['orderID'];

    $orders             = fetchDataObject("SELECT * FROM orders o 
                                            INNER JOIN order_details od 
                                                    ON o.orderID = od.orderID
                                            WHERE o.userID = '$userID' 
                                            AND o.orderID = '$orderID'
                                            AND od.productID = '$productID'");
    if($orders){
        $updateQ        = (int) $orders[0]->quantity + (int) $quantity;
        $insert_detail  = dbQuery("UPDATE order_details 
                                    SET quantity = '$updateQ' 
                                    WHERE orderID = '$orderID' 
                                    AND productID = '$productID'");
    } else {
        $insert_detail      = dbQuery("INSERT INTO order_details VALUES(DEFAULT,'$orderID','$productID','$quantity')");
    }
    if($insert_detail) {
        $products       = fetchDataObject("SELECT * FROM products WHERE productID='$productID'");
        $stock          = (int) $products[0]->stock - (int) $quantity; 
        dbQuery("UPDATE products 
                 SET stock = '$stock'
                 WHERE productID = '$productID'");
    }
}

if($insert_detail){
    header("location:../../order/Cart.php?msg=SUCCESS");
}else{
    header("location:../../order/index.php?msg=FAILED");
}