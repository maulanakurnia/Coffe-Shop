<?php
    $title = "Home";
    include("../layouts/head.php");
    include("../layouts/header.php");

    $orderDetails   = fetchData("SELECT * FROM orders a
                                INNER JOIN order_details b
                                    ON a.orderID=b.orderID
                                 INNER JOIN products c 
                                    ON b.productID=c.productID 
                                 WHERE a.orderID = '$orderID' AND status='WAITING FOR PAYMENT'");
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
                                    <th scope="col" width="35%">Product</th>
                                    <th scope="col" width="25%" style="text-align:center">Quantity</th>
                                    <th scope="col" width="25%">Price per product</th>
                                    <th scope="col" class="text-right d-none d-md-block" width="50"> </th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($orderDetails as $od) :?>
                                <tr>
                                    <td>
                                        <h6 class="mt-2">
                                            <a href="#" class="title text-dark"><?= $od['productName']?></a>
                                        </h6>
                                    </td>
                                    <td>
                                        <div>
                                            <div style="display: flex;">
                                                <button 
                                                    id="minus" 
                                                    class="btn btn-primary btn-sm" 
                                                    style="margin-right: 1em;"
                                                    onClick="minus(<?= $od["productID"]?>)">
                                                -
                                                </button>
                                                <input 
                                                    id="quantity-<?= $od["productID"]?>" 
                                                    name="quantity" 
                                                    type="number" 
                                                    class="form-control" 
                                                    value="<?= $od['quantity'] ?>"
                                                    readonly>
                                                <button 
                                                    id="plus" 
                                                    class="btn btn-primary btn-sm" 
                                                    style="margin-left: 1em;"
                                                    onClick="plus(<?= $od["productID"]?>, <?= $od["stock"]?>)">
                                                +
                                                </button>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="price mt-2"><?= number_format($od['price'])?></div>
                                    </td>
                                    <td class="text-right d-none d-md-block">
                                        <a href="../actions/order/deleteOrder.php?productID=<?= $od['productID']?>" class="btn btn-danger btn-sm" onclick="return confirm('are u sure?')"> <span class="text">Delete</span></a>
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
                    <form action="../actions/order/pay.php" method="post">
                        <div class="card-body">
                            <dl class="dlist-align">
                                <dt>Total :</dt>
                                <dd class="text-right">Rp.<b><?= number_format($totalPrice)?></b></dd>
                                <input type="hidden" name="total" value="<?= $totalPrice?>">
                                <input type="hidden" name="orderID" value="<?= $orderID ?>">
                            </dl>
                            <div class="form-group mt-4">
                                <select name="paymentMethod" class="custom-select form-control">
                                    <option selected disabled>Payment Method</option>
                                    <option>Cashier</option>
                                    <option>OVO</option>
                                    <option>GoPay</option>
                                </select>
                            </div>
                            <div class="form-group mt-4">
                                <select name="seatNumber" class="custom-select form-control">
                                    <option selected disabled>Seat Number</option>
                                    <option>01</option>
                                    <option>02</option>
                                    <option>03</option>
                                </select>
                            </div>
                            <hr>
                            <button type="submit" class="btn btn-success btn-block"> PAY NOW </button>
                            <a href="<?= $CLIENT_URL?>order/" class="btn btn-light btn-block">Continue Order</a>
                        </div>
                    </form>
                </div>

            </aside>
        </div>
    </div>
</section>

<?php
    include("../layouts/foot.php");
?>