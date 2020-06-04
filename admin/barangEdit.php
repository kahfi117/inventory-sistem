<!-- Header -->
<?php include_once ('header.php') ?>
<!-- Sidebar -->
<?php include_once ('sidebar.php') ?>

<?php
$kdbar = $_GET['kd_barang'];
//$kodebarang = explode("-",$kdbar);
$sql   = "SELECT * FROM tbl_barang WHERE kd_barang = '$kdbar'";
$query = $mysqli->query($sql);
while ($row = $query->fetch_array(MYSQLI_NUM)) {
  $nma      = $row[2];
  $jmlh     = $row[3];
  $stuan    = $row[4];
  $ktrgn    = $row[5];
  $stockaw  = $row[6];
  $stockter = $row[7];
}
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
          <h3 class="card-title">Edit Barang</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form class="form-horizontal" action="" method="post">
          <div class="card-body">
            <!-- Kode Barang -->
            <div class="form-group row">
              <label class="col-sm-4 col-form-label">Kode Barang</label>
              <div class="col-sm-6">
                <input class="form-control" type="text" name="kdbar" value=<?= $kdbar; ?> readonly>
              </div>
            </div>
            <!-- Nama Barang -->
            <div class="form-group row">
              <label class="col-sm-4 col-form-label">Nama Barang</label>
              <div class="col-sm-6">
                <input type="text" name="namabar" class="form-control" value=<?php echo "\"$nma\""; ?> required>
              </div>
            </div>
            <!-- Jumlah Barang -->
            <div class="form-group row">
              <label class="col-sm-4 col-form-label">Jumlah Barang</label>
              <div class="col-sm-6">
                <input type="number" name="jmlbar" class="form-control" value="0" value=<?= $jmlh; ?> readonly required>
              </div>
            </div>
            <!-- Satuan Barang -->
            <div class="form-group row">
              <label for="" class="col-sm-4 col-form-label">Satuan</label>
              <div class="col-sm-6">
                <select class="form-control" name="satuanbar" required>
                  <option><?= $stuan; ?></option>
                  <option>- Satuan -</option>
                  <option value="set">set</option>
                  <option value="pc">pc</option>
                  <option value="pcs">pcs</option>
                </select>
              </div>
            </div>
            <!-- Stock Awal -->
            <div class="form-group row">
              <label class="col-sm-4 col-form-label">Stock Awal</label>
              <div class="col-sm-6">
                <input type="number" class="form-control" name="stawal" value=<?= $stockaw; ?> readonly required>
              </div>
            </div>
            <!-- Stok Terjual -->
            <div class="form-group row">
              <label class="col-sm-4 col-form-label">Stock Terjual</label>
              <div class="col-sm-6">
                <input type="number" class="form-control" name="stjual" value=<?= $stockter; ?> readonly required>
              </div>
            </div>
            <!-- Keterangan Barang -->
            <div class="form-group row">
              <label for="" class="col-sm-4 col-form-label">Keterangan Barang</label>
              <div class="col-sm-6">
                <input type="text" class="form-control" name="ketbar" value=<?= "\"$ktrgn\""; ?> required>
              </div>
            </div>
            <div class="ln_solid"></div>
            <!-- Button -->
            <div class="form-group">
              <div class="col-md-4 mx-auto">
                <input class="btn btn-success mr-4" type="submit" name="ubah" value="Ubah">
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
<?php
// untuk koneksi
include_once ('../db/koneksi.php');

// untuk proses input
if (isset($_POST['ubah'])) {
  $kdbar  = $_POST['kdbar'];
  $nma    = $_POST['namabar'];
  $jmlh   = $_POST['jmlbar'];
 
  $stuan  = $_POST['satuanbar'];
  $ktrgn  = $_POST['ketbar'];
  $stoaw  = $_POST['stawal'];
  $stoter = $_POST['stjual'];

  $query  = "UPDATE tbl_barang SET nama = '$nma', jumlah = '$jmlh',
             satuan = '$stuan', keterangan = '$ktrgn', stock_awal = '$stoaw', stock_terjual = '$stoter' WHERE kd_barang = '$kdbar'";
  $result = $mysqli->query($query);
  if ($result) {
    echo "<script>
            window.location=(href='barangData.php')
          </script>";
  } else {
    echo "<script>
             window.alert('Tidak Dapat Mengubah Data !');
             window.location=(href='barangData.php')
           </script>";
  }
}
?>