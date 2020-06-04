<!-- Header -->
<?php include_once ('header.php') ?>
<!-- Sidebar -->
<?php include_once ('sidebar.php') ?>
<!-- Phpexcel -->
<?php 
require_once "../vendor/autoload.php"; 
require_once "../vendor/phpoffice/phpexcel/Classes/PHPExcel.php"; 
require_once "../vendor/phpoffice/phpexcel/Classes/PHPExcel/IOFactory.php"; 

?>

<!-- Content Wrapper. Contains page content -->
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
          <h3 class="card-title">Import Barang</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form class="form-horizontal" action="importTambah.php" method="post" enctype="multipart/form-data">
          <div class="card-body">            
            <!-- Nama Barang -->
            <div class="form-group row">
              <label class="col-sm-4 col-form-label">Import Barang</label>
              <div class="col-sm-6">
                <input type="file" name="file" class="form-control" required>
              </div>
            </div>
            <div class="ln_solid"></div>
            <!-- Button -->
            <div class="form-group">
              <div class="col-md-4 mx-auto">
                <input class="btn btn-success mr-4" type="submit" name="import" value="Import">
                <a class="btn btn-warning" href="barangData.php">Batal</a>
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

<!-- Simpan Data -->
