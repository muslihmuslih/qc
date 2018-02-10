<?php include "akses.php"; ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta name="viewport" content="width=devices-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="../style/style.css" />
	<script>
		document.onload = disable_enable();
		function disable_enable(pilihan) {

		if(pilihan=="NO" || document.forms[0].cmbhasil.value=="NO") {
			document.forms[0].cmbmasalah.disabled=false;
			document.forms[0].cmbmasalah.hidden=false;
			document.forms[0].cmbmasalah.value==0;
			document.forms[0].cmbtindakan.disabled=false;
			document.forms[0].cmbtindakan.hidden=false;
			document.forms[0].cmbtindakan.value==0;
		} else {
			document.forms[0].cmbmasalah.disabled=true;
			document.forms[0].cmbmasalah.hidden=true;
			document.forms[0].cmbmasalah.value=="OK";
			document.forms[0].cmbtindakan.disabled=true;
			document.forms[0].cmbtindakan.hidden=true;
			document.forms[0].cmbtindakan.value=="OK";
			}
		}
	
		function validasi_input(form){
		 if (form.cmbcelupan.value == 0){
		    alert("Data Celupan tidak boleh kosong!");
		    return (false);
		 }
		 if (form.cmbhasil.value == 0){
		    alert("Data Hasil tidak boleh kosong!");
		    return (false);
		 }
		 if (form.cmbmasalah.value == "0"){
		    alert("Data Masalah tidak boleh kosong!");
		    return (false);
		 }
		 if (form.cmbtindakan.value == "0"){
		    alert("Data Tindakan tidak boleh kosong!");
		    return (false);
		 }
		return (true);
		}

		function hanyaAngka(evt) {
		  var charCode = (evt.which) ? evt.which : event.keyCode
		  if (charCode > 31 && (charCode < 48 || charCode > 57))

	    return false;
	  	return true;
	}

		function hanyaAngka(evt) {
		  var charCode = (evt.which) ? evt.which : event.keyCode
		  if (charCode > 31 && (charCode < 48 || charCode > 57))

	    return false;
	  	return true;
	}
	</script>
</head>
<body>
	
	<?php 
		include "../library/koneksi.php";
		include "../template/nav.php";
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
			</div>

			<div class="form">
				<form class="form1" method="post" action="../library/proses_edit.php" onsubmit="return validasi_input(this)">
					
						<input type="hidden" name="idinput" value="<?php echo $data['id_input']; ?>" required>
						<input type="hidden" name="Tanggal" value="<?php $tgl=date('d-m-Y'); echo $tgl; ?>">
					
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
						<label>Lebar Kain</label>
						<input type="Number" name="lebar" min="1" onkeypress="return hanyaAngka(event)" value="<?php echo $data['lebar']; ?>" required>
					</p>
					<p>
						<label>Gramasi Kain</label>
						<input type="Number" name="gramasi" min="1" onkeypress="return hanyaAngka(event)" value="<?php echo $data['gramasi']; ?>" required>
					</p>
					<p>
						<label>Hasil</label>
						<select name="cmbhasil" onchange="disable_enable(this.pilihan)" required>
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
						<select name="cmbmasalah" onchange="disable_enable(this.pilihan)" hidden="true" required>
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
						<select name="cmbtindakan" onchange="disable_enable(this.pilihan)" hidden="true" required>
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
						<label>Keterangan</label>
						<input type="text" name="ket" value="<?php echo $data['ketinspector']; ?>">
					</p>
					<p class="full-width">
						<button>Simpan Perubahan</button>
					</p>
				</form>
				<form>
					<p class="full-width">
						<button style="background: red" type="button" onclick="location.href='../admin/daftaredit.php'">Batal</button>
					</p>
				</form>
			</div>
		</div>
	</div>
</body>
</html>