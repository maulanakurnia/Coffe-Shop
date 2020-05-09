<?php
    $title = "Ubah Profil";
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
                    <a class="list-group-item" href="profil.php">Profil</a>
                    <a class="list-group-item active" href="edit_profil.php">Ubah Profil</a>
                </ul>
            </aside>
            <main class="col-md-9">
                <article class="card mb-3">
                    <div class="card-header">
                        <h4>Ubah Profil</h4>
                    </div>
                    <form action="aksi/ubahuser.php" method="post">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-2">
                                <span>Nama Lengkap</span>
                            </div>
                            <div class="col-10">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="namal" value="<?= $user[0]['namal']; ?>">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-2">
                                <span>Nama Panggilan</span>
                            </div>
                            <div class="col-10">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="namap" value="<?= $user[0]['namap']; ?>">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-2">
                                <span>Email</span>
                            </div>
                            <div class="col-10">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="email" value="<?= $user[0]['email'] ?>">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-2">
                                <span>No Telp</span>
                            </div>
                            <div class="col-10">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="ponsel" value="<?= $user[0]['no_telp']?>">
                                </div>
                            </div>
                        </div>
                        <small class="text-danger"><i>Jika tidak ingin mengubah sandi, maka abaikan!</i></small>
                        <div class="row">
                            <div class="col-2">
                                <span>Sandi Lama</span>
                            </div>
                            <div class="col-10">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="sandilama">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-2">
                                <span>Sandi Baru</span>
                            </div>
                            <div class="col-10">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="sandi1">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-2">
                                <span>Konfirmasi Sandi Baru</span>
                            </div>
                            <div class="col-10">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="sandi2">
                                </div>
                            </div>
                        </div>
                        <div class="ml-auto">
                            <button type="submit" class="btn btn-success "> Ubah </button>
                        </div>
                    </div>
                    </form>
                </article>
            </main>
        </div>

    </div>
</section>

<?php
    include("_partials/foot.php");
?>