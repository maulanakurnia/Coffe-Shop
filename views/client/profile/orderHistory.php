<?php
    $title = "Order History";
    include("../layouts/head.php");
    include("../layouts/header.php");
    $userID = $_SESSION['userID'];
    $data   = fetchData("SELECT * FROM orders a 
                            INNER JOIN user b
                                ON a.userID = b.userID
                            WHERE a.userID='$userID'");

    $totalPrice = 0;
    foreach($data as $od) : 
        $quantity = $od['quantity'];
        $price  = $od['price'];
        $totalPrice += $quantity*$price;
    endforeach;
?>

<section class="section-pagetop bg">
    <div class="container">
        <h2 class="title-page">My Account</h2>
    </div>
</section>
<section class="section-content padding-y">
    <div class="container">
        <div class="row">
            <aside class="col-md-3">
                <ul class="list-group">
                    <a class="list-group-item" href="<?= $CLIENT_URL ?>profile/index.php">Profile</a>
                    <a class="list-group-item" href="<?= $CLIENT_URL ?>profile/changeProfile.php">Change Profile</a>
                    <a class="list-group-item active" href="<?= $CLIENT_URL ?>profile/orderHistory.php">Order History</a>
                </ul>
            </aside>
            <main class="col-md-9">
                <article class="card mb-3">
                    <div class="card-header">
                        <h4>Order History</h4>
                    </div>
                    <div class="card-body table-responsive p-0" id="formcari">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Order ID</th>
                                        <th>Time Order</th>
                                        <th>Total</th>
                                        <th>Status</th>
                                        <th>Detail</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i=1; foreach($data as $p) : ?>
                                    <tr>
                                        <td><?= $i ?></td>
                                        <td><?= $p['orderID']?></td>
                                        <td><?= $p['timeOrder']?></td>
                                        <td>IDR <?= number_format($p['total'],2,",",".") ?></td>
                                        <td><?= $p['status'] ?></td>
                                        <td>
                                            <a href="orderDetails.php?orderID=<?=$p['orderID']?>" class="btn btn-success btn-sm">
                                                Detail
                                            </a>
                                        </td>
                                    </tr>
                                    <?php $i++; endforeach;?>
                                </tbody>
                            </table>
                        </div>
                </article>
            </main>
        </div>

    </div>
</section>

<?php
    include("../layouts/foot.php");
?>