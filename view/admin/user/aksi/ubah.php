<?php
include("../../../../app/koneksi.php");
$namal = $_POST['namal'];
$namap = $_POST['namap'];
$email = $_POST['email'];
$ponsel = $_POST['ponsel'];
$role   = $_POST['role'];
$id = $_POST['id'];
// $sandi = $_POST['sandi'];
// $sandi2 = $_POST['sandi2'];
// $pw = md5($sandi);

$update = mysqli_query($konek,"UPDATE user SET namal = '$namal', namap = '$namap', email = '$email',no_telp = '$ponsel', role='$role' WHERE id='$id'");
if($update){
    header("location:../index.php?pesan=berhasil");
}else {
    header("location:../index.php?pesan=gagal");
}