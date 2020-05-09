<?php
include("../../app/koneksi.php");
$total = $_POST['total'];
$kode = $_POST['kode'];
$bayar = $_POST['bayar'];
$duduk = $_POST['duduk'];

$insert = mysqli_query($konek,"INSERT INTO detail_pesanan VALUES(DEFAULT,'$kode','$duduk',NOW(),'$bayar','$total','SUDAH DIBAYAR')");
if($insert){
 header("location:../keranjang.php?pesan=berhasil");
}else{
    header("location:../keranjang.php?pesan=gagal");
}