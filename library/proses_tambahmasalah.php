<?php
	include 'koneksi.php';

	$kdmasalah = $_POST['kdmasalah'];
	$deskripsi= $_POST['deskripsi'];
	
	$query="INSERT INTO m_masalah values ('','".$kdmasalah."','".$deskripsi."')";
	
	$sql=mysqli_query($connect,$query);

	if($sql) {
			header("location: ../admin/daftarmasalah.php");
		} else {
			echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
			echo "<br><a href='../admin/daftarmasalah.php'>Kembali Ke Home</a>";
		} 

	
?>