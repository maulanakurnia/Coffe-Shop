<?php
$title = "Data Kopi";
include("_partials/head.php");
include("../app/koneksi.php");
$kopi = query("SELECT * FROM produk");
?>


<section class="section-content mt-4">
    <div class="container">
        <div class="justify-content-center d-flex">
            <div class="input-group w-100 col-4">
                <input type="text" class="form-control" style="width:55%;" placeholder="Cari..." autofocus>
            </div>
        </div>

        <div class="justify-content-center d-flex mt-3">
            <aside class="col-4">
                <div class="card">
                    <div class="table-responsive">
                        <table class="table table-borderless table-hover table-shopping-cart">
                            <thead class="text-muted">
                                <tr class="small text-uppercase">
                                    <th scope="col">Produk</th>
                                    <th scope="col" width="120">Harga</th>
                                    <th scope="col" class="text-right d-none d-md-block"> </th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- <form action="" method="post"> -->
                                <?php foreach ($kopi as $k) : ?>
                                    <tr>
                                        <td>
                                            <h6 class="mt-2">
                                                <a href="#" class="title text-dark"><?= $k['nama_kopi'] ?></a>
                                                <input type="hidden" name="id_kopi" value="<?= $k['id_kopi'] ?>">
                                            </h6>
                                        </td>
                                        <td>
                                            <div class="price mt-2">Rp.<?= number_format($k['harga']) ?></div>
                                        </td>
                                        <td class="text-right d-none d-md-block">
                                            <a class="btn btn-primary btn-sm" href="jumlah.php?id=<?= $k['id_kopi'] ?>"><span class="text">Pesan</span></a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                                <!-- </form> -->
                            </tbody>
                        </table>
                    </div>
                </div>
            </aside>
        </div>
    </div>
</section>

<?php
include("_partials/foot.php");
?>