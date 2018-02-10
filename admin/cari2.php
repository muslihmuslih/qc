<?php include "akses.php"; ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta name="viewport" content="width=devices-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="../style/style.css" />
</head>
<body>
	<?php 
		include "../library/koneksi.php";
		$cari=$_POST['cari'];
		$queri="select * from m_input where status='Pending' and no_po='".$cari."'|| nama= '".$cari."' || nama_kain like '%".$cari."%' || tanggal='".$cari."'";
		$result2=mysqli_query($connect,$queri);
		$total=mysqli_num_rows($result2);
		$no=1;
	?>
	<div>
		<h2>Hasil Pencarian</h2>

		<p>Pencarian dengan keyword : <?php echo $cari; ?> <br> Total : <?php echo $total; ?> data </p>
		<button style="width: 10%" onclick="location.href='../admin/dashboard1.php'">Kembali</button>
	</div><br>
	<table id="tabeldata" cellspacing="8">
		<tr>
			<th>No.</th>
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
			<th> Status ACC</th>
			<th colspan="2">Action</th>
		</tr>
		
		<?php
			while ($row=$result2 -> fetch_object()) {	
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
						<td>";
						?>
							<button onclick="location.href='../library/status_ok.php?idinput=<?php echo $row->id_input; ?>'">YES</button>
						</td>
						<td>		
							<button onclick="location.href='../library/status_no.php?idinput=<?php echo $row->id_input; ?>'">NO</button>
						</td>	
					</tr>
					<?php $no ++;

			 };
		?>
	</table>
</body>
</html>