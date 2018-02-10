<?php include ("akses.php"); ?>
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
		//Ambil data id yang dikirim oleh index.php melalui URL
		$idinput='';
		if (isset($_GET['idinput'])) {
			$idinput=$_GET['idinput'];
		}

		//Query unutk menampilkan data product berdasarkan id yang dikirim
		$query = "select * from m_input where id_input='".$idinput."'";
		$sql = mysqli_query($connect, $query); //eksekusi query dari variabel $query
		$data = mysqli_fetch_assoc($sql); //ambil data dari hasil eksekusi $sql	
	?>
	<div class="contain">
		<div class="wrapper">
			<div class="contacts">
				<h2>Form Edit Input Data QC</h2>
				<?php $inspector=$_SESSION['inspector'] ?>
				<p>Hi, <?php echo $inspector; ?></p>
				<p><a href="../library/logout.php">Logout</a></p>
			</div>

			<div class="form">
				<form class="form1" method="post" action="../inspector/proses_edit.php">
					<p>
						<input type="hidden" name="idinput" value="<?php echo $data['id_input']; ?>" required>
						<label>Tanggal</label>
						<input type="text" name="Tanggal" value="<?php $tgl=date('d-m-Y'); echo $tgl; ?>" required>
						<input type="hidden" name="inspector" value="<?php echo $inspector ?>">
					</p>
					<p>
						<label>No. PO</label>
						<input type="text" name="nopo" value="<?php echo $data['no_po']; ?>" required>
					</p>
					<p>
						<label>No. Lot/Roll </label>
						<input type="text" name="nolot" value="<?php echo $data['no_lot']; ?>" required>
					</p>
					<p>
						<label>Nama Kain</label>
						<input type="text" name="nmkain" value="<?php echo $data['nama_kain']; ?>" required>
					</p>
					<p>
						<label>Warna</label>
						<input type="text" name="warna" value="<?php echo $data['warna']; ?>" required>
					</p>
					<p>
						<label>Celupan</label>
						<select name="cmbcelupan" required>
							<option><?php echo $data['supplier']; ?></option>
							<?php
								$query="select * from m_celupan";
								$result=mysqli_query($connect,$query);
								while ($row = mysqli_fetch_assoc($result)) {					 	
								 	echo "<option>$row[supplier]</option>";
								 } 
							?>
						</select>
					</p>
					<p>
						<label>L (Cm)</label>
						<input type="text" name="lebar" value="<?php echo $data['lebar']; ?>" required>
					</p>
					<p>
						<label>Gsm</label>
						<input type="text" name="gramasi" value="<?php echo $data['gramasi']; ?>" required>
					</p>
					<p>
						<label>Hasil</label>
						<select name="cmbhasil" required>
							<option><?php echo $data['hasil']; ?></option>
							<?php
								$query="select * from m_hasil";
								$result=mysqli_query($connect,$query);
								while ($row = mysqli_fetch_assoc($result)) {					 	
								 	echo "<option>$row[hasil]</option>";
								 } 
							?>
						</select>
					</p>
					<p>
						<label>Masalah</label>
						<select name="cmbmasalah" required>
							<option><?php echo $data['deskripsi']; ?></option>
							<?php
								$query="select * from m_masalah";
								$result=mysqli_query($connect,$query);
								while ($row = mysqli_fetch_assoc($result)) {					 	
								 	echo "<option>$row[deskripsi]</option>";
								 } 
							?>
						</select>
					</p>
					<p>
						<label>Tindakan</label>
						<select name="cmbtindakan" required>
							<option><?php echo $data['tindakan']; ?></option>
							<?php
								$query="select * from m_tindakan";
								$result=mysqli_query($connect,$query);
								while ($row = mysqli_fetch_assoc($result)) {					 	
								 	echo "<option>$row[tindakan]</option>";
								 } 
							?>
						</select>
					</p>
					<p class="full-width">
						<button>Simpan Perubahan</button>
					</p>
				</form>
				<form>
					<p class="full-width">
						<button style="background: red" type="button" onclick="location.href='../inspector/daftaredit.php'">Batal</button>
					</p>
				</form>
			</div>
		</div>
	</div>
</body>
</html>