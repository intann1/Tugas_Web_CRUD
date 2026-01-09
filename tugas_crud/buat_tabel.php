<?php
include "koneksi.php";

// tabel user
mysqli_query($koneksi, "
CREATE TABLE IF NOT EXISTS user (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50),
    password VARCHAR(50)
)
");

// isi user
mysqli_query($koneksi, "
INSERT INTO user (username, password)
VALUES ('admin', '123')
");

// tabel matakuliah
mysqli_query($koneksi, "
CREATE TABLE IF NOT EXISTS matakuliah (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nama_matkul VARCHAR(100),
    sks INT
)
");

echo "Tabel berhasil dibuat";
?>
