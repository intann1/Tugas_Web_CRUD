<?php
include "koneksi.php";

$id = $_GET['id'];
$data = mysqli_query($koneksi,
"SELECT * FROM matakuliah WHERE id=$id");
$d = mysqli_fetch_array($data);

if (isset($_POST['update'])) {
    mysqli_query($koneksi,
    "UPDATE matakuliah
     SET nama_matkul='$_POST[nama]', sks='$_POST[sks]'
     WHERE id=$id");
    header("Location: tampil_matkul.php");
}
?>

<form method="POST">
    Nama Matkul:
    <input type="text" name="nama" value="<?= $d['nama_matkul']; ?>"><br><br>
    SKS:
    <input type="number" name="sks" value="<?= $d['sks']; ?>"><br><br>
    <button name="update">Update</button>
</form>
