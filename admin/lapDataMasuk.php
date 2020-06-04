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
          <h1>Barang Masuk</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Barang Masuk</li>
          </ol>
        </div>
      </div>
      <a href="../laporan/cetakDataMasuk.php" class="btn btn-block btn-success col-sm-2 mt-3 mb-2" name="cetak" type="submit">Cetak Semua</a>
      <div class="row">
        <div class="col-md-2">
          <form action="../laporan/cetakDataMasuk.php" method="post" target="_blank">
            <div class="form-group">
              <label>Dari Tanggal</label>
              <input type="date" class="form-control" name="tgl_a">
            </div>
            <div class="form-group">
              <label>Sampai Tanggal</label>
              <input type="date" class="form-control" name="tgl_b">
            </div>
             <input class="btn btn-primary" type="submit" name="cetak" value="Cetak">
          </form>
        </div>
      </div>
    </div>
    <!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">

    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">DataTable</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <table class="table table-bordered table-striped" style="width: 100%;">
              <thead>
                <tr>
                  <th>No</th>
                  <th>ID Transaksi</th>
                  <th>Nama Supplier</th>
                  <th>Nama Barang</th>
                  <th>Jumlah Barang Masuk</th>
                  <th>Waktu</th>
                </tr>
              </thead>
              <tbody>
                <?php
                // untuk koneksi
                include_once ('../db/koneksi.php');

                $sql    = "SELECT * FROM tbl_tm_supplier INNER JOIN tbl_tm_barang ON tbl_tm_supplier.id_transaksi = tbl_tm_barang.id_transaksi";
                $result = $mysqli->query($sql);

                $no = 1;
                while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
                  ?>
                <tr>
                  <td><?php echo $no ?></td>
                  <td><?php echo $row['id_transaksi']; ?></td>
                  <td><?php echo $row['namasup']; ?></td>
                  <td><?php echo $row['namabar']; ?></td>
                  <td align="center"><?php echo $row['jumlah']; ?></td>
                  <td><?php echo $row['waktu']; ?></td>
                </tr>
                <?php
                  $no++;
                }
                ?>
              </tbody>
              <tfoot>

              </tfoot>
            </table>
          </div>
          <!-- /.card-body -->
        </div>
      </div>
    </div>
  </section>
</div>

<!-- Footer -->
<?php include_once ('footer.php') ?>
