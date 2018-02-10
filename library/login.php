<?php
	session_start();
	include "koneksi.php";
	if (isset($_POST['login'])) {
		$user = mysqli_real_escape_string($connect,htmlentities($_POST['username']));
		$pass = mysqli_real_escape_string($connect,htmlentities($_POST['password']));
		$query = "select * from inspector where nama='".$user."' and pass='".$pass."'";
		$sql = mysqli_query($connect,$query);
		
		if (mysqli_num_rows($sql) == 0) {
			echo '<script language="javascript">alert("User tidak terdaftar!"); document.location="../login2.html";</script>';
		} else {
			$row = mysqli_fetch_assoc($sql);
			if($row['level'] == 1) {
				$_SESSION['admin']=$user;
				echo '<script language="javascript">alert("Anda berhasil Login Admin!"); document.location="../admin/dashboard0.php";</script>';				
			} else {
				$_SESSION['inspector']=$user;
				echo '<script language="javascript">alert("Anda berhasil Login inspector!"); document.location="../inspector/input.php";</script>';
			}
		}
	}
?>