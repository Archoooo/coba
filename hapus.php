<?php 
require 'functions.php';
$id = $_GET["id"];

if(hapus($id) > 0) {
	echo "Data Berhasil Dihapus";
	header("Location:index.php");

	} else {
		echo "Data Gagal Dihapus";
		echo mysqli_error($conn);
	}

?>