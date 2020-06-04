<?php
// untuk koneksi
include_once ('../db/koneksi.php');

ob_start();
?>

<!-- koding CSS -->
<style media="screen">
.header {
  text-align: left;
  padding: 4mm;
}
img {
  float: left;
  width: 85px;
  height: 85px;
  margin-right: 20px;
}
.toko {
  font-size: 20px;
  font-weight: 800;
}

.admin {
  font-weight: bold;
}

.nama {
  text-decoration: underline;
}
.tabel {
  border-collapse: collapse;
}
.tabel .tes{
  width: 200px;
}

</style>

<!-- koding HTML dan PHP query -->
<page>
    
  <div class="header">
    <img src="asp.jpg" alt="ASP Logo">
      <p>
          <div class="toko">CV.ANUGERAH SEJATI PRIMA</div>
          <small>
          Jl.Racing Centre No.4 Ruko Bumi Tirta Nusantara Gardenia <br>
          Telpon/Hp : (0411) 432542 / 08124266624 <br>
          Fax : (0411) 446354 <br>
          Email : asp_makassar@yahoo.com <br>
          </small>
      </p>
    </div>
    <hr width="300px" align="center">

  <!-- tabel barang masuk -->
  <table border="1" align="center" class="tabel">
    <tr align="center">
      <th>No</th>
      <th>Kode Barang</th>
      <th class="tes">Nama Barang</th>
      <th>Jumlah Barang</th>
      <th>Satuan</th>
      <th>Keterangan</th>
      <th>Stock Awal</th>
      <th>Stock Terjual</th>
    </tr>
    <?php
    // untuk menampilkan data dari tabel
    $query  = "SELECT * FROM tbl_barang";
    $result = $mysqli->query($query);

    $no = 1;
    while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
     ?>
    <tr>
      <td><?php echo $no ?></td>
      <td><?php echo $row['kd_barang']; ?></td>
      <td class="tes"><?php echo $row['nama']; ?></td>
      <td align="center"><?php echo $row['jumlah']; ?></td>
      <td><?php echo $row['satuan']; ?></td>
      <td><?php echo $row['keterangan']; ?></td>
      <td align="center"><?php echo $row['stock_awal']; ?></td>
      <td align="center"><?php echo $row['stock_terjual']; ?></td>
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
$html2pdf->Output('Laporan Barang.pdf');

?>