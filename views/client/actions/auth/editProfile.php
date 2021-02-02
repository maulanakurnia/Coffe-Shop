<?php
session_start();
include($_SERVER['DOCUMENT_ROOT']."/new-coffee-shop/app/db_connection.php");

$fullName       = $_POST['fullName'];
$nickName       = $_POST['nickName'];
$email          = $_POST['email'];
$phoneNumber    = $_POST['phoneNumber'];
$userID         = $_SESSION['userID'];
$password       = $_POST["password"];
$newPassword    = $_POST["newPassword"];
$cNewPassword   = $_POST["cNewPassword"];
$hash           = md5($password);
$newHash        = md5($newPassword);

$user               = fetchData("SELECT * FROM user WHERE userID = '$userID'");
$passwordValidate   = $user[0]['password'];


if(empty($password) || empty($newPassword)){ 
    
    $update         = dbQuery("UPDATE user 
                                SET fullName        = '$fullName',      -- FULL NAME 
                                    nickName        = '$nickName',      -- NICK NAME
                                    email           = '$email',         -- EMAIL
                                    phoneNumber     = '$phoneNumber'    -- PHONE NUMBER
                                WHERE userID='$userID'");
    if($update) { header("location: ../../profile.php?msg=SUCCESS"); }
    else { header("location:../../profile.php?msg=FAILED"); }
} else { 
    if ($hash != $passwordValidate){ header("location: ../../changeProfile.php?msg=WRONGPASSWORD"); } 
    else if($newPassword != $cNewPassword){ header("location: ../../changeProfile.php?msg=PASSWORDNOTMATCH"); }
    else { 
        $update         = dbQuery("UPDATE user 
                                        SET fullName        = '$fullName',      -- FULL NAME 
                                            nickName        = '$nickName',      -- NICK NAME
                                            email           = '$email',         -- EMAIL
                                            phoneNumber     = '$phoneNumber',   -- PHONE NUMBER
                                            password        = '$newHash'        -- NEW PASSWORD
                                        WHERE userID='$userID'");
        if($insert){header("location:../../profile.php?msg=SUCCESS"); }
            else{ header("location:../../profile.php?msg=FAILED"); }
          
    }
}