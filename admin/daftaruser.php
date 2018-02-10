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
	<h2>Daftar User</h2>
	<table id="tabeldata" cellspacing="8">
		<tr>
			<th>Nama</th>
			<th>Bagian</th>
			<th>Otoritas</th>
		</tr>
		
		<?php
			include "../library/koneksi.php";
			$query="select * from inspector";
			$result=mysqli_query($connect,$query);
			while ($row=$result -> fetch_object()) {	
				echo "<tr>
						<td> $row->nama</td>
						<td> $row->bagian</td>
						<td> $row->otoritas</td>					
					</tr>";
			 }
		?>
	</table>

</body>
</html>