<?php
include("../../app/koneksi.php");
$namal = $_POST['namal'];
$namap = $_POST['namap'];
$email = $_POST['email'];
$ponsel = $_POST['ponsel'];
$id = $_SESSION['id'];
// $sandi = $_POST['sandi'];
// $sandi2 = $_POST['sandi2'];
// $pw = md5($sandi);

$update = mysqli_query($konek,"UPDATE user SET namal = '$namal', namap = '$namap', email = '$email',no_telp = '$ponsel' WHERE id='$id'");
if($update){
    header("location:../edit_profil.php?pesan=berhasil");
}else {
    header("location:../edit_profil.php?pesan=gagal");
}