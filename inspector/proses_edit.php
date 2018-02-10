<?php
	//cek dahulu, jika tombol simpan di klik
	//if(isset($_POST['simpan']));
	include "../library/koneksi.php";

	//ambil data yang dikirim dari form
	$idinput=$_POST['idinput'];
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
	$ket=$_POST['ket'];

	//proses ubah data ke database
	$query = "UPDATE m_input SET no_po='".$nopo."', no_lot='".$nolot."', nama_kain='".$nmkain."', warna='".$warna."', supplier='".$celupan."', lebar='".$lebar."', gramasi='".$gramasi."', hasil='".$hasil."', deskripsi='".$masalah."', tindakan='".$tindakan."', ketinspector='".$ket."' where id_input='".$idinput."'"; 

	
	//eksekusi query dari variabel $query
	$sql=mysqli_query($connect,$query);

	if($sql) { //cek jika proses simpan ke database sukses atau tidak
			// jika sukses, lakukan:
			header("location: daftaredit.php");
		} else {
			// jika gagal, lakukan:
			echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
			echo "<br><a href='daftaredit.php'>Kembali</a>";
		} 
?>