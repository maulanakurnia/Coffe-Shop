<?php
$title  = "Data Pemesanan";
include("../_partials/head.php");
include("../../../app/koneksi.php");
$pes = query("SELECT * FROM detail_pesanan a INNER JOIN pemesanan b ON a.id_pemesanan=b.id_pemesanan INNER JOIN user c ON b.id_user=c.id");
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
                                <div class="col-12">
                                    <input type="text" id="keyword" placeholder="cari User..." autocomplete="off" class="form-control form-control-sm">
                                </div>
                            </div>
                        </div>
                        <div class="card-body table-responsive p-0" id="formcari">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>No Pemesanan</th>
                                        <th>Nama User</th>
                                        <th>Tanggal Pemesanan</th>
                                        <th>Jumlah</th>
                                        <th>Total</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i=1; foreach($pes as $p) : ?>
                                    <tr>
                                        <td><?= $i ?></td>
                                        <td><?= $p['id_pemesanan']?></td>
                                        <td><?= $p['namap']?></td>
                                        <td><?= $p['tanggal_pemesanan']?></td>
                                        <td><?= $p['jumlah'] ?></td>
                                        <td><?= $p['total'] ?></td>
                                        <td>
                                            <a href="#" class="badge badge-warning text-white">Ubah</a>
                                            <a href="#" class="badge badge-danger delete">Hapus</a>
                                        </td>
                                    </tr>
                                    <?php $i++; endforeach;?>
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
require_once __DIR__ . "../../_partials/foot.php";
?>