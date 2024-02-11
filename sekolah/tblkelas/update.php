<?php
//koneksi ke database
include 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //Ambil data dari formulir
    $kd_kelas = $_POST['kd_kelas'];
    $nama_kelas = $_POST['nama_kelas'];
    
    //Query untuk memperbarui data
    $query = "UPDATE tblkelas SET nama_kelas='$nama_kelas' WHERE kd_kelas='$kd_kelas'";
    mysqli_query($conn, $query);    

    //Redirect setelah memperbarui data
    header("Location: index.php");
    exit();
}


//Ambil data kelas berdasarkan NIS
$kd_kelas = $_GET['kd_kelas'];
$query = "SELECT * FROM tblkelas WHERE kd_kelas='$kd_kelas'";
$result = mysqli_query($conn, $query);
$kelas = mysqli_fetch_assoc($result);
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
                <label for="kd_kelas">Kode kelas:</label>
                <input type="text" class="form-control" id="kd_kelas" name="kd_kelas" value="<?php echo $kelas['kd_kelas']; ?>" readonly>
            </div>
            <div class="form-group">
                <label for="nama_kelas">Nama :</label>
                <select class="form-control" id="nama_kelas" name="nama_kelas">
                    <option value="10" <?php if ($kelas['nama_kelas'] == '10') echo 'selected'; ?>>10</option>
                    <option value="11" <?php if ($kelas['nama_kelas'] == '11') echo 'selected'; ?>>11</option>
                    <option value="12" <?php if ($kelas['nama_kelas'] == '12') echo 'selected'; ?>>12</option>
                </select>
            </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
        </form> 
    </div>
</body>

</html>