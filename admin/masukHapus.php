<?php
// untuk koneksi
include_once ('../db/koneksi.php');

$detail = $_GET['detail_id'];
$sql = "DELETE tbl_tm_barang FROM tbl_tm_barang LEFT JOIN tbl_tm_supplier ON tbl_tm_barang.id_transaksi = tbl_tm_supplier.id_transaksi WHERE detail_id = '$detail'";
$query  = $mysqli->query($sql);

if ($query) {
  header('location:'.'masukData.php');
} else {
  echo "Eror Hapus <br/>" . $mysqli->error;
}

 ?>
