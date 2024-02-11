<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Homepage</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-image: url('bg.jpg'); /* Ganti 'gambar.jpg' dengan URL atau path ke gambar yang ingin Anda gunakan */
            background-size: cover; /* Memastikan gambar diatur ulang agar mengisi seluruh area latar belakang */
            background-repeat: no-repeat; /* Mencegah gambar diulang pada latar belakang */
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            background-color: rgba(255, 255, 255, 0.7); /* Menambahkan latar belakang transparan */
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
            overflow: hidden; /* Agar efek hover bisa diatur */
        }
        h1 {
            text-align: center;
        }
        .profile {
            margin-top: 30px;
            text-align: center;
            position: relative;
            overflow: hidden; /* Agar efek hover bisa diatur */
        }
        .profile img {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            object-fit: cover;
            margin-bottom: 10px;
            transition: all 0.3s ease; /* Animasi saat hover */
        }
        .profile h2 {
            margin-bottom: 5px;
            transition: all 0.3s ease; /* Animasi saat hover */
        }
        .profile p {
            margin: 0;
            transition: all 0.3s ease; /* Animasi saat hover */
        }
        .profile:hover img {
            transform: scale(1.1); /* Efek zoom pada gambar saat hover */
        }
        .profile:hover h2, .profile:hover p {
            color: #ff4500; /* Warna teks berubah saat hover */
        }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg bg-primary">
    <div class="container-fluid">
        <a class="navbar-brand" href="https://smkn3jepara.sch.id/">
            <img src="logo.png" alt="SMK Negeri 3 JEPARA" width="50" height="50">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
                <a class="nav-link" href="/sekolah/tblsiswa">Siswa</a>
                <a class="nav-link" href="/sekolah/tbljurusan">Jurusan</a>
                <a class="nav-link" href="/sekolah/tblkelas">Kelas</a>
            </div>
        </div>
    </div>
</nav>

<div class="container">
    <h1>Welcome to Our Website</h1>
    
    <!-- Profile Section -->
    <div class="profile">
        <img src="kti.enc" alt="Profile Picture">
        <h2>Komunitas Teknik Informatika</h2>
        <p>SMK Negeri 3 Jepara</p>
    </div>
</div>

</body>
</html>
