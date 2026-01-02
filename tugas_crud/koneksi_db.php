<?php
include "koneksi.php";

$sql = "CREATE DATABASE db_kelas";

if(mysqli_query($cnn,$sql)){
    echo "Database db_kelas berhasil dibuat";
}else{
    echo mysqli_error($cnn);
}
?>