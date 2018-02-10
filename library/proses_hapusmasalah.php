<?php
	include "../library/koneksi.php";
	$idmasalah='';
	if (isset($_GET['idmasalah'])) {
		$idmasalah=$_GET['idmasalah'];
	}

	$query="DELETE FROM m_masalah WHERE id_masalah='".$idmasalah."'";

	$sql=mysqli_query($connect,$query);

	if($sql) { //cek jika proses hapus ke database sukses atau tidak
			// jika sukses, lakukan:
			header("location: ../admin/daftarmasalah.php");
		} else {
			// jika gagal, lakukan:
			echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
			echo "<br><a href='../admin/daftarmasalah.php'>Kembali</a>";
		} 
?>