<?php
$cnn = mysqli_connect("localhost","root","","db_kelas");

$sql = "INSERT INTO teman VALUES
('2341056','diana','IF-4'),
('2341069','jaya','IF-4'),
('2341048','iip','IF-4'),
('2341049','aqsal','IF-4'),
('2341014','dika','IF-4')";

if(mysqli_query($cnn,$sql)){
    echo "Data berhasil ditambahkan";
}else{
    echo mysqli_error($cnn);
}
?>