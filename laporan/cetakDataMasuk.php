<?php
// untuk koneksi
include_once ('../db/koneksi.php');
ob_start();
?>

<!-- koding CSS -->
<style media="screen">
.judul {
  padding: 4mm;
  text-align: center;
}

.admin {
  font-weight: bold;
}

.nama {
  text-decoration: underline;
}
</style>

<!-- koding HTML dan PHP query -->
<page>
  <div class="judul">
    <h2>Laporan Data Barang Masuk</h2>
    <p>CV. Anugerah Sejati Prima</p>
    <p><em>Indonesia, Sulawesi Selatan, Gowa</em> </p>
    <hr>
  </div>

  <!-- tabel barang masuk -->
  <table border="1" align="center">
    <tr align="center">
      <th>No</th>
      <th>ID Transaksi</th>
      <th>Nama Supplier</th>
      <th>Nama Barang</th>
      <th>Jumlah <br> Barang Masuk</th>
      <th>Waktu</th>
    </tr>
    <?php
    // untuk menampilkan data dari tabel
   
    if (isset($_POST['cetak'])) {
      $tgla = $_POST['tgl_a'];
      $tglb = $_POST['tgl_b'];

      $query    = "SELECT * FROM tbl_tm_supplier INNER JOIN tbl_tm_barang ON tbl_tm_supplier.id_transaksi = tbl_tm_barang.id_transaksi WHERE (tbl_tm_barang.waktu BETWEEN '$tgla' AND '$tglb') ORDER BY waktu ASC";
      $result = $mysqli->query($query);
    } else {
      $query  = "SELECT * FROM tbl_tm_supplier INNER JOIN tbl_tm_barang ON tbl_tm_supplier.id_transaksi = tbl_tm_barang.id_transaksi";
      $result = $mysqli->query($query);
    }

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
    </tr>
    <?php
       $no++;
      }
      ?>
  </table>

  <p>Yang bertanda tangan dibawah ini :</p>
  <p class="admin">Administrator</p>
  <br>
  <br>
  <br>
  <p class="nama">CV.ANUGERAH SEJATI PRIMA</p>

</page>

<?php
// proses untuk menampilkan file pdf
$content = ob_get_clean();
include_once('../html2pdf/html2pdf.class.php');
$html2pdf = new HTML2PDF('P', 'A4', 'en', 'utf-8');
$html2pdf->WriteHTML($content);
$html2pdf->Output('Laporan Barang Masuk.pdf');

 ?>