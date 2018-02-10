<?php include "akses.php"; ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta name="viewport" content="width=devices-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="../style/style.css" />
</head>
<body>
	
		<?php
			include "../library/koneksi.php";
			include "../template/nav.php";
				
				$query1="SELECT * FROM m_input where nama='cepi' and status='pending'";
				$query2="SELECT * FROM m_input where nama='epul' and status='pending'";
				$query3="SELECT * FROM m_input where nama='permana' and status='pending'";
				$query4="SELECT * FROM m_input where nama='yusuf' and status='pending'";
				$query5="SELECT * FROM m_input where nama='agung' and status='pending'";
				$query6="SELECT * FROM m_input where nama='acep' and status='pending'";
				
				$result1=mysqli_query($connect,$query1);
				$result2=mysqli_query($connect,$query2);
				$result3=mysqli_query($connect,$query3);
				$result4=mysqli_query($connect,$query4);
				$result5=mysqli_query($connect,$query5);
				$result6=mysqli_query($connect,$query6);

				$totalcepi=mysqli_num_rows($result1);
				$totalepul=mysqli_num_rows($result2);
				$totalpermana=mysqli_num_rows($result3);
				$totalyusuf=mysqli_num_rows($result4);
				$totalagung=mysqli_num_rows($result5);
				$totalacep=mysqli_num_rows($result6);
		?>

		<table id="tabeldata" cellspacing="8">
			<tr>
				<th colspan="3"><h2>Notifikasi</h2></th>
			</tr>
			<tr>
				<td><b>Inspector</td>
				<td colspan="2"><b>Data Baru Input/Pending</td>
			</tr>
			<tr>
				<td>Cepi</td>
				<td><?php echo $totalcepi; ?> data</td>
				<td>
					<button onclick="location.href='../data/data_cepi.php'">VIEW</button>
				</td>
			</tr>
			<tr>
				<td>Epul</td>
				<td><?php echo $totalepul; ?> data</td>
				<td><button onclick="location.href='../data/data_epul.php'">VIEW</button></td>
			</tr>
			<tr>
				<td>Permana</td>
				<td><?php echo $totalpermana; ?> data</td>
				<td><button onclick="location.href='../data/data_permana.php'">VIEW</button></td>
			</tr>
			<tr>
				<td>Yusuf</td>
				<td><?php echo $totalyusuf; ?> data</td>
				<td><button onclick="location.href='../data/data_yusuf.php'">VIEW</button></td>
			</tr>
			<tr>
				<td>Agung</td>
				<td><?php echo $totalagung; ?> data</td>
				<td><button onclick="location.href='../data/data_agung.php'">VIEW</button></td>
			</tr>
			<tr>
				<td>Acep</td>
				<td><?php echo $totalacep; ?> data</td>
				<td><button onclick="location.href='../data/data_acep.php'">VIEW</button></td>
			</tr>
		</table>

</body>
</html>