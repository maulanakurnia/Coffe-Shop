<?php
    session_start();
    include($_SERVER['DOCUMENT_ROOT']."/new-coffee-shop/app/db_connection.php");
    $quantity   = $_POST['quantity'];
    $action     = $_POST['action'];
    $productID  = $_POST['productID'];
    $orderID    = $_SESSION["orderID"];

    $select     = fetchDataObject("SELECT * FROM order_details WHERE productID='$productID'");
    $products   = fetchDataObject("SELECT * FROM products WHERE productID='$productID'");

        if($action === "tambah") {
            $stock          = (int) $products[0]->stock - 1;
        } else {
            $stock          = (int) $products[0]->stock + 1;
        }
    
    $updateStock    = dbQuery("UPDATE products SET stock = '$stock' WHERE productID = '$productID'");
    $updateOrders   = dbQuery("UPDATE order_details SET quantity = '$quantity' WHERE orderID='$orderID'");

?>