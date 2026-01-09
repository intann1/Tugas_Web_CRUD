<?php
$cnn = mysqli_connect("localhost","root","","db_akademik");

mysqli_query($cnn,
"INSERT INTO user VALUES ('admin','123')");

mysqli_query($cnn,
"INSERT INTO matakuliah VALUES
('IF101','Algoritma',3),
('IF102','Basis Data',3),
('IF103','Pemrograman Web',3)");

echo "Data awal ditambahkan";
?>
