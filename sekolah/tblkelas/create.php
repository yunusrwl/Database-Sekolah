<?php
//koneksi ke database
include 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
//Ambil data dari formulir
$kd_kelas = $_POST['kd_kelas'];
$nama_kelas = $_POST['nama_kelas'];

//Query untuk menyimpan data baru
$query = "INSERT INTO tblkelas (kd_kelas, nama_kelas) VALUES ('$kd_kelas','$nama_kelas')";
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
    <title>Create kelas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h2>Tambah kelas</h2>
        <form method="POST">
            <div class="form-group">
                <label for="kd_kelas">Kode Kelas:</label>
                <input type="number" class="form-control" id="kd_kelas" name="kd_kelas">
            </div>
            <div class="form-group">
                <label for="nama_kelas">Nama :</label>
                <select class="form-control" id="nama_kelas" name="nama_kelas">
                    <option value="10">10</option>
                    <option value="11">11</option>
                    <option value="12">12</option>
                </select>
            </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
        </form> 
    </div>
</body>

</html>