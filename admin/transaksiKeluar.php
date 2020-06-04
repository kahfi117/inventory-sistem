<!-- Header -->
<?php include_once ('header.php') ?>
<!-- Sidebar -->
<?php include_once ('sidebar.php') ?>
<!-- untk pemberian kode otomatis -->

<?php
$sql    = "SELECT id_transaksi FROM tbl_tk_supplier";
$carkod = $mysqli->query($sql);
$datkod = $carkod->fetch_array(MYSQLI_ASSOC);
$jumdat = $carkod->num_rows;

if ($datkod) {
  $nilkod  = substr($jumdat[0], 1);
  $kode    = (int) $nilkod;
  $kode    = $jumdat + 1;
  $kodeoto = "TRSBK-".str_pad($kode, 4, "0", STR_PAD_LEFT);
} else {
  $kodeoto = "TRSBK-0001";
}
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Transaksi Barang Keluar</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Transaksi Barang Keluar</li>
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
          <h3 class="card-title">Tambah Barang Keluar</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form class="form-horizontal" action="transaksiKeluarTambah.php" method="post">
          <div class="card-body">

            <!-- Supplier -->
            <div class="form-group row">
              <label class="col-sm-4 col-form-label">ID Transaksi</label>
              <div class="col-sm-6">
                <input type="text" name="inpidtrans" class="form-control" value="<?php echo $kodeoto; ?>" readonly>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-sm-4 col-form-label">Supplier</label>
              <div class="col-sm-2">
                <select class="form-control" name="inpnmasup" onchange="idsupplier(this.value);" required>
                  <option>- Nama Supplier -</option>
                  <?php
                    // ambil data dari database untuk ID Supplier
                    $sql      = "SELECT * FROM tbl_supplier";
                    $supplier = $mysqli->query($sql);
                    $jsarray  = "var namasup = new Array();";
                    // menampilkan data
                    while ($row = $supplier->fetch_array(MYSQLI_ASSOC)) {
                    ?>
                  <option value="<?php echo $row['nama'] ?>"><?php echo $row['nama']; ?></option>
                  <?php
                    // menampilkan data hasil dipilih
                    $jsarray .= "namasup['".$row['nama']."'] = {idsup: '".addslashes($row['id_supplier'])."'};";
                      }
                    ?>
                </select>
              </div>
              <div class="col-sm-4">
                <input type="text" id="setsupplier" class="form-control" name="inpidsup" placeholder="ID Supplier"
                  readonly>
              </div>
            </div>

            <!-- Barang -->
            <div class="form-group row">
              <label class="col-sm-4 col-form-label">Barang</label>
              <div class="col-sm-6">
                <div class="input-group">
                  <input type="text" class="form-control mr-2 col-sm-3" id="kode_barang" name="kode_barang" placeholder="Kode Barang">
                  <input type="text" id="nama_barang" name="nama_barang" class="form-control col-sm-7" placeholder="Nama Barang">
                  <span class="input-group-btn">
                    <button type="button" class="btn btn-info btn-flat mr-2" data-toggle="modal"
                      data-target="#modal">Browse</button>
                  </span>
                  <input type="text" id="jumlah_barang" name="jumlah_barang" class="form-control col-sm-2" placeholder="Jumlah">
                </div>
              </div>
            </div>
            <center>
              <div class="box-footer">
                <input type="hidden" name="row_id" id="hidden_row_id" />
                <button type="button" name="save" id="save" class="btn btn-info mb-3">Save</button>
              </div>
            </center>

            <!-- Modal Pilih Produk -->
            <div id="modal" class="modal fade" role="dialog">
              <div class="modal-dialog modal-lg">
                <div class="modal-content">
                  <form role="form" id="form-tambah" method="post" action="input.php">
                    <div class="modal-header">
                      <center>
                        <h3 class="modal-title">Pilih Produk</h3>
                      </center>
                    </div>
                    <div class="modal-body">
                      <table class="table table-hover nowrap text-center" id="example" style="width: 100%;">
                        <thead>
                          <tr>
                            <th>No</th>
                            <th>Kode Produk</th>
                            <th width=100px>Nama Produk</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php 
                          $mysqli = new mysqli("localhost","root","","logistik");

                          $query = "SELECT * FROM tbl_barang";
                          $result = $mysqli->query($query);

                          $no = 1;
                          while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
                          ?>

                          <tr id="produk" data-kode="<?= $row['kd_barang']; ?>" data-nama="<?= $row['nama']; ?>">
                            <td><?= $no; ?></td>
                            <td><?= $row['kd_barang']; ?></td>
                            <td><?= $row['nama']; ?></td>
                          </tr>
                          <?php $no++; } ?>
                        </tbody>
                      </table>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                    </div>
                </div>
              </div>
            </div>

            <!-- Tabel Barang -->
            <center>
              <table class="table table-bordered table-striped" style="width: 60%;" id="user_data">
                <thead>
                  <tr>
                    <th>Kode Barang</th>
                    <th>Nama Barang</th>
                    <th>Jumlah Barang</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                </tbody>
              </table>
              <input class="btn btn-warning mr-2" type="reset" name="kosongkan" value="Kosongkan">
              <input type="submit" name="insert" class="btn btn-primary" value="Keluar" />
            </center>
          </div>
        </form>
      </div>
      <!-- /.card -->
    </div>
  </section>
