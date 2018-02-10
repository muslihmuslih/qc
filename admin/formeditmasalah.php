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
		//Ambil data id yang dikirim oleh index.php melalui URL
		$idmasalah='';
		if (isset($_GET['idmasalah'])) {
			$idmasalah=$_GET['idmasalah'];
		}

		//Query unutk menampilkan data product berdasarkan id yang dikirim
		$query = "select * from m_masalah where id_masalah='".$idmasalah."'";
		$sql = mysqli_query($connect, $query); //eksekusi query dari variabel $query
		$data = mysqli_fetch_assoc($sql); //ambil data dari hasil eksekusi $sql	
	?>
	<div class="contain">
		<div class="wrapper">
			<div class="contacts">	
				<h2>Form Edit Masalah</h2>
			</div>

			<div class="form">
				<form class="form1" method="post" action="../library/proses_masalahedit.php">
					<p>
						<input type="hidden" name="idmasalah" value="<?php echo $data['id_masalah']; ?>" required>
						<label>Kode Masalah</label>
						<input type="text" name="kdmasalah" value="<?php echo $data['kd_masalah'] ?>">
					</p>
					<p>
						<label>Deskripsi</label>
						<input type="text" name="deskripsi" value="<?php echo $data['deskripsi']; ?>" required>
					</p>
					<p class="full-width">
						<button>Simpan Perubahan</button>
					</p>
				</form>
			</div>
		</div>
	</div>
</body>
</html>