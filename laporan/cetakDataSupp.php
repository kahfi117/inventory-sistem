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
  font-size: 20;
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
  <div class="header">
    <img src="asp.jpg" alt="ASP Logo">
      <p>
        <strong>
          <div class="toko">CV.ANUGERAH SEJATI PRIMA</div><br>
          Jl.Racing Centre No.4 Ruko Bumi Tirta Nusantara Gardenia <br>
          Telpon/Hp : (0411) 432542 / 08124266624 <br>
          Fax : (0411) 446354 <br>
          Email : asp_makassar@yahoo.com <br>
        </strong>
      </p>
    <hr>
  </div>

  <!-- tabel barang masuk -->
  <table border="1" align="center">
    <tr align="center">
      <th>No</th>
      <th>ID Supplier</th>
      <th>Nama Supplier</th>
      <th>No. Hp / Telepon</th>
      <th>Fax</th>
      <th>Email</th>
      <th>Alamat</th>
    </tr>
    <?php
    // untuk menampilkan data dari tabel
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
$html2pdf = new HTML2PDF('L', 'A4', 'en', 'utf-8');
$html2pdf->WriteHTML($content);
$html2pdf->Output('Laporan Supplier.pdf');

 ?>
