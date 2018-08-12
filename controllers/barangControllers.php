<?php
	include('koneksi.php');
	$link = koneksi();

	// Create untuk simpan Barang
	if (isset($_POST["btnMsimpan"])) {
		$mIdb = $_POST["mIdb"];
		$mNama = $_POST["mNama"];
		$mdetail = $_POST["mdetail"];
		$mharga = $_POST["mharga"];
		$mstock = $_POST["mstock"];
		
		$mQuery = "insert into barang (id_barang,nama_barang,detail,harga,stok_barang) values 
					('$mIdb','$mNama','$$mdetail','$mharga','$mstock')";
		$result = mysqli_query($link,$mQuery);
		header("location:../view/barang.php");
	}

	//Select Model
		$querybarang = "SELECT * FROM barang";
		$getModel = mysqli_query($link,$querybarang);

	//Select Barang
		$getData = mysqli_query($link,$querybarang);

	//retrive Data Barang
	$Qbarang  = "SELECT barang.`id_barang`,barang.`nama_barang`,barang.`detail`,barang.`harga`,barang.`stok_barang` FROM barang";
	$getbarang = mysqli_query($link,$Qbarang);

	//Hapus Barang
	if (isset($_POST["btnHapus"])) {
		$Hideb = $_POST["hapus_brg"];
		$KHapus = "delete from barang where id_barang = '$Hideb'";
		$delete = mysqli_query($link,$KHapus);
	header("location:../view/barang.php");
	}

	//Ubah data barang
	if (isset($_POST["btnUbah"])) {
		$mIdb = $_POST["mIdb"];
		$mNama = $_POST["mNama"];
		$mdetail = $_POST["mdetail"];
		$mharga = $_POST["mharga"];
		$mstock = $_POST["mstock"];


		$updatebarang = "UPDATE `ahi_order`.`barang` SET `nama_barang` = '$UNama', `detail` = '$Udetail', `harga` = '$Uharga', 
`stok_barang` = '$UStock'";
		$update = mysqli_query($link,$updatebarang);
		header("location:../view/barang.php");
	}

?>