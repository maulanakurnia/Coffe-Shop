<?php
    $title = "Home";
    include("layouts/head.php");
    include("layouts/header.php");
?>

<section class="section-intro padding-y-sm">
    <div class="container">
        <div class="intro-banner-wrap">
            <img src="<?= $BASE_URL ?>assets/img/banner.jpg" class="img-fluid rounded">
        </div>
    </div>
</section>


<section class="section-content padding-y-sm">
    <div class="container col-6">
        <article class="card card-body">
            <div class="row">
                <div class="col-md-4">
                    <figure class="item-feature">
                        <span class="text-primary"><i class="fa fa-2x fa-truck"></i></span>
                        <figcaption class="pt-3">
                            <h5 class="title">Delivery</h5>
                            <p>Dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut labore </p>
                        </figcaption>
                    </figure> 
                </div>
                <div class="col-md-4">
                    <figure class="item-feature">
                        <span class="text-primary"><i class="far fa-2x fa-clock"></i></span>
                        <figcaption class="pt-3">
                            <h5 class="title">Fast Order</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            </p>
                        </figcaption>
                    </figure> 
                </div>
                <div class="col-md-4">
                    <figure class="item-feature">
                        <span class="text-primary"><i class="fa fa-2x fa-lock"></i></span>
                        <figcaption class="pt-3">
                            <h5 class="title">Security </h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            </p>
                        </figcaption>
                    </figure> 
                </div> 
            </div>
        </article>
    </div>
</section>

<?php
    include("layouts/foot.php");
?>