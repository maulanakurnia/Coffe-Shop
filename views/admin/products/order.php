<?php
    $title  = "Data Pemesanan";
    include("../layouts/head.php");
    $pes = fetchData("SELECT * FROM orders a 
                    INNER JOIN user b
                        ON a.userID = b.userID");
?>

<div class="content-wrapper" style="min-height: 1071.31px;">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col">
                    <ol class="breadcrumb float-sm-left">
                        <li class="breadcrumb-item"><a href="../">Dashboard</a></li>
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
                                <div class="col-12">
                                    <input type="text" id="keyword" placeholder="cari User..." autocomplete="off" class="form-control form-control-sm">
                                </div>
                            </div>
                        </div>
                        <div class="card-body table-responsive p-0" id="formcari">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Order ID</th>
                                        <th>User</th>
                                        <th>Time Order</th>
                                        <th>Total</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i=1; foreach($pes as $p) : ?>
                                    <tr>
                                        <td><?= $i ?></td>
                                        <td><?= $p['orderID']?></td>
                                        <td><?= $p['nickName']?></td>
                                        <td><?= $p['timeOrder']?></td>
                                        <td>IDR <?= number_format($p['total'],2,",",".") ?></td>
                                        <td><?= $p['status'] ?></td>
                                    </tr>
                                    <?php $i++; endforeach;?>
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
  include("../layouts/foot.php");
?>