<?php
$title = "Masuk";
include("_partials/head.php");
?>

<section class="section-conten padding-y">
    <div class="card mx-auto" style="max-width: 380px; margin-top:100px;">
        <article class="card-body">
            <header class="mb-4">
                <h4 class="card-title">Masuk</h4>
            </header>
            <form>
                <div class="form-group">
                    <input name="email" class="form-control" placeholder="Email" type="email" required>
                </div>
                <div class="form-group">
                    <input name="password" class="form-control" placeholder="Kata Sandi" type="password">
                </div>

                <div class="form-group">
                    <a href="lupasandi.php" class="float-right">Lupa Kata Sandi?</a>
                    <label class="float-left custom-control custom-checkbox"> <input type="checkbox" class="custom-control-input" checked="">
                        <div class="custom-control-label"> Ingat Saya </div>
                    </label>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block"> Masuk </button>
                </div>

            </form>
            <hr>
            <p class="text-center">Belum memiliki akun? <a href="daftar.php">Daftar</a></p>
        </article>
    </div>
    <br>
</section>

<?php
include("_partials/foot.php");
?>