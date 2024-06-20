<?php 

//koneksi ke database
$conn = mysqli_connect('localhost','root','','phplanjut');

//Function Query
function query($query) {
	global $conn;

	$result = mysqli_query($conn,$query);
	$rows = [];
	while($mhs = mysqli_fetch_assoc($result)){
		$rows[] = $mhs;
	}
	return $rows;
}

//Function penambahan data
function tambah($tampung_data) {
	global $conn;

	//ambil data dari tiap elemen
	$nama = $tampung_data["nama"];
	$npm = $tampung_data["npm"];
	$jurusan = $tampung_data["jurusan"];
	$email = $tampung_data["email"];

	//query insert data
	$query = "INSERT INTO mahasiswa VALUES ('','$nama','$npm','$jurusan','$email')";

	mysqli_query($conn,$query);

	return mysqli_affected_rows($conn);
}

//Function Hapus
function hapus($id) {	
	global $conn;
	
	mysqli_query($conn,"DELETE FROM mahasiswa WHERE id=$id");
	return mysqli_affected_rows($conn);
}


//Function Ubah
function ubah($tampung_data) {
	global $conn;

	$id = $tampung_data["id"];
	$nama = $tampung_data["nama"];
	$npm = $tampung_data["npm"];
	$jurusan = $tampung_data["jurusan"];
	$email = $tampung_data["email"];

	//query update data
	$query = "UPDATE mahasiswa SET
				nama = '$nama',
				npm = '$npm',
				jurusan = '$jurusan',
				email = '$email'
			  WHERE id = $id";
	
	mysqli_query($conn,$query);
	return mysqli_affected_rows($conn);

}
?>
