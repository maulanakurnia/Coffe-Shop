<?php
$title = "Keranjang";
include("_partials/head.php");
include("../app/koneksi.php");
$kode = $_SESSION['kode'];
$pemesanan = query("SELECT * FROM pemesanan a INNER JOIN produk b ON a.id_kopi=b.id_kopi WHERE id_pemesanan = '$kode'");
$e = 0;
foreach($pemesanan as $ba) : 
    $c = $ba['jumlah'];
    $d = $ba['harga'];
    $e += $c*$d;
endforeach;
?>

<section class="section-content mt-4">
    <div class="container">
        <div class="row">
            <aside class="col-9">
                <div class="card">
                    <div class="table-responsive">
                        <table class="table table-borderless table-shopping-cart">
                            <thead class="text-muted">
                                <tr class="small text-uppercase">
                                    <th scope="col">Produk</th>
                                    <th scope="col" width="120">Jumlah</th>
                                    <th scope="col" width="120">Harga perproduk</th>
                                    <th scope="col" class="text-right d-none d-md-block" width="200"> </th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($pemesanan as $ps) :?>
                                <tr>
                                    <td>
                                        <h6 class="mt-2">
                                            <a href="#" class="title text-dark"><?= $ps['nama_kopi']?></a>
                                        </h6>
                                    </td>
                                    <td>
                                        <input name="namap" type="text" class="form-control" value="<?= $ps['jumlah'] ?>" disabled>
                                    </td>
                                    <td>
                                        <div class="price mt-2"><?= number_format($ps['harga'])?></div>
                                    </td>
                                    <td class="text-right d-none d-md-block">
                                        <a href="aksi/hapuskeranjang.php?id=<?= $ps['id_kopi']?>" class="btn btn-danger btn-sm" onclick="return confirm('yakin ingin dihapus?')"> <span class="text">Hapus</span></a>
                                    </td>
                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </aside>
            <aside class="col-lg-3">
                <div class="card">
                    <form action="aksi/bayar.php" method="post">
                    <div class="card-body">
                        <dl class="dlist-align">
                            <dt>Total :</dt>
                            <dd class="text-right">Rp.<b><?= number_format($e)?></b></dd>
                            <input type="hidden" name="total" value="<?= $e?>">
                            <input type="hidden" name="kode" value="<?= $kode ?>">
                        </dl>
                        <div class="form-group mt-4">
                            <select name="bayar" class="custom-select form-control">
                                <option selected disabled>Metode Pembayaran</option>
                                <option>Kasir</option>
                                <option>OVO</option>
                                <option>GoPay</option>
                            </select>
                        </div>
                        <div class="form-group mt-4">
                            <select name="duduk" class="custom-select form-control">
                                <option selected disabled>Tempat Duduk</option>
                                <option>01</option>
                                <option>02</option>
                                <option>03</option>
                            </select>
                        </div>
                        <hr>
                        <button type="submit" class="btn btn-success btn-block"> Bayar </button>
                        <a href="#" class="btn btn-light btn-block">Lanjut Memesan</a>
                    </div>
                    </form>
                </div>

            </aside>
        </div>
    </div>
</section>

<?php
include("_partials/foot.php");
?>