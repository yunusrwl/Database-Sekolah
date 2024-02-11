<?phpinclude 'koneksi.php';
$nis = $_GET['nis'];
$sql = "DELETE FROM tblsiswa WHERE nis='$nis'";
if (mysqli_query($conn, $sql)) {
    echo "<scipt>alert('Data berhasil dihapus');window.location='index.php';</scipt>";
} else {
    echo "<scipt>alert('Gagal menghapus data');</scipt>";
}
mysqli_close($conn);
?>