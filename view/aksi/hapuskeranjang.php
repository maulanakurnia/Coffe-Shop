<?php
include("../../app/koneksi.php");
$id = $_GET['id'];

$hapus = mysqli_query($konek,"DELETE FROM pemesanan WHERE id_kopi='$id'");

if($hapus){
    header("location:../keranjang.php?pesan=berhasilhapus");
}else{
    header("location:../keranjang.php?pesan=gagalhapus");
}