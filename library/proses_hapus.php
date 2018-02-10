<?php
	include "../library/koneksi.php";
	$idinput='';
	if (isset($_GET['idinput'])) {
		$idinput=$_GET['idinput'];
	}

	$query="DELETE FROM m_input WHERE id_input='".$idinput."'";

	$sql=mysqli_query($connect,$query);

	if($sql) { //cek jika proses hapus ke database sukses atau tidak
			// jika sukses, lakukan:
			header("location: ../admin/daftaredit.php");
		} else {
			// jika gagal, lakukan:
			echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
			echo "<br><a href='../admin/daftaredit.php'>Kembali</a>";
		} 
?>