<?php
	include 'koneksi.php';

	$tanggal = $_POST['tanggal'];
	$nopo= $_POST['nopo'];
	$nolot= $_POST['nolot'];
	$nmkain= $_POST['nmkain'];
	$warna= $_POST['warna'];
	$celupan= $_POST['cmbcelupan'];
	$lebar= $_POST['lebar'];
	$gramasi= $_POST['gramasi'];
	$hasil= $_POST['cmbhasil'];
	$masalah= $_POST['cmbmasalah'];
	$tindakan= $_POST['cmbtindakan'];
	$inspector=$_POST['inspector'];
	$ket=$_POST['ket'];
	
	$query="INSERT INTO m_input values ('','".$tanggal."','".$nopo."','".$nolot."','".$nmkain."','".$warna."','".$celupan."','".$lebar."','".$gramasi."','".$hasil."','".$masalah."','".$tindakan."','Pending','".$inspector."','','".$ket."')";
	
	$sql=mysqli_query($connect,$query);

	if($sql) {
			header("location: ../inspector/input.php");
		} else {
			echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
			echo "<br><a href='../inspector/input.php'>Kembali Ke Home</a>";
		} 

	
?>