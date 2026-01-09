<?php
include "koneksi_db.php";

$sql = "CREATE TABLE matakuliah (
    id INT AUTO_INCREMENT PRIMARY KEY,
    kode_mk VARCHAR(20),
    nama_mk VARCHAR(100),
    sks INT
)";

mysqli_query($koneksi, $sql);
echo "Tabel berhasil dibuat";
?>

