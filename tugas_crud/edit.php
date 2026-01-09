<?php
include "koneksi_db.php";

$id = $_GET['id'];
$data = mysqli_query($koneksi, "SELECT * FROM matakuliah WHERE id='$id'");
$d = mysqli_fetch_array($data);
?>

<h2>Edit Mata Kuliah</h2>

<form method="post" action="update.php">
<input type="hidden" name="id" value="<?php echo $d['id']; ?>">

Kode MK : <input type="text" name="kode" value="<?php echo $d['kode_mk']; ?>"><br>
Nama MK : <input type="text" name="nama" value="<?php echo $d['nama_mk']; ?>"><br>
SKS : <input type="number" name="sks" value="<?php echo $d['sks']; ?>"><br><br>

<input type="submit" value="Update">
</form>
