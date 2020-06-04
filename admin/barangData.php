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
        <a href="barangTambah.php" class="btn btn-block btn-primary col-sm-2 mt-3 mr-2 btn-utama">Tambah Barang</a>
        <a href="import.php" class="btn btn-block btn-info col-sm-2 mt-3 btn-utama">Import Barang</a>
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
            <table id="example1" class="table table-bordered table-striped" style="width: 100%;">
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
                  <th>Aksi</th>
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
                  <td align="center">
                    <a class="btn btn-success" href="barangDetail.php?kd_barang=<?php echo $row['kd_barang'] ?>"><i
                        class="fa fa-folder-open"></i> </a>
                    <a class="btn btn-primary" href="barangEdit.php?kd_barang=<?php echo $row['kd_barang'] ?>"><i
                        class="fa fa-edit"></i> </a>
                    <a class="btn btn-danger" href="javascript:;" data-id="<?php echo $row['kd_barang'] ?>"
                      data-toggle="modal" data-target="#modal-konfirmasihapusbarang"><i class="fa fa-trash"></i> </a>
                  </td>
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
      </div>
    </div>
  </section>
</div>

<!-- Footer -->
<?php include_once ('footer.php') ?>

<script>
$(document).ready(function() {
  $("#example1").DataTable();

  $('#modal-konfirmasihapusbarang').on('show.bs.modal',
    function(event) {
      var div = $(event.relatedTarget)
      var id = div.data('id')
      var modal = $(this);
      modal.find('#hapus-data-barang').attr("href", "barangHapus.php?kd_barang=" + id);
    })

});
</script>