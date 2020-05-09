<?php
include("../../../../app/koneksi.php");
$nama = $_POST['nama'];
$harga = $_POST['harga'];
$stok = $_POST['stok'];
$id_kopi = $_POST['id_kopi'];
$update = mysqli_query($konek,"UPDATE produk SET nama_kopi='$nama',harga='$harga',stok='$stok' WHERE id_kopi='$id_kopi'");
if($update){
    header("location:../index.php?pesan=berhasil");
}else{
    header("location:../index.php?pesan=gagal");
}