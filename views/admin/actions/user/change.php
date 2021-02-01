<?php
include($_SERVER['DOCUMENT_ROOT']."/new-coffee-shop/app/db_connection.php");;

$fullName       = $_POST['fullName'];
$nickName       = $_POST['nickName'];
$email          = $_POST['email'];
$phoneNumber    = $_POST['phoneNumber'];
$role           = $_POST['role'];
$userID         = $_POST['userID'];


$update = mysqli_query($mysql_access,
                       "UPDATE user                          
                            SET fullName    = '$fullName',      -- FULL NAME
                                nickName    = '$nickName',      -- NICK NAME
                                email       = '$email',         -- EMAIL
                                phoneNumber = '$phoneNumber',   -- PHONE NUMBER
                                role='$role' 
                            WHERE userID='$id'
                        ");
if($update){
    header("location:../index.php?msg=SUCCESS");
}else {
    header("location:../index.php?msg=FAILED");
}