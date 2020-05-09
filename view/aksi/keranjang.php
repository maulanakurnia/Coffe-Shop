<?php
session_start();
include("../../app/koneksi.php");
$id_kopi = $_POST['id_kopi'];
$jumlah = $_POST['jumlah'];
$id_user = $_SESSION['id'];

if($_SESSION['kode'] == null){
    $query      = mysqli_query($konek,"SELECT max(id_pemesanan) as max_kode FROM pemesanan");
    $data       = mysqli_fetch_array($query);
    $kode_psn   = $data['max_kode'];
    
    $noUrut     = (int) substr($kode_psn, 5);
    $noUrut++;
    $char       = "PMSN-";
    $kode       = $char . sprintf("%03s", $noUrut);
    
    $_SESSION['kode'] = $kode;
    $insert = mysqli_query($konek,"INSERT INTO pemesanan VALUES('$kode','$id_user','$id_kopi','$jumlah')");
}else {
    $kode = $_SESSION['kode'];
    $insert = mysqli_query($konek,"INSERT INTO pemesanan VALUES('$kode','$id_user','$id_kopi','$jumlah')");
}


if($insert){
    header("location:../keranjang.php?pesan=berhasil");
}else{
    header("location:../kopi.php?pesan=gagal");
}



