<?php
include("../../../../app/koneksi.php");
$nama = $_POST['nama'];
$harga = $_POST['harga'];
$stok = $_POST['stok'];

$insert = mysqli_query($konek,"INSERT INTO produk VALUES(DEFAULT,'$nama','$harga','$stok')");
if($insert){
    header("location:../index.php?pesan=berhasil");
}else{
    header("location:../index.php?pesan=gagal");
}