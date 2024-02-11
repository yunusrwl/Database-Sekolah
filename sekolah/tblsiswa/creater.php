<?php
// Koneksi ke database
include 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
// Ambil data dari formulir
$nis = $_POST['nis'];
$nama = $_POST['nama'];
$tt1 = $_POST['ttl'];
$alamat = $_POST['alamat'];
$jenis_kelamin = $_POST['jenis_kelamin'];

// Query untuk menyimpan data baru 
$query = "INSERT INTO tblsiswa (nis, nama, ttl, alamat, jenis_kelamin) VALUES ('$nis', '$nama', '$ttl', '$alamat', '$jenis_kelamin')";
mysqli_query($conn, $query);

// Redirect setelah berhasil membuat data baru
header("Location: index.php");
exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Create Siswa</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container">
<h2>Tambah Siswa</h2>
<form method="POST">
<div class="form-group">
<label for="nis">NIS:</label>
<input type="number" class="form-control" id="nis" name="nis">
</div>
<div class="form-group">
<label for="nama">Nama:</label>
<input type="text" class="form-control" id="nama" name="nama">
</div>
<div class="form-group">
<label for="ttl">Tanggal Lahir:</label>
<input type="date" class="form-control" id="ttl" name="ttl">
</div>
<div class="form-group">
<label for="alamat">Alamat:</label>
<input type="text" class="form-control" id="alamat" name="alamat">
</div>
<div class="form-group">
<label for="jenis_kelamin">Jenis Kelamin:</label>
<select class="form-control" id="jenis_kelamin" name="jenis_kelamin">
<option value="Laki-laki">Laki-laki</option>
<option value="Perempuan">Perempuan</option>
</select>
</div>
<button type="submit" class="btn btn-primary">Simpan</button>
</form>
</div>
</html>