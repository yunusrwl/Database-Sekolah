<?php
include 'koneksi.php';
$id_jurusan = $_GET['id_jurusan'];
$sql = "DELETE FROM tbljurusan WHERE id_jurusan='$id_jurusan'";
if (mysqli_query($conn, $sql)) {
    echo "<script>alert('Data berhasil dihapus');window.location='index.php';</script>";
} else {
    echo "<script>alert('Gagal menghapus data');</script>";
}
mysqli_close($conn);
?>