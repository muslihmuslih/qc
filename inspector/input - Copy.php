<?php include ("akses.php"); ?>
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
			document.forms[0].cmbmasalah.value.selected==0;
			document.forms[0].cmbtindakan.disabled=false;
			document.forms[0].cmbtindakan.hidden=false;
			document.forms[0].cmbtindakan.value.selected==0;
		} else {
			document.forms[0].cmbmasalah.disabled=true;
			document.forms[0].cmbmasalah.hidden=true;
			document.forms[0].cmbmasalah.value=="OK";
			document.forms[0].cmbtindakan.disabled=true;
			document.forms[0].cmbtindakan.hidden=true;
			document.forms[0].cmbtindakan.value=="OK";
			}
		}
	</script>

	<script>
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
	</script>

	<script type="text/javascript">
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
	?>
	<div class="contain">
		<div class="wrapper">
			<div class="contacts">
				<h2>Form Input Data QC</h2>
				<?php $inspector=$_SESSION['inspector']; ?>
				<p> Tanggal : <?php $tgl=date('Y-m-d'); echo $tgl; ?> </p>
				<p>Hi... <?php echo $inspector; ?> , <a href="../library/logout.php" style="color: white">Log Out</a></p>
			</div>

			<div class="form">
				<form class="form1" method="post" action="../library/proses_input.php" onsubmit="return validasi_input(this)">
					
						<input type="text" name="tanggal" value="<?php $tgl=date('Y-m-d'); echo $tgl; ?>" hidden>
						<input type="hidden" name="inspector" value="<?php echo $inspector ?>">
					
					<p class="full-width">
					</p>	
					<p>	
						<label>No. PO</label>
						<input type="text" name="nopo" placeholder="-- Input No. PO --" required="">
					</p>
					<p>
						<label>No. Lot/Roll </label>
						<input type="text" name="nolot" placeholder="-- Input No. Lot/Roll --" required="">
					</p>
					<p>
						<label>Nama Kain</label>
						<input type="text" name="nmkain" placeholder="-- Input Nama Kain --" required="">
					</p>
					<p>
						<label>Warna</label>
						<input type="text" name="warna" placeholder="-- Input Warna Kain --" required="">
					</p>
					<p>
						<label>Celupan</label>
						<select name="cmbcelupan" required="">
							<option value="0">-- Input Celupan --</option>
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
						<input type="Number" name="lebar" min="1" onkeypress="return hanyaAngka(event)" placeholder="-- L (Cm) --" required="">
					</p>
					<p>
						<label>Gramasi Kain</label>
						<input type="Number" name="gramasi" min="1" onkeypress="return hanyaAngka(event)" placeholder="-- Gsm --" required="">
					</p>
					<p>
						<label>Hasil</label>
						<select name="cmbhasil" onchange="disable_enable(this.pilihan)" required="">
							<option value="0">-- Input Hasil --</option>
							<option value="OK">OK</option>
							<option value="NO">NO</option>
						</select>
					</p>
					
					<p>
						<!--<label>Masalah</label>-->
						<select name="cmbmasalah" onchange="disable_enable(this.pilihan)" disabled="true" hidden="true" required="">
							<option value="OK"></option>
							<option value="0">-- Input Masalah --</option>
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
						<!--<label>Tindakan</label>-->
						<select name="cmbtindakan" onchange="disable_enable(this.pilihan)" disabled="true" hidden="true" required="">
							<option value="OK"></option>
							<option value="0">-- Input Tindakan --</option>
							<?php
								$query="select * from m_tindakan";
								$result=mysqli_query($connect,$query);
								while ($row = mysqli_fetch_assoc($result)) {					 	
								 	echo "<option>$row[tindakan]</option>";
								 } 
							?>
						</select>
					</p>
					<p>
						<button>Simpan</button>
					</p>
					<p>
						<button type="button" onclick="location.href='./daftaredit.php'">Lihat Daftar </button>
					</p>
				</form>
			</div>
		</div>
	</div>
</body>
</html>