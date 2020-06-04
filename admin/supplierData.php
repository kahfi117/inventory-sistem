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
          <h1>Data Supplier</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Data Supplier</li>
          </ol>
        </div>
        <a href="supplierTambah.php" class="btn btn-block btn-primary col-sm-2 mt-3">Tambah Supplier</a>
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
                  <th>ID Supplier</th>
                  <th>Nama Supplier</th>
                  <th>No. Hp / Telepon</th>
                  <th>Fax</th>
                  <th>Email</th>
                  <th>Alamat</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
                <?php
                // untuk koneksi
                include_once ('../db/koneksi.php');

                $query  = "SELECT * FROM tbl_supplier";
                $result = $mysqli->query($query);

                $no = 1;
                while ($row = $result->fetch_array(MYSQLI_ASSOC)) {

                  ?>
                <tr>
                  <td><?php echo $no ?></td>
                  <td><?php echo $row['id_supplier']; ?></td>
                  <td><?php echo $row['nama']; ?></td>
                  <td><?php echo $row['nomor']; ?></td>
                  <td><?php echo $row['fax']; ?></td>
                  <td><?php echo $row['email']; ?></td>
                  <td><?php echo $row['alamat']; ?></td>
                  <td align="center">
                    <a class="btn btn-success"
                      href="supplierDetail.php?id_supplier=<?php echo $row['id_supplier'] ?>"><i
                        class="fa fa-folder-open"></i> </a>
                    <a class="btn btn-primary" href="supplierEdit.php?id_supplier=<?php echo $row['id_supplier'] ?>"><i
                        class="fa fa-edit"></i> </a>
                    <a class="btn btn-danger" href="javascript:;" data-id="<?php echo $row['id_supplier'] ?>"
                      data-toggle="modal" data-target="#modal-konfirmasihapussupplier"><i class="fa fa-trash"></i>
                    </a>
                  </td>
                </tr>
                <?php
                $no++;
                }
                ?>
              </tbody>
            </table>
          </div>
          <!-- /.card-body -->
          <!--Modal konfirmasi menggunakan bootstrap 3.3.7-->
          <div class="modal fade" id="modal-konfirmasihapussupplier" tabindex="-1" role="dialog"
            aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h4 class="modal-title">Konfirmasi</h4>
                </div>
                <div class="modal-body">
                  Apakah Anda Yakin Ingin Menghapus Data Supplier Ini ?
                </div>
                <div class="modal-footer">
                  <a href="javascript:;" id="hapus-data-supplier" class="btn btn-danger">Hapus</a>
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

  $('#modal-konfirmasihapussupplier').on('show.bs.modal',
    function(event) {
      var div = $(event.relatedTarget)
      var id = div.data('id')
      var modal = $(this);
      modal.find('#hapus-data-supplier').attr("href", "supplierHapus.php?id_supplier=" + id);
    })
});
</script>