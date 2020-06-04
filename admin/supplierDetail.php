<!-- Header -->
<?php include_once ('header.php') ?>
<!-- Sidebar -->
<?php include_once ('sidebar.php') ?>
<!-- Pemberian Kode Otomatis -->
<?php
$idsup = $_GET['id_supplier'];
$sql   = "SELECT * FROM tbl_supplier WHERE id_supplier = '$idsup'";
$query = $mysqli->query($sql);
$row   = $query->fetch_array(MYSQLI_ASSOC);
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
          <h3 class="card-title">Detail Supplier</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form class="form-horizontal" action="" method="post">
          <div class="card-body">
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
              <div class="input-group mb-3 col-sm-6">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fas fa-user"></i></span>
                </div>
                <input type="text" class="form-control" value="<?php echo $row['nama']; ?>" readonly>
              </div>
            </div>
            <!-- No.Hp / Telepon -->
            <div class="form-group row">
              <label class="col-sm-4 col-form-label">No.Hp / Telepon</label>
              <div class="input-group mb-3 col-sm-6">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fas fa-phone"></i></span>
                </div>
                <input type="text" class="form-control" value="<?php echo $row['nomor']; ?>" readonly>
              </div>
            </div>
            <!-- Fax -->
            <div class="form-group row">
              <label for="" class="col-sm-4 col-form-label">Fax</label>
              <div class="input-group mb-3 col-sm-6">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fas fa-fax"></i></span>
                </div>
                <input type="text" class="form-control" value="<?php echo $row['fax']; ?>" readonly>
              </div>
            </div>
            <!-- Email -->
            <div class="form-group row">
              <label class="col-sm-4 col-form-label">Email</label>
              <div class="input-group mb-3 col-sm-6">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                </div>
                <input type="email" class="form-control" value="<?php echo $row['email']; ?>" readonly>
              </div>
            </div>
            <!-- Alamat -->
            <div class="form-group row">
              <label for="" class="col-sm-4 col-form-label">Alamat</label>
              <div class="col-sm-6">
                <textarea type="text" class="form-control" name="inpalmt" rows="8" cols="25"
                  required><?php echo $row['alamat']; ?></textarea>
              </div>
            </div>
            <div class="ln_solid"></div>
            <!-- Button -->
            <div class="form-group">
              <div class="col-md-12 text-center">
                <a class="btn btn-primary" href="supplierData.php">Kembali</a>
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
  if (isset($_POST['ubah'])) {
   $idsup  = $_POST['inpid'];
   $nma    = $_POST['inpnma'];
   $nmo    = $_POST['inpnmo'];
   $fax    = $_POST['inpfax'];
   $email  = $_POST['inpemail'];
   $alamat = $_POST['inpalmt'];

   $query  = "UPDATE tbl_supplier SET nama = '$nma', nomor = '$nmo', fax = '$fax', email = '$email', alamat = '$alamat'
              WHERE id_supplier = '$idsup'";
   $result = $mysqli->query($query);

   if ($result) {
     echo "<script>
            window.location=(href='supplierData.php')
          </script>";
   } else {
     echo "<script>
             window.alert('Tidak Dapat Mengubah Data !');
             window.location=(href='supplierData.php')
           </script>";
   }

 }

 ?>