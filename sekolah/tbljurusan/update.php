<?php
//koneksi ke database
include 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //Ambil data dari formulir
    $id_jurusan = $_POST['id_jurusan'];
    $nama_jurusan = $_POST['nama_jurusan'];
    
    //Query untuk memperbarui data
    $query = "UPDATE tbljurusan SET nama_jurusan='$nama_jurusan' WHERE id_jurusan='$id_jurusan'";
    mysqli_query($conn, $query);    

    //Redirect setelah memperbarui data
    header("Location: index.php");
    exit();
}


//Ambil data jurusan berdasarkan NIS
$id_jurusan = $_GET['id_jurusan'];
$query = "SELECT * FROM tbljurusan WHERE id_jurusan='$id_jurusan'";
$result = mysqli_query($conn, $query);
$jurusan = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"> 
    <title>Edit jurusan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5">
        <h2>Edit Jurusan</h2>
        <form method="POST">
            <div class="form-group">
                <label for="id_jurusan">Kode Jurusan:</label>
                <input type="text" class="form-control" id="id_jurusan" name="id_jurusan" value="<?php echo $jurusan['id_jurusan']; ?>" readonly>
            </div>
            <div class="form-group">
                <label for="nama_jurusan">Nama Jurusan:</label>
                <input type="text" class="form-control" id="nama_jurusan" name="nama_jurusan" value="<?php echo $jurusan['nama_jurusan']; ?>">
            </div> 
            
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form> 
    </div>
</body>
</html>