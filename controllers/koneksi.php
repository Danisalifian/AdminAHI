<?php
	function koneksi(){
		$host = "127.0.0.1";
		$username = "root";
		$password = "";
		$database = "ahi_order";
		$link = mysqli_connect($host, $username, $password, $database);

		if (!$link) {
			echo "Failed to connect to MySql" . mysqli_error;
		}

		return $link;
	}
?>