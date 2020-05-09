<?php
session_start();
?>
<!DOCTYPE HTML>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="pragma" content="no-cache" />
    <meta http-equiv="cache-control" content="max-age=604800" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Coffe Shop - <?= $title ?></title>

    <!-- <link href="../assets/images/favicon.ico" rel="shortcut icon" type="image/x-icon"> -->

    <!-- jQuery -->
    <script src="../assets/js/jquery-2.0.0.min.js" type="text/javascript"></script>

    <!-- Bootstrap4 files-->
    <script src="../assets/js/bootstrap.bundle.min.js" type="text/javascript"></script>
    <link href="../assets/css/bootstrap_3.css" rel="stylesheet" type="text/css" />
    <link href="../assets/css/style.css" rel="stylesheet" type="text/css" />

    <!-- Font awesome 5 -->
    <link href="../assets/fonts/fontawesome/css/all.min.css" type="text/css" rel="stylesheet">

    <!-- custom style -->
    <link href="../assets/css/ui_3.css" rel="stylesheet" type="text/css" />
    <link href="../assets/css/responsive_3.css" rel="stylesheet" media="only screen and (max-width: 1200px)" />

    <!-- custom javascript -->
    <script src="../assets/js/script.js" type="text/javascript"></script>
    <?php 
      if($title == 'Data Kopi'){
      $jmlh = (isset ($_GET["jmlh"]));
    ?>

      <script>
        function TampilJml(str) {
            if (str == "") {
                document.getElementById("Jmlh").innerHTML = "";
                return;
            } else {
                if (window.XMLHttpRequest) {
                    // code for IE7+, Firefox, Chrome, Opera, Safari
                    xmlhttp = new XMLHttpRequest();
                } else {
                    // code for IE6, IE5
                    xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
                }
                xmlhttp.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                        container.innerHTML = xmlhttp.responseText;
                    }
                };
                xmlhttp.open("GET","../view/dummy.php?id="+str,true);
                xmlhttp.send();
            }
        }
      </script>
    <?php
    }
    ?>
</head>

<body>

    <header class="section-header">
        <section class="header-main border-bottom">
            <div class="container">
                <div class="row align-items-center">
                    <div class="brand-wrap">
                        <img class="logo" src="../assets/images/logo.png">
                        <span><b>Kopi Sufi</b></span>
                    </div>
                    <div class="col-lg-5 col-xl-4 col-sm-12 ml-auto">
                        <div class="widgets-wrap float-md-right ml-auto">
                            <?php
                            if (isset($_SESSION['id']) != NULL) { ?>
                                <a href="keranjang.php" class="widget-header mr-2">
                                    <div class="icon">
                                        <i class="icon-sm rounded-circle border fa fa-shopping-cart"></i>
                                        <span class="notify">0</span>
                                    </div>
                                </a>
                            <?php } ?>
                            <div class="widget-header dropdown">
                                <a href="#" data-toggle="dropdown" data-offset="20,10" aria-expanded="false">
                                    <div class="icontext">
                                        <div class="icon">
                                            <i class="icon-sm rounded-circle border fa fa-user"></i>
                                        </div>
                                        <div class="text">
                                            <?php
                                            if (isset($_SESSION['id']) == NULL) { ?>
                                                <div>Masuk | Daftar <i class="fa fa-caret-down"></i> </div>
                                            <?php } else {
                                            ?>
                                                <div> <?= $_SESSION['nama'] ?><i class="fa fa-caret-down"></i> </div>
                                            <?php
                                            }
                                            ?>
                                        </div>
                                    </div>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" x-placement="bottom-end" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(-108px, 42px, 0px);">
                                    <?php
                                    if (isset($_SESSION['id']) == NULL) {
                                    ?>
                                        <form class="px-4 py-3" action="../view/aksi/prosesmasuk.php" method="post">
                                            <div class="form-group">
                                                <label>Email</label>
                                                <input name="email" type="email" class="form-control" placeholder="">
                                            </div>
                                            <div class="form-group">
                                                <label>Kata Sandi</label>
                                                <input name="sandi" type="password" class="form-control" placeholder="">
                                            </div>
                                            <button type="submit" class="btn btn-primary btn-block">Masuk</button>
                                        </form>
                                        <hr class="dropdown-divider">
                                        <a class="dropdown-item" href="daftar.php">Belum memiliki akun? Daftar</a>
                                        <a class="dropdown-item" href="lupasandi.php">Lupa Sandi?</a>
                                    <?php
                                    } else {
                                    ?>
                                        <div class="contianer">
                                            <h6 class="dropdown-item"><b>Hai, <?= $_SESSION['nama'] ?></b></h6>
                                            <hr class="dropdown-driver">
                                            <?php if ($_SESSION['role'] == 1) { ?>
                                                <a class="dropdown-item" href="../view/admin/index.php"><i class="fas fa-tachometer-alt"></i> Dasbor</a>
                                                <a class="dropdown-item" href="../view/aksi/keluar.php"><i class="text-danger fas fa-sign-out-alt"> Keluar</i></a>
                                            <?php } else { ?>
                                                <a class="dropdown-item" href="../view/profil.php"><i class="fa fa-user"></i> Profil</a>
                                                <a class="dropdown-item" href="../view/aksi/keluar.php"><i class="text-danger fas fa-sign-out-alt"> Keluar</i></a>
                                            <?php } ?>
                                        </div>
                                    <?php
                                    }
                                    ?>
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
                        <a class="nav-link" href="index.php">Beranda</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="kopi.php">Kopi Kedai</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="tentang.php">Tentang Kami</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>