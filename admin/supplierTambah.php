<!-- Header -->
<?php include_once ('header.php') ?>
<!-- Sidebar -->
<?php include_once ('sidebar.php') ?>
<!-- Pemberian Kode Otomatis -->
<?php
$sql    = "SELECT id_supplier FROM tbl_supplier";
$carkod = $mysqli->query($sql);
$datkod = $carkod->fetch_array(MYSQLI_ASSOC);
$jumdat = $carkod->num_rows;

if ($datkod) {
  $nilkod  = substr($jumdat[0], 1);
  $kode    = (int) $nilkod;
  $kode    = $jumdat + 1;
  $kodeoto = "IDSUP-".str_pad($kode, 4, "0", STR_PAD_LEFT);
} else {
  $kodeoto = "IDSUP-0001";
}

 ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Data Supplier</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Data Supplier</li>
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
          <h3 class="card-title">Tambah Supplier</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form class="form-horizontal" action="" method="post">
          <div class="card-body">
            <!-- ID Supplier -->
            <div class="form-group row">
              <label class="col-sm-4 col-form-label">ID Supplier</label>
              <div class="col-sm-6">
                <input class="form-control" type="text" name="inpid" value="<?php echo $kodeoto; ?>" readonly>
              </div>
            </div>
            <!-- Nama Supplier -->
            <div class="form-group row">
              <label class="col-sm-4 col-form-label">Nama Supplier</label>
              <div class="input-group mb-3 col-sm-6">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fas fa-user"></i></span>
                </div>
                <input type="text" class="form-control" name="inpnma" required>
              </div>
            </div>
            <!-- No.Hp / Telepon -->
            <div class="form-group row">
              <label class="col-sm-4 col-form-label">No.Hp / Telepon</label>
              <div class="input-group mb-3 col-sm-6">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fas fa-phone"></i></span>
                </div>
                <input type="text" class="form-control" name="inpnmo" required>
              </div>
            </div>
            <!-- Fax -->
            <div class="form-group row">
              <label for="" class="col-sm-4 col-form-label">Fax</label>
              <div class="input-group mb-3 col-sm-6">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fas fa-fax"></i></span>
                </div>
                <input type="text" class="form-control" name="inpfax" required>
              </div>
            </div>
            <!-- Email -->
            <div class="form-group row">
              <label class="col-sm-4 col-form-label">Email</label>
              <div class="input-group mb-3 col-sm-6">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                </div>
                <input type="email" class="form-control" name="inpemail" required>
              </div>
            </div>
            <!-- Alamat -->
            <div class="form-group row">
              <label for="" class="col-sm-4 col-form-label">Alamat</label>
              <div class="col-sm-6">
                <textarea type="text" class="form-control" name="inpalmt" rows="8" cols="25" required></textarea>
              </div>
            </div>
            <div class="ln_solid"></div>
            <!-- Button -->
            <div class="form-group">
              <div class="col-md-4 mx-auto">
                <input class="btn btn-success mr-4" type="submit" name="tambah" value="Tambah">
                <a class="btn btn-warning" href="supplierData.php">Batal</a>
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
<?php
 // proses tambah data
 if (isset($_POST['tambah'])) {
   $idsup  = $_POST['inpid'];
   $nma    = $_POST['inpnma'];
   $nmo    = $_POST['inpnmo'];
   $fax    = $_POST['inpfax'];
   $email  = $_POST['inpemail'];
   $alamat = $_POST['inpalmt'];

   $sql     = "SELECT * FROM tbl_supplier WHERE id_supplier = '$idsup'";
   $q_idsup = $mysqli->query($sql);

   if ($row = $q_idsup->fetch_row()) {
     echo "<script>
             window.alert('Data Supplier Dengan ID = ".$idsup." Sudah Ada !');
             window.location=(href='supplierTambah.php')
           </script>";
   } else {
     $query  = "INSERT INTO tbl_supplier (id_supplier, nama, nomor, fax, email, alamat)
                VALUES ('$idsup', '$nma', '$nmo', '$fax', '$email', '$alamat')";
     $result = $mysqli->query($query);

     echo "<script>
             window.location=(href='supplierData.php')
           </script>";
   }
 }
 ?>