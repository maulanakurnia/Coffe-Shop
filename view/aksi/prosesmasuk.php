<?php
session_start();
include("../../app/koneksi.php");
$email = $_POST['email'];
$sandi = $_POST['sandi'];
$pw = md5($sandi);

$masuk = mysqli_query($konek,"SELECT * FROM user WHERE email='$email' AND password='$pw'");
$cek = mysqli_fetch_array($masuk);

if($cek>0){
    $_SESSION['id'] = $cek['id'];
    $_SESSION['nama'] = $cek['namap'];
    $_SESSION['email'] = $cek['email'];
    $_SESSION['role'] = $cek['role'];
    $_SESSION['ponsel'] = $cek['no_telp'];
    header("location:../index.php?pesan=berhasil");
}else{
    header("location:../index.php?pesan=gagal");
}