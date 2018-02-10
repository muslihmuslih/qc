<?php
	include "koneksi.php";

	 //ambil data yang dikirim dari form
	$nama=$_POST['nama'];
	$bagian=$_POST['cmbbagian'];
	$otoritas=$_POST['cmbotoritas'];
	$pass=$_POST['password'];
	//$level=$_POST['level'];

	if ($otoritas=='admin') {
		$level='1';
	} else {
		$level='2';
	}
	
	//proses insert data ke database
	$query= "INSERT INTO inspector values ('','".$nama."','".$pass."','".$level."','".$otoritas."','".$bagian."')";

	$sql=mysqli_query($connect,$query);

	if ($sql) {
		echo '<script language="javascript">alert("User berhasil ditambahkan"); document.location="../admin/tambah_user.php";</script>';
	} else {
		echo '<script language="javascript">alert("User gagal ditambahkan, silakan cek koneksi ke database"); document.location="../admin/tambah_user.php";</script>';
	}
?>