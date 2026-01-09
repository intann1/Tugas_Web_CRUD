<?php
include "koneksi_db.php";

$kode = $_POST['kode'];
$nama = $_POST['nama'];
$sks  = $_POST['sks'];

mysqli_query($koneksi, "INSERT INTO matakuliah (kode_mk, nama_mk, sks)
VALUES ('$kode', '$nama', '$sks')");

header("location:tampil.php");
?>
