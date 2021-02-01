<?php
session_start();
include($_SERVER['DOCUMENT_ROOT']."/new-coffee-shop/app/db_connection.php");

$email      = $_POST['email'];
$password   = $_POST['password'];
$hash       = md5($password);

$login      = fetchDataObject("SELECT * FROM user WHERE email='$email' AND password='$hash'");
$userID     = $login[0]->userID;
if($login){
    $orders     = fetchDataObject("SELECT * FROM orders WHERE userID='$userID'");

    if(end($orders)->status === "WAITING FOR PAYMENT"){
        $_SESSION['orderID']        = end($orders)->orderID;
    }
    $_SESSION['userID']         = $login[0]->userID;
    $_SESSION['nickName']       = $login[0]->nickName;
    $_SESSION['email']          = $login[0]->email;
    $_SESSION['phoneNumber']    = $login[0]->phoneNumber;
    $_SESSION['roleID']         = $login[0]->roleID;


    header("location:../../Homepage.php?msg=SUCCESS");
}else{
    header("location:../../Homepage.php?msg=FAILED");
}