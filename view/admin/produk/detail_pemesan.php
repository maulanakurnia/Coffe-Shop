<?php 
    $title = 'Detail Pemesan';
    require_once __DIR__.'../../_partials/head.php';
    $id         = $_GET['id'];

    $pemesanan  = query("SELECT * FROM pemesanan a INNER JOIN user b ON a.id_user=b.id INNER JOIN detail_wisata c ON a.id_wisata=c.id_wisata INNER JOIN data_pemesan d ON a.id_pemesanan=d.id_pemesanan WHERE a.id_pemesanan = '$id'");

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
                <div class="col-6">
                    <div class="card card-primary card-outline">
                    <div class="card-body box-profile">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Nama User Pemesan</label>
                            <input type="text" class="form-control" value="<?= $pemesanan[0]['nama']?>" readonly>
                        </div>
                        <?php $i=1; foreach($pemesanan as $psn) : ?>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Nama Pemesan <?= $i; ?></label>
                                <input type="text" class="form-control" value="<?= $pemesanan[0]['nama_pemesan'] ?>" readonly>
                            </div>
                        <?php $i++; endforeach ?>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="card card-primary card-outline">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="exampleInputEmail1">ID Pemesanan</label>
                            <input type="text" class="form-control" value="<?= $id?>" readonly>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Nama Wisata</label>
                            <input type="text" class="form-control" value="<?= $pemesanan[0]['nama_wisata']?>" readonly>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Tanggal Berangkat</label>
                            <input type="text" class="form-control" value="<?= date('d M Y ',strtotime($pemesanan[0]['tanggal_berangkat']))?>" readonly>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Tanggal Pulang</label>
                            <input type="text" class="form-control" value="<?= date('d M Y ',strtotime($pemesanan[0]['tanggal_pulang']))?>" readonly>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Tanggal Pesan</label>
                            <input type="text" class="form-control" value="<?= date('d M Y H:i:s',strtotime($pemesanan[0]['tanggal_pemesanan']));?>" readonly>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Total yang Harus Dibayar</label>
                            <input type="text" class="form-control" value="RP. <?= $pemesanan[0]['total']?>" readonly>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Metode Pembayaran</label>
                            <input type="text" class="form-control" value="<?= $pemesanan[0]['metode_pembayaran']?>" readonly>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Status</label>
                            <input type="text" class="form-control" value="<?= $pemesanan[0]['status_wisata']?>" readonly>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
  </div>



<?php 
    require_once __DIR__.'../../_partials/foot.php';
?>
