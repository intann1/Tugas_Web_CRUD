<?php
$cnn = mysqli_connect("localhost","root","");
if(!$cnn){
    die("Koneksi gagal");
}
echo "Koneksi ke MySQL berhasil<br>";
?>