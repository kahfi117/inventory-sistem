<?php
// untuk koneksi
include_once ('../db/koneksi.php');

ob_start();
// untuk menampilkan data dari tabel
$idsup = $_GET['id_supplier'];
$sql   = "SELECT * FROM tbl_supplier WHERE id_supplier = '$idsup'";
$query = $mysqli->query($sql);
$data = $query->fetch_array(MYSQLI_ASSOC)
?>

<!-- koding CSS -->
<style media="screen">
  .header {
    text-align: left;
  }
  img {
    float: left;
    width: 85px;
    height: 85px;
    margin-right: 15px;
  }
  .toko {
    margin-top: -10px;
    float: right;
    font-size: 18px;
    font-weight: 900;
  }

  .text {
    overflow: hidden;
    padding: 10px 15px;
    font-size: 12px;
    line-height: 18px;
  }
  .judul {
    padding: 4mm;
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
  .tabel th {
    padding: 8px 5px;
    text-align: center;
  }
  .tabel .t1 {
    width: 300px;
  }
  .tabel .t2 {
    width: 70px;
  }
  .tabel .t3 {
    text-align: right;
  }
  .tabel .t4 {
    border-top: none;
    border-left: none;
    border-bottom: none;
  }
  .tabel2 {
    border-collapse: collapse;
    text-align: center;
  }
  .tabel2 th {
    width: 800px;
    padding-bottom: 20px;
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
    <hr/>
  </div>

  <div class="container">
    <p><b>Kepada Yth,</b></p>
    <pre>
<b>Nama</b>     : <?= $data['nama']; ?> <br>
<b>No. Telp</b> : <?= $data['nomor']; ?> <br>
<b>Alamat</b>   : <?= $data['alamat']; ?>
    </pre>
  </div>
  <!-- tabel Supplier -->
    <br><br>

  <table class="tabel" border="1" align="center">
    <thead>
      <tr>
        <th>Jumlah</th>
        <th class="t1">Nama Barang</th>
        <th class="t2">Harga</th>
        <th class="t2">Diskon</th>
        <th class="t2">Total</th>
      </tr>
    </thead>
    <tbody>

    <?php
    // untuk menampilkan data dari tabel
    $query   = "SELECT * FROM tbl_tk_supplier INNER JOIN tbl_tk_barang ON tbl_tk_supplier.id_transaksi = tbl_tk_barang.id_transaksi";
    $result = $mysqli->query($query);

    $no = 1;
    while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
     ?>
    <tr>
      <td><?= $row['jumlah']; ?></td>
      <td><?= $row['kodebar']; ?> - <?= $row['namabar']; ?></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <?php
       $no++;
      }
      ?>
    </tbody>
    <tfoot>
      <tr>
        <td colspan="2" class="t4"></td>
        <td colspan="2" class="t3">Sub Total:</td>
        <td></td>
      </tr>
      <tr>
        <td colspan="2" class="t4"></td>
        <td colspan="2" class="t3">Diskon:</td>
        <td></td>
      </tr>
      <tr>
        <td colspan="2" class="t4"></td>
        <td colspan="2" class="t3">Pajak:</td>
        <td></td>
      </tr>
      <tr>
        <td colspan="2" class="t4"></td>
        <td colspan="2" class="t3">Biaya Pengiriman:</td>
        <td></td>
      </tr>
      <tr>
        <td colspan="2" class="t4"></td>
        <td colspan="2" class="t3"><b>TOTAL</b>:</td>
        <td></td>
      </tr>
    </tfoot>
  </table>

  <br><br>

 <table class="tabel2" align="center">
   <tr>
     <th colspan="2">Yang bertanda tangan dibawah ini :</th>
   </tr>
   <tr>
     <td>
      <p class="admin">Pembeli</p>
      <br><br><br>
      <p class="nama">______________________</p>
     </td>
     <td>
      <p class="admin">Administrator</p>
      <br><br><br>
      <p class="nama">CV.ANUGERAH SEJATI PRIMA</p>
     </td>
   </tr>
 </table>

</page>

<?php
// proses untuk menampilkan file pdf
$content = ob_get_clean();
include_once('../html2pdf/html2pdf.class.php');
$html2pdf = new HTML2PDF('P', 'A4', 'en', 'utf-8');
$html2pdf->WriteHTML($content);
$html2pdf->Output('Kwitansi.pdf');

 ?>