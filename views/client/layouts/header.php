<?php
    $orders  = fetchDataObject("SELECT * FROM order_details WHERE orderID = '$orderID'");
?>

<header class="section-header">
    <section class="header-main border-bottom">
        <div class="container">
            <div class="row align-items-center">
                <div class="brand-wrap">
                    <img class="logo" src="<?= $BASE_URL ?>assets/img/logo.png">
                    <span><b>Kopi Sufi</b></span>
                </div>
                <div class="col-lg-5 col-xl-4 col-sm-12 ml-auto">
                    <div class="widgets-wrap float-md-right ml-auto">
                        <?php
                        if (isset($_SESSION['userID']) != NULL) { ?>
                            <a href="<?= $CLIENT_URL ?>order/Cart.php" class="widget-header mr-2">
                                <div class="icon">
                                    <i class="icon-sm rounded-circle border fa fa-shopping-cart"></i>
                                    <span class="notify"><?= count($orders) ?></span> 
                                </div>
                            </a>
                        <?php } ?>
                        <div class="widget-header dropdown">
                
                            <?php if (isset($_SESSION['userID']) == NULL) { ?>
                                <a href="<?= $CLIENT_URL ?>auth/signIn.php" class="btn btn-primary text-white btn-sm">
                                    Sign In
                                </a>
                            <?php } else { ?>
                                <a href="#" data-toggle="dropdown" data-offset="20,10" aria-expanded="false">
                                    <div class="icontext">
                                        <div class="icon">
                                            <i class="icon-sm rounded-circle border fa fa-user"></i>
                                        </div>
                                        <div class="text">
                                            <div> <?= $_SESSION['nickName'] ?><i class="fa fa-caret-down"></i> </div>
                                        </div>
                                    </div>
                                </a>
                            <?php } ?>
                            <div class="dropdown-menu dropdown-menu-right" x-placement="bottom-end" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(-108px, 42px, 0px);">
                                <div class="contianer">
                                    <h6 class="dropdown-item"><b>Hai, 
                                        <?= $_SESSION['nickName'] ?></b>
                                    </h6>
                                    <hr class="dropdown-driver" style="margin-top:0!important;margin-bottom:0!important;">
                                    <?php if ($_SESSION['roleID'] == 1) { ?>
                                        <a class="dropdown-item" href="<?= $ADMIN_URL ?>index.php">
                                            Dashboard
                                        </a>
                                    <?php } else { ?>
                                        <a class="dropdown-item" href="<?= $CLIENT_URL ?>profile.php">
                                            Profile
                                        </a>
                                    <?php } ?>
                                        <a class="dropdown-item" href="<?= $CLIENT_URL ?>actions/auth/signOut.php">
                                            Sign Out</i>
                                        </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</header>

<nav class="navbar navbar-main navbar-expand-lg navbar-light border-bottom">
    <div class="container">
        <button class="ml-auto navbar-toggler" type="button" data-toggle="collapse" data-target="#main_nav" aria-controls="main_nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="main_nav">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item ">
                    <a class="nav-link" href="<?= $CLIENT_URL ?>Homepage.php">Home</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="<?= $CLIENT_URL ?>order/index.php">Order</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="<?= $CLIENT_URL ?>AboutUs.php">About Us</a>
                </li>
            </ul>
        </div>
    </div>
</nav>