<?php
include("../../app/koneksi.php");
$namal = $_POST['namal'];
$namap = $_POST['namap'];
$email = $_POST['email'];
$ponsel = $_POST['ponsel'];
$sandi = $_POST['sandi'];
$sandi2 = $_POST['sandi2'];
$pw = md5($sandi);

if($sandi != $sandi2){
    header("location:../daftar.php?pesan=sanditdksama");
}else{
    $insert = mysqli_query($konek,"INSERT INTO user VALUES(DEFAULT,'$namal','$namap','$email','$pw','$ponsel','2')");
}

if($insert){
    header("location:../daftar.php?pesan=berhasil");
}else{
    header("location:../daftar.php?pesan=gagal");
}