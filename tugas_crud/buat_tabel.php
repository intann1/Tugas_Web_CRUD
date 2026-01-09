<?php
$cnn = mysqli_connect("localhost","root","","db_akademik");

mysqli_query($cnn,"CREATE TABLE user (
    username VARCHAR(20) PRIMARY KEY,
    password VARCHAR(20)
)");

mysqli_query($cnn,"CREATE TABLE matakuliah (
    kode_mk VARCHAR(10) PRIMARY KEY,
    nama_mk VARCHAR(50),
    sks INT
)");

echo "Tabel berhasil dibuat";
?>
