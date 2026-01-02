<?php
$cnn = mysqli_connect("localhost","root","","db_kelas");

$data = mysqli_query($cnn,"SELECT * FROM teman");

echo "<h3>Data Teman Kelas</h3>";

while($d = mysqli_fetch_array($data)){
    echo "NIM : $d[nim] <br>";
    echo "Nama : $d[nama] <br>";
    echo "Kelas : $d[kelas] <br><hr>";
}
?>