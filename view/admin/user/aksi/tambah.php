<?php
include("../../../../app/koneksi.php");
$namal = $_POST['namal'];
$namap = $_POST['namap'];
$email = $_POST['email'];
$ponsel = $_POST['ponsel'];
$sandi = $_POST['sandi'];
$sandi2 = $_POST['sandi2'];
$pw = md5($sandi);
$role = $_POST['role'];

if($sandi != $sandi2){
    header("location:../index.php?pesan=sanditdksama");
}else{
    $insert = mysqli_query($konek,"INSERT INTO user VALUES(DEFAULT,'$namal','$namap','$email','$pw','$ponsel','$role')");
}

if($insert){
    header("location:../index.php?pesan=berhasil");
}else{
    header("location:../index.php?pesan=gagal");
}