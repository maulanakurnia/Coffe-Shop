<?php 
    $title  = "Data Kopi";
    include("../_partials/head.php");
    include("../../../app/koneksi.php");
    $kopi = query("SELECT * FROM produk");
?>

<div class="content-wrapper" style="min-height: 1071.31px;">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col">
                    <ol class="breadcrumb float-sm-left">
                        <li class="breadcrumb-item"><a href="../">Beranda</a></li>
                        <li class="breadcrumb-item active"><?= $title; ?></li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="row">
                                <div class="col-2">
                                    <a href="tambah.php" class="btn btn-primary btn-sm"><i class="fas fa-plus"></i> Tambah User</a>
                                </div>
                                <div class="col-10">
                                    <input type="text" id="keyword" placeholder="cari User..." autocomplete="off" class="form-control form-control-sm">
                                </div>
                            </div>
                        </div>
                        <div class="card-body table-responsive p-0" id="formcari">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Kopi</th>
                                        <th>Harga Kopi</th>
                                        <th>Stok</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i=1; foreach($kopi as $k ) :?>
                                    <tr>
                                        <td><?= $i ?></td>
                                        <td><?= $k['nama_kopi'] ?></td>
                                        <td>Rp.<?= number_format($k['harga']) ?></td>
                                        <td><?= $k['stok'] ?></td>
                                        <td>
                                            <a href="ubah.php?id=<?= $k['id_kopi']?>" class="badge badge-warning text-white">Ubah</a>
                                            <a href="#" class="badge badge-danger delete">Hapus</a>
                                        </td>
                                    </tr>
                                    <?php $i++;endforeach;?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

      </div>
    </section>
  </div>

<?php 
   require_once __DIR__."../../_partials/foot.php";
?>