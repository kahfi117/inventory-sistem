<?php 
include '../db/koneksi.php';

if(isset($_POST['insert'])) {    

  $idtrns = $_POST['inpidtrans'];
  $idsup  = $_POST['inpidsup'];
  $namasup = $_POST['inpnmasup'];
  date_default_timezone_set('Asia/Makassar');
  $waktu  = date("d-m-Y H:i:s");

  // di sini create script untuk insert ke table pertama 
  $ins = "INSERT INTO tbl_tk_supplier (id_transaksi, id_supplier, namasup) VALUES ('$idtrns', '$idsup', '$namasup')";
  $mysqli->query($ins);
  $no = 0;

  for ($i=0; $i < count($_POST['hidden_kode_barang']); $i++) { 
    $kdbar = $_POST['hidden_kode_barang'][$i];
    $namabar = $_POST['hidden_nama_barang'][$i];
    $jmlah = $_POST['hidden_jumlah_barang'][$i];

    // di sini create script untuk insert ke table kedua
    $query = "INSERT INTO tbl_tk_barang (id_transaksi, kodebar, namabar,
                      jumlah, waktu) VALUES ('$idtrns', '$kdbar', '$namabar', '$jmlah', '$waktu')";
    
    # echo $query."<br/>";
    if($mysqli->query($query)) { $no++; }

  }
  if($no == count($_POST['hidden_kode_barang']) )
  {
  echo "New record created successfully";
             echo "<script>
                  window.location=(href='keluarData.php')
                </script>";
  } else {
    echo "gagal " . $mysqli->errno;
  }
  
}
?>