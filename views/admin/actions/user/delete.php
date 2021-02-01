<?php
include($_SERVER['DOCUMENT_ROOT']."/new-coffee-shop/app/db_connection.php");
$userID     = $_GET['userID'];

$delete     = dbQuery("DELETE FROM user WHERE userID='$userID'");

if($delete){
    header("location:../../user/index.php?msg=SUCCESS");
}else{
    header("location:../../user/index.php?msg=FAILED");
}