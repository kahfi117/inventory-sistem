<!-- Header -->
<?php include_once ('header.php') ?>
<!-- Sidebar -->
<?php include_once ('sidebar.php') ?>
<!-- Pemberian Kode Otomatis -->
<?php
$detail = $_GET['detail_id'];
$sql    = "SELECT * FROM tbl_tm_supplier INNER JOIN tbl_tm_barang ON tbl_tm_supplier.id_transaksi = tbl_tm_barang.id_transaksi WHERE tbl_tm_barang.detail_id = '$detail'";
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
          <h1>Barang Masuk</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Barang Masuk</li>
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
          <h3 class="card-title">Detail Barang Masuk</h3>
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
                <input class="form-control" type="text" value="<?php echo $row['namasup']; ?>" readonly>
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
            <!-- Jumlah Barang Masuk -->
            <div class="form-group row">
              <label class="col-sm-4 col-form-label">Jumlah Barang Masuk</label>
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