<?php
include "koneksi.php";

$nama = $_POST['nama'];
$sks  = $_POST['sks'];

mysqli_query($koneksi,
"INSERT INTO matakuliah (nama_matkul, sks)
 VALUES ('$nama', '$sks')"
);

header("Location: tampil_matkul.php");
?>
