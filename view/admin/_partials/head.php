<?php
session_start();
$web = "http://localhost/coffee-shop/view/";
$adm = "http://localhost/coffee-shop/view/admin/";
if($_SESSION['role'] != 1){
    header("location:$web?pesan=menutidakditemukan");
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?= $title ?></title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= $adm ?>assets/plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bbootstrap 4 -->
    <link rel="stylesheet" href="<?= $adm ?>assets/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="<?= $adm ?>assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="<?= $adm ?>assets/plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= $adm ?>assets/dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="<?= $adm ?>assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="<?= $adm ?>assets/plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="<?= $adm ?>assets/plugins/summernote/summernote-bs4.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>

<body class="sidebar-mini layout-fixed layout-navbar-fixed">
    <div class="wrapper">

        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
                </li>
            </ul>

            <ul class="navbar-nav ml-auto">
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="<?= $web ?>" class="nav-link text-dark" target="_blank"><i class="fas fa-globe-europe"></i> Lihat Website</a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="../../view/aksi/keluar.php" class="nav-link text-danger keluar" title="Keluar" onclick="return confirm('Anda Yakin Ingin Keluar?')"><i class="fas fa-power-off"></i></a>
                </li>
            </ul>
        </nav>


        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <a class="brand-link text-white d-block">
                <span class="brand-text">Maulana Kurnia</span>
            </a>
            <div class="sidebar">
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column nav-legacy" data-widget="treeview" role="menu" data-accordion="false">
                        <li class="nav-item">
                            <a href="<?= $adm?>" class="nav-link active">
                                <i class="fas fa-home"></i>
                                <p>Dasbor</p>
                            </a>
                        </li>
                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                                <i class="fas fa-users"></i>
                                <p>User <i class="fas fa-angle-left right"></i></p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="<?= $adm?>user/index.php" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Data User</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?= $adm ?>user/tambah.php" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Tambah User</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                                <i class="fas fa-route"></i>
                                <p>Produk <i class="right fas fa-angle-left"></i></p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="<?= $adm?>produk/" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Data Kopi</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?= $adm?>produk/tambah.php" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Tambah Kopi</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="<?= $adm ?>produk/pemesan.php" class="nav-link">
                                <i class="fas fa-bookmark"></i>
                                <p>Pemesanan</p>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>