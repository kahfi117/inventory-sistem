<!-- Header -->
<?php include_once ('header.php') ?>
<!-- Sidebar -->
<?php include_once ('sidebar.php') ?>

<?php
$kdbar = $_GET['kd_barang'];
$sql   = "SELECT * FROM tbl_barang WHERE kd_barang = '$kdbar'";
$query = $mysqli->query($sql);
$row   = $query->fetch_array(MYSQLI_ASSOC);
?>

<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Data Barang</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Data Barang</li>
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
          <h3 class="card-title">Detail Barang</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form class="form-horizontal" action="" method="post">
          <div class="card-body">
            <!-- Kode Barang -->
            <div class="form-group row">
              <label class="col-sm-4 col-form-label">Kode Barang</label>
              <div class="col-sm-6">
                <input class="form-control" type="text" value="<?php echo $row['kd_barang']; ?>" readonly>
              </div>
            </div>
            <!-- Nama Barang -->
            <div class="form-group row">
              <label class="col-sm-4 col-form-label">Nama Barang</label>
              <div class="col-sm-6">
                <input type="text" class="form-control" value="<?php echo $row['nama']; ?>" readonly>
              </div>
            </div>
            <!-- Jumlah Barang -->
            <div class="form-group row">
              <label class="col-sm-4 col-form-label">Jumlah Barang</label>
              <div class="col-sm-6">
                <input type="number" class="form-control" value="<?php echo $row['jumlah']; ?>" readonly>
              </div>
            </div>
            <!-- Satuan Barang -->
            <div class="form-group row">
              <label for="" class="col-sm-4 col-form-label">Satuan</label>
              <div class="col-sm-6">
                <input type="text" class="form-control" value="<?php echo $row['satuan']; ?>" readonly>
              </div>
            </div>
            <!-- Stock Awal -->
            <div class="form-group row">
              <label class="col-sm-4 col-form-label">Stock Awal</label>
              <div class="col-sm-6">
                <input type="number" class="form-control" value="<?php echo $row['stock_awal']; ?>" readonly>
              </div>
            </div>
            <!-- Stok Terjual -->
            <div class="form-group row">
              <label class="col-sm-4 col-form-label">Stock Terjual</label>
              <div class="col-sm-6">
                <input type="number" class="form-control" value="<?php echo $row['stock_terjual']; ?>" readonly>
              </div>
            </div>
            <!-- Keterangan Barang -->
            <div class="form-group row">
              <label for="" class="col-sm-4 col-form-label">Keterangan Barang</label>
              <div class="col-sm-6">
                <input type="text" class="form-control" value=<?= $row['keterangan']; ?> readonly>
              </div>
            </div>
            <div class="ln_solid"></div>
            <div class="form-group">
              <div class="col-md-12 text-center">
                <a class="btn btn-primary" href="barangData.php">Kembali</a>
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