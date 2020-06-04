<?php
// untuk koneksi
include_once ('../db/koneksi.php');

$idsup = $_GET['id_supplier'];
$sql   = "DELETE FROM tbl_supplier WHERE id_supplier = '$idsup'";
$query = $mysqli->query($sql);

if ($query) {
  header('location:'.'supplierData.php');
}
?>
