<?php
$cnn = mysqli_connect("localhost","root","","db_kelas");

$sql = "CREATE TABLE teman (
    nim VARCHAR(10) PRIMARY KEY,
    nama VARCHAR(50),
    kelas VARCHAR(20)
)";

if(mysqli_query($cnn,$sql)){
    echo "Tabel teman berhasil dibuat";
}else{
    echo mysqli_error($cnn);
}
?>