<?php
include "koneksi_db.php";

$id   = $_POST['id'];
$kode = $_POST['kode'];
$nama = $_POST['nama'];
$sks  = $_POST['sks'];

mysqli_query($koneksi, "UPDATE matakuliah SET
kode_mk='$kode',
nama_mk='$nama',
sks='$sks'
WHERE id='$id'");

header("location:tampil.php");
?>
