<?php
    $title = "Product Data";
    include("../layouts/head.php");
    include("../layouts/header.php");
    $products = fetchData("SELECT * FROM products");
?>


<section class="section-content mt-4">
    <div class="container">
        <div class="justify-content-center d-flex">
            <div class="input-group w-100 col-4">
                <input type="text" class="form-control" style="width:55%;" placeholder="Search..." autofocus>
            </div>
        </div>

        <div class="justify-content-center d-flex mt-3">
            <aside class="col-4">
                <div class="card">
                    <div class="table-responsive">
                        <table class="table table-borderless table-hover table-shopping-cart">
                            <thead class="text-muted">
                                <tr class="small text-uppercase">
                                    <th scope="col">Product</th>
                                    <th scope="col" width="150">Price</th>
                                    <th scope="col" class="text-right d-none d-md-block"> </th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($products as $p) : ?>
                                    <tr>
                                        <td>
                                            <h6 class="mt-2">
                                                <a href="#" class="title text-dark"><?= $p['productName'] ?></a>
                                                <input type="hidden" name="productID" value="<?= $p['productID'] ?>">
                                            </h6>
                                        </td>
                                        <td>
                                            <div class="price mt-2">IDR <?= number_format($p['price'],2,",",".") ?></div>
                                        </td>
                                        <td class="text-right d-none d-md-block">
                                        <?php if (isset($_SESSION['userID']) == NULL) { ?>
                                            <a class="btn btn-primary btn-sm text-white" onclick="alert('oops, sorry you must be logged in')">
                                                <span class="text">choose</span>
                                            </a>
                                        <?php } else { ?>
                                            <a class="btn btn-primary btn-sm" href="TotalProduct.php?productID=<?= $p['productID'] ?>">
                                                <span class="text">choose</span>
                                            </a>
                                       <?php } ?>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </aside>
        </div>
    </div>
</section>

<?php
    include("../layouts/foot.php");
?>