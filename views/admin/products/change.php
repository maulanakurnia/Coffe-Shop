<?php 
    $title  = "Add Product";
    include("../layouts/head.php");;
    $productID = $_GET['id'];
    $products = fetchData("SELECT * FROM products WHERE productID='$productID'");
?>

<div class="content-wrapper" style="min-height: 1200.88px;">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col">
                    <ol class="breadcrumb float-sm-left">
                        <li class="breadcrumb-item"><a href="../">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="user">Products</a></li>
                        <li class="breadcrumb-item active"><?= $title; ?></li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title"><?= $title; ?></h3>
                        </div>
                        <form method="POST" action="../actions/products/change.php">
                            <div class="card-body">
                                <div class="form-group">
                                    <label>Product Name</label>
                                    <input type="text" class="form-control" placeholder="Insert Product Name" name="productName" value="<?= $products[0]['productName']?>">
                                    <input type="hidden" name="productID" value="<?= $products[0]['productID']?>">
                                </div>
                                <div class="form-group">
                                    <label>Price</label>
                                    <input type="number" class="form-control" placeholder="Insert Price" name="price" value="<?= $products[0]['price']?>">
                                </div>
                                <div class="form-group">
                                    <label>Stock</label>
                                    <input type="number" class="form-control" placeholder="Insert Stock" name="stock" value="<?= $products[0]['stock']?>">
                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-warning btn-block">Ubah</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<?php
  include("../layouts/foot.php");
?>
