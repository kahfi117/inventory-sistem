<?php include_once ('header.php') ?>

<body class="hold-transition sidebar-mini layout-fixed" onload="setInterval('reloadwaktu()');">
  <div class="wrapper">
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="index.php" class="nav-link">Home</a>
        </li>
      </ul>

      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
            <i class="fas fa-th-large"></i>
          </a>
        </li>
      </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="index.php" class="brand-link">
        <img src="../dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
          style="opacity: 0.8;" />
        <span class="brand-text font-weight-light">Administrator</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Tampilkan Waktu -->
        <div class="user-panel mt-1 pb-1 mb-1 d-flex">
          <div class="info">
            <p class="d-block text-white" id="getWaktu"></p>
          </div>
        </div>
        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
            <li class="nav-item">
              <a href="index.php" class="nav-link nav-active">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                  Dashboard
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="barangData.php" class="nav-link nav-active">
                <i class="nav-icon fas fa-cubes"></i>
                <p>
                  Data Barang
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="supplierData.php" class="nav-link nav-active">
                <i class="nav-icon fas fa-building"></i>
                <p>
                  Data Supplier
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="masukData.php" class="nav-link nav-active">
                <i class="nav-icon fas fa-sign-in-alt"></i>
                <p>
                  Data Barang Masuk
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="keluarData.php" class="nav-link nav-active">
                <i class="nav-icon fas fa-sign-out-alt"></i>
                <p>
                  Data Barang Keluar
                </p>
              </a>
            </li>
            <li class="nav-item has-treeview">
              <a href="#" class="nav-link nav-active">
                <i class="nav-icon fas fa-truck"></i>
                <p>
                  Transaksi
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="transaksiMasuk.php" class="nav-link nav-active">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Barang Masuk</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="transaksiKeluar.php" class="nav-link nav-active">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Barang Keluar</p>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item">
              <a href="riwayatTransaksi.php" class="nav-link nav-active">
                <i class="nav-icon fas fa-building"></i>
                <p>
                  Riwayat Pembelian
                </p>
              </a>
            </li>
            <li class="nav-item has-treeview">
              <a href="#" class="nav-link nav-active">
                <i class="nav-icon fas fa-file-pdf"></i>
                <p>
                  Laporan
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="lapDataBarang.php" class="nav-link nav-active">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Data Barang</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="lapDataSupp.php" class="nav-link nav-active">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Data Supplier</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="lapDataMasuk.php" class="nav-link nav-active">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Data Barang Masuk</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="lapDataKeluar.php" class="nav-link nav-active">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Data Barang Keluar</p>
                  </a>
                </li>
              </ul>
            </li>
          </ul>
        </nav>
      </div>
    </aside>