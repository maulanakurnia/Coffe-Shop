<?php
session_start();
include($_SERVER['DOCUMENT_ROOT']."/new-coffee-shop/app/db_connection.php");

$fullName   = $_POST['fullName'];
$nickName   = $_POST['nickName'];
$email      = $_POST['email'];
$phoneNumber= $_POST['phoneNumber'];
$password   = $_POST['password'];
$cpassword  = $_POST['cpassword'];
$hash       = md5($password);

if($password != $cpassword){
    header("location:../../Homepage.php?msg=PASSWORDNOTMATCH");
}else{
    $insert = dbQuery("INSERT INTO user 
                                VALUES
                                (
                                    DEFAULT,        -- ID
                                    '$fullName',    -- FULL NAME
                                    '$nickName',    -- NICK NAME
                                    '$email',       -- EMAIL
                                    '$hash',        -- PASSWORD WITH HASH
                                    '$phoneNumber', -- PHONE NUMBER
                                    '2'             -- USER ACCESS (DEFAULT USER)
                                )
                            ");
}

if($insert){
    header("location:../../Homepage.php?msg=SUCCESS");
}else{
    header("location:../../Homepage.php?msg=FAILED");
}