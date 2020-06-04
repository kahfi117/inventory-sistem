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
                  <th>No</th>
                  <th>ID Transaksi</th>
                  <th>Nama Supplier</th>
                  <th>Nama Barang</th>
                  <th>Jumlah Barang Masuk</th>
                  <th>Waktu</th>
                  <th>Aksi</th>
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
                  <td align="center">
                    <a class="btn btn-success" href="masukDetail.php?detail_id=<?php echo $row['detail_id'] ?>"><i
                        class="fa fa-folder-open"></i> </a>
                    <a class="btn btn-danger" href="javascript:;" data-id="<?php echo $row['detail_id'] ?>"
                      data-toggle="modal" data-target="#modal-konfirmasihapusbarangmasuk"><i class="fa fa-trash"></i>
                    </a>
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
          <div class="modal fade" id="modal-konfirmasihapusbarangmasuk" tabindex="-1" role="dialog"
            aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h4 class="modal-title">Konfirmasi</h4>
                </div>
                <div class="modal-body">
                  Apakah Anda Yakin Ingin Menghapus Transaksi Barang Masuk Ini ?
                </div>
                <div class="modal-footer">
                  <a href="javascript:;" id="hapus-data-barangmasuk" class="btn btn-danger">Hapus</a>
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

  $('#modal-konfirmasihapusbarangmasuk').on('show.bs.modal',
    function(event) {
      var div = $(event.relatedTarget)
      var id = div.data('id')
      var modal = $(this);
      modal.find('#hapus-data-barangmasuk').attr("href", "masukHapus.php?detail_id=" + id);
    })
});
</script>