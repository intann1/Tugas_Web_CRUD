<?php
$koneksi = mysqli_connect("localhost", "root", "");

mysqli_query($koneksi, "CREATE DATABASE IF NOT EXISTS db_krs");

echo "Database db_krs berhasil dibuat";
?>
