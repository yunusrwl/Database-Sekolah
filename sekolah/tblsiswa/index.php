<?php
// koneksi ke database
include 'koneksi.php';

// Query untuk mengambil semua data user
$query = "SELECT * FROM tblsiswa";
$result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Siswa</title>
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
        <a class="nav-link" href="/sekolah/tbljurusan">Jurusan</a>
        <a class="nav-link" href="/sekolah/tblkelas">Kelas</a>
      </div>
    </div>
  </div>
</nav>


    <div class="container">
        <h2>Daftar Siswa</h2>
        <a href="create.php" class="btn btn-primary mb-3"> Tambah Siswa</a>
        <table class="table">
            <thead>
                <tr>
                    <th>NIS</th>
                    <th>Nama</th>
                    <th>Tanggal Lahir</th>
                    <th>Alamat</th>
                    <th>Jenis Kelamin</th>
                 <tr>
            </thead>
            <tbody>
                <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                    <tr>
                        <td><?php echo $row['nis']; ?></td>
                        <td><?php echo $row['nama']; ?></td>
                        <td><?php echo $row['ttl']; ?></td>
                        <td><?php echo $row['alamat']; ?></td>
                        <td><?php echo $row['jenis_kelamin']; ?></td>
                        <td>
                            <a href="update.php?nis=<?php echo $row['nis']; ?>" class="btn btn-warning btn-sm">Edit</a>
                            <a href="delete.php?nis=<?php echo $row['nis']; ?>" class="btn btn-danger btn-sm">Delete</a>
                        <td>
                    </tr>
                <?php } ?>
            <tbody>
        </table>
    </div>
</body>
</html>