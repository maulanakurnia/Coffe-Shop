<?php
$title = "Keranjang";
include("_partials/head.php");
include("../app/koneksi.php");
$id = $_GET['id'];
$ju = query("SELECT * FROM produk WHERE id_kopi='$id'");
?>

<section class="section-content mt-4">
    <div class="container">
        <div class="justify-content-center d-flex mt-3">
            <aside class="col-4">
                <form action="aksi/keranjang.php" method="post">
                <div class="card">
                    <div class="table-responsive">
                        <table class="table table-borderless table-hover table-shopping-cart">
                            <thead class="text-muted">
                                <tr class="small text-uppercase">
                                    <th scope="col">Produk</th>
                                    <th scope="col" width="200">Jumlah</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <h6 class="mt-2">
                                            <a href="#" class="title text-dark"><?= $ju[0]['nama_kopi'] ?></a>
                                            <input type="hidden" name="id_kopi" value="<?= $ju[0]['id_kopi'] ?>">
                                        </h6>
                                    </td>
                                    <td>
                                        <select name="jumlah" class="form-control">
                                            <?php for ($i = 1; $i <= 30; $i++) : ?>
                                                <option value="<?= $i ?>"><?= $i ?></option>
                                            <?php endfor; ?>
                                        </select>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary mt-2 btn-block"><span class="text">Pesan</span></button>
            </form>
            </aside>
        </div>
    </div>
</section>

<?php
include("_partials/foot.php");
?>