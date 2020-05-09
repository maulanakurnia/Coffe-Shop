<?php
$title = "Lupa Sandi";
include("_partials/head.php");
?>

<section class="section-conten padding-y" style="min-height:84vh">
    <div class="card mx-auto" style="max-width: 380px; margin-top:100px;">
        <article class="card-body">
            <header class="mb-4">
                <h4 class="card-title">Lupa Sandi</h4>
                <p>Masukkan Email anda untuk reset sandi</p>
            </header>
            <form>
                <div class="form-group">
                    <input type="email" name="email" class="form-control" placeholder="Email">
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block"> Kirim </button>
                </div>

            </form>
            <hr>
            <p class="text-center">Memiliki akun? <a href="masuk.php">Masuk</a></p>
            <p class="text-center mt-n3">Belum memiliki akun? <a href="daftar.php">Daftar</a></p>
        </article>
    </div>
    <br>
</section>



<?php
include("_partials/foot.php");
?>