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
            <li class="breadcrumb-item active">Laporan Data Barang</li>
          </ol>
        </div>
        <a href="../laporan/cetakDataBarang.php" class="btn btn-block btn-primary col-sm-2 mt-3">Cetak</a>
      </div>
    </div><!-- /.container-fluid -->
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
                  <th>No.</th>
                  <th>Kode Barang</th>
                  <th>Nama Barang</th>
                  <th>Jumlah Barang</th>
                  <th>Satuan</th>
                  <th>Stock Awal</th>
                  <th>Stock Terjual</th>
                  <th>Keterangan</th>
                </tr>
              </thead>
              <tbody>
                <?php
                // untuk koneksi
                include_once ('../db/koneksi.php');

                $query  = "SELECT * FROM tbl_barang";
                $result = $mysqli->query($query);

                $no = 1;
                while ($row = $result->fetch_array(MYSQLI_ASSOC)) {

                  ?>
                <tr>
                  <td><?php echo $no ?></td>
                  <td><?php echo $row['kd_barang']; ?></td>
                  <td><?php echo $row['nama']; ?></td>
                  <td align="center"><?php echo $row['jumlah']; ?></td>
                  <td><?php echo $row['satuan']; ?></td>
                  <td align="center"><?php echo $row['stock_awal']; ?></td>
                  <td align="center"><?php echo $row['stock_terjual']; ?></td>
                  <td><?php echo $row['keterangan']; ?></td>
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
