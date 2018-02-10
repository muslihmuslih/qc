<?php
	session_start();
	include "../library/koneksi.php"; 
	 
	if(!isset($_SESSION['inspector'])){
		echo "<script language='javascript'>alert('Anda harus Login!'); document.location='../login2.html';</script>";
	}
?>