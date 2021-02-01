<?php 
    $title  = "Data Products";
    include("../layouts/head.php");
    $products = fetchData("SELECT * FROM products");
?>

<div class="content-wrapper" style="min-height: 1071.31px;">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col">
                    <ol class="breadcrumb float-sm-left">
                        <li class="breadcrumb-item"><a href="../">Home</a></li>
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
                                <div class="col-2">
                                    <a href="add.php" class="btn btn-primary btn-sm"><i class="fas fa-plus"></i> Add Products</a>
                                </div>
                                <div class="col-10">
                                    <input disabled type="text" id="keyword" placeholder="Find Products..." autocomplete="off" class="form-control form-control-sm">
                                </div>
                            </div>
                        </div>
                        <div class="card-body table-responsive p-0" id="formcari">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Product Name</th>
                                        <th>Price</th>
                                        <th>Stock</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i=1; foreach($products as $k ) :?>
                                    <tr>
                                        <td><?= $i ?></td>
                                        <td><?= $k['productName'] ?></td>
                                        <td>IDR <?= number_format($k['price'],2,",",".") ?></td>
                                        <td><?= $k['stock'] ?></td>
                                        <td>
                                            <a href="change.php?id=<?= $k['productID']?>" class="badge badge-warning text-white">Change</a>
                                            <a href="<?= $adm ?>actions/products/delete.php?productID=<?= $k['productID']?>" class="badge badge-danger delete" onclick="return confirm('are u sure?')">Delete</a>
                                        </td>
                                    </tr>
                                    <?php $i++;endforeach;?>
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