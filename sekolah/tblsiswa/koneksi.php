<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "sekolah";

// Koneksi ke database
$conn = mysqli_connect($servername, $username, $password, $database);

// Periksa koneksi
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "koneksi berhasil";
?>