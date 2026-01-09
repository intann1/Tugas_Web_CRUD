<?php
include "koneksi.php";

$sql = "CREATE DATABASE db_kampus";
mysqli_query($koneksi, $sql);

echo "Database berhasil dibuat";
?>
