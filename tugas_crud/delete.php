<?php
$cnn = mysqli_connect("localhost","root","","db_kelas");

$sql = "DELETE FROM teman WHERE nim='2341014'";

if(mysqli_query($cnn,$sql)){
    echo "Data berhasil dihapus";
}else{
    echo mysqli_error($cnn);
}
?>