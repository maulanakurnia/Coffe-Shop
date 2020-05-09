<?php
$title = "Daftar";
include("_partials/head.php");
?>

<section class="section-content padding-y">
    <div class="card mx-auto" style="max-width:520px; margin-top:40px;">
        <article class="card-body">
            <header class="mb-4">
                <h4 class="card-title">Daftar</h4>
            </header>
            <form action="aksi/prosesdaftar.php" method="post">
                <div class="form-row">
                    <div class="col form-group">
                        <input name="namal" type="text" class="form-control" placeholder="Nama Lengkap">
                    </div>
                    <div class="col form-group">
                        <input name="namap" type="text" class="form-control" placeholder="Nama Panggilan">
                    </div>
                </div>
                <div class="form-group">
                    <input name="email" type="email" class="form-control" placeholder="Email">
                </div>
                <div class="form-group">
                    <input name="ponsel" type="number" class="form-control" placeholder="No Hp">
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <input class="form-control" name="sandi" type="password" placeholder="Kata Sandi">
                    </div>
                    <div class="form-group col-md-6">
                        <input class="form-control" name="sandi2" type="password" placeholder="Konfirmasi Kata Sandi">
                    </div>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block"> Daftar </button>
                </div>
            </form>
            <hr>
            <p class="text-center mt-4">Memiliki akun? <a href="masuk.php">Masuk</a></p>
        </article>
    </div>
    <br><br>
</section>



<?php
include("_partials/foot.php");
?>