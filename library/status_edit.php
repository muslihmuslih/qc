<?php
	
	include "koneksi.php";

	//ambil data yang dikirim dari form

	$idinput=$_POST['idinput'];


	//proses ubah data ke database
	$query = "UPDATE m_input SET status='".$status."' WHERE id_input='".$idinput."' ";

	//eksekusi query dari variabel $query
	$sql=mysqli_query($connect,$query);

	if ($sql) { //cek jika proses simpan ke database sukses atau tidak
		// jika sukses, lakukan:
		header("location: ../admin/dashboard.php");
	} else {
		// jika gagal, lakukan:
		echo "Maaf, terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
		echo "<br><a href='../admin/dashboard.php'>Kembali</a>";
	}
?>