<?php 
require 'functions.php';
//cek apakah tombol submit sudah ditekan
if(isset($_POST["submit"])) {

	//cek keberhasilan penambahan data
	if (tambah($_POST) > 0) {
		echo "Penambahan Data Berhasil";
		header ("location:index.php");
		} else {
			echo "Penambahan Data Gagal";
			echo "<br>";
			echo mysqli_error($conn);
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Tambah Data Mahasiswa</title>
</head>
<body>
	<h1>Tambah Data Mahasiswa</h1>
	<form action="" method="post">
		<ul>
			<li>
				<label for="nama">NAMA :</label>
				<input type="text" name="nama" id="nama" required>
			</li>
			<li>
				<label for="npm">NPM :</label>
				<input type="text" name="npm" id="npm" required>
			</li>
			<li>
				<label for="jurusan">JURUSAN :</label>
				<input type="text" name="jurusan" id="jurusan" required>
			</li>
			<li>
				<label for="email">EMAIL :</label>
				<input type="text" name="email" id="email" required>
			</li>			
			<li>
				<button type="submit" name="submit">Tambah Data</button>
			</li>
		</ul>
	</form>
</body>
</html>