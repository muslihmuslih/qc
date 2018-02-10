<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta name="viewport" content="width=devices-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="../style/style.css" />
</head>
<body>
	<nav>
		<ul>
			<li><a href="../admin/dashboard0.php">Dashboard</a></a></li>
			<li><a href="">Data</a>
				<ul>
					<li><a href="../admin/dashboard1.php">Data ACC Pending</a></li>
					<li><a href="../admin/dashboard.php">Edit Data Status ACC</a></li>
					<li><a href="../admin/daftaredit.php">Edit Data</a></li>
				</ul>	
			</li>
			<li><a href="../admin/rekap_data.php">Rekap Data</a></li>
			<li><a href="../admin/daftarmasalah.php">Daftar Masalah</a></li>
			<li><a href="">User</a>
				<ul>
					<li><a href="../admin/daftaruser.php">Daftar User</a></li>
					<li><a href="../admin/tambah_user.php">Tambah User</a></li>
				</ul>
			</li>
			<li class="right"><a href="../library/logout.php">Hi... <?php echo $_SESSION['admin']; ?>, Logout</a></li>
		</ul>
	</nav>
</body>
</html>