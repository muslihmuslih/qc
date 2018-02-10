<?php include "akses.php"; ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta name="viewport" content="width=devices-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="../style/style.css" />
</head>
<body>
	<?php include "../template/nav.php"; ?>
	<h2>Daftar Masalah</h2>
	<a href="form_tambahmasalah.php">+ Tambah Data Deskripsi Masalah</a>
	<table id="tabeldata" cellspacing="8">
		<tr>
			<th>Kode Masalah</th>
			<th colspan="2">Deskripsi Masalah</th>
		</tr>
		
		<?php
			include "../library/koneksi.php";
			$query="select * from m_masalah";
			$result=mysqli_query($connect,$query);
			while ($row=$result -> fetch_object()) {	
				echo "<tr>
						<td> $row->kd_masalah</td>
						<td> $row->deskripsi</td>
						<td>";
						?>
							<a href="formeditmasalah.php?idmasalah=<?php echo $row->id_masalah; ?>">Edit</a>
							<a href="../library/proses_hapusmasalah.php?idmasalah=<?php echo $row->id_masalah; ?>">Hapus</a>
						</td>				
					</tr>
					<?php
			 } ;
		?>
	</table>

</body>
</html>