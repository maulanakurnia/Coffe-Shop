<?php 
    $title  = "Tambah Kopi";
    require_once __DIR__.'../../_partials/head.php';
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
                        <form method="POST" action="aksi/tambah.php">
                            <div class="card-body">
                                <div class="form-group">
                                    <label>Nama Kopi</label>
                                    <input type="text" class="form-control" placeholder="Masukkan nama Kopi" name="nama">
                                </div>
                                <div class="form-group">
                                    <label>Harga Kopi</label>
                                    <input type="number" class="form-control" placeholder="Masukkan harga Kopi" name="harga">
                                </div>
                                <div class="form-group">
                                    <label>Stok Kopi</label>
                                    <input type="stok" class="form-control" placeholder="Masukkan stok Kopi" name="stok">
                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary btn-block">Tambahkan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
