<?php
	
	include "koneksi.php";
	include "../admin/akses.php";

	//ambil data yang dikirim dari form

	$idinput=$_GET['idinput'];
	$tgl=date('Y-m-d');
	$by="";
	if (isset($_SESSION['admin'])) {
		$by=$_SESSION['admin'];
	}
	$ket="by $by, $tgl";

	//proses ubah data ke database
	$query = "UPDATE m_input SET status='YES', keterangan='".$ket."' WHERE id_input='".$idinput."' ";

	//eksekusi query dari variabel $query
	$sql=mysqli_query($connect,$query);

	if ($sql) { //cek jika proses simpan ke database sukses atau tidak
		// jika sukses, lakukan:
		header("location: ../data/data_yusuf.php");
	} else {
		// jika gagal, lakukan:
		echo "Maaf, terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
		echo "<br><a href='../admin/dashboard1.php'>Kembali</a>";
	}
?>