</div>
<!-- Footer -->
<?php include_once ('footer.php') ?>

<script type="text/javascript">

 // menampilkan ID supplier
<?php echo $jsarray; ?>
function idsupplier(namasupplier) {
  document.getElementById('setsupplier').value = namasup[namasupplier].idsup;
}

$(document).ready(function() {

	var count = 0;
  $('#example').DataTable();

  $(document).on('click', '#produk', function(e) {
    document.getElementById("kode_barang").value = $(this).attr('data-kode');
    document.getElementById("nama_barang").value = $(this).attr('data-nama');
    $('#modal').modal('hide');
  });

	$('#save').click(function(){
		var kode_barang = '';
		var nama_barang = '';
		var jumlah_barang = '';
		if($('').val() == '')
		{
			error_kode_barang = 'Kode Barang is required';
			$('#error_kode_barang').text(error_kode_barang);
			$('').css('border-color', '#cc0000');
			kode_barang = '';
		}
		else
		{
			error_kode_barang = '';
			$('#error_kode_barang').text(error_kode_barang);
			$('').css('border-color', '');
			kode_barang = $('#kode_barang').val();
		}	
		if($('#nama_barang').val() == '')
		{
			error_nama_barang = 'Nama Barang is required';
			$('#error_nama_barang').text(error_nama_barang);
			$('#nama_barang').css('border-color', '#cc0000');
			nama_barang = '';
		}
		else
		{
			error_nama_barang = '';
			$('#error_nama_barang').text(error_nama_barang);
			$('#nama_barang').css('border-color', '');
			nama_barang = $('#nama_barang').val();
		}
		if($('#jumlah_barang').val() == '')
		{
			error_jumlah_barang = 'Jumlah Barang is required';
			$('#error_jumlah_barang').text(error_jumlah_barang);
			$('#jumlah_barang').css('border-color', '#cc0000');
			jumlah_barang = '';
		}
		else
		{
			error_jumlah_barang = '';
			$('#error_jumlah_barang').text(error_jumlah_barang);
			$('#jumlah_barang').css('border-color', '');
			jumlah_barang = $('#jumlah_barang').val();
		}
		if(error_kode_barang != '' || error_nama_barang != '')
		{
			return false;
		}
		else
		{
			if($('#save').text() == 'Save')
			{
				count = count + 1;
				output = '<tr id="row_'+count+'">';
				output += '<td>'+kode_barang+' <input type="hidden" name="hidden_kode_barang[]" id="kode_barang'+count+'" value="'+kode_barang+'" /></td>';
				output += '<td>'+nama_barang+' <input type="hidden" name="hidden_nama_barang[]" id="nama_barang'+count+'" value="'+nama_barang+'" /></td>';
				output += '<td>'+jumlah_barang+' <input type="hidden" name="hidden_jumlah_barang[]" id="jumlah_barang'+count+'" value="'+jumlah_barang+'" /></td>';

				output += '<td><button type="button" name="remove_details" class="btn btn-danger btn-xs remove_details" id="'+count+'">Remove</button></td>';
				output += '</tr>';
				$('#user_data').append(output);
			}
			else
			{
				var row_id = $('#hidden_row_id').val();
				output = '<td>'+kode_barang+' <input type="hidden" name="hidden_kode_barang[]" id="kode_barang'+row_id+'" value="'+kode_barang+'" /></td>';
				output += '<td>'+nama_barang+' <input type="hidden" name="hidden_nama_barang[]" id="nama_barang'+row_id+'" value="'+nama_barang+'" /></td>';
				output += '<td>'+jumlah_barang+' <input type="hidden" name="hidden_jumlah_barang[]" id="jumlah_barang'+count+'" value="'+jumlah_barang+'" /></td>';

				output += '<td><button type="button" name="remove_details" class="btn btn-danger btn-xs remove_details" id="'+row_id+'">Remove</button></td>';
				$('#row_'+row_id+'').html(output);
			}
		}
	});

	$(document).on('click', '.remove_details', function(){
		var row_id = $(this).attr("id");
		if(confirm("Are you sure you want to remove this row data?"))
		{
			$('#row_'+row_id+'').remove();
		}
		else
		{
			return false;
		}
	});
});
</script>
