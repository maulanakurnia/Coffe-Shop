<?php
    $title = "Keranjang";
    include("../layouts/head.php");
    include("../layouts/header.php");
    $productID = $_GET['productID'];
    $products = fetchDataObject("SELECT * FROM products WHERE productID='$productID'");
?>

<section class="section-content mt-4">
    <div class="container">
        <div class="justify-content-center d-flex mt-3">
            <aside class="col-4">
                <form action="../actions/order/addOrder.php" method="post">
                <div class="card">
                    <div class="table-responsive">
                        <table class="table table-borderless table-hover table-shopping-cart">
                            <thead class="text-muted">
                                <tr class="small text-uppercase">
                                    <th scope="col">Produk</th>
                                    <th scope="col" width="200">Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <h6 class="mt-2">
                                            <a href="#" class="title text-dark"><?= $products[0]->productName ?></a>
                                            <input type="hidden" name="productID" value="<?= $products[0]->productID ?>">
                                        </h6>
                                    </td>
                                    <td>
                                        <select name="totalProduct" class="form-control">
                                            <?php
                                            
                                                if($products[0]->stock == 0){ ?>
                                                    <option value="EMPTY STOCK">EMPTY STOCK</option>
                                                <?php } else { 
                                                    for ($i = 1; $i <= $products[0]->stock; $i++) : ?>
                                                        <option value="<?= $i ?>"><?= $i ?></option>
                                                    <?php endfor; ?>
                                             <?php } ?>
                                        </select>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <?php
                    if($products[0]->stock == 0){ ?>
                        <button type="submit" disabled class="btn btn-primary mt-2 btn-block"><span class="text">Order</span></button>
                    <?php } else { ?>
                        <button type="submit" class="btn btn-primary mt-2 btn-block"><span class="text">Order</span></button>
                   
                <?php } ?>
            </form>
            </aside>
        </div>
    </div>
</section>

<?php
    include("layouts/foot.php");
?>