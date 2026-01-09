<?php
include "koneksi.php";

mysqli_query($cnn,"CREATE DATABASE db_akademik");
echo "Database berhasil dibuat";
?>
