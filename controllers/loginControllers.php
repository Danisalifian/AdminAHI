<?php
	session_start();
	include('koneksi.php');
	$link = koneksi();

	if (isset($_POST['btnLogin'])) {
		$uname = $_POST['Uname'];
		$pass = $_POST['Pass'];

		if (!empty($uname) && !empty($pass)) {
			$query = "select * from admin where username = '$uname' and password = '$pass'";
			$result = mysqli_query($link,$query);
			$found = mysqli_num_rows($result);

			if ($found == 1) {
				$_SESSION['uname'] = $_POST['Uname'];
				echo '<script>window.alert("Selamat Datang");window.location=("../view/dashboard.php");</script>';
			} else {
				echo '<script>window.alert("Maaf, Username atau Password anda salah!");window.location=("../index.php");</script>';	
			}
		}
	}
?>