<?php
include($_SERVER['DOCUMENT_ROOT']."/new-coffee-shop/app/db_connection.php");

$fullName       = $_POST['fullName'];
$nickName       = $_POST['nickName'];
$email          = $_POST['email'];
$phoneNumber    = $_POST['phoneNumber'];
$password       = $_POST['password'];
$cpassword      = $_POST['cpassword'];
$hash           = md5($password);
$roleID         = $_POST['roleID'];

if($password != $cpassword){
    header("location:../../user/index.php?msg=passwordNotMatch");
}else{
    $insert = dbQuery("INSERT INTO user 
                                VALUES
                                (
                                    DEFAULT,        -- ID USER
                                    '$fullName',    -- FULL NAME
                                    '$nickName',    -- NICK NAME
                                    '$email',       -- EMAIL
                                    '$hash',        -- PASSWORD HASH
                                    '$phoneNumber', -- PHONE NUMBER
                                    '$roleID'         -- ROLE
                                )
                            ");
}

if($insert){
    header("location:../../user/index.php?msg=SUCCESS");
}else{
    header("location:../../user/index.php?msg=FAILED");
}