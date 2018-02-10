<?php include ("akses.php"); ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta name="viewport" content="width=devices-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="../style/style.css" />
	
</head>
<body>
	<button type="button" onclick="location.href='./input.php'">Home</button>
	<!--<button type="button" onclick="history.back(-1)">Kembali</button>-->

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
			<th colspan="2">Action</th>
			
		</tr>
		
		<?php
			include "../library/koneksi.php";
			$halaman=10;
			$page=isset($_GET['halaman'])? (int)$_GET['halaman']:1;
			$mulai=($page>1)? ($page * $halaman)-$halaman:0;
			$inspector=$_SESSION['inspector'];
			$queri="select * from m_input where nama='".$inspector."' and status='Pending'";
			$result=mysqli_query($connect,$queri);
			$total=mysqli_num_rows($result);
			$pages=ceil($total/$halaman);
			$query="select * from m_input where nama='".$inspector."' and status='Pending' LIMIT $mulai, $halaman";
			$result2=mysqli_query($connect,$query);
			$no=$mulai+1;

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
						<td>";
						?>
							<!--<a href="formedit.php?idinput=<?php echo $row->id_input; ?>">Edit</a>-->
							<button onclick="location.href='formedit.php?idinput=<?php echo $row->id_input; ?>'">EDIT</button>
						</td>
						<td>	
							<a href="proses_hapus.php?idinput=<?php echo $row->id_input; ?>"><button onclick="return confirm('Apakah Anda yakin akan menghapus data ini?')">HAPUS</button></a>
						</td>				
					</tr>
					<?php $no ++;
			 } ;
		?>
	</table>
	<br>
	<div>Total = <?php echo $total; ?> data</div>
	<div>
		<?php
			for ($i=1; $i <=$pages ; $i++) { ?>
				<button style="width: 35px" onclick="location.href='?halaman=<?php echo $i; ?>'"><?php echo $i; ?></button>
				
		<?php };
		?>
	</div>
</body>
</html>