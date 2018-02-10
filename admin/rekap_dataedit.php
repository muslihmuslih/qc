<?php include "akses.php"; ?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta name="viewport" content="width=devices-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="../style/style.css" />
</head>
<body>
	<nav>
		<ul>
			<li><a href="dashboard1.php">Dashboard</a></a></li>
			<li><a href="">Data</a>
				<ul>
					<li><a href="dashboard.php">Semua Data</a></li>
					<li><a href="daftaredit.php">Edit Data</a></li>
					<li><a href="daftarmasalah.php">Daftar Masalah</a></li>
					
				</ul>	
			</li>
			<li><a href="">User</a>
				<ul>
					<li><a href="daftaruser.php">Daftar User</a></li>
					<li><a href="tambah_user.php">Tambah User</a></li>
				</ul>
			</li>
			<li class="right"><a href="../library/logout.php">Hi... <?php echo $_SESSION['admin']; ?>, Logout</a></li>
		</ul>
	</nav>
	

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
			<th>ACC</th>
			<th>Keterangan</th>
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

				$halaman=10;
				$page=isset($_GET['halaman'])? (int)$_GET['halaman']:1;	
				$mulai=($page>1)? ($page * $halaman)-$halaman:0;
				$queri="select * from m_input where tanggal between '".$tglawal."' AND '".$tglakhir."'";
				$result=mysqli_query($connect,$queri);
				$total=mysqli_num_rows($result);
				$pages=ceil($total/$halaman);
				$query="select * from m_input where tanggal between '".$tglawal."' AND '".$tglakhir."' LIMIT $mulai, $halaman";
				$result2=mysqli_query($connect,$query) ;
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
						<td> $row->status</td>
						<td> $row->keterangan</td>		
					</tr>";
				$no ++;	
			 	}  
			 	?>
	</table>
		<br>		 	
			<div>
				<?php
					for ($i=1; $i <=$pages ; $i++) { ?>
						<button style="width: 35px" onclick="location.href='?halaman=<?php echo $i; ?>'"><?php echo $i; ?></button>		
				<?php }; ?>
			</div> <?php
			} ?>	
</body>
</html>