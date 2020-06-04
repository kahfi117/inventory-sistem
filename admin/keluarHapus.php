<?php
// untuk koneksi
include_once ('../db/koneksi.php');

$detail = $_GET['detail_id'];
$sql = "DELETE tbl_tk_barang FROM tbl_tk_barang LEFT JOIN tbl_tk_supplier ON tbl_tk_barang.id_transaksi = tbl_tk_supplier.id_transaksi WHERE detail_id = '$detail'";
$query  = $mysqli->query($sql);

if ($query) {
  header('location:'.'keluarData.php');
}

 ?>
