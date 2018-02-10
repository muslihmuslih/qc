<?php include "akses.php"; ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta name="viewport" content="width=devices-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="../style/style.css" />
	
</head>
<body>
	<?php include "../template/nav.php" ?>
	<h2>Edit Data Status ACC</h2>
	<form action="cari1.php" method="post">
		<input type="text" name="cari" required="">
		<input type="submit" name="" value="Cari" style="width: 60px;">
		<br>
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
			<th> Status ACC</th>
			<th colspan="4">Action</th>
		</tr>
		
		<?php
			include "../library/koneksi.php";
			if (isset($_GET['cari'])) {
				$cari=$_GET['cari'];
				$halaman=10;
				$page=isset($_GET['halaman'])? (int)$_GET['halaman']:1;
				$mulai=($page>1)? ($page * $halaman)-$halaman:0;
				$queri="select * from m_input where no_po='".$cari."'|| nama= '".$cari."' || nama_kain like '%".$cari."%' || tanggal='".$cari."'";
				$result=mysqli_query($connect,$queri);
				$total=mysqli_num_rows($result);
				$pages=ceil($total/$halaman);
				$query="select * from m_input where no_po='".$cari."' || nama= '".$cari."' || nama_kain like '%".$cari."%' || tanggal='".$cari."' LIMIT $mulai, $halaman";
				$result2=mysqli_query($connect,$query) ;
				$no=$mulai+1;
			} else {
				$halaman=10;
				$page=isset($_GET['halaman'])? (int)$_GET['halaman']:1;
				$mulai=($page>1)? ($page * $halaman)-$halaman:0;
				$queri="select * from m_input";
				$result=mysqli_query($connect,$queri);
				$total=mysqli_num_rows($result);
				$pages=ceil($total/$halaman);
				$query="select * from m_input LIMIT $mulai, $halaman";
				$result2=mysqli_query($connect,$query) ;
				$no=$mulai+1;
			}
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
							<!--<a href="../library/status_ok.php?idinput=<?php echo $row->id_input; ?>">YES</a>-->
							<button onclick="location.href='../library/status_okk.php?idinput=<?php echo $row->id_input; ?>'">YES</button>
						</td>
						<td>		
							<!--<a href="../library/status_no.php?idinput=<?php echo $row->id_input; ?>">NO</a>-->
							<button onclick="location.href='../library/status_noo.php?idinput=<?php echo $row->id_input; ?>'">NO</button>
						</td>
						<td>	
							<!--<a href="../library/status_pending.php?idinput=<?php echo $row->id_input; ?>">Pending</a>-->
							<button onclick="location.href='../library/status_pending.php?idinput=<?php echo $row->id_input; ?>'" >PENDING</button>
						</td>	
						<td>
							<a href="javascript:window.location.reload()"><input style="border: 0px" type="image" src="../images/refresh.png"></a>
						</td>		
					</tr>
					<?php $no ++;
			 };
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