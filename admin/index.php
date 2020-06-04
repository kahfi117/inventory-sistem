<!-- Header -->
<?php include_once ('header.php') ?>
<!-- Sidebar -->
<?php include_once ('sidebar.php') ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Dashboard</h1>
        </div>
        <!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Dashboard</li>
          </ol>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <?php
                  $sql    = "SELECT * FROM tbl_barang";
                  $carkod = $mysqli->query($sql);
                  $jumdat = $carkod->num_rows;
                ?>
          <div class="small-box bg-info">
            <div class="inner">
              <h3><?php echo $jumdat; ?></h3>

              <p>Data Barang</p>
            </div>
            <div class="icon">
              <i class="fas fa-cubes"></i>
            </div>
            <a href="barangData.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
          <?php
            $sql    = "SELECT * FROM tbl_supplier";
            $carkod = $mysqli->query($sql);
            $jumdat = $carkod->num_rows;
          ?>
          <!-- small box -->
          <div class="small-box bg-success">
            <div class="inner">
              <h3><?php echo $jumdat; ?><sup style="font-size: 20px;"></sup></h3>
              <p>Data Supplier</p>
            </div>
            <div class="icon">
              <i class="fas fa-building"></i>
            </div>
            <a href="supplierData.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
          <?php
            $sql    = "SELECT * FROM tbl_tm_barang";
            $carkod = $mysqli->query($sql);
            $jumdat = $carkod->num_rows;
          ?>
          <!-- small box -->
          <div class="small-box bg-warning">
            <div class="inner">
              <h3><?php echo $jumdat; ?></h3>

              <p>Transaksi Barang Masuk</p>
            </div>
            <div class="icon">
              <i class="fas fa-sign-in-alt"></i>
            </div>
            <a href="masukData.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
          <?php
            $sql    = "SELECT * FROM tbl_tk_barang";
            $carkod = $mysqli->query($sql);
            $jumdat = $carkod->num_rows;
          ?>
          <!-- small box -->
          <div class="small-box bg-danger">
            <div class="inner">
              <h3><?php echo $jumdat; ?></h3>

              <p>Transaksi Barang Keluar</p>
            </div>
            <div class="icon">
              <i class="fas fa-sign-out-alt"></i>
            </div>
            <a href="keluarData.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>

<!-- Footer -->
<?php include_once ('footer.php') ?>