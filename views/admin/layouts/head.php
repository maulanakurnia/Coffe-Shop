<?php
    session_start();
    $BASE_URL = "http://localhost/new-coffee-shop/";
    $adm = "http://localhost/new-coffee-shop/views/admin/";
    
    include($_SERVER['DOCUMENT_ROOT']."/new-coffee-shop/app/db_connection.php");
    if($_SESSION['roleID'] != 1){
        header("location:$BASE_URL?pesan=menutidakditemukan");
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
                    <a href="<?= $BASE_URL ?>" class="nav-link text-dark" target="_blank"><i class="fas fa-globe-europe"></i> Lihat Website</a>
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
                                <p>Dashboard</p>
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
                                        <p>User Data</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?= $adm ?>user/add.php" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Add User</p>
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
                                    <a href="<?= $adm?>products/" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Product Data</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?= $adm?>products/add.php" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Add Products</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="<?= $adm ?>products/order.php" class="nav-link">
                                <i class="fas fa-bookmark"></i>
                                <p>Orders</p>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>