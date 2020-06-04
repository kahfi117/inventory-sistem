<!-- Header -->
<?php include_once ('header.php') ?>
<!-- Sidebar -->
<?php include_once ('sidebar.php') ?>
<!-- Pemberian Kode Otomatis -->

<?php
$idtrns = $_GET['id_transaksi'];
$sql    = "SELECT * FROM dta_trnsaksi_brng_keluar WHERE id_transaksi = '$idtrns'";
$query  = $mysqli->query($sql);
$row    = $query->fetch_array(MYSQLI_ASSOC);
 ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Barang Keluar</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Barang Keluar</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <!-- SELECT2 EXAMPLE -->
      <div class="card card-info">
        <div class="card-header">
          <h3 class="card-title">Detail Barang Keluar</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form class="form-horizontal" action="" method="post">
          <div class="card-body">
            <!-- ID Transaksi -->
            <div class="form-group row">
              <label class="col-sm-4 col-form-label">ID Transaksi</label>
              <div class="col-sm-6">
                <input class="form-control" type="text" value="<?php echo $row['id_transaksi']; ?>" readonly>
              </div>
            </div>
            <!-- ID Supplier -->
            <div class="form-group row">
              <label class="col-sm-4 col-form-label">ID Supplier</label>
              <div class="col-sm-6">
                <input class="form-control" type="text" value="<?php echo $row['id_supplier']; ?>" readonly>
              </div>
            </div>
            <!-- Nama Supplier -->
            <div class="form-group row">
              <label class="col-sm-4 col-form-label">Nama Supplier</label>
              <div class="col-sm-6">
                <input class="form-control" type="text" value="<?php echo $row['nmasup']; ?>" readonly>
              </div>
            </div>
            <!-- Kode Barang -->
            <div class="form-group row">
              <label for="" class="col-sm-4 col-form-label">Kode Barang</label>
              <div class="col-sm-6">
                <input class="form-control" type="text" value="<?php echo $row['kd_barang']; ?>" readonly>
              </div>
            </div>
            <!-- Nama Barang -->
            <div class="form-group row">
              <label class="col-sm-4 col-form-label">Nama Barang</label>
              <div class="col-sm-6">
                <input class="form-control" type="text" value="<?php echo $row['namabar']; ?>" readonly>
              </div>
            </div>
            <!-- Jumlah Barang Keluar -->
            <div class="form-group row">
              <label class="col-sm-4 col-form-label">Jumlah Barang Keluar</label>
              <div class="col-sm-6">
                <input class="form-control" type="text" value="<?php echo $row['jumlah']; ?>" readonly>
              </div>
            </div>
            <!-- Waktu -->
            <div class="form-group row">
              <label class="col-sm-4 col-form-label">Waktu</label>
              <div class="col-sm-6">
                <input class="form-control" type="text" value="<?php echo $row['waktu']; ?>" readonly>
              </div>
            </div>
            <div class="ln_solid"></div>
            <!-- Button -->
            <div class="form-group">
              <div class="col-md-12 text-center">
                <a class="btn btn-primary" href="masukData.php">Kembali</a>
              </div>
            </div>
          </div>
        </form>
      </div>
      <!-- /.card -->
    </div>
  </section>
</div>
<!-- Footer -->
<?php include_once ('footer.php') ?>