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
		include "../template/nav.php";
	?>
	<div class="contain">
		<div class="wrapper">
			<div class="contacts">	
				<h2>Form Tambah User</h2>
			</div>

			<div class="form">
				<form class="form1" method="post" action="../library/proses_tambahuser.php">
					<p>
						<label>Nama</label>
						<input type="text" name="nama" required>
					</p>
					<p>
						<label>Bagian</label>
						<select name="cmbbagian">
							<option>-- Masukkan Bagian --</option>
							<option value="celupan">Celupan</option>
							<option value="marketing">Marketing</option>
							<option value="qc">QC</option>
						</select>
					</p>
					<p>
						<label>Otoritas</label>
						<select name="cmbotoritas">
							<option value="0">-- Masukkan Otoritas --</option>
							<option value="admin">Admin</option>
							<option value="inspector">Inspector</option>
						</select>
						<input type="hidden" name="level">
					</p>
					<p>
						<label>Password</label>
						<input type="text" name="password" required>
					</p>
					<p class="full-width">
						<button>Simpan</button>
					</p>
				</form>
			</div>
		</div>
	</div>
</body>
</html>