<?php 
require 'functions.php';

//mengambilkan data dari tabel mahasiswa
$mahasiswa = query("SELECT * FROM mahasiswa");

?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Halaman Admin</title>
</head>
<body>
	<h1>Daftar Mahasiswa</h1>

	<a href="tambah.php">Tambah Data Mahasiswa</a>
	<br><br>
	<table border="1" cellpadding="10" cellspacing="0">
		<tr>
			<th>No.</th>
			<th>Aksi</th>
			<th>Nama</th>
			<th>NPM</th>
			<th>Jurusan</th>
			<th>Email</th>
		</tr>

		<?php $i=1; ?>
		<?php foreach($mahasiswa as $mhs): ?>

		<tr>
			<td><?php echo $i; ?></td>
			<td>
				<a href="ubah.php?id=<?php echo $mhs["id"]; ?>">Ubah</a>
				<a href="hapus.php?id=<?php echo $mhs["id"]; ?>" onclick="return confirm('Anda Yakin?')">Hapus</a>
			</td>
			<td><?php echo $mhs["nama"]; ?></td>
			<td><?php echo $mhs["npm"]; ?></td>
			<td><?php echo $mhs["jurusan"]; ?></td>
			<td><?php echo $mhs["email"]; ?></td>
		</tr>
		<?php $i++; ?>
		<?php endforeach; ?>
	</table>
</body>
</html>