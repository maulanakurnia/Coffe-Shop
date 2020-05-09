<?php 
    $title  = "Data User";
    include("../_partials/head.php");
    include("../../../app/koneksi.php");
    $user = query("SELECT * FROM user a INNER JOIN role b ON a.role=b.id_role");
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
                                    <a href="tambah" class="btn btn-primary btn-sm"><i class="fas fa-plus"></i> Tambah User</a>
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
                                        <th>Nama Lengkap</th>
                                        <th>Nama Panggilan</th>
                                        <th>Email</th>
                                        <th>No Telp</th>
                                        <th>Role</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i=1; foreach($user as $a) : ?>
                                    <tr>

                                        <td><?= $i?></td>
                                        <td><?= $a['namal']?></td>
                                        <td><?= $a['namap']?></td>
                                        <td><?= $a['email']?></td>
                                        <td><?= $a['no_telp']?></td>
                                        <td><?= $a['nama_role']?></td>
                                        <td>
                                            <a href="<?= $adm?>user/ubah.php?id=<?= $a['id']?>" class="badge badge-warning text-white">Ubah</a>
                                            <a href="#" class="badge badge-danger delete">Hapus</a>
                                        </td>
                                    </tr>
                                    <?php $i++; endforeach; ?>
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