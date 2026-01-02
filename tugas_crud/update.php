<?php
$cnn = mysqli_connect("localhost","root","","db_kelas");

$sql = "UPDATE teman SET nama='alfi Update' WHERE nim='2341014'";

if(mysqli_query($cnn,$sql)){
    echo "Data berhasil diupdate";
}else{
    echo mysqli_error($cnn);
}
?>