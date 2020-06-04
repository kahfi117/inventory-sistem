<?php
include "../db/koneksi.php";
require "../vendor/autoload.php"; 

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Reader\Csv;
use PhpOffice\PhpSpreadsheet\Reader\Xlsx;

if(isset($_POST['import'])){
  $file_mimes = array('application/octet-stream', 'application/vnd.ms-excel', 'application/x-csv', 'text/x-csv', 'text/csv', 'application/csv', 'application/excel', 'application/vnd.msexcel', 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
 
  if(isset($_FILES['file']['name']) && in_array($_FILES['file']['type'], $file_mimes)) {
    $arr_file = explode('.', $_FILES['file']['name']);
    $extension = end($arr_file);
 
    if('csv' == $extension) {
        $reader = new \PhpOffice\PhpSpreadsheet\Reader\Csv();
    } else {
        $reader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();
    }
 
    $spreadsheet = $reader->load($_FILES['file']['tmp_name']);
     
    $sheetData = $spreadsheet->getActiveSheet()->toArray();

  // echo $sheetData[62]['D'];exit;

  for ($i=4; $i <= count($sheetData) ; $i++) { 
    $kodebar = $sheetData[$i]['1'];
    $namabar = $sheetData[$i]['2'];
    $jumlah = $sheetData[$i]['3'];
    $satuan = $sheetData[$i]['4'];
    $keterangan = $sheetData[$i]['5'];
    $stawal = $sheetData[$i]['6'];
    $stjual = $sheetData[$i]['7'];

    $sql = "INSERT INTO tbl_barang (kd_barang, nama, jumlah, satuan, keterangan, stock_awal, stock_terjual) VALUES ('$kodebar','$namabar','$jumlah','$satuan','$keterangan','$stawal','$stjual')";
    $result = $mysqli->query($sql);
  }
  if ($result) {
    echo "<script>
          window.location=(href='barangData.php')
        </script>";
  } else {
    echo $mysqli->error;
  }
}
 }
 ?>