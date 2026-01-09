<?php
$cnn = mysqli_connect("localhost","root","","db_akademik");

$data = mysqli_query($cnn,"SELECT * FROM matakuliah");

echo "<h3>Daftar Mata Kuliah</h3>";

while($d = mysqli_fetch_array($data)){
    echo "Kode MK : $d[kode_mk]<br>";
    echo "Nama MK : $d[nama_mk]<br>";
    echo "SKS : $d[sks]<br><hr>";
}
?>
