<?php 
 
session_start();
 
if (!isset($_SESSION['username'])) {
    header("Location:index.php");
}
 
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin Pesona Kalipetir | Dashboard</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="../../plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="../../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="../../plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="../../plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="../../plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="../../plugins/summernote/summernote-bs4.min.css">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <a href="../logout.php" class="btn btn-danger"  onClick="return confirm('Apakah anda ingin keluar?)"><i class="fas fa-power-off"></i> Logout</a>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <span class="brand-text font-weight-light">Pesona Kalipetir</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="../../dist/img/mah.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Admin</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="../index/index.php" class="nav-link">
              <i class="nav-icon fas fa-home"></i>
              <p>Home</p>
            </a>
          </li>

          <li class="nav-item">
            <a href="../tb_profil/profil.php" class="nav-link">
              <i class="nav-icon fas fa-school"></i>
              <p>Profil Judul Atas</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="../tb_profil2/profil2.php" class="nav-link">
              <i class="nav-icon fa fa-folder"></i>
              <p>Profil Judul Kiri</p>
            </a>
          </li>
           <li class="nav-item">
            <a href="../tb_profil3/profil3.php" class="nav-link">
              <i class="nav-icon fa fa-folder"></i>
              <p>Profil Judul Kanan</p>
            </a>
          </li>
               <li class="nav-item">
            <a href="../tb_fasilitas/fasilitas.php" class="nav-link">
              <i class="nav-icon fa fa-bookmark"></i>
              <p>Fasilitas</p>
            </a>
          </li>
               <li class="nav-item">
            <a href="../tb_prestasi/prestasi.php" class="nav-link">
              <i class="nav-icon fas fa-trophy"></i>
              <p>Prestasi</p>
            </a>
          </li>
               <li class="nav-item">
            <a href="../tb_pelatihan/pelatihan.php" class="nav-link">
              <i class="nav-icon fas fa-walking"></i>
              <p>Pelatihan</p>
            </a>
          </li>
               <li class="nav-item">
            <a href="../tb_galeri/galeri.php" class="nav-link">
              <i class="nav-icon fas fa-mountain"></i>
              <p>Galeri</p>
            </a>
          </li>
            <li class="nav-item">
            <a href="../tb_pesan/pesan.php" class="nav-link">
              <i class="nav-icon fas fa-envelope"></i>
              <p>Pesan</p>
            </a></li>
            <li class="nav-item">
            <a href="../tb_komentar/komentar.php" class="nav-link">
              <i class="nav-icon fa fa-envelope-square"></i>
              <p>Komentar</p>
            </a></li>
            <li class="nav-item">
            <a href="../tb_pengguna/pengguna.php" class="nav-link">
              <i class="nav-icon fa fa-user"></i>
              <p>pengguna</p>
            </a></li>

         
          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>