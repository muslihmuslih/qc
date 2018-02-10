<?php include "akses.php"; ?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta name="viewport" content="width=devices-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="../style/style.css" />
</head>
<body>
	
	<?php include "../template/nav.php"; ?>

	<form method="post" action="rekap_data.php">
		<table>
			<tr>
				<td>Dari Tanggal</td>
				<td>Sampai Tanggal</td>
			</tr>
			<tr>
				<td><input type="date" name="tglawal" id="tglawal"></td>
				<td><input type="date" name="tglakhir" id="tglakhir"></td>
				<td><input type="submit" name="cari" value="Tampilkan Data"></td>
			</tr>
		</table>
		
	</form>
	<form method="post" action="../library/export_excel.php">
		<input type="hidden" name="tglawl" value="<?php echo $_POST['tglawal']; ?>">
		<input type="hidden" name="tglakh" value="<?php echo $_POST['tglakhir']; ?>">
		<table>
			<tr>
				<td>
					<input type="submit" name="export" value="Export ke Excel">
				</td>
			</tr>
		</table>
	</form>

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
			<th>Status ACC</th>
			<th>Pemberi ACC</th>
			
		</tr>
		
		<?php
			include "../library/koneksi.php";

			if (isset($_POST['cari'])) {
				$tglawal=$_POST['tglawal'];
				$tglakhir=$_POST['tglakhir'];
				?>
				<br></br>
				<i><b>Informasi : </b></i> Periode tanggal <?php echo $_POST['tglawal']; ?> s/d tanggal <?php echo $_POST['tglakhir']; ?> <br></br>
				<?php

				$query="select * from m_input where tanggal between '".$tglawal."' AND '".$tglakhir."'";
				$result=mysqli_query($connect,$query);
				$no=1;

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
						<td> $row->keterangan</td>
							
					</tr>";
					$no ++;
			 	} 
			} 
		?>
	</table>
</body>
</html>