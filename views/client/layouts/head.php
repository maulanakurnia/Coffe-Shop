<?php
    session_start();
    $BASE_URL   = "http://localhost/new-coffee-shop/";
    $CLIENT_URL = "http://localhost/new-coffee-shop/views/client/";
    $ADMIN_URL  = "http://localhost/new-coffee-shop/views/admin/";
    include($_SERVER['DOCUMENT_ROOT']."/new-coffee-shop/app/db_connection.php");
    $orderID = $_SESSION["orderID"];
?>
<!DOCTYPE HTML>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="pragma" content="no-cache" />
    <meta http-equiv="cache-control" content="max-age=604800" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Coffe Shop - <?= $title ?></title>

    <!-- JQuery -->
    <script src="<?= $BASE_URL ?>assets/js/lib/jquery.min.js" type="text/javascript"></script>
    <script type="text/javascript">
        function plus(productID, maxInput) {
            var inputQuantityElement = $("#quantity-"+productID);
            if(parseInt(maxInput) > 0)
            {
                var newQuantity = parseInt($(inputQuantityElement).val())+1;
                var action = "tambah";
                save_to_db(productID, newQuantity, action);
            }
        }

        function minus(productID) {
            var inputQuantityElement = $("#quantity-"+productID);
            if($(inputQuantityElement).val() > 1) 
            {
                var newQuantity = parseInt($(inputQuantityElement).val()) - 1;
                var action = "minus"
                save_to_db(productID, newQuantity, action);
            }
        }

        function save_to_db(productID, new_quantity, action) {
            var inputQuantityElement = $("#quantity-"+productID);
            $.ajax({
                url: 'http://localhost/new-coffee-shop/views/client/actions/order/updateQuantity.php',
                data : "productID="+productID+"&quantity="+new_quantity+"&action="+action,
                type : 'post',
                success : function() {
                    $(inputQuantityElement).val(new_quantity);
                    // location.reload(); 
                }
            });
        }
    </script>
    
    <!-- Bootstrap 5 -->
    <script src="<?= $BASE_URL?>assets/js/lib/bootstrap.bundle.min.js" type="text/javascript"></script>
    <link href="<?= $BASE_URL ?>assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />

    <!-- Fontawesome 5 -->
    <link href="<?= $BASE_URL ?>assets/library/fontawesome/css/all.min.css" type="text/css" rel="stylesheet">

    <!-- custom style -->
    <link href="<?= $BASE_URL ?>assets/css/ui.min.css" rel="stylesheet" type="text/css" />
    <link href="<?= $BASE_URL ?>assets/css/responsive.min.css" rel="stylesheet" media="only screen and (max-width: 1200px)" />

    <!-- Style -->
    <link href="<?= $BASE_URL ?>assets/css/style.css" rel="stylesheet" type="text/css" />
</head>

<body>