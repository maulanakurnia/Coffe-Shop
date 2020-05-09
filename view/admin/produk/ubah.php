<?php 
    $title  = "Tambah Kopi";
    require_once __DIR__.'../../_partials/head.php';
    include("../../../app/koneksi.php");
    $id_kopi = $_GET['id'];
    $kopi = query("SELECT * FROM produk WHERE id_kopi='$id_kopi'");
?>

<div class="content-wrapper" style="min-height: 1200.88px;">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col">
                    <ol class="breadcrumb float-sm-left">
                        <li class="breadcrumb-item"><a href="../">Beranda</a></li>
                        <li class="breadcrumb-item"><a href="user">Produk</a></li>
                        <li class="breadcrumb-item active"><?= $title; ?></li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title"><?= $title; ?></h3>
                        </div>
                        <form method="POST" action="aksi/ubah.php">
                            <div class="card-body">
                                <div class="form-group">
                                    <label>Nama Kopi</label>
                                    <input type="text" class="form-control" placeholder="Masukkan nama Kopi" name="nama" value="<?= $kopi[0]['nama_kopi']?>">
                                    <input type="hidden" name="id_kopi" value="<?= $kopi[0]['id_kopi']?>">
                                </div>
                                <div class="form-group">
                                    <label>Harga Kopi</label>
                                    <input type="number" class="form-control" placeholder="Masukkan harga Kopi" name="harga" value="<?= $kopi[0]['harga']?>">
                                </div>
                                <div class="form-group">
                                    <label>Stok Kopi</label>
                                    <input type="stok" class="form-control" placeholder="Masukkan stok Kopi" name="stok" value="<?= $kopi[0]['stok']?>">
                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-warning btn-block">Ubah</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
