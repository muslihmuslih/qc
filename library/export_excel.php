<?php
include "../admin/akses.php";
// Skrip berikut ini adalah skrip yang bertugas untuk meng-export data ke excell
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=rekapqc.xls");
?>
<h3>Rekap Data QC</h3>
<p>Rekap Data QC periode tanggal <?php echo $_POST['tglawl']; ?> s/d tanggal <?php echo $_POST['tglakh']; ?></p>
<p>Printed by <?php echo $_SESSION['admin']; ?>,<?php $tgl=date('Y-m-d'); echo $tgl; ?>  </p>
    
<table border="1" cellpadding="5">
  <tr>
    <th>No</th>
    <th>Tanggal</th>
    <th>Inspector</th>
    <th>No. PO</th>
    <th>No. Lot/Roll ke</th>
    <th>Nama Kain</th>
    <th>Warna</th>
    <th>Celupan</th>
    <th>L (Cm)</th>
    <th>Gsm</th>
    <th>Hasil</th>
    <th>Deskripsi Masalah</th>
    <th>Tindakan</th>
    <th>Keterangan</th>
    <th>Status ACC</th>
    <th>Pemberi ACC</th>
  </tr>
  <?php
  // Load file koneksi.php
  include "koneksi.php";
  
  $tglawl=$_POST['tglawl'];
  $tglakh=$_POST['tglakh'];
    
  $query="select * from m_input where tanggal between '".$tglawl."' AND '".$tglakh."' ";
  $result=mysqli_query($connect,$query);
  $no = 1; // Untuk penomoran tabel, di awal set dengan 1
  while ($row=$result -> fetch_object()) {
    echo "<tr>
            <td> $no </td>
            <td> $row->tanggal</td>
            <td> $row->nama</td>
            <td> $row->no_po</td>
            <td> $row->no_lot</td>
            <td> $row->nama_kain</td>
            <td> $row->warna</td>
            <td> $row->supplier</td>
            <td> $row->lebar</td>
            <td> $row->gramasi</td>
            <td> $row->hasil</td>
            <td> $row->deskripsi</td>
            <td> $row->tindakan</td>
            <td> $row->ketinspector</td>
            <td> $row->status</td>
            <td> $row->keterangan</td>";
    $no++; // Tambah 1 setiap kali looping
  }
  ?>
</table>