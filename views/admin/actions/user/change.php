<?php
include($_SERVER['DOCUMENT_ROOT']."/new-coffee-shop/app/db_connection.php");;

$fullName       = $_POST['fullName'];
$nickName       = $_POST['nickName'];
$email          = $_POST['email'];
$phoneNumber    = $_POST['phoneNumber'];
$role           = $_POST['role'];
$userID         = $_POST['userID'];


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
                                    phoneNumber     = '$phoneNumber',   -- PHONE NUMBER
                                    roleID          = '$role'           -- ROLE
                                WHERE userID='$userID'");
    if($update) { header("location:../../user/index.php?msg=SUCCESS"); }
    else { header("location:../../user/index.php?msg=FAILED"); }
} else { 
    if ($hash != $passwordValidate){ header("location:../../user/index.php?msg=WRONGPASSWORD"); } 
    else if($newPassword != $cNewPassword){ header("location:../../user/index.php?msg=PASSWORDNOTMATCH"); }
    else { 
        $update         = dbQuery("UPDATE user 
                                        SET fullName        = '$fullName',      -- FULL NAME 
                                            nickName        = '$nickName',      -- NICK NAME
                                            email           = '$email',         -- EMAIL
                                            phoneNumber     = '$phoneNumber',   -- PHONE NUMBER
                                            roleID          = '$role',          -- ROLE
                                            password        = '$newHash'        -- NEW PASSWORD
                                        WHERE userID='$userID'");
        if($update){header("location:../../user/index.php?msg=SUCCESS"); }
            else{ header("location:../../user/index.php?msg=FAILED"); }
          
    }
}