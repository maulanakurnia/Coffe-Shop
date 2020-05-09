<?php
$title = "profil";
include("_partials/head.php");
include("../app/koneksi.php");
$user = query("SELECT * FROM user WHERE id = '$_SESSION[id]'");
?>

<section class="section-pagetop bg">
    <div class="container">
        <h2 class="title-page">Akun Saya</h2>
    </div>
</section>
<section class="section-content padding-y">
    <div class="container">
        <div class="row">
            <aside class="col-md-3">
                <ul class="list-group">
                    <a class="list-group-item active" href="profil.php">Profil</a>
                    <a class="list-group-item" href="edit_profil.php">Ubah Profil</a>
                </ul>
            </aside>
            <main class="col-md-9">
                <article class="card mb-3">
                    <div class="card-header">
                        <h4>Profil</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-3">
                                <span>Nama Lengkap</span>
                            </div>
                            <div class="col-9">
                                <div class="form-group">
                                    <input type="text" placeholder="<?= $user[0]['namal'];?>" class="form-control" name="nama" disabled>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-3">
                                <span>Nama Panggilan</span>
                            </div>
                            <div class="col-9">
                                <div class="form-group">
                                    <input type="text" placeholder="<?= $user[0]['namap'];?>" class="form-control" name="nama" disabled>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-3">
                                <span>Email</span>
                            </div>
                            <div class="col-9">
                                <div class="form-group">
                                    <input type="text" placeholder="<?= $user[0]['email']?>" class="form-control" name="nama" disabled>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-3">
                                <span>No Telp</span>
                            </div>
                            <div class="col-9">
                                <div class="form-group">
                                    <input type="text" placeholder="<?= $user[0]['no_telp']?>" class="form-control" name="nama" disabled>
                                </div>
                            </div>
                        </div>
                    </div>
                </article>
            </main>
        </div>
    </div>
</section>

<?php
include("_partials/foot.php");
?>