<!-- Header -->
<?php include_once ('header.php') ?>
<!-- Sidebar -->
<?php include_once ('sidebar.php') ?>

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
          <h3 class="card-title">Tambah Barang</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form class="form-horizontal" action="" method="post">
          <div class="card-body">
            <!-- Kode Barang -->
            <div class="form-group row">
              <label class="col-sm-4 col-form-label">Kode Barang</label>
              <div class="col-sm-2">
                <select class="form-control" name="kodebar">
                  <option value="MGS-">MGS-</option>
                  <option value="MGA-">MGA</option>
                  <option value="MCE-">MCE-</option>
                  <option value="MCO-">MCO-</option>
                  <option value="MGB-">MGB-</option>
                  <option value="MGM-">MGM-</option>
                  <option value="MGG-">MGG-</option>
                </select>
              </div>
              <div class="col-sm-4">
                <input type="text" name="nobar" class="form-control">
              </div>
            </div>
            <!-- Nama Barang -->
            <div class="form-group row">
              <label class="col-sm-4 col-form-label">Nama Barang</label>
              <div class="col-sm-6">
                <input type="text" name="namabar" class="form-control" required>
              </div>
            </div>
            <!-- Jumlah Barang -->
            <div class="form-group row">
              <label class="col-sm-4 col-form-label">Jumlah Barang</label>
              <div class="col-sm-6">
                <input type="number" name="jmlbar" class="form-control" value="0" readonly required>
              </div>
            </div>
            <!-- Satuan Barang -->
            <div class="form-group row">
              <label for="" class="col-sm-4 col-form-label">Satuan</label>
              <div class="col-sm-6">
                <select class="form-control" name="satuanbar" required>
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
                <input type="number" class="form-control" name="stawal" value="0" readonly required>
              </div>
            </div>
            <!-- Stok Terjual -->
            <div class="form-group row">
              <label class="col-sm-4 col-form-label">Stock Terjual</label>
              <div class="col-sm-6">
                <input type="number" class="form-control" name="stjual" value="0" readonly required>
              </div>
            </div>
            <!-- Keterangan Barang -->
            <div class="form-group row">
              <label for="" class="col-sm-4 col-form-label">Keterangan Barang</label>
              <div class="col-sm-6">
                <input type="text" class="form-control" name="ketbar" required>
              </div>
            </div>
            <div class="ln_solid"></div>
            <!-- Button -->
            <div class="form-group">
              <div class="col-md-4 mx-auto">
                <input class="btn btn-success mr-4" type="submit" name="tambah" value="Tambah">
                <a class="btn btn-warning" href="barangData.php">Batal</a>
              </div>
            </div>
          </div>
        </form>
      </div>
      <!-- /.card -->
      <!--Modal konfirmasi menggunakan bootstrap 3.3.7-->
      <div class="modal fade" id="modal-konfirmasihapusbarang" tabindex="-1" role="dialog"
        aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Konfirmasi</h4>
            </div>
            <div class="modal-body">
              Apakah Anda Yakin Ingin Menghapus Data Barang Ini ?
            </div>
            <div class="modal-footer">
              <a href="javascript:;" id="hapus-data-barang" class="btn btn-danger">Hapus</a>
              <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
<!-- Footer -->
<?php include_once ('footer.php') ?>

<!-- Simpan Data -->
<?php
if (isset($_POST['tambah'])) {
  $kdbar  = $_POST['kodebar'].$_POST['nobar'];
  $nma    = $_POST['namabar'];
  $jmlh   = $_POST['jmlbar'];
  $stuan  = $_POST['satuanbar'];
  $ktrgn  = $_POST['ketbar'];
  $stoaw  = $_POST['stawal'];
  $stoter = $_POST['stjual'];

  $sql     = "SELECT * FROM tbl_barang WHERE kd_barang = '$kdbar'";
  $q_kdbar = $mysqli->query($sql);

  if ($row = $q_kdbar->fetch_row()) {
    echo "<script>
            window.alert('Barang Dengan Kode = ".$kdbar." Sudah Ada !');
            window.location=(href='barangData.php')
          </script>";
  } else {
    $query  = "INSERT INTO tbl_barang (kd_barang, nama, jumlah, satuan, keterangan, stock_awal, stock_terjual)
               VALUES ('$kdbar', '$nma', '$jmlh', '$stuan', '$ktrgn', '$stoaw', '$stoter')";
    $result = $mysqli->query($query);

    echo "<script>
            window.location=(href='barangData.php')
          </script>";
  }
}
 ?>