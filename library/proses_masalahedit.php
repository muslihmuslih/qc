<?php
	//cek dahulu, jika tombol simpan di klik
	//if(isset($_POST['simpan']));
	include "koneksi.php";

	//ambil data yang dikirim dari form
	$idmasalah=$_POST['idmasalah'];
	$kdmasalah= $_POST['kdmasalah'];
	$deskripsi= $_POST['deskripsi'];
	

	//proses ubah data ke database
	$query = "UPDATE m_masalah SET kd_masalah='".$kdmasalah."', deskripsi='".$deskripsi."' where id_masalah='".$idmasalah."'"; 

	
	//eksekusi query dari variabel $query
	$sql=mysqli_query($connect,$query);

	if($sql) { //cek jika proses simpan ke database sukses atau tidak
			// jika sukses, lakukan:
			header("location: ../admin/daftarmasalah.php");
		} else {
			// jika gagal, lakukan:
			echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
			echo "<br><a href='../admin/daftarmasalah.php'>Kembali</a>";
		} 
?>