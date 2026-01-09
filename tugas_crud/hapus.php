<?php
include "koneksi_db.php";

$id = $_GET['id'];
mysqli_query($koneksi, "DELETE FROM matakuliah WHERE id='$id'");

header("location:tampil.php");
?>
