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
				<h2>Form Tambah Masalah</h2>	
			</div>

			<div class="form">
				<form class="form1" method="post" action="../library/proses_tambahmasalah.php">
					<p>
						<label>Kode Masalah</label>
						<input type="text" name="kdmasalah">
					</p>
					<p>
						<label>Deskripsi</label>
						<input type="text" name="deskripsi" required>
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