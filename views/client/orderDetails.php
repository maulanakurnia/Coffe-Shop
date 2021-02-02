<?php
    $title = "Detail Order";
    include("layouts/head.php");
    include("layouts/header.php");
    $orderID    = $_GET['orderID'];
    $data       = fetchData("SELECT * FROM order_details a 
                            INNER JOIN orders b
                                ON a.orderID=b.orderID
                            INNER JOIN products c
                                ON a.productID = c.productID
                            WHERE  a.orderID='$orderID'");

    $totalPrice = 0;
    foreach($orderDetails as $od) : 
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
                    <a class="list-group-item" href="profile.php">Profile</a>
                    <a class="list-group-item" href="changeProfile.php">Change Profile</a>
                    <a class="list-group-item active" href="orderHistory.php">Order History</a>
                </ul>
            </aside>
            <main class="col-md-9">
                <article class="card mb-3">
                    <div class="card-body">
                        <h4>Detail Order</h4>
                        <a href="orderHistory.php" class="btn btn-primary btn-sm mb-3">Back</a>
                        <div class="table-responsive">
                            <table class="table  ">
                                <thead class="text-muted">
                                    <tr class="small text-uppercase">
                                        <th scope="col" width="50%">Product</th>
                                        <th scope="col" width="20%">Quantity</th>
                                        <th scope="col" width="30%">Price per product</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i=1; foreach($data as $p) : ?>
                                    <tr>
                                        <td>
                                            <h6 class="mt-2">
                                                <span class="title text-dark"><?= $p['productName']?></span>
                                            </h6>
                                        </td>
                                        <td>
                                            <h6 class="mt-2">
                                                <span class="title text-dark"><?=$p['quantity']?></span>
                                            </h6>
                                        </td>
                                        <td>
                                            <span class="price mt-2">IDR.<?= number_format($p['price'],2,",",".")?></span>
                                        </td>
                                    </tr>
                                    <?php endforeach; ?>
                                    <tr>
                                        <td>
                                        </td>
                                        <td>
                                        </td>
                                        <td>
                                            <div class="mt-2">
                                                <h6>
                                                    <span>total : </span>
                                                </h6>
                                                <span>
                                                IDR <?= number_format($p['total'],2,",",".") ?>
                                                </span>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <div class="justify-content-end d-flex">
                            </div>
                        </div>
                </div>
                </article>
            </main>
        </div>

    </div>
</section>

<?php
    include("layouts/foot.php");
?>