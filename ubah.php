<?php 
require 'functions.php';

//ambil data di URL
$id = $_GET["id"];

//query berdasarkan ID yang dipilih
$mhs = query("SELECT * FROM mahasiswa WHERE id=$id")[0];

//cek apakah tombol submit sudah ditekan
if(isset($_POST["submit"])) {

	//cek keberhasilan ubah data
	if (ubah($_POST) > 0) {
		echo "Ubah Data Berhasil";
		header ("location:index.php");
		} else {
			echo "Ubah Data Gagal";
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
	<title>Ubah Data Mahasiswa</title>
</head>
<body>

	<h1>Ubah Data Mahasiswa</h1>

	<form action="" method="post">
		<input type="hidden" name="id" value="<?php echo $mhs["id"]; ?>">
		<ul>
			<li>
				<label for="nama">NAMA :</label>
				<input type="text" name="nama" id="nama" required
				value = "<?php echo $mhs["nama"]; ?>">
			</li>
			<li>
				<label for="npm">NPM :</label>
				<input type="text" name="npm" id="npm" required
				value = "<?php echo $mhs["npm"]; ?>">
			</li>
			<li>
				<label for="jurusan">JURUSAN :</label>
				<input type="text" name="jurusan" id="jurusan" required
				value = "<?php echo $mhs["jurusan"]; ?>">
			</li>
			<li>
				<label for="email">EMAIL :</label>
				<input type="text" name="email" id="email" required
				value = "<?php echo $mhs["email"]; ?>">
			</li>			
			<li>
				<button type="submit" name="submit">Ubah Data</button>
			</li>
		</ul>
		
	</form>
</body>
</html>