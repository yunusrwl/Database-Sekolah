<?php
// koneksi ke database
include 'koneksi.php';

// Query untuk mengambil semua data user
$query = "SELECT * FROM  tbljurusan";
$result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Jurusan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>

  <nav class="navbar navbar-expand-lg bg-primary">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">SMK Negeri 3 JEPARA</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-link active" aria-current="page" href="../navbar.php">Home</a>
          <a class="nav-link" href="/sekolah/tblkelas">Kelas</a>
          <a class="nav-link" href="/sekolah/tblsiswa">Siswa</a>
        </div>
      </div>
    </div>
  </nav>

    <div class="container">
        <h2>Daftar Jurusan</h2>
        <a href="create.php" class="btn btn-primary mb-3"> Tambah Jurusan</a>
        <table class="table">
            <thead>
                <tr>
                    <th>Kode Jurusan</th>
                    <th>Nama Jurusan</th>
                 <tr>
            </thead>
            <tbody>
                <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                    <tr>
                        <td><?php echo $row['id_jurusan']; ?></td>
                        <td><?php echo $row['nama_jurusan']; ?></td>
                        <td>
                            <a href="update.php?id_jurusan=<?php echo $row['id_jurusan']; ?>" class="btn btn-warning btn-sm">Edit</a>
                            <a href="delete.php?id_jurusan=<?php echo $row['id_jurusan']; ?>" class="btn btn-danger btn-sm">Delete</a>
                        <td>
                    </tr>
                <?php } ?>
            <tbody>
        </table>
    </div>
</body>
</html>